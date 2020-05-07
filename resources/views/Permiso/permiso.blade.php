@extends('welcome')

@section('seccion')
<h1></h1>
<?php 

?>
@foreach($rol as $roles)

  {{$roles->nombrerol}} 
  {{$roles->slug}}
  {{$roles->descripcion}}<br>
@endforeach
<input type="text" name="pruebas" id="pruebas">
<div id="permisos" >
lkkjkkkklkl

</div>

@endsection
@push('scripts')
<script>
$(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
     





    permisos();
    //sin utilizar api
   function permisos(){
       
         $.ajax({
         type:"GET",
         url: "{{route('verpermisos') }}",
         contenType:false,
         cache:false,
         dataType:"html",
         success:function(respuesta){
                
              $('#permisos').html(respuesta)



               }
             
                  });
       
      
  }

        
   //utilizanso api
    //llamamos al api que esta definido en api.php
    /*$('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{url('api/Persona/persona') }}",
        columns: [
            { data: 'id' },
            { data: 'NombrePersona' },
            { data: 'CedulaPersona' },
            { data: 'EmailPersona' },
            { data: 'btn' },
            
        ]
    });*/
   });
</script>
@endpush