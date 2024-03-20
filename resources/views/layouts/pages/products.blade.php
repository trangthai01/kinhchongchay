@extends('layouts.default',['title' => 'Sản phẩm '.config('app.fullname'), 'header_class' => '' ])
@section('css')
<link href="https://fonts.googleapis.com/css?family=Roboto:400%7CRaleway:500%2C600%7COswald:400&amp;display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400%7CRaleway:500%2C600%7COswald:400&amp;display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
@endsection
@section('header-content')
    <div class="system-main">
        <div class="container-fluid no-ltr-padding">
            <div class="system-main__list">
                <img src="{{asset('images/pages/Product-Landing-Page.jpg') }}" class="img-responsive" alt="">			
                <div class="system-main__mask">
                    <div class="text-holder" style="text-align: left">
                        <h1 style="font-family: Raleway;">SẢN PHẨM KÍNH CHỐNG CHÁY CÔNG NGHỆ CAO</h1>
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
    <main id="main" class="bottom-gap top-gap">
        <div style="background-color: rgb(51, 79, 161); text-align: left; vertical-align: top; color: rgb(255, 255, 255); white-space: normal; width: 100%;">
        
        </div>
        <section class="section section-cta bottom">
			<div class="container container-product">
                <div class="row" style="text-align: center">
                    <span class="product-top-round">
                    SẢN PHẨM
                    </span>
                </div>
                <div class="row product-list-div">
                @foreach($productCategories as $category)
                @if(empty($category->parent_category_id))
                    <div class="{{count($category->children())==1?'col-sm-4': 'col-sm-8'}}" style="padding-bottom: 50px">
                        <span class="product_cate_span">{{$category->category_name}}</span>
                        <span style="border-bottom: 3px solid white;display: inline-block;width: 100%;"></span>
                        @foreach($category->children() as $childCategory)
                            <div class="{{count($category->children())==1?'col-sm-12': 'col-sm-3'}}" style="padding-top: 10px">
                                <span class="product_child_cate_span">{{$childCategory->category_name}}</span>
                                <ul class="product-list" style="padding-top: 20px">
                                    @foreach($childCategory->products as $product)
                                    @if(count($product->subs) == 0)
                                        <li><a href="{{ url('/san-pham/catalogue') }}">{{ $product -> product_name}} </a></li>
                                    @else
                                        <li><a class="product_w_sub collapsed" data-toggle="collapse" href="#collapse{{$product->product_id}}" aria-expanded="false" aria-controls="collapse{{$product->product_id}}">{{ $product -> product_name}} </a></li>
                                        <div id="collapse{{$product->product_id}}" class="collapse">
                                            <div class="card-body">
                                                <ul class="product-list" style="padding-top: 20px">
                                                @foreach($product->subs as $sub)
                                                    <li style="padding-left: 20px"><a>{{ $sub -> product_sub_name}} </a></li>
                                                @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                @endif
                @endforeach
                </div>
                <div class="row company-top" style="background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); width: 100%; height: 110px  ">
                    <div class="col-sm-8" style="padding-left: 0">
                        <ul class="desc-icon-list-product">
                            <li style="margin-top: 0">
                                <div class="image-holder fire-rated">
                                    <img src="{{ asset('images/pages/products/Fire-rated-for-web.png') }}" style="width: 113px">
                                </div>
                            </li>
                            <li>
                                <div class="image-holder">
                                    <img src="{{ asset('images/pages/products/etl-for-web.png') }}">
                                </div>
                            </li>
                            <li>
                                <div class="image-holder">
                                    <img src="{{ asset('images/pages/products/wh-for-web.png') }}">
                                </div>
                            </li>
                            <li>
                                <div class="image-holder">
                                    <img src="{{ asset('images/pages/products/applus-for-web.png') }}" style="width: 113px">
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-4" style="height: 100%; text-align: center; display: table">
                        <span class="product-phone" >0981 520 850</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection