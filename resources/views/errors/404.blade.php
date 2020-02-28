@extends('layout')
@section('banner')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city1.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img-fluid" src="{{ asset('images/error404.jpg') }}" alt="">
                    <p class="text-center display-4">Regresar al <a class="text-white" href="{{ route('pages.index') }}">Inicio</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
