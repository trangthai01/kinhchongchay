
@extends('layouts.default',['title' => ' - Kính Chống Cháy Việt', 'header_class' => '' ])

@section('css')
    <link href="{{ asset('css/slick/slick.css') }}" rel="stylesheet">
@endsection
@section('javascript')
    <script src="{{ asset('js/slick/slick.js') }}" ></script>
    <script src="{{ asset('js/theme/retina.min.js') }}" ></script>
    <script src="{{ asset('js/scripts.js') }}" ></script>
@endsection
@section('header-content')
    @include('layouts.layer.slide')
@endsection
@section('content')
    @include('layouts.layer.about')
    @include('layouts.layer.features')
    @include('layouts.layer.news')
@endsection