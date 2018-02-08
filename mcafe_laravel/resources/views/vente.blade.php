@extends('template')

@section('titre')
Liste des ventes

@endsection

@section('contenu')
<table class="table table-striped col-md-12 table-hover">
	@foreach($afficheVentes as $afficheVente)
	<tr><td><h3>User :<strong>{{$afficheVente-> nomUser}}</strong><br>
		Vente N°: <strong>{{$afficheVente-> idVente}}</strong><br><strong>{{$afficheVente-> nomBoisson}}</strong><br>
		Sucre: {{$afficheVente-> nbSucre}}<br>Prix: {{$afficheVente-> Prix}}
	</h3></td></tr>
	

	
	@endforeach
</table>
@endsection

{{-- permet d'afficher la liste des ventes sur ma view  --}}