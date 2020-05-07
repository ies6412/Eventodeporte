
@foreach($permisos as $permiso)
<input type="checkbox" name="idpermisos[]" id="idpermisos[]" value="{{$permiso->id}}">{{$permiso->nombrepermiso}}/{{$permiso->descripcion}}<br>
@endforeach