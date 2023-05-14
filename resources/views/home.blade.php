@extends('layout.app')

@section('title', 'Home page')

@section('content')
<table class="table table-dark table-sm">
  <thead>
    <tr>
      <th scope="col">Azienda</th>
      <th scope="col">Stazione di partenza</th>
      <th scope="col">Stazione di Arrivo</th>
      <th scope="col">Orario di partenza</th>
      <th scope="col">Orario di arrivo</th>
      <th scope="col">Codice treno</th>
      <th scope="col">Numero carozza</th>
      <th scope="col">In arrivo</th>
      <th scope="col">Cancellato</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($trains as $train)
    <tr>
            <td>{{$train->Azienda}}</td>
            <td>{{$train->Stazione_di_partenza}}</td>
            <td>{{$train->Stazione_di_arrivo}}</td>
            <td>{{$train->Orario_di_partenza}}</td>
            <td>{{$train->Orario_di_arrivo}}</td>
            <td>{{$train->Codice_Treno}}</td>
            <td>{{$train->Numero_Carrozze}}</td>
            <td>{{$train->In_orario}}</td>
            <td>{{$train->Cancellato}}</td>
            <td>{{$train->Data}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection