@extends('layout')
@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)

@section('metas')
    <meta property="og:url"                content="{{ request()->fullUrl() }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{ $post->title }}" />
    <meta property="og:description"        content="{{ $post->excerpt }}" />
    @if($post->photos->count() === 1)
        <meta property="og:image"              content="https://sedespotosi.com/{{ $post->photos->first()->url }}" />
        <meta property="og:image:secure_url" content="https://sedespotosi.com/{{ $post->photos->first()->url }}" />
    @endif
    <meta property="og:image:width" content="980" />
    <meta property="og:image:height" content="735" />
    <meta property="og:image:alt" content="{{ $post->excerpt }}" />
@endsection
@section('noticia')

    <div id="blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">

                    <div class="blog-post single-post">
                        @if($post->photos->count() === 1)
                                <a href="{{ url($post->photos->first()->url) }}" class="example-image-link post-img" data-lightbox="single" data-title="{{ $post->title }} ">
                                    <img src="{{ url($post->photos->first()->url) }}" alt="Thumbnail Image" class="img-raised img-fluid">
                                </a>
                        @elseif($post->photos->count() > 1)
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach($post->photos as $photo)

                                            <a href="{{ url($photo->url) }}" data-lightbox="galery" data-title="{{ $post->title }}" class="col-md-3 example-image-link">
                                                <img src="{{ url($photo->url) }}" class="img-fluid">
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @elseif($post->iframe)
                            <div class="embed-responsive embed-responsive-16by9">
                                {!! $post->iframe !!}
                            </div>
                        @endif
                        <div class="content">
                            <h2>
                                <a href="single-blog.html">{{ $post->title }}</a>
                            </h2>
                            <ul class="post-meta">
                                <li>{{ optional($post->published_at)->format('M d') }}</li>
                                <li><a href="#">{{ $post->category->name }}</a></li>
                                <li><a href="#">Area</a></li>
                            </ul>
                            <p class="mb-2">{!! $post->body !!}</p>
                            <hr>
                            @include('partials.social-links', ['description' => $post->title])
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="sidebar right">
{{--                        <div class="widget">--}}
{{--                            <h3 class="sidebar-title">Buscar Noticia</h3>--}}
{{--                            <div class="search-blog-input">--}}
{{--                                <div class="input">--}}
{{--                                    <input class="form-control" type="text" placeholder="Escriba y presione Enter. " value="">--}}
{{--                                    <i class="lni-search"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </div>--}}
                        <div class="widget">
                            <h3 class="sidebar-title">Últimas Noticias</h3>
                            <ul class="widget-tabs">
                                @foreach($posts as $po)

                                    <li>
                                        <div class="widget-content">
                                            @if($po->photos->count() === 1)
                                            <div class="widget-thumb">
                                                <a href="{{ $po->url }}"><img src="{{ url($po->photos->first()->url) }}" alt=""></a>
                                            </div>
                                            @endif
                                            <div class="widget-text">
                                                <h5><a href="{{ $po->url }}">{{ $po->title }}</a></h5>
                                                <span>{{ $po->published_at->format('M/d/Y') }}</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
<link href="/css/normalize.css" rel="stylesheet">
<link href="/css/framework.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
<link href="/css/lightbox.min.css" rel="stylesheet">

@endpush

@push('scripts')
    {{--<script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>--}}
    <script src="/js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
@endpush