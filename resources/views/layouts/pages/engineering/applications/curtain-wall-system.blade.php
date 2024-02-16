@extends('layouts.default',['title' => 'Curtain Wall System - '.config('app.name'), 'header_class' => 'header-white' ])
@section('css')
    
@endsection
@section('javascript')
   
@endsection
@section('header-content')
    <div class="system-main">
        <div class="container-fluid no-ltr-padding">
            <div class="system-main__list parallex-800 col-sm-12 no-ltr-padding">
                <img src="{{ asset('images/pages/Curtain-main.jpg') }}" class="img-responsive" alt="">			
                <div class="system-main__mask valign-bottom" style="display: none;">
                    <div class="text-holder">
                        <h1><strong>CURTAIN WALL</strong>  SYSTEM</h1>
                        <p>This system boasts the largest tested and certified surface area in the market (up to 5.2m high by 3m wide), available in both steel and aluminium carpentry.</p>
                        <p>Systems with unrivalled performance in terms of thermal insulation and resistance to wind suction, etc.<br>
                        This versatility makes it possible to integrate any door or fixed partition system into the building façade, thus guaranteeing an incomparable aesthetic finish, visual uniformity and the maximum glass surface area.</p>
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
                            <a href="{{ url('engineering') }}" itemprop="item"><span itemprop="name">Engineering</span></a>
                            <meta itemprop="position" content="2">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
                            <span itemprop="item"><span itemprop="name">Curtain Wall System</span></span>
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
					<h2>Curtain Wall System</h2>
				</div>
			</div>
			<div class="col-sm-8 col-md-9 text-holder">
				<p>This system boasts the largest tested and certified surface area in the market (up to 5.2m high by 3m wide), available in both steel and aluminium carpentry.</p>
<p>Systems with unrivalled performance in terms of thermal insulation and resistance to wind suction, etc.<br>
This versatility makes it possible to integrate any door or fixed partition system into the building façade, thus guaranteeing an incomparable aesthetic finish, visual uniformity and the maximum glass surface area.</p>
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
					<img src="{{asset('images/pages/curtain1.jpg')}}" class="img-responsive" alt="">					<div class="text-holder" style="display: none;">Fire Rated Steel &amp; Stainless Steel<br>
Curtain Wall System</div>				</div>
								<div class="carousel-cell">
					<img src="{{asset('images/pages/curtain2.jpg')}}" class="img-responsive" alt="">					<div class="text-holder" style="display: none;">Fire Rated Aluminium<br>
Curtain Wall System<br>
</div>				</div>
								<div class="carousel-cell">
					<img src="{{asset('images/pages/curtain3.jpg')}}" class="img-responsive" alt="">					<div class="text-holder" style="display: none;">Bullet Proof Steel &amp; Stainless Steel<br>
Curtain Wall System</div>				</div>
								<div class="carousel-cell">
					<img src="{{asset('images/pages/curtain4.jpg')}}" class="img-responsive" alt="">					<div class="text-holder" style="display: none;">Burglar Proof Steel &amp; Stainless Steel<br>
Curtain Wall System</div>				</div>
							</div>
			<div id="cell-cap"></div>
		</div>
	</div>

	
			<div class="col-sm-7 tabs-holder door-gallery-height">
				<div role="tabpanel">
					<ul class="nav nav-tabs" role="tablist">
												    <li role="presentation" class="active">
						        <a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a>
						    </li>
												    <li role="presentation">
						        <a href="#technical" aria-controls="technical" role="tab" data-toggle="tab">Technical data</a>
						    </li>
												    <li role="presentation">
						        <a href="#brochures" aria-controls="brochures" role="tab" data-toggle="tab">Brochures</a>
						    </li>
											</ul>

					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="description">
	<div class="tabs-text">

		<p>CURTAIN WALL SYSTEM is a Special-CMS (Custom-Made-Solution) available as fire rated, bullet or burglar proof glass solution, based on profiles made of steel or stainless steel with thermal breakage &amp; aluminium (Anodized, powder coating and stainless steel finish).</p>
