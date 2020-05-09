@extends('layouts.muestra')
@section('content')
@include('custom.message')

<form method="POST" action="{{route('roles.store')}}">
    @csrf
  <div class="form-group">
    <label for="nombrerol">Nombre de Rol</label>
    <input type="text" class="form-control" id="nombrerol" name="nombrerol"placeholder="Nombre del Rol" value="{{old('nombrerol')}}">
  </div>
  <div class="form-group">
  <label for="slug">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" placeholder="Nombre corto"  value="{{old('slug')}}">
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion</label>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
  </div>
  <h1>Lista de Permisos</h1>
   @foreach($permisos as $permiso)
     <div class="custom-control custom-checkbox">
    
       <input class="custom-control-input" type="checkbox" value="{{$permiso->id}}" id="{{$permiso->id}}" name="permisos[]">
         <label class="custom-control-label" for="{{$permiso->id}}" >{{$permiso->nombrepermiso}} \ <em>{{$permiso->descripcion}}</em></label><br>
      
      </div>
      @endforeach

  </div>

  <button type="submit" class="btn btn-warning">Guardar </button>
</form>
@endsection
