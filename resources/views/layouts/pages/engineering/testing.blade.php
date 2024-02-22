@extends('layouts.default',['title' => 'Kiểm thử - '.config('app.fullname'), 'header_class' => 'header-white' ])
@section('css')
    <link href="{{ asset('css/theme/jquery.flipster.min.css') }}" rel="stylesheet">   
@endsection
@section('javascript')
	<script src="{{ asset('js/theme/jquery.flipster.min.js') }}" ></script>
@endsection

@section('header-content')
    <div class="system-main">
        <div class="container-fluid no-ltr-padding">
            <div class="system-main__list parallex-700 parallex-white-700 col-sm-12 no-ltr-padding">
                <img src="{{ asset('images/pages/testing-low.jpg') }}" srcset="{{ asset('images/pages/testing-low.jpg') }} 1x, {{ asset('images/pages/TESTING_MOBILE_3.jpg') }} 769w" class="img-responsive" alt="">			
                <div class="system-main__mask valign-bottom">
                    <div class="text-holder">
                        <h1>Kiểm thử - Đốt mẫu</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>
		fn_setCurrentMenu('engineering');
    </script>
@endsection

@section('content')
<main id="main" class="bottom-gap top-gap">
	<div class="section breadcrumb-holder">
		<div class="container">
			<div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
				<ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
					<meta name="numberOfItems" content="3">
					<meta name="itemListOrder" content="Ascending">
					<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
						<a href="{{url('')}}" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
						<meta itemprop="position" content="1">
					</li>
					<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item">
						<a href="{{url('ky-thuat')}}" itemprop="item"><span itemprop="name">Kỹ Thuật</span></a>
						<meta itemprop="position" content="2">
					</li>
					<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
						<span itemprop="item"><span itemprop="name">Testing</span></span><meta itemprop="position" content="3">
					</li>
				</ul>
			</div>	
		</div>
	</div>
	<section class="section section-cta">
		<div class="container">
			<div class="row company-top padding-bottom">
				<div class="col-sm-4 col-md-3">
					<div class="info-title color-primary">
						<h2>Kiểm thử - Đốt mẫu</h2>				
					</div>
				</div>
				<div class="col-sm-8 col-md-9 text-holder">
					<p>Vietfire Glass là<strong> công ty hàng đầu về thiết kế, thử nghiệm và chứng thực các giải pháp bảo vệ kính chống cháy</strong>, phát triển và điều chỉnh các sản phẩm phù hợp với yêu cầu kỹ thuật và thẩm mỹ của từng dự án.<br><strong>Tất cả các sản phẩm của chúng tôi đều trải qua các cuộc kiểm tra nghiêm ngặt</strong>: độ bền, khả năng chống cháy, an toàn, v.v., đảm bảo hiệu suất kỹ thuật nghiêm ngặt nhất cho từng dự án. Vietfire Glass có bộ phận R&amp;D riêng dành riêng cho việc thiết kế và thử nghiệm các sản phẩm mới.</p>
				</div>
			</div>
		</div>
	</section>
	<div class="section section-testing">
    	<div class="container-testing">
			<div class="row">
				<div class="col-sm-12">
					<h2>Kiểm thử chống cháy</h2>
				</div>
				<div class="col-sm-12">
					<div id="flipster1" class="flipster">
						<ul class="flipster__container">
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid" >
										<figure class="effect-architecture">
											<img src="{{asset('images/pages/testing/VFG-1-CAROUSEL-MAIN-PIC.jpg')}}" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Steelfire STB80</h2>
												<p>Hệ cửa đẩy<br>EI90</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
										<figure class="effect-architecture">
											<img src="{{asset('images/pages/testing/VFG-2-CAROUSEL-MAIN-PIC.jpg')}}" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Alufire AS85</h2>
												<p>Hệ Cửa Bản Lề Đơn<br>EI60</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
										<figure class="effect-architecture">
											<img src="{{asset('images/pages/testing/VFG-3-CAROUSEL-MAIN-PIC.jpg')}}" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Alufire AS85</h2>
												<p>Hệ Cửa Bàn Lề Đôi<br>EI60</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
										<figure class="effect-architecture">
											<img src="{{asset('images/pages/testing/VFG-4-CAROUSEL-MAIN-PIC.jpg')}}" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Alufire AS85</h2>
												<p>Hệ Thống Phân Vùng Cố Định<br>EI60</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
										<figure class="effect-architecture">
											<img src="{{asset('images/pages/testing/VFG-5-CAROUSEL-MAIN-PIC.jpg')}}" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Steelfire STB80</h2>
												<p>Hệ Thống Phân Vùng Cố Định<br>EI120 - NFPA</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
										<figure class="effect-architecture">
											<img src="{{asset('images/pages/testing/VFG-6-CAROUSEL-MAIN-PIC.jpg')}}" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Steelfire S50/70</h2>
												<p>Hệ Thống Phân Vùng Cố Định<br>EW120</p>
											</figcaption>
											
										</figure>
                                    </div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
                                        <figure class="effect-architecture">
											<img src="{{asset('images/pages/testing/VFG-7-CAROUSEL-MAIN-PIC.jpg')}}" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Steelfire STB80</h2>
												<p>Hệ Cửa Bàn Lề Đôi<br>EI90</p>
											</figcaption>
                                        </figure>
                                    </div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		jQuery('.flipster').flipster({
			itemContainer: 'ul',
			itemSelector: 'li',
			loop: 0,
			start: 'center',
			style: 'infinite-carousel',
			spacing: 0,
			scrollwheel: false,
			touch: true,
			scrollwheel: false,
			buttons: true
		});
	</script>
	</main>
@endsection