<!DOCTYPE html>
<html>
 <head>
  <title>Import pliku Excel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  
  <div class="container">
   <h3 align="center">Import pliku Excel</h3>
    <br />
   @if(count($errors) > 0)
    <div class="alert alert-danger">
     Walidacja pliku <br><br>
     <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif

   @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif

   <a  href="{{route('pdf.exportToPdf')}}">Generuj PDF</a>
   <br>
   <form method="post" enctype="multipart/form-data" action="{{ url('/import') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%"><label>Wybierz plik do importu</label></td>
       <td width="30">
        <input type="file" name="select_file" />
       </td>
       <td width="30%">
        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
       </td>
      </tr>
      <tr>
       <td width="40%"></td>
       <td width="30"><span class="text-muted">.xls, .xslx</span></td>
       <td width="30%" ></td>
      </tr>
     </table>
    </div>
   </form>
   
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Zaimportowane dane</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>lp</th>
        <th>postac</th>
        <th>entuzjazm</th>
        <th>kreatywnosc</th>
        <th>blyskotliwosc</th>
        <th>spokoj_wewnetrzny</th>
        <th>Edytuj</th>
      
       </tr>
       @foreach($data as $row)
       <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->postac }}</td>
        <td>{{ $row->entuzjazm }}</td>
        <td>{{ $row->kreatywnosc }}</td>
        <td>{{ $row->blyskotliwosc }}</td>
        <td>{{ $row->spokoj_wewnetrzny }}</td>
        <td><a class="btn btn-outline-dark" href="{{url('edit/' . $row->id)}}" role="button">Edytuj
        </a></td>
     
       </tr>
       @endforeach
      </table>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>