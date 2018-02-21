@extends('template')

@section('titre')
Liste des Ingredients

@endsection

@section('contenu')
<div id="" style="overflow-y:scroll; height:480px;">
<table class="table table-striped col-md-12 table-hover">

@foreach($ingredientStock as $keys)
     <tr><td><h4><strong>{{$keys-> Nom}}</strong><br> ID:{{$keys-> id}} <br>Stock: {{$keys-> Stock}} unité <br>
    </h4></tr></td>
    
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

              <!-- champ stock-->
             <div class="form-group">
                 <label class="col-md-12 control-label" 
                 for="prixboisson">Stock</label>
                 <div class="col-md-12">
                     <input id="prixingredient" name="prixingredient" 
                     type="text" placeholder="Stock de l'ingrédient" class="form-control 
                     input-md" required="">

                 </div>
             </div>
<!-- champ nom-->
             <div class="form-group">
                 <label class="col-md-12 control-label" 
                 for="nomboisson">Nom</label>
                 <div class="col-md-12">
                     <input id="nomingredient" name="nomingredient" 
                     type="text" placeholder="Nom de l'ingrédient" class="form-control 
                     input-md" required="">

                 </div>
             </div>
  <!-- champ code-->           
             <div class="form-group">
                 <label class="col-md-12 control-label" 
                 for="codeingredient">code</label>
                 <div class="col-md-12">
                     <input id="codeingredient" name="codeingredient" 
                     type="text" placeholder="code de l'ingredient" class="form-control 
                     input-md" >

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

      

       

