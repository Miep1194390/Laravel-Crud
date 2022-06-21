@extends('vluchten.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Vluchten Wijzigen</div>
  <div class="card-body">
      
      <form action="{{ url('vluchten/' .$vluchten->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$vluchten->id}}" id="id" />
        <label>Vertrekplaats</label></br>
        <input type="text" name="vertrekplaats" id="vertrekplaats" value="{{$vluchten->vertrekplaats}}" class="form-control"></br>
        <label>Bestemming</label></br>
        <input type="text" name="bestemming" id="bestemming" value="{{$vluchten->bestemming}}" class="form-control"></br>
        <input type="submit" value="Wijzigen" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop