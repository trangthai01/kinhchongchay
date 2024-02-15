
@extends('layouts.default',['title' => ' - Đá Phong Thủy Hoa Cương - Bình An, Tài Lộc', 'header_class' => '' ])
@section('header-content')
    @include('layouts.layer.slide')
@endsection
@section('content')
    @include('layouts.layer.about')
    @include('layouts.layer.features')
    @include('layouts.layer.news')
@endsection