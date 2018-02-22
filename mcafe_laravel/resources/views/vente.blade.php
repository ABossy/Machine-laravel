@extends('template')

@section('titre')
Liste des ventes

@endsection

@section('contenu')
<div class="recherche_p">
	<form action="/5/search" id="searchthis" method="post">
		{{csrf_field()}}
		<input id="search" name="recherche" type="text" placeholder="Rechercher" />
		<input id="search-btn" type="submit" value="Rechercher" />
	</form>
</div><br>
{{-- formulaire recherche --}}
<div id="" style="overflow-y:scroll; height:600px;">
<table class="table table-striped col-md-12 table-hover">
	@foreach($afficheVentes as $afficheVente)
	<tr>
		<td>
			<h4>
				<strong>Date</strong>:{{$afficheVente-> created_at}}
				<strong>{{$afficheVente-> nomUser}}</strong><br>
		<strong>Vente N°:{{$afficheVente-> idVente}}<br></strong>
		<strong>{{$afficheVente-> nomBoisson}}</strong><br>
		<strong>Sucre: </strong>{{$afficheVente-> nbSucre}}
		<strong>Prix:</strong>{{$afficheVente-> Prix}} cts

		<form action="{{route('ventes.destroy',['id'=>$afficheVente->idVente])}}" class="form-horizontal" method="POST">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="delete"></input>
			{{-- permet de basculer le post en delete --}}

			<!-- Button supprimer-->
			<div class="form-group">
				<label class="col-md-4 control-label" for=""></label>
				<div class="col-md-4">
					<button id="" name="" class="btn btn-danger" type="submit">Supprimer</button>
				</div>
			</div>
		</form>	

		</h4>
	</td>
</tr>
	

	
	@endforeach
</table>
</div>
@endsection

{{-- permet d'afficher la liste des ventes sur ma view  --}}
