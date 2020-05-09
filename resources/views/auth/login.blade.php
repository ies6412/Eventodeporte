@extends('layouts.general')
@section('titulodepagina','Inicio de Sesion')

@section('titulo')
<h1 class="text-lead text-light">Inicio de Sesion</h1>
<p class="text-lead text-light">solo se de pruebas</p>
@endsection()
@section('content')
<div class="container mt--7 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
             @if($errors->any())
             <div class="alert alert-danger" role="alert">
              <strong>
              {{$errors->first()}}
              </strong>
             </div>
              
             @endif
              <form role="form" method="POST" action="{{route('login') }}">
              @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email"  name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror  
                </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Constraseña" type="password" id="password" name="password" required autocomplete="current-password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} >
                  <label class="custom-control-label" for=" remember">
                    <span class="text-muted">Recordar Session</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Inicio de Sesión</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="{{ route('password.request') }}" class="text-light"><small>¿Olvidaste tu clave?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="{{route('register')}}" class="text-light"><small>¿Aún no estas registrado?</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
