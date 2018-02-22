@extends('template')

@section('titre')
    Liste des Boissons

@endsection

@section('contenu')
<div id="" style="overflow-y:scroll; height:450px;">
    <table class="table table-striped col-md-12 table-hover">

        @foreach($boissons as $keys)
            <tr>
                <td><h4><strong>{{$keys-> Nom}}</strong><br>ID:{{$keys-> id}}<br>Prix:{{$keys-> Prix}}
                    </h4>
            </tr></td>
            <td><a href="{{route('boissons.show',['id'=> $keys-> id])}}">Lien</a></td>


        @endforeach


    </table>
</div>
@endsection


@section('orderbutton')
    <a href="{{route("boisson.index")}}" class="btn btn-info">A-Z</a>
    <a href="{{route("orderZA")}}" class="btn btn-warning">Z-A</a>
    <a href="{{route("prixup")}}" class="btn btn-success">Prix +</a>
    <a href="{{route("prixdown")}}" class="btn btn-danger">Prix -</a>
@endsection

@section('forme')
    <form action='{{route('boisson.store')}}' method="POST">
    {{csrf_field()}}

       <!-- champ nom-->
        <div class="form-group">
            <label class="col-md-12 control-label"
                   for="nomboisson">Nom</label>
            <div class="col-md-12">
                <input id="nomboisson" name="nomboisson"
                       type="text" maxlength="10" placeholder="Nom de la boisson" class="form-control
                 input-md" required="">

            </div>
        </div>

        <!-- champ code-->
        <div class="form-group">
            <label class="col-md-12 control-label"
                   for="codeboisson">code</label>
            <div class="col-md-12">
                <input id="codeboisson" name="codeboisson"
                       type="text" size= "3" maxlength="3" placeholder="code de la boisson" class="form-control
                     input-md" required="">

            </div>
        </div>

        <!-- champ prix-->
        <div class="form-group">
            <label class="col-md-12 control-label"
                   for="prixboisson">Prix</label>
            <div class="col-md-12">
                <input id="prixboisson" name="prixboisson"
                       type="number" min="1" max="" placeholder="Prix de la boisson" class="form-control
                     input-md" required="">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-12 control-label"
                   for="valider"></label>
            <div class="col-md-12">
                <button id="valider" name="valider" class="btn
                   btn-primary" type="submit">Valider
                </button>
            </div>
        </div>
    </form>




@endsection

