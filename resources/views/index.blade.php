@extends('layout')
@section('meta-title')
    Inicio | Servicio Departamental de Salud Potosí
@endsection
@section('banner')
    <div id="main-slide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0"></li>
            <li data-target="#main-slide" data-slide-to="1" class="active"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider/slide1.jpg" alt="First slide">
                <div class="carousel-caption d-md-block">
                    <h4 class="fadeInDown wow" data-wow-delay=".9s">Medicina Tradicional</h4>
                    <h1 class="wow fadeInDown heading" data-wow-delay=".4s">"Salud Intercultural y Comunitaria"</h1>
                    <!-- <p class="fadeInUp wow" data-wow-delay=".6s">Bootstrap Template</p> -->
                    <a href="#seccion-antecedentes" class="fadeInLeft wow btn btn-common" data-wow-delay=".6s">Empezar</a>
                    <a href="#seccion-noticias" class="fadeInRight wow btn btn-border" data-wow-delay=".6s">Noticias</a>
                </div>
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/slider/slide1.jpg" alt="Second slide">
                <div class="overlay"></div>
                <div class="carousel-caption d-md-block">
                    <h4 class="fadeInDown wow" data-wow-delay=".9s">SEDES POTOSÍ</h4>
                    <h1 class="wow bounceIn heading" data-wow-delay=".7s">"Trabajando por la Salud del Departamento"</h1>
                    <!-- <p class="fadeInUp wow" data-wow-delay=".6s"></p> -->
                    <!--<a href="#" class="fadeInUp wow btn btn-border" data-wow-delay=".8s">Noticias</a> -->
                    <a href="#seccion-antecedentes" class="fadeInLeft wow btn btn-common" data-wow-delay=".6s">Empezar</a>
                    <a href="#seccion-noticias" class="fadeInRight wow btn btn-border" data-wow-delay=".6s">Noticias</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/slider/slide1.jpg" alt="Third slide">
                <div class="carousel-caption d-md-block">
                    <h4 class="fadeInDown wow" data-wow-delay=".9s">Servicios de Salud</h4>
                    <h1 class="wow fadeInUp heading" data-wow-delay=".6s">En los 41 Municipios del Departamento</h1>
                    <!-- <p class="fadeInUp wow" data-wow-delay=".6s"></p> -->
                    <a href="#seccion-unidades" class="fadeInUp wow btn btn-common" data-wow-delay=".8s">Unidades</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection

