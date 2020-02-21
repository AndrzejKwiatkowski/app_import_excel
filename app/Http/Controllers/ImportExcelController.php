<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToCollection;
use Excel;
use App\Person;

class ImportExcelController extends Controller
{
    public function index()
    {
        $data = Person::all();
        return view('import_excel', compact('data'));
    }

    public function import(Request $request)
    {
        $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);

        $path = $request->file('select_file')->getRealPath();

        $data = Excel::load($path)->get();

        if ($data->count() > 0) {
            foreach ($data as $row) {
                if ((!$row->postac==null)) {
                    Person::create([
                  'postac'=> $row->postac,
                  'entuzjazm'=> $row->entuzjazm,
                  'kreatywnosc'=> $row->kreatywnosc,
                  'blyskotliwosc'=> $row->blyskotliwosc,
                  'spokoj_wewnetrzny'=> $row->spokoj_wewnetrzny,
              ]);
                }
            }
        }
     
        return back()->with('success', 'Dane zostały zaimportowne poprwanie.');
    }
}
