<?php

namespace App\Http\Controllers;

use App\Person;
use PDF;

class ExportToPdfController extends Controller
{
    public function exportToPdf()
    {
        $people = Person::all();

        if ($people) {
            $pdf = PDF::loadView('pdf_export', ['people' => $people]);
            return $pdf->download('export.pdf');
        }
    }
}