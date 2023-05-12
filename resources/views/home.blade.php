@extends('layout.app')

@section('title', 'Home page')

@section('content')
    <h1>Lista Treni</h1>

    <ul>
        @foreach ($trains as $train)
            <li>{{$train->Azienda}}-{{$train->Stazione_di_partenza}}-{{$train->Stazione_di_partenza}}-{{$train->Orario_di_partenza}}-{{$train->Orario_di_arrivo}}-{{$train->Codice_Treno}}-{{$train->Numero_Carrozze}}-{{$train->In_orario}}-{{$train->Cancellato}}</li>
        @endforeach
    </ul>


@endsection