@section('antecedentes')
    <section id="seccion-antecedentes" class="property section-padding wow fadeInUp animated">
        <div class="container">
            <div class="antecedentes-box container">
                <div class="col-12 col-md-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Antecedentes Institucionales</h2>
                        <p>Los antecedentes referidos a la constitución del Sedes Potosí se ubican en el marco de las siguientes
                            gestiones:</p>
                    </div>
                    <div>

                        <div class="item">
                            <div class="icon">
                                <span class="ion-android-checkmark-circle"></span>
                            </div>
                            <p class="description">
                            <ul>
                                <li>El D.S. 25060 y las disposiciones vigentes en materia de salud, establece el modelo básico de
                                    organización, atribuciones y funcionamiento de los Servicios Departamentales de Salud.</li>
                            </ul>
                            </p>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <span class="ion-android-checkmark-circle"></span>
                            </div>
                            <p class="description">
                            <ul>
                                <li>El Servicio Departamental de Salud Potosí es un órgano desconcentrado de la gobernación del
                                    departamento, tiene estructura propia e independencia de gestión administrativa, competencia de
                                    ámbito departamental y depende linealmente del Gobernador a traves de la Secretaría de Desarrollo
                                    Social del Departamento y funcionalmente del Ministerio de Salud y Deportes.</li>
                            </ul>
                            </p>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <span class="ion-android-checkmark-circle"></span>
                            </div>
                            <p class="description">
                            <ul>
                                <li>El Servicio Departamental de Salud Potosí desarrolla sus actividades en el marco del ordenamiento
                                    legal que rige el sistema nacional de salud, así como en el marco de las Leyes: 1178 (SAFCO), 1654
                                    Descentralización Administrativa, 1551 Participación Popular, Ley 2426 (SUMI) y sus respectivos
                                    reglamentos y normas.</li>
                            </ul>
                            </p>
                        </div>


                        <div class="item">
                            <div class="icon">
                                <span class="ion-android-checkmark-circle"></span>
                            </div>
                            <p class="">
                            <ul>
                                <li>El Servicio Departamental de Salud Potosí, inicio sus actividades el año 1923 con el nombre de
                                    Sanidad Departamental.</li>
                            </ul>
                            </p>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <span class="ion-android-checkmark-circle"></span>
                            </div>
                            <p>
                            <ul>
                                <li>En 1997, con la promulgación del D.S. 24833 se denominó Unidad Departamental de Salud Potosí
                                    (UDES).</li>
                            </ul>
                            </p>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <span class="ion-android-checkmark-circle"></span>
                            </div>
                            <p class="description">
                            <ul>
                                <li>En 1998, mediante D.S. 25060 adquiere la denominación de SEDES, cuyo rol es de ser “Cabeza del
                                    sector salud en todo el departamento y representante del Ministerio de Salud y Deportes”.</li>
                            </ul>
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('mision')
    <section class="featured-bg section-padding wow fadeInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Misión y Visión</h2>
                        <p>Conoce la Misión y Visión de nuestra institución, que trabaja diariamente para mejorar la calidad de vida
                            y salud​</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xs-12">
                    <img class="img-fluid" src="assets/img/about/img-2.jpg" alt="">
                </div>
                <div class="col-md-12 col-lg-6 col-xs-12">
                    <h2 class="intro-title"></h2>
                    <h3 class="title-sub">"Trabajando por la Salud del Departamento"</h3>
                    <p class="intro-desc">Planificación, gestión, coordinación y control de la salud.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="featured-item">
                                <div class="icon">
                                    <i class="lni-invention"></i>
                                </div>
                                <h3><a href="{{ route('pages.mision') }}">Misión</a></h3>
                                <div class="featured-content">
                                    <p>El Servicio Departamental de Salud Potosí, se constituye en la cabeza de sector salud en el
                                        departamento bajo la tuición del Gobierno Autónomo del Departamento, cuyo propósito fundamental es
                                        adecuar y articular la política nacional de salud en el departamento...</p>
                                    <h2><a href="{{ route('pages.mision') }}" class="link-c link-icon">Leer más <span
                                                    class="ion-ios-arrow-forward"></span></a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="featured-item">
                                <div class="icon">
                                    <i class="lni-eye"></i>
                                </div>
                                <h3><a href="{{ route('pages.mision') }}">Visión</a></h3>
                                <div class="featured-content">
                                    <p>La población potosina accede al Sistema Único, Intercultural y Comunitario de Salud, respetuoso de
                                        las culturas indígenas y originarias, enriquecido con la medicina tradicional, es inclusivo,
                                        equitativo, solidario, de calidad, y calidez...</p>
                                    <h2><a href="{{ route('pages.mision') }}" class="link-c link-icon">Leer más <span
                                                    class="ion-ios-arrow-forward"></span></a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('galeria')
    <section class="latest-property section-padding wow fadeInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Galería</h2>
                        <p>Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.8s">
                    <div id="latest-property" class="owl-carousel">
                        <div class="item">
                            <div class="property-main">
                                <div class="property-wrap">
                                    <div class="property-item">
                                        <div class="item-thumb">
                                            <a class="hover-effect" href="#">
                                                <img class="img-fluid" src="assets/img/property/house-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="item-body">
                                            <h3 class="property-title"><a href="#">Amazing oceanfront apartment</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-main">
                                <div class="property-wrap">
                                    <div class="property-item">
                                        <div class="item-thumb">
                                            <a class="hover-effect" href="#">
                                                <img class="img-fluid" src="assets/img/property/house-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="item-body">
                                            <h3 class="property-title"><a href="#">Family Condo</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-main">
                                <div class="property-wrap">
                                    <div class="property-item">
                                        <div class="item-thumb">
                                            <a class="hover-effect" href="#">
                                                <img class="img-fluid" src="assets/img/property/house-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="item-body">
                                            <h3 class="property-title"><a href="#">Guaranteed modern home</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-main">
                                <div class="property-wrap">
                                    <div class="property-item">
                                        <div class="item-thumb">
                                            <a class="hover-effect" href="#">
                                                <img class="img-fluid" src="assets/img/property/house-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="item-body">
                                            <h3 class="property-title"><a href="#">Family home for sale</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-main">
                                <div class="property-wrap">
                                    <div class="property-item">
                                        <div class="item-thumb">
                                            <a class="hover-effect" href="#">
                                                <img class="img-fluid" src="assets/img/property/house-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="item-body">
                                            <h3 class="property-title"><a href="#">Amazing oceanfront apartment</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="property-main">
                                <div class="property-wrap">
                                    <div class="property-item">
                                        <div class="item-thumb">
                                            <a class="hover-effect" href="#.html">
                                                <img class="img-fluid" src="assets/img/property/house-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="item-body">
                                            <h3 class="property-title"><a href="property.html">Luxury home for sale</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('unidades')
    <section id="seccion-unidades" class="section-padding wow fadeInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Unidades</h2>
                        <p>Duis aute irure dolor in reprehed in volupted velit esse dolore</p>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-briefcase"></i></div>
                    <h4 class="title"><a href="{{ route('pages.direccion') }}">Dirección Técnica</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                        occaecati cupiditate non provident</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-clipboard"></i></div>
                    <h4 class="title"><a href="{{ route('pages.planificacion') }}">Planificación y Proyectos</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat tarad limino ata</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="fa fa-balance-scale"></i></div>
                    <h4 class="title"><a href="{{ route('pages.juridica') }}">Asesoría Jurídica</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-calculator"></i></div>
                    <h4 class="title"><a href="{{ route('pages.administrativa') }}">Administrativa Financiera</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-bookmarks"></i></div>
                    <h4 class="title"><a href="{{ route('pages.auditoria') }}">Auditoría Interna</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum deleniti atque</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-people"></i></div>
                    <h4 class="title"><a href="{{ route('pages.redes') }}">Redes de Servicios de Salud</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                        soluta nobis est eligendi</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-bug"></i></div>
                    <h4 class="title"><a href="{{ route('pages.epidemiologia') }}">Epidemiología</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-medkit"></i></div>
                    <h4 class="title"><a href="{{ route('pages.seguros') }}">Seguros Públicos de Salud</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum deleniti atque</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-speakerphone"></i></div>
                    <h4 class="title"><a href="{{ route('pages.promocion') }}">Promoción de la Salud</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                        soluta nobis est eligendi</p>
                </div>

            </div>


        </div>
    </section>
