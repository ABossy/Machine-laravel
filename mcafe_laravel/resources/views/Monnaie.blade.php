@extends('template')

@section('titre')
Monnaie

@endsection

@section('contenu')
<table class="table table-striped col-md-12 table-hover">

@foreach($monnayeur as $key => $tables)
    <tr><th><h3> {{$key}} : {{$tables['stock']}} pieces <br>
    <a href="#" class="btn btn-danger"> - </a>
    <a href="#" class="btn btn-success"> + </a>
    </h3></th></tr>

@endforeach
</table>

@endsection




