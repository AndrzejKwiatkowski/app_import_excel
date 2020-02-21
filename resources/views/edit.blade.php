<!DOCTYPE html>
<html>
 <head>
  <title>Import pliku Excel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
@if ($errors->any())
<div class="col-4 alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <form id="formticketedit" method="POST" action="{{url('update', $person->id)}}">
        {{ csrf_field() }}
        {{method_field('PUT')}}

        <div class="form-group">
            <label for="exampleFormControlInput1">Postać</label>
        <input type="input" name="postac" value="{{$person->postac}}" class="form-control" id="exampleFormControlInput1"
        >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Entuzjazm</label>
        <input type="input" name="entuzjazm" value="{{$person->entuzjazm}}" class="form-control" id="exampleFormControlInput1"
        >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Kreatywność</label>
        <input type="input" name="kreatywnosc" value="{{$person->kreatywnosc}}" class="form-control" id="exampleFormControlInput1"
        >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Błyskotliwość</label>
        <input type="input" name="blyskotliwosc" value="{{$person->blyskotliwosc}}" class="form-control" id="exampleFormControlInput1"
        >
        </div>
        
      
      
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">Save changes</button>
        </div>
    </form>
</div>
</body>
</html>