@endsection

@section('noticias')

    <section id="seccion-noticias" class="section-padding wow fadeInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h2 class="section-title">Noticias</h2>
                        <p>Mantente al tanto de las noticias más recientes de todo el trabajo que realiza el Servicio Departamental
                            de Salud Potosi</p>
                    </div>
                </div>
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 col-xs-12">

                        <div class="blog-item text-center">
                            @if($post->photos->count() === 1)
                            <div class="blog-image">
                                <a href="{{ url($post->photos->first()->url) }}" class="example-image-link" data-lightbox="single" data-title="{{ $post->title }}">
                                    <img class="img-fluid example-image" src="{{ url($post->photos->first()->url) }}" alt="">
                                </a>
                            </div>0
                            @elseif($post->photos->count() > 1)
                                @foreach($post->photos->take(1) as $photo)
                                    @if($loop->iteration === 1)
                                        <div class="overlay">
                                            {{ $post->photos->count() }} Imagenes
                                        </div>
                                    @endif
                                @endforeach
                                    <div class="blog-image">
                                        <a class="example-image-link" href="{{ url($post->photos->first()->url) }}" data-lightbox="single" data-title="{{ $post->title }}" >
                                            <img class="img-fluid example-image-link" src="{{ url($photo->url) }}" alt="">
                                        </a>
                                    </div>

                            @elseif($post->iframe)
                                <div class="embed-responsive embed-responsive-16by9">
                                    {!! $post->iframe !!}
                                </div>
                            @endif
                            <div><a href="noticia/{{ $post->url }}" class="btn btn-common">Leer más</a></div>
                            <div class="descr">
                                <h3 class="title">
                                    <a href="noticia/{{ $post->url }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p>
                                    {{ $post->excerpt }}
                                </p>
                            </div>
                            <div class="blog-footer hide-on-list">
                                <div class="float-left">
                                    <p class="prop-user"><a href="#"><i class="lni-user"></i> {{ $post->owner->name }}</a></p>
                                </div>
                                <div class="float-right">
                                    <span><i class="lni-calendar"></i> {{ $post->published_at->format('M/d/Y') }}</span>
                                </div>
                            </div>
                        </div>


                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection




