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
      <td><a href="{{route('roles.edit',$role->id)}}" class="btn btn-warning">Actualizar</a></td>
      <td><a href="{{route('roles.show',$role->id)}}" class="btn btn-primary">Mostrar</a></td>
      <td><form action="{{route('roles.destroy',$role->id)}}" method="POST">
        @method('delete')
        @csrf
        <button class="btn btn-danger">Eliminar</button>
        </form>
      </td>
      <td></td>
    </tr>
    @endforeach
    </tbody>
    </table>
    {{$roles->links()}}
@endsection



       