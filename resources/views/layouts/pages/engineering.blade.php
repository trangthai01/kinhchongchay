@extends('layouts.default',['title' => 'Kỹ thuật '.config('app.fullname'), 'header_class' => '' ])
@section('css')
    <link href="{{ asset('css/theme/plyr.css') }}" rel="stylesheet">   
@endsection
@section('javascript')
    <script src="{{ asset('js/theme/plyr.js') }}" ></script>
	<script src="{{ asset('js/theme/retina.min.js') }}" ></script>
@endsection

@section('header-content')
    <section class="banner-block video-block">
        <div tabindex="0" aria-label="Vietfire Glass - Video Công ty">
            <div id="enginerring_player" class="company-video plyr__video-wrapper plyr__video-embed plyr--setup">
                <iframe id="youtube-5042" frameborder="0" allowfullscreen="" allow="autoplay" title="Vietfire Glass - Video Công ty" width="640" height="360" src="https://www.youtube.com/embed/MdELDO9wsPg?autoplay=1&controls=0&rel=0&showinfo=0&iv_load_policy=3&cc_load_policy=0&cc_lang_pref=en&wmode=transparent&modestbranding=1&disablekb=1&origin=https%3A%2F%2Ftecfires.com&enablejsapi=1&widgetid=1" data-gtm-yt-inspected-14="true" tabindex="-1"></iframe>
            </div>
        </div>
    </section>
    <script>
        //const player = new Plyr('#enginerring_player');
        //player.play();
		fn_setCurrentMenu('engineering');
    </script>
@endsection

@section('content')
	<main id="main" class="bottom-gap top-gap">
		<div class="section breadcrumb-holder">
			<div class="container">
				<div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
					<ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
						<meta name="numberOfItems" content="2"><meta name="itemListOrder" content="Ascending">
						<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
							<a href="{{url('')}}" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
							<meta itemprop="position" content="1">
						</li>
						<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
							<span itemprop="item"><span itemprop="name">Kỹ thuật</span></span><meta itemprop="position" content="2">
						</li>
					</ul>
				</div>	
			</div>
		</div>
		<section class="section section-cta section-cta__engineering">
			<div class="container">
				<div class="row company-top padding-bottom">
					<div class="col-sm-4 col-md-3">
						<div class="info-title color-primary">
							<h2><p>Chuyên gia trong lĩnh vực Kính chống cháy</p></h2>				
						</div>
					</div>
					<div class="col-sm-8 col-md-9 text-holder">
						<p>Kính chống cháy Việt <strong>có chuyên môn cao cung cấp nhiều giải pháp cho các yêu cầu đặc biệt và tùy chỉnh</strong>. 
						Chúng tôi đã thiết lập một chuẩn mực trên thị trường kính chống cháy trong việc cung cấp các giải pháp cho các dự án kiến trúc có yêu cầu khắt khe và sáng tạo nhất. 
						Gần đây, Kính chống cháy Việt đã kết hợp với các kiến trúc sư để thực hiện các dự án lớn như Dự án đường sắt trên cao Hà Đông, Dự án Kho Bạc nhà nước tại Đà nẵng, trụ sở Viện Kiểm Sát tối cao...</p>
					</div>
				</div>
			</div>
		</section>
		<div class="section section-features">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 feature-list-holder">
						<div class="feature-list feature-list__engineering">
							<a href="{{ url('ky-thuat/kiem-thu') }}">
								<div class="image-holder">
									<img src="{{ asset('images/pages/PPAL-TEST-720x720.png') }}" class="img-responsive" alt="Kiểm thử">
								</div>
							</a>
							<div class="text-holder">
								<a href="{{ url('ky-thuat/kiem-thu') }}" title="Kiểm thử">
									<h3>Kiểm thử</h3>								
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 feature-list-holder">
						<div class="feature-list feature-list__engineering">
							<a href="{{ url('ky-thuat/chung-chi') }}">
								<div class="image-holder">
									<img src="{{ asset('images/pages/4-CERTIFICATIONS-APPROVALS-2-720x720.jpg') }}" class="img-responsive" alt="Chứng chỉ">								
								</div>
							</a>
							<div class="text-holder">
								<a href="{{ url('ky-thuat/chung-chi') }}" title="Chứng chỉ">
									<h3>Chứng chỉ</h3>								
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 feature-list-holder">
						<div class="feature-list feature-list__engineering has-links">
							<a href="">
								<div class="image-holder">
									<img src="{{ asset('images/pages/3-1-720x720.jpg') }}" class="img-responsive" alt="Ứng dụng sản phẩm">								
								</div>
							</a>
							<div class="mask-image">
								<ul>
									<li><a href="{{ url('ky-thuat/ung-dung/he-cua-truot/') }} "><i class="fa fa-angle-right" aria-hidden="true"></i> HỆ <strong>CỬA TRƯỢT</strong></a></li>
									<li><a href="{{ url('ky-thuat/ung-dung/he-cua-day/') }} "><i class="fa fa-angle-right" aria-hidden="true"></i> HỆ <strong>CỬA ĐẨY</strong></a></li>
									<li><a href="{{ url('ky-thuat/ung-dung/he-vach-kinh/') }} "><i class="fa fa-angle-right" aria-hidden="true"></i> HỆ <strong>VÁCH KÍNH</strong></a></li>								
								</ul>
							</div>
							<div class="text-holder">
								<a href="" title="Ứng dụng sản phẩm">
									<h3>Ứng dụng sản phẩm</h3>								
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 feature-list-holder">
						<div class="feature-list feature-list__engineering">
							<a href="{{ url('ky-thuat/videos') }}">
								<div class="image-holder">
									<img src="{{ asset('images/pages/4-1-720x720.jpg') }}" class="img-responsive" alt="Videos Kỹ thuật">								
								</div>
							</a>
							<div class="text-holder">
								<a href="{{ url('ky-thuat/videos') }}" title="Videos">
									<h3>Videos</h3>								
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
    <script src="{{ asset('js/scripts.js') }}" ></script>
@endsection
