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
                        <h1></h1>
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
						<h2>Testing</h2>				
					</div>
				</div>
				<div class="col-sm-8 col-md-9 text-holder">
					<p>Tecfire is a<strong> leading company in the design, testing and certification of fire-resistant, bullet-resistant and burglar-resistant glass protection solutions</strong>, developing and adapting our products to the technical and aesthetic requirements of each project. <strong>All our systems undergo rigorous tests</strong>: durability, fire, safety, ballistics, etc., which enable us to guarantee the most stringent technical performances on each project. Tecfire has its own R&amp;D&amp;i department dedicated exclusively to the design and certification of new products.</p>
				</div>
			</div>
		</div>
	</section>
	<div class="section section-testing">
    	<div class="container-testing">
			<div class="row">
				<div class="col-sm-12">
					<h2>Fire Rated Testing</h2>
				</div>
				<div class="col-sm-12">
					<div id="flipster1" class="flipster">
						<ul class="flipster__container">
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid" >
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-1-CAROUSEL-MAIN-PIC_904_600-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Steelfire STB80</h2>
												<p>Pivot Door System<br>EI90</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid" >
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-1-CAROUSEL-MAIN-PIC_904_600-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Steelfire STB80</h2>
												<p>Pivot Door System<br>EI90</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-3-CAROUSEL-MAIN-PIC_945_600-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Alufire AS85</h2>
												<p>Single Leaf Hinge Door System<br>EI60</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-4-CAROUSEL-MAIN-PIC_945_600-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Alufire AS85</h2>
												<p>Double Leaf Door System<br>EI60</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-5-CAROUSEL-MAIN-PIC_945_600-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Alufire AS85</h2>
												<p>Fixed Partition System<br>EI60</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-9-CAROUSEL-MAIN-PIC_900_600-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Steelfire STB80</h2>
												<p>Fixed Partition System<br>EI120 - NFPA</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-10-CAROUSEL-MAIN-PIC_945_600-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Steelfire S50/70</h2>
												<p>Fixed Partition System<br>EW120</p>
											</figcaption>
											
										</figure>
                                    </div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
                                        <figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-11-CAROUSEL-MAIN-PIC_945_600-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Steelfire STB80</h2>
												<p>Double Leaf Hinge Door System<br>EI90</p>
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

	<div class="section section-testing">
    	<div class="container-testing">
			<div class="row">
				<div class="col-sm-12">
					<h2>Bullet Proof Testing</h2>
				</div>
				<div class="col-sm-12">
					<div id="flipster2" class="flipster">
						<ul class="flipster__container">
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid" >
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-1-MAIN-PIC_976_600-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Tecguard FB3</h2>
												<p>Steelfire S50/70<br>Fixed Partition System</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid" >
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-2-01_1140_507-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Tecguard FB4</h2>
												<p>Steelfire STB80<br>Fixed Partition System</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid">
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-3-01_1140_507-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Tecguard FB4</h2>
												<p>Steelfire STB80<br>Hinge Door System</p>
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

	<div class="section section-testing">
    	<div class="container-testing">
        	<div class="row">
				<div class="col-sm-12">
					<h2>Burglar Proof Testing</h2>
				</div>
				<div class="col-sm-12">
                    <div id="flipster3" class="flipster">
                        <ul class="flipster__container">
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid" >
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-1-MAIN-PIC_900_600-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Tecguard RC2</h2>
												<p>Manual Attack<br>Pivot Door System (STB80)</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid" >
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-MAIN_900_600-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Tecguard RC2</h2>
												<p>Static Force<br>Pivot Door System (STB80)</p>
											</figcaption>
										</figure>
									</div>
								</div>
							</li>
							<li class="slide">
								<div class="slide-item">
									<div class="custom-grid" >
										<figure class="effect-architecture">
											<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-3-CAROUSEL-MAIN-PIC_938_600-735x335.jpg" class="img-responsive" alt="">                                                
											<figcaption>
												<h2>Tecguard RC2</h2>
												<p>Dynamic Force<br>Pivot Door System (STB80) </p>
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