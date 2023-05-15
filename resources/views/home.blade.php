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
    </tr>
  </thead>
  <tbody>
  @foreach ($trains as $train)
    <tr>
            <td>{{$train->company}}</td>
            <td>{{$train->departure_station}}</td>
            <td>{{$train->arrival_station}}</td>
            <td>{{$train->departure_time}}</td>
            <td>{{$train->arrival_time}}</td>
            <td>{{$train->train_code}}</td>
            <td>{{$train->wagons_number}}</td>
            @if ($train->on_time == 1)
              <td>Si</td>
            @else
              <td>No</td>
            @endif
            @if ($train->cancelled == 1)
              <td>Si</td>
            @else
              <td>No</td>
            @endif
    </tr>
    @endforeach
  </tbody>
</table>

@endsection