@extends('layouts.default',['title' => 'Sản phẩm '.config('app.fullname'), 'header_class' => '' ])

@section('header-content')
    <div class="system-main">
        <div class="container-fluid no-ltr-padding">
            <div class="system-main__list">
                <img src="{{asset('images/pages/Product-Landing-Page.jpg') }}" class="img-responsive" alt="">			
                <div class="system-main__mask" style="left: 100px">
                    <p style="font-family: Raleway; color: rgb(255, 255, 255); font-weight: 600; font-size: 50px;line-height: 80px">SẢN PHẨM</p>
                    <p style="font-family: Raleway; color: rgb(51, 79, 161); font-weight: 600; font-size: 50px;line-height: 100px">KÍNH CHỐNG CHÁY CÔNG NGHỆ CAO</p>
                    <p style="height: 55px"><span style="background-color: rgb(51, 79, 161); font-family: Raleway; color: rgb(255, 255, 255); font-weight: 600; font-size: 20px; border-color: rgb(255, 255, 255); border-style: solid; border-width: 2px; padding: 10px 25px; border-radius: 80px;"> Kính chống cháy phi cách nhiệt loại E</span></p>
                    <p style="height: 55px"><span style="background-color: rgb(51, 79, 161); font-family: Raleway; color: rgb(255, 255, 255); font-weight: 600; font-size: 20px; border-color: rgb(255, 255, 255); border-style: solid; border-width: 2px; padding: 10px 25px; border-radius: 80px;"> Kính chống cháy vả chống bức xạ nhiệt EW</span></p>
                    <p style="height: 55px"><span style="background-color: rgb(51, 79, 161); font-family: Raleway; color: rgb(255, 255, 255); font-weight: 600; font-size: 20px; border-color: rgb(255, 255, 255); border-style: solid; border-width: 2px; padding: 10px 25px; border-radius: 80px;"> Kính chống cháy loại EI</span></p>

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