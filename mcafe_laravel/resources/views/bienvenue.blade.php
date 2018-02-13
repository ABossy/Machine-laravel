@extends('template')

@section('titre')
Machine à Café <br>
Astrid Bossy
@endsection

@section('image')
<img src="https://lovinglifeonearth.files.wordpress.com/2013/08/coffee-time-for-dog.jpg?w=500&h=500">
@endsection

{{-- @section('contenu')
@foreach($commandes as $keys)
     <tr><td><h4><strong> Client: {{$keys-> nomUser}}</strong><br> Boisson: {{$keys-> nomBoisson}}<br>Sucre:{{$keys-> nbSucre}} <br>Prix: {{$keys-> Prix}} cts <br>
    </h4></tr></td>
@endforeach
@endsection --}}

@section('forme')
 <form action='{{route('commande.store')}}' method="POST">
    {{csrf_field()}}

    
<legend>Nouvelle Commande</legend>
<!-- champ Client-->
	<select name="idUser" id="selectbasic" class="form-control">
		<option selected disabled value="User selection">User 
		selection</option>
@foreach ($afficheUsers as $element)
	<option value= "{{ $element->id}}" label="{{$element->name}}"></option>
@endforeach
    </select>
             <br> 
             {{-- champ Nom Boisson --}}
    <select name="idBoisson" id="selecting" class="form-control">
    	<option selected disabled value="idBoisson
			selection">Boisson selection</option>
@foreach ($commandes as $element)
			<option value= "{{ $element->id}}" label="{{ $element->id}} {{ 
				$element->Nom}} {{ $element->Prix}}"></option>
@endforeach
			</select><br>


<input id="quantite" name="nbSucre" type="text" placeholder="Qt Sucre" class="form-control input-md"><br>

			<input class="btn btn-success" type="submit" name="submit" 
			value="Ajouter">
		</form>

@endsection





