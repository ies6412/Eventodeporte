@extends('layouts.general')
@section('titulodepagina','Registro')
@section('titulo')
<h1 class="text-lead text-light">Registro de Usuario</h1>
<p class="text-lead text-light">solo se de pruebas</p>
  

@endsection
@section('content')
<div class="container mt--7 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small><strong>Ingresa tus datos para el registro</strong></small>
                @if($errors->any())
             <div class="alert alert-danger" role="alert">
              <strong>
              {{$errors->first()}}
              </strong>
              @endif
              </div>
              <form role="form" action="{{ route('register') }}" method="POST"   >
              @csrf
                <div class="form-group">

                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <!--<input class="form-control" placeholder="Name" type="text">-->
                    <input id="name"  placeholder="Nombres Completos"type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <!--<input class="form-control" placeholder="Email" type="email">-->
                    <input id="email"  placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                  </div>
                </div>


                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                   <!-- <input class="form-control" placeholder="Password" type="password">-->
                   <input placeholder="Contraseña" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                  </div>
                </div>


                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                   
                    <input placeholder="Confirmar Contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                  </div>
                </div>


                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Crear Cuenta</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
