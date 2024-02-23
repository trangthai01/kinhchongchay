@extends('layouts.default',['title' => 'Khách hàng thân thiết - '.config('app.fullname'), 'header_class' => 'header-white' ])
@section('header-content')
    <div class="banner-block parallex-700 parallex-white-700">
        <img src="{{ asset('images/pages/our-valued-clients-low.jpg') }}" class="img-responsive" alt="">	<div class="banner-text">
            <a href="{{ url('ve-chung-toi/khach-hang-than-thiet') }}" title="Our Valued Clients">Our Valued Clients</a>
        </div>
    </div>
    <script>
		fn_setCurrentMenu('company');
    </script>
@endsection

@section('content')
    <main id="main" class="bottom-gap top-gap">
		<div class="section breadcrumb-holder">
	        <div class="container">
                <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                    <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <meta name="numberOfItems" content="3"><meta name="itemListOrder" content="Ascending">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
                            <a href="{{url('')}}" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item">
                            <a href="{{url('/ve-chung-toi')}}" itemprop="item"><span itemprop="name">Về chúng tôi</span></a>
                            <meta itemprop="position" content="2">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
                            <span itemprop="item"><span itemprop="name">Khách hàng thân thiết</span></span>
                            <meta itemprop="position" content="3">
                        </li>
                    </ul>
                </div>	
            </div>
		</div>
        <section class="section section-cta">
	        <div class="container">
		        <div class="row company-top padding-bottom">
					<div class="col-sm-4">
				        <div class="info-title color-primary">
					        <h2>Chiến lược của Vietfire Glass<br>dựa trên sự tập trung rõ ràng vào khách hàng, cung cấp Giải pháp tùy chỉnh cho từng dự án xây dựng.</h2>				
                        </div>
			        </div>
					<div class="col-sm-8 text-holder">
                        <p>Mục tiêu quan trọng nhất của chúng tôi là cung cấp cho khách hàng mọi thông tin về Giải pháp Chất lượng và Kỹ thuật, cung cấp phạm vi rộng nhất các giải pháp Bảo vệ Kính được Chứng nhận trên thị trường.</p>
                        <p>Các cuộc thử nghiệm được thực hiện rộng khắp trong các phòng thí nghiệm được cục PCCC công nhận, giúp đảm bảo độ tin cậy tuyệt đối trong chứng nhận sản phẩm mọi lúc, cho giải pháp cụ thể mà dự án áp dụng.</p>
                    </div>
				</div>
	        </div>
        </section>
        <section class="section section-client-icon">
	        <div class="container">
		        <div class="row client-icon-block">
					<div class="col-xs-6 col-sm-3 col-md-2">
                        <a href="#" title="">
                            <img src="{{ asset('images/pages/clients/1-1-250x250.png') }}" class="img-responsive" alt="">
                        </a>
                    </div>
					<div class="col-xs-6 col-sm-3 col-md-2">
                        <a href="#" title="">
                            <img src="{{ asset('images/pages/clients/2-1-250x250.png') }}" class="img-responsive" alt="">
                        </a>
                    </div>
					<div class="col-xs-6 col-sm-3 col-md-2">
                        <a href="#" title="">
                            <img src="{{ asset('images/pages/clients/3-1-250x250.png') }}" class="img-responsive" alt="">
                        </a>
                    </div>
					<div class="col-xs-6 col-sm-3 col-md-2">
                        <a href="#" title="">
                            <img src="{{ asset('images/pages/clients/4-1-250x250.png') }}" class="img-responsive" alt="">
                        </a>
                    </div>
					<div class="col-xs-6 col-sm-3 col-md-2">
                        <a href="#" title="">
                            <img src="{{ asset('images/pages/clients/5-1-250x250.png') }}" class="img-responsive" alt="">
                        </a>
                    </div>
					<div class="col-xs-6 col-sm-3 col-md-2">
                        <a href="#" title="">
                            <img src="{{ asset('images/pages/clients/6-1-250x250.png') }}" class="img-responsive" alt="">
                        </a>
                    </div>
				</div>
	        </div>
        </section>
	</main>
@endsection