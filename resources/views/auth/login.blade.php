@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                  <header>
                      <h1 class="white text-center">Ingreso</h1>
                  </header>
                  <div class="card p-4">
                      <p class="text-center ifgp lead m-0  deepBlue"><em>Ingresa a <em class="khand bold normal">SKOP.COM</em> y divertite con gente astrológicamente afin a vos!</em>
                      </p>
                      <form method="POST" action="{{ route('login') }}">
                          @csrf
                          <div class="form-group">
                              <label for="email" class="text-uppercase violet">Email</label>
                              <input type="email" class="form-control" id="email" placeholder="Email">
                              @if ($errors->has('email'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="form-group">
                              <label for="password" class="text-uppercase violet">Contraseña</label>
                              <input type="password" class="form-control" id="password" placeholder="Contraseña">
                              @if ($errors->has('password'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="d-flex row justify-content-between">
                              <p class="deepBlue0 mb-2 col"><small>Si no tienes una cuenta registrate <a href="/register" class="deepBlue0">aquí</a></small></p>
                              <p class="deepBlue0 mb-2 text-right col"><small>Si olvidaste tu contraseña hace click <a href="/reset" class="deepBlue0">aquí</a></small></p>
                          </div>
                          <div class="row text-center d-flex justify-content-center align-items-center">
                              <button type="submit" class="btn btn-primary gold_bg gold_border">Entrar</button>
                          </div>
                      </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
