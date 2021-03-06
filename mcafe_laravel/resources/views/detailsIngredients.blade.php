@extends('template')

@section('titre')
<strong>Details des Ingredients</strong>

@endsection

@section('contenu')
<table class="table table-striped col-md-12 table-hover">

<tr><td><h3>ID: {{$ingredients-> id}}<br>
	Nom: {{$ingredients-> Nom}} <br> 
	Stock:  {{$ingredients-> Stock}} <br> code: {{$ingredients-> code}}

</h3></tr></td>
    
</table>

@endsection
{{-- affichage de mon id, nom et prix sur ma page details --}}

@section('button')
	<form action='{{route('ingredients.destroy',['id'=> $ingredients->id])}}' class="form-horizontal" method="POST">
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
		
<!-- end Button -->
             
@endsection

 @section('forme')
 <form action='{{route('ingredients.modif',['id'=> $ingredients->id])}}' method="POST">
    {{csrf_field()}}
  {{--   {{method_field('UPDATE')}} --}}
    <input type="hidden" name="_method" value="put"></input>
    {{-- permet de basculer le post en put --}}

    <!-- Formulaire details boissons bouton modifier-->
        <div class="form-group">
                 <label class="col-md-12 control-label" 
                 for="codeIngredients">code</label>
                 <div class="col-md-12">
                     <input id="codeingredients" name="codeIngredients" 
                     type="text" size= "3" maxlength="3" placeholder="code de l'ingredient" class="form-control 
                     input-md" value="{{$ingredients->code}}">
            {{-- permet de garder en memoire la valeur code --}}
                 </div>
             </div>


<!-- Text input-->
    <div class="form-group">
        <label class="col-md-12 control-label" 
            for="nomboisson">Nom</label>
            <div class="col-md-12">
                <input id="nomingredients" name="nomingredients" 
                 type="text" placeholder="Nom de l'ingredients" maxlength="15" class="form-control 
                 input-md" value="{{$ingredients->Nom}}">
               {{-- permet de garder en memoire la valeur Nom --}}
                 </div>
             </div>

             <!-- Text input-->
        <div class="form-group">
                 <label class="col-md-12 control-label" 
                 for="stockingredients">Stock</label>
                 <div class="col-md-12">
                     <input id="stockingredients" name="stockingredients" 
                     type="number" min="1" max="" placeholder="Stock de l'ingredient" class="form-control 
                     input-md" value="{{$ingredients->Stock}}">
            {{-- permet de garder en memoire la valeur Prix --}}
                 </div>
             </div>
    
    <!-- Button Modifier -->
	
    <div class="form-group">
	  <label class="col-md-4 control-label" for=""></label>
	  <div class="col-md-4">
	    <button id="" name="" class="btn btn-warning" type="submit">Modifier</button>
	  </div>
	</div>


@endsection 