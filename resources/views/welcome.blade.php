<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <header>
                        <nav class="navbar navbar-expand-md fixed-top violet_bg transparent">
                            <a class="navbar-brand white" href="index.php">SKOP.COM</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="fas fa-bars white"></span>
                            </button>
                            <div class="collapse navbar-collapse mr-auto" id="navbarCollapse">

                              <form class="form-inline mt-2 mt-md-0 white_bg buscador">
                                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
                                <button class="btn btn-link violet my-2 my-sm-0" type="submit"><i class="fas fa-search violet"></i></button>
                              </form>
                              <ul class="navbar-nav ml-4">
                                <li class="nav-item active ml-2">
                                  <a class="nav-link violet white_bg circle" href="#"><i class="fas fa-arrow-up violet"></i></a>
                                </li>
                                <li class="nav-item ml-2">
                                  <a class="nav-link violet white_bg circle" href="#"><i class="fas fa-bell violet"></i></a>
                                </li>
                                <li class="nav-item ml-2">
                                  <a class="nav-link violet white_bg circle" href="/login"><i class="fas fa-user violet"></i></a>
                                </li>
                              </ul>
                            </div>
                        </nav>
                    </header>
                    @endauth
                </div>

            @endif

            <div class="content">
              <main role="main">
                  <section class="splash">
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <figure><img class="first-slide" src="img/galaxias/2.jpg" alt="First slide"></figure>
                                  <div class="container">
                                      <div class="carousel-caption text-left white">
                                          <div class="interactions">
                                              <p class="white">16 <i class="fas fa-heart white ml-2 mr-4"></i> 24 <i class="fas fa-share-alt white  ml-2 mr-4"></i></p>
                                          </div>
                                          <h1 class="khand display-1">EL ARTE DE LA ASTROLOGIA</h1>
                                          <p class="ifgp lead"><em>La Astrologia es un lenguaje simbolico, no es una creencia</em></p>
                                          <p class="date"><small class="text-uppercase">15 de marzo</small></p>
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <figure><img class="first-slide" src="img/galaxias/1.jpg" alt="First slide"></figure>
                                  <div class="container">
                                      <div class="carousel-caption text-left white">
                                          <div class="interactions">
                                              <p class="white">16 <i class="fas fa-heart white ml-2 mr-4"></i> 24 <i class="fas fa-share-alt white  ml-2 mr-4"></i></p>
                                          </div>
                                          <h1 class="khand display-1">ENERGIA DEL MES</h1>
                                          <p class="ifgp lead"><em>El sol esta en el signo de Piscis por lo que es un buen mes para mostrar nuestro amor hacia lo que nos inspira y nos hace sentir que somos parte del mundo</em></p>
                                          <p class="date"><small class="text-uppercase">15 de marzo</small></p>
                                      </div>
                                  </div>
                              </div>
                              <div class="carousel-item">
                                  <figure><img class="first-slide" src="img/galaxias/3.jpg" alt="First slide"></figure>
                                  <div class="container">
                                      <div class="carousel-caption text-left white">
                                          <div class="interactions">
                                              <p class="white">16 <i class="fas fa-heart white ml-2 mr-4"></i> 24 <i class="fas fa-share-alt white  ml-2 mr-4"></i></p>
                                          </div>
                                          <h1 class="khand display-1">Luna Nueva en Piscis</h1>
                                          <p class="ifgp lead"><em>Queres saber que area de tu vida esta afectando este nuevo comienzo?</em></p>
                                          <p class="date"><small class="text-uppercase">15 de marzo</small></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                      <aside class="moreActions d-none d-sm-block">
                          <ul class="list-unstyled">
                              <li class="white_border border_1 white pl-4 pr-4 mb-4 pt-1 pb-1 badge-pill">MAS TIPS PARA HOY <i class="fas fa-star"></i></li>
                              <li class="white_border border_1 white pl-4 pr-4 mb-4 pt-1 pb-1 badge-pill">PLANETAS <i class="fas fa-star"></i> </li>
                              <li class="white_border border_1 white pl-4 pr-4 mb-4 pt-1 pb-1 badge-pill">MATCHES PARA HOY <i class="fas fa-star"></i></li>
                              <li class="white_border border_1 white pl-4 pr-4 mb-4 pt-1 pb-1 badge-pill">RATING ESTRELLAS HOY <i class="fas fa-star"></i></li>
                          </ul>
                      </aside>
                  </section>

                  <div class="container mainContent">
                      <section class="cta mb-4 row">
                          <div class="col-12">
                              <div class="gold_bg p-1">
                                  <ul class="list-unstyled d-flex flex-row m-0 justify-content-around">
                                      <li class="white text-center">
                                          <button type="button" class="btn btn-link white">
                                              <i class="fas fa-star d-block mb-2"></i>
                                              <span class="text-uppercase d-none d-sm-block">Horóscopo</span>
                                          </button>
                                      </li>
                                      <li class="white text-center">
                                          <button type="button" class="btn btn-link white">
                                              <i class="fas fa-magic d-block mb-2"></i>
                                              <span class="text-uppercase d-none d-sm-block">Oraculo</span>
                                          </button>
                                      </li>
                                      <li class="white text-center">
                                          <button type="button" class="btn btn-link white">
                                              <i class="fas fa-question-circle d-block mb-2"></i>
                                              <span class="text-uppercase d-none d-sm-block">Astrobasicos</span>
                                          </button>
                                      </li>
                                      <li class="white text-center">
                                          <button type="button" class="btn btn-link white">
                                              <i class="fas fa-calculator d-block mb-2"></i>
                                              <span class="text-uppercase d-none d-sm-block">Planeta Dominante</span>
                                          </button>
                                      </li>
                                      <li class="white text-center">
                                          <button type="button" class="btn btn-link white">
                                              <i class="fas fa-heartbeat d-block mb-2"></i>
                                              <span class="text-uppercase d-none d-sm-block">Compatibilidad</span>
                                          </button>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </section>
                      <section class="feedWrapper">
                          <div class="row">
                              <aside class="col-4 d-none d-sm-block">
                                  <article class="card p-4 gold_border text-center mb-4">
                                      <h6 class="gold khand text-uppercase"><span class="gold_border border_1 d-inline-block pl-4 pr-4 pt-2 pb-2">Lectura recomendada</span></h6>
                                      <h2 class="ifgp deepBlue">Aspectos Planetarios</h2>
                                      <p class="deepBlue0">El Sol y Neptuno estan en conjuncion, podemos llegar a estar particularmente distraidos y sentir que estamos enamorados de la vida.</p>
                                      <footer><a href="#" title="Leer mas" class="gold">Leer más <i class="fas fa-arrow-right"></i></a></footer>
                                  </article>
                                  <article class="card p-4 gold_border text-center mb-4">
                                      <h6 class="gold khand text-uppercase"><span class="gold_border border_1 d-inline-block pl-4 pr-4 pt-2 pb-2">Lectura recomendada</span></h6>
                                      <h2 class="ifgp deepBlue">El sol esta en Piscis</h2>
                                      <p class="deepBlue0">Piscis es el ultimo signo del zoodiaco, pertenece a la triada del elemento agua, que quiere decir esto? que la sensibilidad es un aspecto muy importante.</p>
                                      <footer><a href="#" title="Leer mas" class="gold">Leer más <i class="fas fa-arrow-right"></i></a></footer>
                                  </article>
                                  <article class="card p-4 gold_border text-center mb-4">
                                      <h6 class="gold khand text-uppercase"><span class="gold_border border_1 d-inline-block pl-4 pr-4 pt-2 pb-2">Lectura recomendada</span></h6>
                                      <h2 class="ifgp deepBlue">Blog recomendado de la semana</h2>
                                      <p class="deepBlue0">"La Carta Natal de Instagram"</p>
                                      <footer><a href="#" title="Leer mas" class="gold">Leer más <i class="fas fa-arrow-right"></i></a></footer>
                                  </article>
                              </aside>
                              <div class="col-md-8 col-lg-7 col-xs-12">
                                  <article class="card post mb-4">
                                      <header class="userControl p-4 border-bottom violet_border">
                                          <figure class="user d-flex flex-row m-0 justify-content-start">
                                              <div class="circle mr-2"><img src="img/usuarios/2.jpg" alt="usuario 1" /></div>
                                              <figcaption>
                                                  <h5 class="khand mb-0 mt-2 deepBlue">Pedro Luis Arco</h5>
                                                  <p class="deepBlue0"> Hoy me siento muy distraido!! <i class="far fa-smile"></i> </p>
                                              </figcaption>
                                              <p class="timePost"><small class="text-uppercase deepBlue0">Hace 5 minutos</small></p>
                                          </figure>
                                      </header>
                                      <div class="p-4">
                                          <article class="sharedContent violet_border border_1 text-center p-4 mt-2">
                                              <header>
                                                  <h3 class="violet khand text-uppercase"><span class="d-inline-block white_bg pl-4 pr-4">Libra</span></h3>
                                              </header>
                                              <p class="ifgp lead deepBlue0"><em>You might spend the morning accepting things as they are. Then you could spend your lunch hour imagining things as you would like them to be. Then, for a finale to your day, you might spend time in late afternoon and
                                                  early evening making things the way you want them to be. It's going to take a lot of work, but when.</em></p>
                                          </article>
                                      </div>
                                      <footer class="deepBlue00_bg text-center deepBlue d-flex flex-row justify-content-between pl-4 pr-4">
                                          <p class="violet m-0 pt-1 pb-1"><span>16 <i class="fas fa-heart"></i></span><span>45 <i class="fas fa-share-alt"></i></span></p>
                                          <p class="violet m-0 pt-1 pb-1">16 <i class="fas fa-comments"></i></p>
                                      </footer>
                                  </article>
                                  <article class="card post mb-4">
                                      <header class="userControl p-4 border-bottom violet_border">
                                          <figure class="user d-flex flex-row m-0 justify-content-start">
                                              <div class="circle mr-2"><img src="img/usuarios/3.jpg" alt="usuario 1" /></div>
                                              <figcaption>
                                                  <h5 class="khand mb-0 mt-2 deepBlue">Lisa Alvarez</h5>
                                                  <p class="deepBlue0">Arianos al poder! <i class="far fa-smile"></i> </p>
                                              </figcaption>
                                              <p class="timePost"><small class="text-uppercase deepBlue0">Hace 15 minutos</small></p>
                                          </figure>
                                      </header>
                                      <div class="p-4">
                                          <article class="sharedContent violet_border border_1 text-center p-4 mt-2">
                                              <header>
                                                  <h3 class="violet khand text-uppercase"><span class="d-inline-block white_bg pl-4 pr-4">Aries - Ascendente Escorpio</span></h3>
                                              </header>
                                              <p class="ifgp lead deepBlue0"><em>Soltate! Deja de pensar y libera tus impulsos. Es tiempo de hacer ese llamado que te tiene en vilo. Hoy vas a lograr todo lo que te propongas. Animos!!</em></p>
                                          </article>
                                      </div>
                                      <footer class="deepBlue00_bg text-center deepBlue d-flex flex-row justify-content-between pl-4 pr-4">
                                          <p class="violet m-0 pt-1 pb-1"><span>16 <i class="fas fa-heart"></i></span><span>45 <i class="fas fa-share-alt"></i></span></p>
                                          <p class="violet m-0 pt-1 pb-1">16 <i class="fas fa-comments"></i></p>
                                      </footer>
                                  </article>
                                  <article class="card post mb-4">
                                      <header class="userControl p-4 border-bottom violet_border">
                                          <figure class="user d-flex flex-row m-0 justify-content-start">
                                              <div class="circle mr-2"><img src="img/usuarios/1.jpg" alt="usuario 1" /></div>
                                              <figcaption>
                                                  <h5 class="khand mb-0 mt-2 deepBlue">Pedro Luis Arco</h5>
                                                  <p class="deepBlue0"> Totalmente deacuerdo como me siento hoy <i class="far fa-smile"></i> </p>
                                              </figcaption>
                                              <p class="timePost"><small class="text-uppercase deepBlue0">Hace 5 minutos</small></p>
                                          </figure>
                                      </header>
                                      <div class="p-4">
                                          <article class="sharedContent violet_border border_1 text-center p-4 mt-2">
                                              <header>
                                                  <h3 class="violet khand text-uppercase"><span class="d-inline-block white_bg pl-4 pr-4">Libra</span></h3>
                                              </header>
                                              <p class="ifgp lead deepBlue0"><em>You might spend the morning accepting things as they are. Then you could spend your lunch hour imagining things as you would like them to be. Then, for a finale to your day, you might spend time in late afternoon and
                                                  early evening making things the way you want them to be. It's going to take a lot of work, but when.</em></p>
                                          </article>
                                      </div>
                                      <footer class="deepBlue00_bg text-center deepBlue d-flex flex-row justify-content-between pl-4 pr-4">
                                          <p class="violet m-0 pt-1 pb-1"><span>16 <i class="fas fa-heart"></i></span><span>45 <i class="fas fa-share-alt"></i></span></p>
                                          <p class="violet m-0 pt-1 pb-1">16 <i class="fas fa-comments"></i></p>
                                      </footer>
                                  </article>
                              </div>
                              <div class="col-1 chat d-none d-lg-block">
                                  <ul class="list-unstyled">
                                      <li class="text-center active mb-2 circle">
                                          <figure class="circle">
                                              <img src="img/usuarios/1.jpg" class="mx-auto d-block" alt="Usuario 1" />
                                          </figure>
                                      </li>
                                      <li class="text-center mb-2 circle">
                                          <figure class="circle">
                                              <img src="img/usuarios/2.jpg" class="mx-auto d-block" alt="Usuario 1" />
                                          </figure>
                                      </li>
                                      <li class="text-center mb-2 circle">
                                          <figure class="circle">
                                              <img src="img/usuarios/3.jpg" class="mx-auto d-block" alt="Usuario 1" />
                                          </figure>
                                      </li>
                                      <li class="text-center active mb-2 circle">
                                          <figure class="circle">
                                              <img src="img/usuarios/1.jpg" class="mx-auto d-block" alt="Usuario 1" />
                                          </figure>
                                      </li>
                                      <li class="text-center mb-2 circle">
                                          <figure class="circle">
                                              <img src="img/usuarios/2.jpg" class="mx-auto d-block" alt="Usuario 1" />
                                          </figure>
                                      </li>
                                      <li class="text-center mb-2 circle">
                                          <figure class="circle">
                                              <img src="img/usuarios/3.jpg" class="mx-auto d-block" alt="Usuario 1" />
                                          </figure>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </section>
                  </div>

          </main>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
