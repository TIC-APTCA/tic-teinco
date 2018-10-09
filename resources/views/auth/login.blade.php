@extends('layouts.app_login')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-group">
        <div class="card p-4">
          <div class="card-body">
            
            <h1>Iniciar Sesi&oacute;n</h1>
            
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <p class="text-muted">Iniciar sesión con tu cuenta.</p>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="icon-user"></i>
                </span>
              </div>
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Username">

            </div>
            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="icon-lock"></i>
                </span>
              </div>
              <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
            </div>
            <div class="row">
              <div class="col-4">
                <button type="submit" class="btn btn-primary px-5">Iniciar</button>
              </div>
            </div>
            <div class="row float-right">
              <div class="col-4">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                Olvidaste tu contrase&ntilde;a?
                </a>
              </div>
            </div>
          </form>
          </div>
        </div>
        <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
          <div class="card-body text-center">
              <h2>TEINCO</h2>
              <p>Sistema de Registro, Control y Seguimiento de las solicitudes de servicio y soporte que contribuya a la 
              mejora continua de los procesos ejecutados por de la Coordinaci&oacute;n de Tecnologia, 
              Informacion y Comunicacion (TIC).</p>
              <!--
              <button type="button" class="btn btn-primary active mt-3">Register Now!</button>
              -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection