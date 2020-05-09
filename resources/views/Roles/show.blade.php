@extends('layouts.muestra')
@section('content')
@include('custom.message')


    
  <div class="form-group">
    <label for="nombrerol">Nombre de Rol</label>
    <input type="text" class="form-control" id="nombrerol" name="nombrerol"placeholder="Nombre del Rol" disabled value="{{old('nombrerol',$role->nombrerol)}}">
  </div>
  <div class="form-group">
  <label for="slug">Slug</label>
    <input type="text" class="form-control" id="slug" name="slug" placeholder="Nombre corto" disabled value="{{old('slug',$role->slug)}}">
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion</label>
    <textarea class="form-control" disabled name="descripcion" id="descripcion" rows="3">{{old('descripcion',$role->descripcion)}}</textarea>
  </div>
  <h1>Lista de Permisos</h1>
   @foreach($permisos as $permiso)
     <div class="custom-control custom-checkbox">
    
       <input class="custom-control-input" type="checkbox" value="{{$permiso->id}}" id="{{$permiso->id}}" 
           name="permisos[]"
        @if(is_array(old('permisos')) && in_array("$permiso->id",old('permisos')))
        checked
        @elseif(is_array($permisos_roles) && in_array("$permiso->id",$permisos_roles) )
        checked
        @endif
       
        disabled
       >
         <label class="custom-control-label" for="{{$permiso->id}}" >{{$permiso->nombrepermiso}} \ <em>{{$permiso->descripcion}}</em></label><br>
      
      </div>
      @endforeach

  </div>

  <a href="{{route('roles.edit',$role->id)}}" class="btn btn-warning">Editar</a>   <a href="{{route('roles.index')}} " class="btn btn-success">Inicio</a>

@endsection
