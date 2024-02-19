@extends('layouts.default',['title' => 'Hệ Cửa Đẩy - '.config('app.fullname'), 'header_class' => 'header-white' ])
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
                            <a href="{{ url('engineering') }}" itemprop="item"><span itemprop="name">Kỹ thuật</span></a>
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
									<img src="{{ asset('images/pages/SP-PD-1-Copy.jpg')}}" class="img-responsive" alt="">					
									<div class="text-holder" style="display: none;">Thép chống cháy &amp; Thép không gỉ<br>Hệ thống cửa xoay</div>				
								</div>
								<div class="carousel-cell">
									<img src="{{ asset('images/pages/pivot2.png')}}" class="img-responsive" alt="">					
									<div class="text-holder" style="display: none;">Thép chống trộm &amp; Thép không gỉ<br>Hệ thống cửa xoay</div>				
								</div>
								<div class="carousel-cell">
									<img src="{{ asset('images/pages/PIVOT-RENDER-3-LOW.jpg')}}" class="img-responsive" alt="">					
									<div class="text-holder" style="display: none;">Hệ thống cửa xoay<br> đa dạng kích thước</div>				
								</div>
								<div class="carousel-cell">
									<img src="{{ asset('images/pages/pivot4.jpg')}}" class="img-responsive" alt="">					
									<div class="text-holder" style="display: none;">Chi tiết <br>hệ cửa đẩy<br>
									</div>				
								</div>
								<div class="carousel-cell">
									<img src="{{ asset('images/pages/pivot5.jpg')}}" class="img-responsive" alt="">					
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
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GPD-pop-up-01-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Louvre Museum<br>Abu Dhabi  (United arab Emirates)</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-1 hide-system" data-toggle="modal" data-type="p" data-index="1" data-show="1" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GPD-pop-up-02-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Doha Oasis<br>Doha (Qatar)</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-2 hide-system" data-toggle="modal" data-type="p" data-index="2" data-show="2" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GPD-pop-up-03-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Louvre Museum<br>Abu Dhabi  (United arab Emirates)</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-3 hide-system" data-toggle="modal" data-type="p" data-index="3" data-show="3" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GPD-pop-up-04-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Burglar Proof System: Laboratory Installation<br>Bellaria (Italy)</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-4 hide-system" data-toggle="modal" data-type="t" data-index="0" data-show="4" href="#modal-engineering-testing">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-01-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Steelfire STB80 EI - Pivot Door System<br>Fire Rated Testing</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-5 hide-system" data-toggle="modal" data-type="t" data-index="1" data-show="5" href="#modal-engineering-testing">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-02-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Steelfire STB80 EI - Pivot Door System<br>Fire Rated Testing</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-6 hide-system" data-toggle="modal" data-type="t" data-index="2" data-show="6" href="#modal-engineering-testing">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-03-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Tecguard RC2 - Dinamic Force - Pivot Door System (STB80)<br>Burglar Proof Testing</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-7 hide-system" data-toggle="modal" data-type="t" data-index="3" data-show="7" href="#modal-engineering-testing">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-04-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Tecguard RC2 - Manual Attack - Pivot Door System (STB80)<br>Burglar Proof Testing</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-8 hide-system" data-toggle="modal" data-type="t" data-index="4" data-show="8" href="#modal-engineering-testing">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-05-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Tecguard RC2 - Manual Attack - Pivot Door System (STB80)<br>Burglar Proof Testing</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-9 hide-system" data-toggle="modal" data-type="t" data-index="5" data-show="9" href="#modal-engineering-testing">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-06-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Tecguard RC2 - Static Force - Pivot Door System (STB80)<br>Burglar Proof Testing</figcaption>								</a>
													</figure>
					</div>
					<div class="col-sm-5">
													<div class="border-title">
								<h3>Dự án</h3>
							</div>
							<ul class="system-project-list list-projects">
																	<li>
										<a href="#" onclick="return false;" data-number="0">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GPD-pop-up-01-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Louvre Museum <br>Abu Dhabi  (United arab Emirates)</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="1">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GPD-pop-up-02-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Doha Oasis <br>Doha (Qatar)</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="2">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GPD-pop-up-03-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Louvre Museum <br>Abu Dhabi  (United arab Emirates)</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="3">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GPD-pop-up-04-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Burglar Proof System: Laboratory Installation <br>Bellaria (Italy)</span>									</li>
															</ul>
													<div class="border-title">
								<h3>Kiểm thử</h3>
							</div>
							<ul class="system-project-list list-testing">
																	<li>
										<a href="#" onclick="return false;" data-number="4">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-01-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Steelfire STB80 EI - Hệ thống cửa xoay <br>Thử nghiệm khả năng chống cháy</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="5">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-02-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Steelfire STB80 EI - Hệ thống cửa xoay <br>Thử nghiệm khả năng chống cháy</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="6">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-03-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Tecguard RC2 - Dinamic Force - Hệ thống cửa xoay (STB80) <br>Kiểm tra chống trộm</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="7">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-04-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Tecguard RC2 - Dinamic Force - Hệ thống cửa xoay (STB80) <br>Kiểm tra chống trộm</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="8">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-05-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Tecguard RC2 - Dinamic Force - Hệ thống cửa xoay (STB80) <br>Kiểm tra chống trộm</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="9">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-06-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Tecguard RC2 - Dinamic Force - Hệ thống cửa xoay (STB80) <br>Kiểm tra chống trộm</span>									</li>
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
									<strong>Louvre Museum</strong>Abu Dhabi  (United arab Emirates)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GPD-pop-up-01-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Doha Oasis</strong>Doha (Qatar)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GPD-pop-up-02-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Louvre Museum</strong>Abu Dhabi  (United arab Emirates)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GPD-pop-up-03-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Burglar Proof System: Laboratory Installation</strong>Bellaria (Italy)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GPD-pop-up-04-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
											</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-custom-white" id="modal-engineering-testing">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="modal-image-gallery all-gallery col-sm-12">
					<div class="systemModal-carousel t-carousel" style="min-height: 635px;">
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Steelfire STB80 EI - Pivot Door System</strong>Fire Rated Testing								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-01-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Steelfire STB80 EI - Pivot Door System</strong>Fire Rated Testing								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-02-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Tecguard RC2 - Dinamic Force - Pivot Door System (STB80)</strong>Burglar Proof Testing								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-03-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Tecguard RC2 - Manual Attack - Pivot Door System (STB80)</strong>Burglar Proof Testing								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-04-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Tecguard RC2 - Manual Attack - Pivot Door System (STB80)</strong>Burglar Proof Testing								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-05-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Tecguard RC2 - Static Force - Pivot Door System (STB80)</strong>Burglar Proof Testing								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-TG-PD-popup-06-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
											</div>
				</div>
			</div>
		</div>
	</div>
</div>
			</main>
@endsection