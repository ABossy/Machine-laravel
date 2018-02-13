@extends('template')

@section('titre')
Liste des ventes

@endsection

@section('contenu')
<table class="table table-striped col-md-12 table-hover">
	@foreach($afficheVentes as $afficheVente)
	<tr>
		<td>
			<h4>
				<strong>Date</strong>:{{$afficheVente-> created_at}}<br>
				User :<strong>{{$afficheVente-> nomUser}}</strong><br>
		Vente N°: <strong>{{$afficheVente-> idVente}}</strong><br><strong>{{$afficheVente-> nomBoisson}}</strong><br>
		Sucre: {{$afficheVente-> nbSucre}}<br>
		Prix: {{$afficheVente-> Prix}}

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
@endsection

{{-- permet d'afficher la liste des ventes sur ma view  --}}
