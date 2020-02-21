<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PDF Export</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <style>
        .table td, th {
            text-align: center;
        }
    </style>
    <body>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">Postac</th>
                <th scope="col">Entuzjazm</th>
                <th scope="col">Kreatywnosc</th>
                <th scope="col">Blyskotliwosc</th>
                <th scope="col">Spokoj wewnetrzny</th>
            </tr>
        </thead>
        <tbody>
        @foreach($people as $person)
            <tr>
                <td>{{ $person->postac }}</td>
                <td>{{ $person->entuzjazm }}</td>
                <td>{{ $person->kreatywnosc }}</td>
                <td>{{ $person->blyskotliwosc }}</td>
                <td>{{ $person->spokoj_wewnetrzny }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </body>
</html>
