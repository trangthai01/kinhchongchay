@extends('layouts.default',['title' => 'Hệ Cửa Đẩy - '.config('app.fullname'), 'header_class' => '' ])
@section('css')
    
@endsection
@section('javascript')
   
@endsection
@section('header-content')
    <div class="system-main">
        <div class="container-fluid no-ltr-padding">
            <div class="system-main__list parallex-800 col-sm-12 no-ltr-padding">
                <img src="{{ asset('images/pages/MAIN-PIC-PIVOT-LOW.jpg')}}" class="img-responsive" alt="">			<div class="system-main__mask valign-bottom" style="display: none;">
                    <div class="text-holder">
                        <h1>HỆ <strong>CỬA ĐẨY</strong></h1>
                        <p>Một hệ cửa chống cháy mới không bản lề và lò xo, đã được kiểm tra và chứng nhận bởi nhiều quy định quốc tế khác nhau.</p>
    					<p>Thiết kế của hệ thống này đáp ứng các yêu cầu kỹ thuật và hiệu suất nghiêm ngặt nhất liên quan đến bảo vệ kính, cung cấp kích thước được kiểm tra và chứng nhận cho cửa có kích thước lớn.</p>
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
                            <a href="{{url('')}}" rel="home" itemprop="item">
                                <span itemprop="name">Home</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item">
                            <a href="{{ url('ky-thuat') }}" itemprop="item"><span itemprop="name">Kỹ thuật</span></a>
                            <meta itemprop="position" content="2">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
                            <span itemprop="item"><span itemprop="name">Hệ Cửa Đẩy</span></span>
                            <meta itemprop="position" content="3">
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
							<h2>Hệ Cửa Đẩy</h2>
						</div>
					</div>
					<div class="col-sm-8 col-md-9 text-holder">
					<p>Một hệ cửa chống cháy mới không bản lề và lò xo, đã được kiểm tra và chứng nhận bởi nhiều quy định quốc tế khác nhau.</p>
    					<p>Thiết kế của hệ thống này đáp ứng các yêu cầu kỹ thuật và hiệu suất nghiêm ngặt nhất liên quan đến bảo vệ kính, cung cấp kích thước được kiểm tra và chứng nhận cho cửa có kích thước lớn.</p>
					</div>
				</div>
			</div>
		</section>
		<div class="section section-detail no-space" id="details-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 door-gallery door-gallery-height">
						<div class="sliding-door-holder border-all">
							<div class="slidingDoor-carousel all-gallery">
								<div class="carousel-cell">
									<img src="{{ asset('images/applications/SP-PD-1-Copy.jpg')}}" class="img-responsive" alt="">					
									<div class="text-holder" style="display: none;">Thép chống cháy &amp; Thép không gỉ<br>Hệ thống cửa xoay</div>				
								</div>
								<div class="carousel-cell">
									<img src="{{ asset('images/applications/pivot2.png')}}" class="img-responsive" alt="">					
									<div class="text-holder" style="display: none;">Thép chống trộm &amp; Thép không gỉ<br>Hệ thống cửa xoay</div>				
								</div>
								<div class="carousel-cell">
									<img src="{{ asset('images/applications/PIVOT-RENDER-3-LOW.jpg')}}" class="img-responsive" alt="">					
									<div class="text-holder" style="display: none;">Hệ thống cửa xoay<br> đa dạng kích thước</div>				
								</div>
								<div class="carousel-cell">
									<img src="{{ asset('images/applications/pivot4.jpg')}}" class="img-responsive" alt="">					
									<div class="text-holder" style="display: none;">Chi tiết <br>hệ cửa đẩy<br>
									</div>				
								</div>
								<div class="carousel-cell">
									<img src="{{ asset('images/applications/pivot5.jpg')}}" class="img-responsive" alt="">					
									<div class="text-holder" style="display: none;">Chi tiết <br>hệ cửa đẩy<br></div>				
								</div>
							</div>
							<div id="cell-cap"></div>
						</div>
					</div>
					<div class="col-sm-7 tabs-holder door-gallery-height">
						<div role="tabpanel">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#description" aria-controls="description" role="tab" data-toggle="tab">Mô tả</a>
								</li>
								<li role="presentation">
									<a href="#technical" aria-controls="technical" role="tab" data-toggle="tab">Thông tin kỹ thuật</a>
								</li>
								<li role="presentation">
									<a href="#brochures" aria-controls="brochures" role="tab" data-toggle="tab">Tài liệu</a>
								</li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="description">
									<div class="tabs-text">
										<p>HỆ CỬA ĐẨY là giải pháp tùy chỉnh có sẵn dưới dạng kính chống cháy hoặc chống trộm, dựa trên các cấu hình được làm bằng thép hoặc thép không gỉ có khả năng chống vỡ nhiệt và các tùy chọn khác nhau của cơ chế đóng mở tự động.</p>
										<p>Giải pháp HỆ CỬA ĐẨY đảm bảo hiệu suất cao trong mọi điều kiện khí hậu.</p>
										<div class="col-md-12 desc-list-holder">
											<ul class="desc-list">
												<li>Phạm vi giải pháp: Thép mạ kẽm (S235JRG2 EN10025) và thép không gỉ (304 & amp; 316).</li>
												<li>Cách nhiệt và cách âm cao.</li>
												<li>Ứng dụng nội bộ và ngoài trời</li>
												<li>Độ hoàn thiện thẩm mỹ cao</li>
												<li>Đã được kiểm nghiệm theo tiêu chuẩn Châu Âu (EN) và Mỹ (NFPA).</li>
												<li>Cấu trúc có độ ổn định cao, giúp tối đa hóa kích thước của khu vực tráng men</li>
												<li>Nhiều tùy chọn cho cơ chế đóng mở tự động</li>
											</ul>
										</div>
										<div class="col-sm-12 no-ltr-padding">
    										<ul class="desc-icon-list has-4">
												<li><div class="image-holder"><img src="{{ asset('images/pages/1-Fire-Rated-3-150x150.jpg')}}" alt=""></div><div class="text-holder">Chống cháy</div>            </li>
												<li><div class="image-holder"><img src="{{ asset('images/pages/4-EI60-90-EI-Integrity-Insulation-1-150x150.jpg')}}" alt=""></div><div class="text-holder">EI (Tính toàn vẹn và cách nhiệt)</div>            </li>
												<li><div class="image-holder"><img src="{{ asset('images/pages/2-Steel-Stainless-Steel-Framing-3-150x150.jpg')}}" alt=""></div><div class="text-holder">Thép &amp; Khung thép không gỉ</div>            </li>
												<li><div class="image-holder"><img src="{{ asset('images/pages/6-European-Standard-3-150x150.jpg')}}" alt=""></div><div class="text-holder">Tiêu chuẩn Châu Âu</div>            </li>
												<li><div class="image-holder"><img src="{{ asset('images/pages/1-Burglar-Proof-Rated-150x150.jpg')}}" alt=""></div><div class="text-holder">Khả năng chống trộm</div>            </li>
												<li><div class="image-holder"><img src="{{ asset('images/pages/4-RC2-RC3-Tecguard-RC-Classification-1-150x150.jpg')}}" alt=""></div><div class="text-holder">Phân loại Tecguard RC</div>            </li>
												<li><div class="image-holder"><img src="{{ asset('images/pages/3-Internal-External-Application-3-150x150.jpg')}}" alt=""></div><div class="text-holder">Ứng dụng nội bộ hoặc ngoài trời</div>            </li>
												<li><div class="image-holder"><img src="{{ asset('images/pages/7-American-Standard-1-150x150.jpg')}}" alt=""></div><div class="text-holder">Tiêu chuẩn Hoa Kỳ</div>            </li>
												<li><div class="image-holder"><img src="{{ asset('images/pages/5-Automatic-Systems-1-150x150.jpg')}}" alt=""></div><div class="text-holder">Hệ thống tự động</div>            </li>
												<li><div class="image-holder"><img src="{{ asset('images/pages/10-Emergency-Exit-3-150x150.jpg')}}" alt=""></div><div class="text-holder">Cửa thoát hiểm</div>            </li>
												<li><div class="image-holder"><img src="{{ asset('images/pages/9-Acoustic-Reduction-3-150x150.jpg')}}" alt=""></div><div class="text-holder">Cách âm</div>            </li>
												<li><div class="image-holder"><img src="{{ asset('images/pages/8-Hose-Stream-Testing-2-150x150.jpg')}}" alt=""></div><div class="text-holder">Hose Stream Testing</div>            </li>
            								</ul>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="technical">
									<div class="tabs-text">
										<div class="col-sm-12 no-ltr-padding">
											<ul class="pdf-icon-list">
											</ul>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="brochures">
									<div class="tabs-text">
										<div class="col-sm-12 no-ltr-padding">
											<ul class="pdf-icon-list">
												<li>
													<a href="#" target="_blank" title="">
														<div class="link-holder">CATALOGUE</div>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			var sf = $('.slidingDoor-carousel').flickity({
				contain: true,
				autoPlay: false,
				pageDots: false,
				imagesLoaded: true,
				prevNextButtons: true,
			}).flickity('select', 0);

			var cellcap = $('#cell-cap');
			var flkty = sf.data('flickity');

			sf.on( 'select.flickity', function() {
				var elm = $(flkty.selectedElement);
				var caption = elm.children('.text-holder').html();
				cellcap.hide().html(caption).fadeIn(300);
			});

			sf.flickity('resize');
		</script>
		@include('layouts.pages.engineering.applications.applications-gallery')
	</main>
@endsection