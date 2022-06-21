@extends('vluchten.layout')
@section('content')

<a href="{{ url('/vluchten') }}" title="Terug">Terug</a>
<div>
  <div>


    <div>
      <p>Vertrekplaats : {{ $vluchten->vertrekplaats }}</p>
      <p>Bestemming : {{ $vluchten->bestemming }}</p>
    </div>

    </hr>

  </div>
</div>