<p>The CURTAIN WALL SYSTEM solution guarantees a high level of performance in any climatic condition.</p>
<div class="col-md-12 desc-list-holder"><ul class="desc-list">
<li>Range of solutions: Galvanized steel (S235JRG2 EN10025), stainless steel (304 &amp; 316) &amp; aluminium profiles.</li>
<li>High thermal and acoustic insulation.</li>
<li>Internal &amp; external applications.</li>
<li>Tested in accordance with European (EN) and American (NFPA) standards.</li>
<li>Great structural stability, which makes it possible to maximize the dimensions of the glazed area.</li>
<li>Great aesthetic finish.</li>
</ul>
</div>
		<div class="col-sm-12 no-ltr-padding">
    <ul class="desc-icon-list">
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/1-Fire-Rated-3-150x150.jpg" alt=""></div><div class="text-holder">Fire Rated</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/4-EI30-120-EI-Integrity-Insulation-1-150x150.jpg" alt=""></div><div class="text-holder">EI (Integrity &amp; Insulation)</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/4-EW30-120-EW-Integrity-Radiation-Control-1-150x150.jpg" alt=""></div><div class="text-holder">EW (Integrity &amp; Radiation Control)</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/2-Steel-Stainless-Steel-Framing-3-150x150.jpg" alt=""></div><div class="text-holder">Steel &amp; Stainless Steel Framing</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/2-Aluminium-Framing-150x150.jpg" alt=""></div><div class="text-holder">Aluminium Framing</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/1-Bullet-Proof-Rated-1-150x150.jpg" alt=""></div><div class="text-holder">Bullet Proof Rated</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/4-FB4-Tecguard-FB-Classification-1-150x150.jpg" alt=""></div><div class="text-holder">Tecguard FB Classification</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/6-European-Standard-3-150x150.jpg" alt=""></div><div class="text-holder">European Standard</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/7-American-Standard-1-150x150.jpg" alt=""></div><div class="text-holder">American Standard</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/8-Hose-Stream-Testing-2-150x150.jpg" alt=""></div><div class="text-holder">Hose Stream Testing</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/1-Burglar-Proof-Rated-150x150.jpg" alt=""></div><div class="text-holder">Burglar Proof Rated</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/4-RC2-RC3-Tecguard-RC-Classification-1-150x150.jpg" alt=""></div><div class="text-holder">Tecguard RC Classification</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/9-Acoustic-Reduction-3-150x150.jpg" alt=""></div><div class="text-holder">Acoustic Reduction</div>            </li>
                    <li>
                <div class="image-holder"><img src="https://tecfires.com/wp-content/uploads/2017/05/3-Internal-External-Application-3-150x150.jpg" alt=""></div><div class="text-holder">Internal &amp; External Application</div>            </li>
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

                        <div class="link-holder">TECFIRE CATALOGUE</div>
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
					<h3>Image gallery</h3>
				</div>
				<div class="system-gallery">
					<div class="col-sm-7">
						<figure class="image-holder border-all">
															<a class="system-gallery-s system-gallery-show-0 hide-system active" data-toggle="modal" data-type="p" data-index="0" data-show="0" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-01-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Petroleum Institute &amp; research Center<br>Abu Dhabi  (United arab Emirates)</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-1 hide-system" data-toggle="modal" data-type="p" data-index="1" data-show="1" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-02-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Petroleum Institute &amp; research Center<br>Abu Dhabi  (United arab Emirates)</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-2 hide-system" data-toggle="modal" data-type="p" data-index="2" data-show="2" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-03-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Petroleum Institute &amp; research Center<br>Abu Dhabi  (United arab Emirates)</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-3 hide-system" data-toggle="modal" data-type="p" data-index="3" data-show="3" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-04-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Petroleum Institute &amp; research Center<br>Abu Dhabi  (United arab Emirates)</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-4 hide-system" data-toggle="modal" data-type="p" data-index="4" data-show="4" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-05-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Petroleum Institute &amp; research Center<br>Abu Dhabi  (United arab Emirates)</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-5 hide-system" data-toggle="modal" data-type="p" data-index="5" data-show="5" href="#modal-engineering-projects">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-06-1210x1170.jpg" class="img-responsive" alt=""><figcaption>King Abdullah University of Science &amp; Technology<br>Thuwal  (Saudi arabia)</figcaption>								</a>
															<a class="system-gallery-s system-gallery-show-6 hide-system" data-toggle="modal" data-type="t" data-index="0" data-show="6" href="#modal-engineering-testing">
									<img src="https://tecfires.com/wp-content/uploads/2017/05/TG-CW-1210x1170.jpg" class="img-responsive" alt=""><figcaption>Steelfire STB80 EI - Curtain wall System<br>Fire Rated Testing</figcaption>								</a>
													</figure>
					</div>
					<div class="col-sm-5">
													<div class="border-title">
								<h3>Projects</h3>
							</div>
							<ul class="system-project-list list-projects">
																	<li>
										<a href="#" onclick="return false;" data-number="0">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-01-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Petroleum Institute &amp; research Center <br>Abu Dhabi  (United arab Emirates)</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="1">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-02-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Petroleum Institute &amp; research Center <br>Abu Dhabi  (United arab Emirates)</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="2">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-03-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Petroleum Institute &amp; research Center <br>Abu Dhabi  (United arab Emirates)</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="3">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-04-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Petroleum Institute &amp; research Center <br>Abu Dhabi  (United arab Emirates)</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="4">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-05-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Petroleum Institute &amp; research Center <br>Abu Dhabi  (United arab Emirates)</span>									</li>
																	<li>
										<a href="#" onclick="return false;" data-number="5">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-06-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">King Abdullah University of Science &amp; Technology <br>Thuwal  (Saudi arabia)</span>									</li>
															</ul>
													<div class="border-title">
								<h3>Testing</h3>
							</div>
							<ul class="system-project-list list-testing">
																	<li>
										<a href="#" onclick="return false;" data-number="6">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TG-CW-320x320.jpg" class="img-responsive">										</a>
										<span style="display: none;">Steelfire STB80 EI - Curtain wall System <br>Fire Rated Testing</span>									</li>
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
									<strong>Petroleum Institute &amp; research Center</strong>Abu Dhabi  (United arab Emirates)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-01-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Petroleum Institute &amp; research Center</strong>Abu Dhabi  (United arab Emirates)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-02-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Petroleum Institute &amp; research Center</strong>Abu Dhabi  (United arab Emirates)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-03-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Petroleum Institute &amp; research Center</strong>Abu Dhabi  (United arab Emirates)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-04-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>Petroleum Institute &amp; research Center</strong>Abu Dhabi  (United arab Emirates)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-05-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
													<div class="item-list carousel-cell">
								<div class="text-holder col-sm-12">
									<strong>King Abdullah University of Science &amp; Technology</strong>Thuwal  (Saudi arabia)								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/AP-GCW-popup-06-1140x635.jpg" class="img-responsive" alt="">									</div>
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
									<strong>Steelfire STB80 EI - Curtain wall System</strong>Fire Rated Testing								</div>
																	<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TG-CW-1140x635.jpg" class="img-responsive" alt="">									</div>
															</div>
											</div>
				</div>
			</div>
		</div>
	</div>
</div>
			</main>
@endsection