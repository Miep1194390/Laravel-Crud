<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>CRUD</title>
</head>


<body>

</body>

</html>

@extends('vluchten.layout')
@section('content')
<div class="container">
    <div>

        <div>
            <div class="vluchttoevoegenouter">
                <div class="vluchttoevoegenouter">
                    <div class="whitebg">
                        <a href="{{ url('/vluchten/create') }}" class="btn btn-success btn-sm" title="Toevoegen">
                            <div class="flex">
                                <div class="padding">
                                    <button class='Bekijken_Button'><i class="fa fa-plus" aria-hidden="true"></i> Vlucht Toevoegen</button>
                                </div>
                            </div>
                        </a>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Vertrekplaats</th>
                                    <th>Bestemming</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vluchten as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->vertrekplaats }}</td>
                                    <td>{{ $item->bestemming }}</td>
                                    <td>
                                        <a href="{{ url('/vluchten/' . $item->id) }}" title="Bekijken"><button class="Bekijken_Button"><i class="fa fa-eye" aria-hidden="true"></i> Bekijken</button></a>
                                        <a href="{{ url('/vluchten/' . $item->id . '/edit') }}" title="Wijzigen"><button class="Wijzigen_Button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Wijzigen</button></a>

                                        <form method="POST" action="{{ url('/vluchten' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="Verwijder_Button" title="Verwijderen"><i class="fa fa-trash-o" aria-hidden="true"></i> Verwijderen</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection