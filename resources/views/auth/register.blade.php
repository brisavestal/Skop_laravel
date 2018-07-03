@extends('layouts.app')

@section('content')
<div class="container">
    <?php
        define( 'CURRENT_SECTION', 'registro' );
    ?>
    <main role="main">
        <div class="container mainContent d-flex flex-column justify-content-center align-items-center">
            <section class="registerForm col-lg-10 col-sm-12">
                <header>
                    <h1 class="white text-center">Registro</h1>
                </header>
                <div class="card p-4">
                    <p class="text-center ifgp lead m-0  deepBlue"><em>Completa el siguiente formulario y crea una cuenta en la web.</em></p>
                    <p class="text-center ifgp lead  deepBlue"><em>Skop te permite conocer gente por afinidad astral.</em></p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <form class="mt-2">
                        <div class="row">
                          <div class="col-md-6 form-group">
                              <label for="name" class="text-uppercase violet">Nombre</label>
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  value="{{ old('name') }}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>

                          <div class="col-md-6 form-group">
                              <label for="lastname" class="text-uppercase violet">Apellido</label>
                              <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? 'is-invalid' : '' }}" name="lastname" value="{{ old('lastname')}}" required autofocus>

                             @if ($errors->has('lastname'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                <span>
                            @endif
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="email" class="text-uppercase violet">Email</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="mujer" id="genre" name="genre">
                                    <label class="form-check-label text-uppercase violet form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}" for="genre">
                                        Mujer
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="hombre" id="genre" name="genre">
                                    <label class="form-check-label text-uppercase violet" for="genre">
                                       Hombre
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 form-group">
                              <label for="password" class="text-uppercase violet">Contraseña</label>
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                          <div class="col-md-6 form-group">
                              <label for="repassword" class="text-uppercase violet">Confirmar contraseña</label>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="birthday" class="text-uppercase violet">Fecha de nacimiento</label>
                                <input type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" id="birthday" name="birthday">

                                @if ($errors->has('birthday'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="hour" class="text-uppercase violet">Hora de nacimiento</label>
                                <input type="time" class="form-control{{ $errors->has('hour') ? ' is-invalid' : '' }}" id="hour" name="hour">

                                @if ($errors->has('hour'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hour') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="row text-center d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary gold_bg gold_border">Enviar</button>
                        </div>
                    </form>
                </div>
                <hr class="separator"/>
                <p class="white text-center">¿Ya tenés cuenta? Inicia sesión <a href="login.php" class="white">aquí</a></p>
            </section>
        </div>

</main>

@endsection
