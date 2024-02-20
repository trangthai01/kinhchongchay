<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <title>{{ $title }}</title>
        @hasSection('kwMeta')
            @yield('kwMeta')
        @else
            <meta name="title" content="{{ $title }} ">
            <meta name="description" content="Công ty TNHH Kính chống cháy Việt (Fire Glass) | Chuyên tư vấn - Thiết kế - Thi công kính chống cháy cao cấp | Hotline: Mr San 0355 737477">
        @endif
        <meta name="robots" content="index, follow">
        <meta name="copyright" content="{{config('app.name')}}">
        <meta name="author" content="{{config('app.name')}}">
        <meta name="GENERATOR" content="{{config('app.name')}}">
        <meta http-equiv="audience" content="General">
        <meta name="resource-type" content="Document">
        <meta name="distribution" content="Global">
        <meta name="revisit-after" content="1 days">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="content-language" content="vi">
        <meta property="og:url" content="{{URL::current()}}" >
        <meta property="og:locale" content="vi_VN">
        @hasSection('ogMeta')
            @yield('ogMeta')
        @else
            <meta property="og:type" content="website">
            <meta property="og:title" content="{{config('app.fullname')}} - Mang bình an đến mọi nhà">
            <meta property="og:description" content="Công ty TNHH Kính chống cháy Việt (Fire Glass) | Chuyên tư vấn - Thiết kế - Thi công kính chống cháy cao cấp | Hotline: Mr San 0355 737477">
            <meta property="og:image" content="{{ asset('images/logo_share.png') }}">
            <meta property="og:image:alt" content="{{config('app.fullname')}}">
        @endif
        
        
        <link rel="icon" href="{!! asset('images/logo_sm.png') !!}"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:400,700|Roboto+Condensed:300,400,700|Source+Sans+Pro:300,400,700" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/theme/bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/theme/font-awesome.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/theme/jquery.fancybox.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/theme/owl.carousel.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/theme/style.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/theme/sumoselect.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/theme/flickity.css') }}" rel="stylesheet"/>
        <link href="{{ asset('rs-slider/css/settings.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/block-library/style.min.css') }}" rel="stylesheet"/>
        
        
        @yield('css')
        
        <!-- JS -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
        <script src="{{ asset('js/theme/bootstrap.min.js') }}" ></script>
        
        <script src="{{ asset('js/theme/jquery.fancybox.min.js') }}" ></script>
        <script src="{{ asset('js/theme/jquery.imagemapster.min.js') }}" ></script>
        <script src="{{ asset('js/theme/jquery.matchHeight.js') }}" ></script>
        <script src="{{ asset('js/theme/jquery.sumoselect.min.js') }}" ></script>
        <script src="{{ asset('js/theme/owl.carousel.min.js') }}" ></script>
        <script src="{{ asset('js/theme/fontawesome.js') }}" ></script>
        
        <script src="{{ asset('js/theme/flickity.pkgd.min.js') }}" ></script>

        

        <script src="{{ asset('rs-slider/js/jquery.themepunch.plugins.min.js') }}" ></script>
        <script src="{{ asset('rs-slider/js/jquery.themepunch.revolution.min.js') }}" ></script>
        

        <script>
            var ROOT = "{{URL::to('/')}}";
            var ROOT_PROD = "{{URL::to('/')}}";
            var ROOT_MOD = "{{URL::to('/')}}";
            var url = "{{URL::current()}}";
            var js_lang = new Array();
            var csrf_token = "{{csrf_token()}}";
            
            var fn_setCurrentMenu = function(tab){
                $("#menu-primary-menu li").removeClass('current-menu-item');
                if(tab == null || tab == undefined){
                    $("#menu-item-home").addClass('current-menu-item');
                }
                else{
                    $("#menu-item-" + tab).addClass('current-menu-item');
                }
            }
        </script>
        
        @yield('javascript')
    </head>
    <body>
        <div class="wrapper">
            <div class="header-wrapper">
                @include('layouts.layer.header', ['header_class' => $header_class])
                @yield('header-content')
            </div>
            @yield('content')
            @include('layouts.layer.footer')
        </div>
    </body>
</html>
