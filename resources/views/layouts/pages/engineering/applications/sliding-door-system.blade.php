@extends('layouts.default',['title' => 'Hệ Cửa Trượt - '.config('app.fullname'), 'header_class' => 'header-white' ])
@section('css')
    
@endsection
@section('javascript')
   
@endsection
@section('header-content')
    <div class="system-main">
        <div class="container-fluid no-ltr-padding">
            <div class="system-main__list parallex-800 col-sm-12 no-ltr-padding">
                <img src="{{ asset('images/pages/sliding_main_low.jpg ')}}" class="img-responsive" alt="">			
				<div class="system-main__mask valign-bottom" style="display: none;">
                    <div class="text-holder">
                        <h1>HỆ <strong>CỬA TRƯỢT</strong></h1>
                        <p>Hệ thống cửa trượt tự động độc quyền sử dụng khung thép mỏng nhất thị trường, đảm bảo diện tích bề mặt kính lớn nhất có thể. Với vẻ ngoài thẩm mỹ độc nhất vô nhị, hệ thống này đã được kiểm tra và chứng nhận theo các quy định quốc tế khác nhau.</p>
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
                            <span itemprop="item"><span itemprop="name">Hệ Cửa Trượt</span></span>
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
							<h2>Hệ Cửa Trượt</h2>
						</div>
					</div>
					<div class="col-sm-8 col-md-9 text-holder">
						<p>Hệ thống cửa trượt tự động độc quyền sử dụng khung thép mỏng nhất thị trường, đảm bảo diện tích bề mặt kính lớn nhất có thể. Với vẻ ngoài thẩm mỹ độc nhất vô nhị, hệ thống này đã được kiểm tra và chứng nhận theo nhiều quy định quốc tế.</p>
					</div>
				</div>
			</div>
		</section>
		<div class="section section-detail no-space" id="details-top">
			<div class="container">
				<div class="row"><div class="col-sm-5 door-gallery door-gallery-height">
					<div class="sliding-door-holder border-all" style="padding: 20px;">
						<div class="feat-image">
							<img class="img-responsive img-center" src="{{ asset('images/pages/RENDER-sliding.jpg ') }}" alt="Hệ Cửa Trượt">					
							<div class="text-holder">Hệ Cửa Trượt <br>Thép chống cháy &amp; Thép không gỉ</div>				
						</div>
					</div>
				</div>
				<div class="empty"></div>
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
									<p>Hệ Cửa Trượt là hệ thống điều chỉnh dựa trên các biên dạng được làm bằng thép hoặc thép không gỉ có khả năng chống vỡ do nhiệt và các tùy chọn cơ chế đóng mở tự động khác nhau. Hệ thống này là giải pháp kiểm soát hoàn toàn nhiệt độ của mặt không tiếp xúc (Phân loại EI – Tính toàn vẹn & Cách nhiệt), cho phép bảo vệ chống cháy tối đa trong vòng 30-60 phút.</p>
									<p>Hệ Cửa Trượt kính chống cháy EI là phân loại kính chống cháy cao nhất.</p>
									<div class="col-md-12 desc-list-holder">
										<ul class="desc-list">
											<li>Phạm vi giải pháp: Thép mạ kẽm (S235JRG2 EN10025) và thép không gỉ (304 & amp; 316).</li>
											<li>Khả năng cách nhiệt và cách âm cao.</li>
											<li>Ứng dụng trong tòa nhà hoặc ngoài trời</li>
											<li>Độ hoàn thiện thẩm mỹ tuyệt vời</li>
											<li>Đã được kiểm nghiệm theo tiêu chuẩn Châu Âu (EN) và Mỹ (NFPA).</li>
											<li>Cấu trúc có độ ổn định cao, giúp tối đa hóa kích thước của khu vực tráng men</li>
											<li>Nhiều tùy chọn cho cơ chế đóng mở tự động</li>
										</ul>
									</div>
									<div class="col-sm-12 no-ltr-padding">
										<ul class="desc-icon-list">
											<li><div class="image-holder"><img src="{{ asset('images/pages/1-Fire-Rated-3-150x150.jpg') }}" alt=""></div><div class="text-holder">Chống cháy</div>            </li>
											<li><div class="image-holder"><img src="{{ asset('images/pages/4-EI30-60-EI-Integrity-Insulation-2-150x150.jpg') }}" alt=""></div><div class="text-holder">EI (Tính toàn vẹn và cách nhiệt)</div>            </li>
											<li><div class="image-holder"><img src="{{ asset('images/pages/2-Steel-Stainless-Steel-Framing-3-150x150.jpg') }}" alt=""></div><div class="text-holder">Thép &amp; Khung thép không gỉ</div>            </li>
											<li><div class="image-holder"><img src="{{ asset('images/pages/3-Internal-External-Application-3-150x150.jpg') }}" alt=""></div><div class="text-holder">Ứng dụng nội bộ hoặc ngoài trời</div>            </li>
											<li><div class="image-holder"><img src="{{ asset('images/pages/9-Acoustic-Reduction-3-150x150.jpg') }}" alt=""></div><div class="text-holder">Cách âm</div>            </li>
											<li><div class="image-holder"><img src="{{ asset('images/pages/6-European-Standard-3-150x150.jpg') }}" alt=""></div><div class="text-holder">Tiêu chuẩn châu Âu</div>            </li>
											<li><div class="image-holder"><img src="{{ asset('images/pages/7-American-Standard-1-150x150.jpg') }}" alt=""></div><div class="text-holder">Tiêu chuẩn Hoa Kỳ</div>            </li>
											<li><div class="image-holder"><img src="{{ asset('images/pages/8-Hose-Stream-Testing-2-150x150.jpg') }}" alt=""></div><div class="text-holder">Hose Stream Testing</div>            </li>
											<li><div class="image-holder"><img src="{{ asset('images/pages/5-Automatic-Systems-1-150x150.jpg') }}" alt=""></div><div class="text-holder">Hệ thống tự động</div>            </li>
											<li><div class="image-holder"><img src="{{ asset('images/pages/10-Emergency-Exit-3-150x150.jpg') }}" alt=""></div><div class="text-holder">Cửa thoát hiểm</div>            </li>
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
	<div class="section section-gallery section-gallery-secondary">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bg-title">
						<h3>Thư viện ảnh</h3>
					</div>
					<div class="system-gallery">
						<div class="col-sm-7">
							<figure class="image-holder border-all">
								<a class="system-gallery-s system-gallery-show-0 hide-system active" data-toggle="modal" data-type="p" data-index="0" data-show="0" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/G-SD-STB80-pop-up-01-1-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Haramain High-Speed Railway Station<br>King Abdullah Economic City  (Saudi Arabia)</figcaption>								
								</a>
								<a class="system-gallery-s system-gallery-show-1 hide-system" data-toggle="modal" data-type="p" data-index="1" data-show="1" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/G-SD-STB80-pop-up-02-1-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Haramain High-Speed Railway Station<br>King Abdullah Economic City  (Saudi Arabia)</figcaption>								
								</a>
								<a class="system-gallery-s system-gallery-show-2 hide-system" data-toggle="modal" data-type="p" data-index="2" data-show="2" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/G-SD-STB80-pop-up-03-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Office Complex<br>Switzerland</figcaption>								
								</a>
								<a class="system-gallery-s system-gallery-show-3 hide-system" data-toggle="modal" data-type="p" data-index="3" data-show="3" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/G-SD-STB80-pop-up-05-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Office Complex<br>Madrid (Spain)</figcaption>								
								</a>
							</figure>
						</div>
						<div class="col-sm-5">
							<div class="border-title">
								<h3>Dự án</h3>
							</div>
							<ul class="system-project-list list-projects">
								<li>
									<a href="#" onclick="return false;" data-number="0">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/G-SD-STB80-pop-up-01-1-320x320.jpg" class="img-responsive">										</a>
									<span style="display: none;">Haramain High-Speed Railway Station <br>King Abdullah Economic City  (Saudi Arabia)</span>									</li>
																<li>
									<a href="#" onclick="return false;" data-number="1">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/G-SD-STB80-pop-up-02-1-320x320.jpg" class="img-responsive">										</a>
									<span style="display: none;">Haramain High-Speed Railway Station <br>King Abdullah Economic City  (Saudi Arabia)</span>									</li>
																<li>
									<a href="#" onclick="return false;" data-number="2">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/G-SD-STB80-pop-up-03-320x320.jpg" class="img-responsive">										</a>
									<span style="display: none;">Office Complex <br>Switzerland</span>									</li>
																<li>
									<a href="#" onclick="return false;" data-number="3">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/G-SD-STB80-pop-up-05-320x320.jpg" class="img-responsive">										</a>
									<span style="display: none;">Office Complex <br>Madrid (Spain)</span>									</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="modal fade modal-custom-white" id="modal-engineering-projects">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="modal-image-gallery all-gallery col-sm-12">
					<div class="systemModal-carousel p-carousel" style="min-height: 635px;">
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Haramain High-Speed Railway Station</strong>King Abdullah Economic City  (Saudi Arabia)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/G-SD-STB80-pop-up-01-1-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Haramain High-Speed Railway Station</strong>King Abdullah Economic City  (Saudi Arabia)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/G-SD-STB80-pop-up-02-1-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Office Complex</strong>Switzerland								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/G-SD-STB80-pop-up-03-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Office Complex</strong>Madrid (Spain)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/G-SD-STB80-pop-up-05-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
											</div>
				</div>
			</div>
		</div>
	</div>
</div>
			</main>

@endsection