
@extends('layouts.default',['title' => ' - Kính Chống Cháy Việt', 'header_class' => '' ])
@section('header-content')
    @include('layouts.layer.slide')
@endsection
@section('content')
    @include('layouts.layer.about')
    @include('layouts.layer.features')
    @include('layouts.layer.news')
@endsection