@extends('template')

@section('titre')
Details des Recettes

@endsection

@section('contenu')
<table class="table table-striped col-md-12 table-hover">
	@foreach($details as $detail)
	<tr>
		<td>
			<h3>
				<strong>{{$detail->boisson->Nom}}<br></strong>
				@if(isset($detail->idRecette))
				Id: {{$detail->idRecette}}<br>
				@endif
				Doses: {{$detail->nbdose}}<br>
				@if(isset($detail->ingredient)) 
				{{-- dans la mesure ou l'ingredient est verifie. --}}
				Ingredient: {{$detail->ingredient->Nom}}
				@endif

{{-- Formulaire du bouton supprimer --}}
	<form action="{{route('lignerecette.destroy',['id'=>$detail->idRecette])}}" class="form-horizontal" method="POST">
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
				</h3>
			</td>
		</tr>		
@endforeach
	</table>
@endsection
	{{-- affichage de mon nom, doses et ingredient sur ma page details --}}
{{-- ici on appelle la variable detail définit dans le RecetteController qui va chercher les infos dans les differentes tables de la BDD --}} 



{{-- Formulaire Ajouter une recette --}}

@section('forme')
<form action='{{route('recette.store')}}' method="POST">
	{{csrf_field()}}

	<legend>Ajout Recette</legend>

	<select name="idBoisson" id="selectbasic" class="form-control">
		<option selected disabled value="Drink selection">Drink 
		selection</option>
@foreach ($afficheBoissons as $element)
		<option value= "{{ $element->id}}" label="{{ 
			$element->Nom}}"></option>
@endforeach
		</select><br>

		<select name="idIngredient" id="selecting" class="form-control">
			<option selected disabled value="Ingredient 
			selection">Ingredient selection</option>
@foreach ($afficheIngredients as $element)
			<option value= "{{ $element->id}}" label="{{ 
				$element->Nom}}"</option>
@endforeach
			</select><br>

			<input id="quantite" name="nbdose" type="number" placeholder="Qt Ingrédient" class="form-control input-md" required=""><br>

			<input class="btn btn-success" type="submit" name="submit" 
			value="Ajouter">
		</form>

@endsection

{{-- Bouton Tout Supprimer --}}
@section('button')
	<form class="form-horizontal" method="POST">
				{{csrf_field()}}
		<input type="hidden" name="_method" value="delete"></input>
				{{-- permet de basculer le post en delete --}}

				<!-- Button supprimer-->
			<div class="form-group">
				<label class="col-md-4 control-label" for=""></label>
					<div class="col-md-4">
						<button id="" name="" class="btn btn-info" type="submit">DELETE ALL</button>
					</div>
		   </div>

	</form>	
@endsection 
