@extends('template')

@section('titre')
<strong>Stock Monnaie</strong>

@endsection

@section('contenu')
<div id="" style="overflow-y:scroll; height:600px;">
<table class="table table-striped col-md-12 table-hover">

@foreach($monnayeur as $key )
<tr>
	<td>
		<h3> 
			<strong>Pieces : </strong> {{$key-> valeur}}<br><strong>Stock : </strong>{{$key-> stock}} <br>
<form action='{{route('monnaie.modif',['id'=> $key->id])}}' method="POST">
{{csrf_field()}}{{--   {{method_field('UPDATE')}} --}}
<input type="hidden" name="_method" value="put"></input>	{{-- permet de basculer le post en put --}}

<!-- Formulaire details boissons bouton modifier-->
<div class="form-group">
	<label class="col-md-12 control-label" 
			for="stockpiece">Stock
	</label>
		<div class="col-md-12">
			<input id="stockpiece" name="stock" 
				type="number" placeholder="stock pieces" class="form-control 
								input-md" value="{{$key-> stock}}">
{{-- permet de garder en memoire la valeur code --}}

		</div>
</div>

<!-- Button Modifier -->

	<div class="form-group">
		<label class="col-md-4 control-label" for=""></label>
			<div class="col-md-4">
				<button id="" name="" class="btn btn-warning" type="submit">Modifier</button>
			</div>
	</div>
</form>
		</h3>
	</td>
</tr>

@endforeach
</table>
</div>
@endsection

	