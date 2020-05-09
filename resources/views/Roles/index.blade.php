@extends('layouts.muestra')
@include('custom.message')
@section('content')
         <a href="{{route('roles.create')}}" class="btn btn-success">Crear nuevo rol</a>
        <table class="table table-hover">
  <thead>
       <tr>
      <th scope="col">#</th>
      <th scope="col">NOmbre del Rol</th>
      <th scope="col">Slug</th>
      <th scope="col">Descripcion</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
       </thead>
      <tbody>

      @foreach($roles as $role)
    <tr>
      <th scope="row"></th>
      <td>{{$role->nombrerol}}</td>
      <td>{{$role->slug}}</td>
      <td>{{$role->descripcion}}</td>
      <td><a href="#" class="btn btn-primary">Actualizar</a></td>
      <td><a href="#" class="btn btn-primary">Mostrar</a></td>
      <td><a href="#" class="btn btn-primary">Eliminar</a></td>
      <td></td>
    </tr>
    @endforeach
    </tbody>
    </table>
@endsection



       