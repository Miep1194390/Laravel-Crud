@extends('vluchten.layout')
@section('content')
 
<div>
  <div>Vluchten Toevoegen</div>
  <div>
      
      <form action="{{ url('vluchten') }}" method="post">
        {!! csrf_field() !!}
        <label>Vertrekplaats</label></br>
        <input type="text" name="vertrekplaats" id="vertrekplaats" class="form-control"></br>
        <label>Bestemming</label></br>
        <input type="text" name="bestemming" id="bestemming" class="form-control"></br>
        <input type="submit" value="Verzenden" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop