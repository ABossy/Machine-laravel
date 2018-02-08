@extends('template')

@section('titre')
Details des Boissons

@endsection

@section('contenu')
<table class="table table-striped col-md-12 table-hover">

<tr><td><h4>ID: {{$boissons-> id}}<br>
	Nom: {{$boissons-> Nom}} <br> 
	Prix:  {{$boissons-> Prix}} cts </h4></tr></td>
    
</table>

@endsection
{{-- affichage de mon id, nom et prix sur ma page details --}}

@section('button')
	<form class="form-horizontal" method="post">
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
 <form action='{{route('boisson.modif',['id'=> $boissons-> id])}}' method="POST">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="put"></input>
    {{-- permet de basculer le post en put --}}

    <!-- Formulaire details boissons bouton modifier-->
        <div class="form-group">
                 <label class="col-md-12 control-label" 
                 for="codeboisson">code</label>
                 <div class="col-md-12">
                     <input id="codeboisson" name="codeboisson" 
                     type="text" placeholder="code de la boisson" class="form-control 
                     input-md" value="{{$boissons->code}}">
            {{-- permet de garder en memoire la valeur code --}}
                 </div>
             </div>


<!-- Text input-->
    <div class="form-group">
        <label class="col-md-12 control-label" 
            for="nomboisson">Nom</label>
            <div class="col-md-12">
                <input id="nomboisson" name="nomboisson" 
                 type="text" placeholder="Nom de la boisson" class="form-control 
                 input-md" value="{{$boissons->Nom}}">
               {{-- permet de garder en memoire la valeur Nom --}}
                 </div>
             </div>

             <!-- Text input-->
        <div class="form-group">
                 <label class="col-md-12 control-label" 
                 for="prixboisson">Prix</label>
                 <div class="col-md-12">
                     <input id="prixboisson" name="prixboisson" 
                     type="text" placeholder="Prix de la boisson" class="form-control 
                     input-md" value="{{$boissons->Prix}}">
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