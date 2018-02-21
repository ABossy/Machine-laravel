@extends('template')

@section('titre')
Liste des Recettes
@endsection

{{-- @section('contenu')
<table class="table table-striped col-md-12 table-hover">

@foreach($recetteBoisson as $key => $tables)
     <tr><th>{{$key}} : {{$tables['eau']}} doses d'eau </br></tr></th>
 
@endforeach 
</table>
@endsection --}}
{{-- permet d'afficher mon tableau associatif avec comme mot clé eau 1er element de ma table --}}

@section('contenu')
<div id="" style="overflow-y:scroll; height:480px;">
<table class="table table-striped col-md-12 table-hover">
	@foreach($afficheBoissons as $keys)
	<tr><td><h3>ID: {{$keys-> id}}<br><strong>{{$keys-> Nom}}</strong>
	</h3></td></tr>
	<td><a href="{{route('boissons.details',['id'=> $keys-> id])}}">Lien</a></td>

	{{-- permet d'afficher la liste des boissons sur ma view 4 --}}
	@endforeach
</table>
</div>
@endsection

