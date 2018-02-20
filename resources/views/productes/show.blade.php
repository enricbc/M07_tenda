@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="row pt-5">
      <div class="col-sm">
        <img class="rounded border border-primary"src="{{$producte->url}}" style="height:320px;width:400px;"alt="">

      <div class="col-sm">
        <div class="row">
          <h2>{{$producte->nom}}</h2>
        </div>
        <div class="row" >
          <p>{{$producte->descripcio}}</p>
        </div>
        <div class="row ">
          <a>{{$producte->preu}}</a>
        </div>
        <div class="row">
          @if (Auth::guest())

            <form action="{{route('ruta_afegir_carro', ['producte'=>$producte->id])}}">
              <button class="btn btn-success"><i class="far fa-plus-square"></i></button></i>
            </form>

          @else

        <small class="" style="display:inline-flex;" >
          @can('editar_productes')
          <form action="{{route('ruta_editar_producte', ['producte'=>$producte->id])}}">            
            <button class="btn btn-info"><i class="fa fa-edit"></button></i>
          </form>
          @endcan
          @can('eliminar_productes')
          <form action="{{route('ruta_eliminar_producte', ['producte'=>$producte->id])}}" method="POST">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <button type="submit" class="btn btn-danger"><i style="font-size:20px;"class="fa fa-trash-alt"></i></button>
          </form>
          @endcan
        </small>
</div>
</div>
        @endif
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>

@endsection
