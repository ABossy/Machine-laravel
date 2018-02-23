@extends('template')

@section('titre')
<strong>Liste des Ingredients</strong>

@endsection

@section('contenu')
<div id="" style="overflow-y:scroll; height:480px;">
<table class="table table-striped col-md-12 table-hover">

@foreach($ingredientStock as $keys)
     <tr><td><h3><strong>{{$keys-> Nom}}</strong><br> ID:{{$keys-> id}} <br>Stock: {{$keys-> Stock}} unité <br>
    </h3></tr></td>
    
{{-- permet de récuperer l'id, nom et stock --}}
    <td><a href="{{route('listeingredients.show',['id'=> $keys-> id])}}">Lien</a></td>
{{-- permet de lier ma view en fonction de mon id --}}
</td></tr>

@endforeach

</table>
</div>
@endsection


@section('forme')
 <form action='{{route('ingredients.store')}}' method="POST">
    {{csrf_field()}}

<!-- champ nom-->
             <div class="form-group">
                 <label class="col-md-12 control-label" 
                 for="nomboisson">Nom</label>
                 <div class="col-md-12">
                     <input id="nomingredient" name="nomingredient" 
                     type="text" maxlength="15" placeholder="Nom de l'ingrédient" class="form-control 
                     input-md" required="">

                 </div>
             </div>
  <!-- champ code-->           
             <div class="form-group">
                 <label class="col-md-12 control-label" 
                 for="codeingredient">code</label>
                 <div class="col-md-12">
                     <input id="codeingredient" name="codeingredient" 
                     type="text" size= "3" maxlength="3" placeholder="code de l'ingredient" class="form-control 
                     input-md" required="">

                 </div>
             </div>
    <!-- champ stock-->
             <div class="form-group">
                 <label class="col-md-12 control-label" 
                 for="stockingredient">Stock</label>
                 <div class="col-md-12">
                     <input id="stockingredient" name="prixingredient" 
                     type="number" min="1" max="" placeholder="Stock de l'ingrédient" class="form-control 
                     input-md" required="">

                 </div>
             </div>

          <!-- Button -->
             <div class="form-group">
                 <label class="col-md-12 control-label" 
                 for="valider"></label>
                 <div class="col-md-12">
                   <button id="valider" name="valider" class="btn 
                   btn-primary" type="submit">Valider</button>
               </div>
           </div>

    </form>

@endsection

      

       

