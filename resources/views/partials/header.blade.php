<header id="header-wrap">

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-xs-12">

                    <ul class="links clearfix">
                        <li><i class="lni-phone-handset"></i>(+591)26225559</li>
                        <li><i class="lni-envelope"></i> sedespotosi@gmail.com</li>
                        <li><a href="#"><i class="lni-map-marker"></i>Calle Chayanta N° 779</a></li>
                    </ul>

                </div>
                <div class="col-lg-5 col-md-4 col-xs-12">
                    <div class="roof-social float-right">
                        <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                        <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                        <a class="whatsapp" href="#"><i class="lni-whatsapp"></i></a>
                        <a class="youtube" href="#"><i class="lni-youtube"></i></a>
                    </div>
                    <div class="header-top-right float-right">
                        <a href="{{ route('login') }}" class="header-top-button"><i class="lni-lock"></i> Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-white navbar-shrink" id="mainNav" data-toggle="sticky-onscroll">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                        aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="lin-menu"></span>
                </button>
                <a class="navbar-brand" href="{{ route('pages.index') }}"><img src="{{ asset('assets/img/logo.svg') }}" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto w-100 justify-content-center">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('pages.index') }}">
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item dropdown {{ request()->is('sedes/*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Institución <i class=""></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item {{ request()->is('sedes/antecedentes') ? 'active' : '' }}" href="{{ route('pages.antecedentes') }}">Antecedentes</a>
                            <a class="dropdown-item {{ request()->is('sedes/mision') ? 'active' : '' }}" href="{{ route('pages.mision') }}">Misión y Visión</a>
                            <a class="dropdown-item {{ request()->is('sedes/autoridades') ? 'active' : '' }}" href="{{ route('pages.autoridades') }}">Autoridades</a>
                            <a class="dropdown-item {{ request()->is('sedes/organigrama') ? 'active' : '' }}" href="{{ route('pages.organigrama') }}">Organigrama</a>
                            <a class="dropdown-item {{ request()->is('sedes/telefonosip') ? 'active' : '' }}" href="{{ route('pages.telefonosip') }}">Teléfonos IP</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown {{ request()->is('unidad/*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle " href="#" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Unidades <i class=""></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item {{ request()->is('unidad/direccion') ? 'active' : '' }}" href="{{ route('pages.direccion') }}">Dirección Técnica</a>
                            <a class="dropdown-item {{ request()->is('unidad/auditoria') ? 'active' : '' }}" href="{{ route('pages.auditoria') }}">Auditoria Interna</a>
                            <a class="dropdown-item {{ request()->is('unidad/administrativa') ? 'active' : '' }}" href="{{ route('pages.administrativa') }}">Administrativa Financiera</a>
                            <a class="dropdown-item {{ request()->is('unidad/juridica') ? 'active' : '' }}" href="{{ route('pages.juridica') }}">Asesoría Jurídica</a>
                            <a class="dropdown-item {{ request()->is('unidad/planificacion') ? 'active' : '' }}" href="{{ route('pages.planificacion') }}">Planificación y Proyectos</a>
                            <a class="dropdown-item {{ request()->is('unidad/redes') ? 'active' : '' }}" href="{{ route('pages.redes') }}">Redes de Salud</a>
                            <a class="dropdown-item {{ request()->is('unidad/epidemiologia') ? 'active' : '' }}" href="{{ route('pages.epidemiologia') }}">Epidemiología</a>
                            <a class="dropdown-item {{ request()->is('unidad/seguros') ? 'active' : '' }}" href="{{ route('pages.seguros') }}">Seguros de Salud</a>
                            <a class="dropdown-item {{ request()->is('unidad/promocion') ? 'active' : '' }}" href="{{ route('pages.promocion') }}">Promoción de la Salud</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Comunicación <i class=""></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('posts.index') }}">Noticias</a>
                            <a class="dropdown-item" href="{{ route('pages.galeria') }}">Galería</a>
                            <a class="dropdown-item" href="{{ route('pages.documentos') }}">Documentos</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pages.contacto') }}">
                            Contacto
                        </a>
                    </li>
                </ul>
                <div class="search-add float-right">
                    <form method="GET" action="{{ route('posts.buscar') }}">
                        <div class="form-group">
                            <input type="search" name="busqueda" placeholder="Buscar" required>
                            <button type="submit" class="search-btn"><span class="lni-search"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <ul class="mobile-menu">
            <li>
                <a class="active" href="{{ route('pages.index') }}">
                    Inicio
                </a>
            </li>
            <li>
                <a href="#">
                    Institución
                </a>
                <ul class="dropdown">
                    <li><a href="{{ route('pages.antecedentes') }}">Antecedentes</a></li>
                    <li><a href="{{ route('pages.mision') }}">Misión y Visión</a></li>
                    <li><a href="{{ route('pages.autoridades') }}">Autoridades</a></li>
                    <li><a href="{{ route('pages.organigrama') }}">Organigrama</a></li>
                    <li><a href="{{ route('pages.telefonosip') }}">Teléfonos IP</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Unidades</a>
                <ul class="dropdown">
                    <li><a href="{{ route('pages.direccion') }}">Dirección Técnica</a></li>
                    <li><a href="{{ route('pages.auditoria') }}">Auditoria Interna</a></li>
                    <li><a href="{{ route('pages.administrativa') }}">Administrativa Financiera</a></li>
                    <li><a href="{{ route('pages.juridica') }}">Asesoría Jurídica</a></li>
                    <li><a href="{{ route('pages.planificacion') }}">Planificación y Proyectos</a></li>
                    <li><a href="{{ route('pages.redes') }}">Redes de Salud</a></li>
                    <li><a href="{{ route('pages.epidemiologia') }}">Epidemiología</a></li>
                    <li><a href="{{ route('pages.seguros') }}">Seguros de Salud</a></li>
                    <li><a href="{{ route('pages.promocion') }}">Promoción de la Salud</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    Comunicación
                </a>
                <ul class="dropdown">
                    <li><a href="{{ route('posts.index') }}">Noticias</a></li>
                    <li><a href="{{ route('pages.galeria') }}">Galería</a></li>
                    <li><a href="{{ route('pages.documentos') }}">Documentos</a></li>

{{--                    <li><a href="#">Videos</a></li>--}}
                </ul>
            </li>
            <li>
                <a href="{{ route('pages.contacto') }}">
                    Contacto
                </a>
            </li>
        </ul>
    </nav>
    <div class="clearfix"></div>
</header>