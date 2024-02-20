@extends('layouts.default',['title' => 'Sản phẩm '.config('app.fullname'), 'header_class' => '' ])

@section('header-content')
    <div class="system-main">
        <div class="container-fluid no-ltr-padding">
            <div class="system-main__list">
                <img src="{{asset('images/pages/Product-Landing-Page.jpg') }}" class="img-responsive" alt="">			
                <div class="system-main__mask">
                    <div class="text-holder" style="text-align: left">
                        <h1 style="font-family: Raleway;">SẢN PHẨM KÍNH CHỐNG CHÁY CÔNG NGHỆ CAO</h1>
                        <p style="height: 55px"><span style="background-color: rgb(51, 79, 161); font-family: Raleway; color: rgb(255, 255, 255); font-weight: 600; border-color: rgb(255, 255, 255); border-style: solid; border-width: 2px; padding: 10px 25px; border-radius: 80px;"> Kính chống cháy phi cách nhiệt loại E</span></p>
                        <p style="height: 55px"><span style="background-color: rgb(51, 79, 161); font-family: Raleway; color: rgb(255, 255, 255); font-weight: 600; border-color: rgb(255, 255, 255); border-style: solid; border-width: 2px; padding: 10px 25px; border-radius: 80px;"> Kính chống cháy vả chống bức xạ nhiệt EW</span></p>
                        <p style="height: 55px"><span style="background-color: rgb(51, 79, 161); font-family: Raleway; color: rgb(255, 255, 255); font-weight: 600; border-color: rgb(255, 255, 255); border-style: solid; border-width: 2px; padding: 10px 25px; border-radius: 80px;"> Kính chống cháy loại EI</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
		fn_setCurrentMenu('products');
    </script>
@endsection

@section('content')

@endsection