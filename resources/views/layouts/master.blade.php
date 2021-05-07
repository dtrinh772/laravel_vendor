<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('head.title')</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/partials-css/header.css">
    <link rel="stylesheet" href="/css/media_mobile.css">
    <link rel="stylesheet" href="/css/media_tabet.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    @yield('head.css')

</head>
<body>
@include('partials.menu')

@if(!\Request::is('/'))
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a itemprop="url" href="/"><span itemprop="title">Trang chủ</span></a>
                        </li>

                        <li>
                            <strong itemprop="title">@yield('breadcrumb.name')</strong>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
@endif

@yield('body.content')

@include('partials.footer')
<!-- SCRIPT -->
<script src="/js/jquery.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/app.js"></script>
<script src="/js/all.min.js"></script>
@yield('body.script')
</body>
</html>
