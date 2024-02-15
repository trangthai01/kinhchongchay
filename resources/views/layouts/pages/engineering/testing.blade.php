@extends('layouts.default',['title' => 'Testing - '.config('app.name'), 'header_class' => 'header-white' ])
@section('css')
    <link href="{{ asset('css/theme/jquery.flipster.min.css') }}" rel="stylesheet">   
@endsection
@section('javascript')
    <script src="{{ asset('js/theme/flip-slider.js') }}" ></script>
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
						<a href="https://tecfires.com/" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
						<meta itemprop="position" content="1">
					</li>
					<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item">
						<a href="https://tecfires.com/engineering/" itemprop="item"><span itemprop="name">Engineering</span></a>
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
									<div class="custom-grid" data-toggle="modal" href="#show-11">
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
									<div class="custom-grid" data-toggle="modal" href="#show-11">
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
									<div class="custom-grid" data-toggle="modal" href="#show-12">
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
									<div class="custom-grid" data-toggle="modal" href="#show-13">
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
									<div class="custom-grid" data-toggle="modal" href="#show-14">
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
									<div class="custom-grid" data-toggle="modal" href="#show-15">
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
									<div class="custom-grid" data-toggle="modal" href="#show-16">
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
									<div class="custom-grid" data-toggle="modal" href="#show-17">
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
				<script>
					$(function(){ 
						$("#flipster1").flipster({ style: 'carousel', start: 0 }); 
					});	

				</script>
				<div class="col-sm-12" style="display:none">
				
                    <div class="flipster flipster--transform flipster--infinite-carousel flipster--click flipster--active" style="" tabindex="0">
                        <ul class="flipster__container" style="height: 405px; transform: translateX(167.5px);">
                            <li class="slide flipster__item  flipster__item--past flipster__item--past-14" style="z-index: 28;">
								<div class="flipster__item__content">
									<div class="slide-item">
										<div class="custom-grid" data-toggle="modal" href="#show-11">
											<figure class="effect-architecture">
												<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-1-CAROUSEL-MAIN-PIC_904_600-735x335.jpg" class="img-responsive" alt="">                                                
												<figcaption>
													<h2>Steelfire STB80</h2>
													<p>Pivot Door System<br>EI90</p>
												</figcaption>
											</figure>
										</div>
									</div>
								</div>
							</li>
                            <li class="slide flipster__item  flipster__item--past flipster__item--past-13" style="z-index: 30;">
								<div class="flipster__item__content">
                                	
                                </div>
							</li>
                            <li class="slide flipster__item  flipster__item--past flipster__item--past-12" style="z-index: 32;">
								<div class="flipster__item__content">
									
                            	</div>
							</li>
                            <li class="slide flipster__item  flipster__item--past flipster__item--past-11" style="z-index: 34;">
								<div class="flipster__item__content">
                               	 	<div class="slide-item">
                                        
                                    </div>
                                </div>
							</li>
                            <li class="slide flipster__item  flipster__item--past flipster__item--past-10" style="z-index: 36;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--past flipster__item--past-9" style="z-index: 38;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--past flipster__item--past-8" style="z-index: 40;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--past flipster__item--past-7" style="z-index: 42;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-18">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-12-CAROUSEL-MAIN-PIC_945_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire STB80</h2>
                                                                                                                    <p>Double Leaf Hinge Door System with Top Panel<br>EI60                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--past flipster__item--past-6" style="z-index: 44;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-19">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-13-CAROUSEL-MAIN-PIC_900_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire STB80</h2>
                                                                                                                    <p>Fixed Partition System<br>EI60                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--past flipster__item--past-5" style="z-index: 46;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-110">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-14-CAROUSEL-MAIN-PIC_945_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire STB80</h2>
                                                                                                                    <p>Fixed Partition System<br>EI90                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--past flipster__item--past-4" style="z-index: 48;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-111">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-15-CAROUSEL-MAIN-PIC_945_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire STB80</h2>
                                                                                                                    <p>Fixed Partition System<br>EI120                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--past flipster__item--past-3" style="z-index: 50;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-112">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-16-CAROUSEL-MAIN-PIC_900_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire STB80</h2>
                                                                                                                    <p>Fixed Partition System<br>EI120 - NFPA                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--past flipster__item--past-2" style="z-index: 52;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-113">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-17-CAROUSEL-MAIN-PIC_657_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire S50/70</h2>
                                                                                                                    <p>Fixed Partition System<br>EI60                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--past flipster__item--past-1" style="z-index: 54;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-114">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-18-CAROUSEL-MAIN-PIC_900_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire S50/70</h2>
                                                                                                                    <p>Fixed Partition System<br>EI60 - NFPA                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--current" style="z-index: 60;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-115">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-19-CAROUSEL-MAIN-PIC_900_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire STB80</h2>
                                                                                                                    <p>Hinge Door System<br>E60                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-1" style="z-index: 54;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-116">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-20-CAROUSEL-MAIN-PIC_945_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire STB80</h2>
                                                                                                                    <p>Fixed Partition System<br>EI120                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-2" style="z-index: 52;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-117">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-22-CAROUSEL-MAIN-PIC_900_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire STB80</h2>
                                                                                                                    <p>Fixed Partition System<br>EI60                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-3" style="z-index: 50;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-118">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-23-CAROUSEL-MAIN-PIC_900_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Alufire AS85</h2>
                                                                                                                    <p>Fixed Partition System<br>EI90                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-4" style="z-index: 48;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-119">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-24-CAROUSEL-MAIN-PIC_900_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Alufire AS85</h2>
                                                                                                                    <p>Hinge Door System<br>EI90                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-5" style="z-index: 46;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-120">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-25-CAROUSEL-MAIN-PIC_900_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Alufire AS85</h2>
                                                                                                                    <p>Fixed Partition System<br>EI90                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-6" style="z-index: 44;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-121">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-26-CAROUSEL-MAIN-PIC_945_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire STB80</h2>
                                                                                                                    <p>Curtain wall System<br>EI120                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-7" style="z-index: 42;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-122">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-27-CAROUSEL-MAIN-PIC_897_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Woodfire CARBON50</h2>
                                                                                                                    <p>Fixed Partition System<br>EI60                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-8" style="z-index: 40;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-123">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-28-CAROUSEL-MAIN-PIC_745_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                     <h2>Woodfire CARBON50</h2>
                                                                                                                    <p>Fixed Partition System<br>EI60                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-9" style="z-index: 38;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-124">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-29-CAROUSEL-MAIN-PIC_896_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Woodfire CARBON50</h2>
                                                                                                                    <p>Hinge Door System<br>EI60                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-10" style="z-index: 36;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-125">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-30-CAROUSEL-MAIN-PIC_900_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire STB80</h2>
                                                                                                                    <p>Fixed Partition System<br>EI60                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-11" style="z-index: 34;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-126">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/NEWS-CW-1-735x335.png" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire STB80</h2>
                                                                                                                    <p>Curtain Wall System<br>EI120                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-12" style="z-index: 32;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-127">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/NEWS-CW-3-735x335.png" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire STB80</h2>
                                                                                                                    <p>Curtain Wall System<br>EI120 - NFPA                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-13" style="z-index: 30;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-128">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/DSC_0816-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Steelfire S50/70</h2>
                                                                                                                    <p>Fixed Partition System<br>E240                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                    </ul>
                    <button class="flipster__button flipster__button--prev" role="button"><svg viewBox="0 0 13 20" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title"><title>Previous</title><polyline points="10,3 3,10 10,17"></polyline></svg></button><button class="flipster__button flipster__button--next" role="button"><svg viewBox="0 0 13 20" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title"><title>Next</title><polyline points="10,3 3,10 10,17" transform="rotate(180 6.5,10)"></polyline></svg></button></div>
                    <div class="modal fade modal-custom-white" id="show-11">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Pivot Door System - EI90</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-11">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-1-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-1-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-11" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-1-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-1-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-11').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-11').flickity({
			asNavFor: '#carousel_show-11',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-11').flickity('resize');
	        $('#carousel_show-11').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-12">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Alufire AS85 - Single Leaf Hinge Door System - EI60</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-12">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-3-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-3-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-12" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-3-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-3-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-12').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-12').flickity({
			asNavFor: '#carousel_show-12',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-12').flickity('resize');
	        $('#carousel_show-12').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-13">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Alufire AS85 - Double Leaf Door System - EI60</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-13">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-4-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-4-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-13" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-4-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-4-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-13').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-13').flickity({
			asNavFor: '#carousel_show-13',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-13').flickity('resize');
	        $('#carousel_show-13').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-14">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Alufire AS85 - Fixed Partition System - EI60</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-14">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-5-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-5-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-14" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-5-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-5-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-14').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-14').flickity({
			asNavFor: '#carousel_show-14',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-14').flickity('resize');
	        $('#carousel_show-14').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-15">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Fixed Partition System - EI120 - NFPA</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-15">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-9-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-9-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-9-03_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-9-04_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-15" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-9-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-9-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-9-03_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-9-04_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-15').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-15').flickity({
			asNavFor: '#carousel_show-15',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-15').flickity('resize');
	        $('#carousel_show-15').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-16">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire S50/70 - Fixed Partition System - EW120</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-16">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-10-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-10-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-10-03_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-10-04_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-16" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-10-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-10-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-10-03_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-10-04_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-16').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-16').flickity({
			asNavFor: '#carousel_show-16',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-16').flickity('resize');
	        $('#carousel_show-16').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-17">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Double Leaf Hinge Door System - EI90</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-17">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-11-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-11-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-11-03_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-17" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-11-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-11-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-11-03_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-17').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-17').flickity({
			asNavFor: '#carousel_show-17',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-17').flickity('resize');
	        $('#carousel_show-17').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-18">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Double Leaf Hinge Door System with Top Panel - EI60</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-18">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-12-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-12-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-18" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-12-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-12-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-18').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-18').flickity({
			asNavFor: '#carousel_show-18',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-18').flickity('resize');
	        $('#carousel_show-18').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-19">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Fixed Partition System - EI60</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-19">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-13-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-13-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-19" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-13-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-13-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-19').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-19').flickity({
			asNavFor: '#carousel_show-19',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-19').flickity('resize');
	        $('#carousel_show-19').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-110">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Fixed Partition System - EI90</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-110">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-14-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-14-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-110" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-14-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-14-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-110').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-110').flickity({
			asNavFor: '#carousel_show-110',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-110').flickity('resize');
	        $('#carousel_show-110').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-111">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Fixed Partition System - EI120</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-111">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-15-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-15-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-111" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-15-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-15-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-111').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-111').flickity({
			asNavFor: '#carousel_show-111',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-111').flickity('resize');
	        $('#carousel_show-111').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-112">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Fixed Partition System - EI120 - NFPA</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-112">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-16-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-16-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-16-03_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-112" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-16-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-16-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-16-03_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-112').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-112').flickity({
			asNavFor: '#carousel_show-112',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-112').flickity('resize');
	        $('#carousel_show-112').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-113">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire S50/70 - Fixed Partition System - EI60</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-113">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-17-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-17-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-113" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-17-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-17-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-113').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-113').flickity({
			asNavFor: '#carousel_show-113',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-113').flickity('resize');
	        $('#carousel_show-113').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-114">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire S50/70 - Fixed Partition System - EI60 - NFPA</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-114">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-18-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-114" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-18-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-114').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-114').flickity({
			asNavFor: '#carousel_show-114',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-114').flickity('resize');
	        $('#carousel_show-114').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-115">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Hinge Door System - E60</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-115">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-19-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-115" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-19-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-115').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-115').flickity({
			asNavFor: '#carousel_show-115',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-115').flickity('resize');
	        $('#carousel_show-115').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-116">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Fixed Partition System - EI120</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-116">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-20-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-20-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-116" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-20-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-20-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-116').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-116').flickity({
			asNavFor: '#carousel_show-116',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-116').flickity('resize');
	        $('#carousel_show-116').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-117">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Fixed Partition System - EI60</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-117">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-22-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-117" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-22-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-117').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-117').flickity({
			asNavFor: '#carousel_show-117',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-117').flickity('resize');
	        $('#carousel_show-117').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-118">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Alufire AS85 - Fixed Partition System - EI90</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-118">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-23-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-118" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-23-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-118').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-118').flickity({
			asNavFor: '#carousel_show-118',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-118').flickity('resize');
	        $('#carousel_show-118').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-119">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Alufire AS85 - Hinge Door System - EI90</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-119">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-24-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-24-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-119" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-24-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-24-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-119').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-119').flickity({
			asNavFor: '#carousel_show-119',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-119').flickity('resize');
	        $('#carousel_show-119').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-120">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Alufire AS85 - Fixed Partition System - EI90</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-120">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-25-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-120" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-25-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-120').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-120').flickity({
			asNavFor: '#carousel_show-120',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-120').flickity('resize');
	        $('#carousel_show-120').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-121">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Curtain wall System - EI120</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-121">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-26-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-121" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-26-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-121').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-121').flickity({
			asNavFor: '#carousel_show-121',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-121').flickity('resize');
	        $('#carousel_show-121').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-122">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Woodfire CARBON50 - Fixed Partition System - EI60</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-122">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-27-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-122" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-27-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-122').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-122').flickity({
			asNavFor: '#carousel_show-122',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-122').flickity('resize');
	        $('#carousel_show-122').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-123">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Woodfire CARBON50 - Fixed Partition System - EI60</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-123">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-28-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-28-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-123" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-28-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-28-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-123').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-123').flickity({
			asNavFor: '#carousel_show-123',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-123').flickity('resize');
	        $('#carousel_show-123').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-124">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Woodfire CARBON50 - Hinge Door System - EI60</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-124">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-29-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-124" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-29-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-124').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-124').flickity({
			asNavFor: '#carousel_show-124',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-124').flickity('resize');
	        $('#carousel_show-124').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-125">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Fixed Partition System - EI60</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-125">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-30-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-30-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-125" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-30-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-FIRE-30-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-125').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-125').flickity({
			asNavFor: '#carousel_show-125',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-125').flickity('resize');
	        $('#carousel_show-125').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-126">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Curtain Wall System - EI120</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-126">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/NEWS-CW-1-1-180x80.png" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/NEWS-CW-2-180x80.png" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-126" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/NEWS-CW-1-1-1140x500.png" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/NEWS-CW-2-1140x500.png" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-126').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-126').flickity({
			asNavFor: '#carousel_show-126',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-126').flickity('resize');
	        $('#carousel_show-126').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-127">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire STB80 - Curtain Wall System - EI120 - NFPA</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-127">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/NEWS-CW-3-1-180x80.png" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-127" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/NEWS-CW-3-1-1140x500.png" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-127').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-127').flickity({
			asNavFor: '#carousel_show-127',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-127').flickity('resize');
	        $('#carousel_show-127').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-128">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Steelfire S50/70 - Fixed Partition System - E240</strong>
					<ul class="architecture-nav-list">
						<li>Fire Rated Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-128">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/DSC_0816-1-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/DSC_0732-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/20170524_192933_HDR-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-128" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/DSC_0816-1-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/DSC_0732-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/20170524_192933_HDR-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-128').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-128').flickity({
			asNavFor: '#carousel_show-128',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-128').flickity('resize');
	        $('#carousel_show-128').flickity('resize');
	    });
	});
</script>
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
                    <div class="flipster flipster--transform flipster--infinite-carousel flipster--click flipster--active" style="" tabindex="0">
                        <ul class="flipster__container" style="height: 383px; transform: translateX(167.5px);">
                                                            <li class="slide flipster__item  flipster__item--past flipster__item--past-1" style="z-index: 4;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-21">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-1-MAIN-PIC_976_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Tecguard FB3</h2>
                                                                                                                    <p>Steelfire S50/70<br>Fixed Partition System                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--current" style="z-index: 10;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-22">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-2-01_1140_507-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Tecguard FB4</h2>
                                                                                                                    <p>Steelfire STB80<br>Fixed Partition System                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-1" style="z-index: 4;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-23">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-3-01_1140_507-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Tecguard FB4</h2>
                                                                                                                    <p>Steelfire STB80<br>Hinge Door System                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                    </ul>
                    <button class="flipster__button flipster__button--prev" role="button"><svg viewBox="0 0 13 20" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title"><title>Previous</title><polyline points="10,3 3,10 10,17"></polyline></svg></button><button class="flipster__button flipster__button--next" role="button"><svg viewBox="0 0 13 20" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title"><title>Next</title><polyline points="10,3 3,10 10,17" transform="rotate(180 6.5,10)"></polyline></svg></button></div>
                    <div class="modal fade modal-custom-white" id="show-21">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Tecguard FB3 - Steelfire S50/70 - Fixed Partition System</strong>
					<ul class="architecture-nav-list">
						<li>Bullet Proof Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-21">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-1-02-_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-1-03-_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-1-04-_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-1-05-_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-1-01-_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-21" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-1-02-_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-1-03-_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-1-04-_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-1-05-_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-1-01-_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-21').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-21').flickity({
			asNavFor: '#carousel_show-21',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-21').flickity('resize');
	        $('#carousel_show-21').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-22">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Tecguard FB4 - Steelfire STB80 - Fixed Partition System</strong>
					<ul class="architecture-nav-list">
						<li>Bullet Proof Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-22">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-2-01_1140_507-1-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-2-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-22" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-2-01_1140_507-1-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-2-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-22').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-22').flickity({
			asNavFor: '#carousel_show-22',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-22').flickity('resize');
	        $('#carousel_show-22').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-23">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Tecguard FB4 - Steelfire STB80 - Hinge Door System</strong>
					<ul class="architecture-nav-list">
						<li>Bullet Proof Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-23">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-3-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-3-03_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-3-04_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-23" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-3-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-3-03_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BULLET-3-04_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-23').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-23').flickity({
			asNavFor: '#carousel_show-23',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-23').flickity('resize');
	        $('#carousel_show-23').flickity('resize');
	    });
	});
</script>
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
                    <div class="flipster flipster--transform flipster--infinite-carousel flipster--click flipster--active" style="" tabindex="0">
                        <ul class="flipster__container" style="height: 383px; transform: translateX(167.5px);">
                                                            <li class="slide flipster__item  flipster__item--past flipster__item--past-1" style="z-index: 4;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-31">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-1-MAIN-PIC_900_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Tecguard RC2</h2>
                                                                                                                    <p>Manual Attack<br>Pivot Door System (STB80)                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--current" style="z-index: 10;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-32">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-MAIN_900_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Tecguard RC2</h2>
                                                                                                                    <p>Static Force<br>Pivot Door System (STB80)                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                            <li class="slide flipster__item  flipster__item--future flipster__item--future-1" style="z-index: 4;"><div class="flipster__item__content">
                                    <div class="slide-item">
                                        <div class="custom-grid" data-toggle="modal" href="#show-33">
                                            <figure class="effect-architecture">
                                                                                                    <img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-3-CAROUSEL-MAIN-PIC_938_600-735x335.jpg" class="img-responsive" alt="">                                                
                                                                                                    <figcaption>
                                                                                                                    <h2>Tecguard RC2</h2>
                                                                                                                    <p>Dynamic Force<br>Pivot Door System (STB80)                                                                                                            </p></figcaption>
                                                
                                            </figure>
                                        </div>
                                    </div>
                                </div></li>
                                                    </ul>
                    <button class="flipster__button flipster__button--prev" role="button"><svg viewBox="0 0 13 20" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title"><title>Previous</title><polyline points="10,3 3,10 10,17"></polyline></svg></button><button class="flipster__button flipster__button--next" role="button"><svg viewBox="0 0 13 20" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title"><title>Next</title><polyline points="10,3 3,10 10,17" transform="rotate(180 6.5,10)"></polyline></svg></button></div>
                    <div class="modal fade modal-custom-white" id="show-31">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Tecguard RC2 - Manual Attack - Pivot Door System (STB80)</strong>
					<ul class="architecture-nav-list">
						<li>Burglar Proof Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-31">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-1-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-1-03_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-1-04_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-1-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-31" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-1-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-1-03_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-1-04_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-1-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-31').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-31').flickity({
			asNavFor: '#carousel_show-31',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-31').flickity('resize');
	        $('#carousel_show-31').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-32">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Tecguard RC2 - Static Force - Pivot Door System (STB80)</strong>
					<ul class="architecture-nav-list">
						<li>Burglar Proof Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-32">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-03_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-04_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-05_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-06_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-32" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-03_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-04_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-05_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-06_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-2-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-32').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-32').flickity({
			asNavFor: '#carousel_show-32',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-32').flickity('resize');
	        $('#carousel_show-32').flickity('resize');
	    });
	});
</script>
<div class="modal fade modal-custom-white" id="show-33">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

				<div class="text-holder col-sm-12">

					<strong>Tecguard RC2 - Dynamic Force - Pivot Door System (STB80)</strong>
					<ul class="architecture-nav-list">
						<li>Burglar Proof Testing</li>
					</ul>
				</div>

									<div class="modal-image-gallery all-gallery col-sm-12">

						<div class="architectureModal-carousel-nav nav-carousel" id="nav_show-33">

															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-3-01_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-3-02_1140_507-180x80.jpg" class="img-responsive" alt="">									</div>
								</div>
							
						</div>

						<div class="architectureModal-carousel" id="carousel_show-33" style="min-height: 500px;">
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-3-01_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
															<div class="item-list carousel-cell">
									<div class="image-holder">
										<img src="https://tecfires.com/wp-content/uploads/2017/05/TE-BURGLAR-3-02_1140_507-1140x500.jpg" class="img-responsive" alt="">									</div>
								</div>
													</div>
					</div>
							</div>
		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function ($) {
		$('#carousel_show-33').flickity({
			contain: true,
			autoPlay: false,
			pageDots: false,
			prevNextButtons: true,
		});
		$('#nav_show-33').flickity({
			asNavFor: '#carousel_show-33',
			contain: true,
			pageDots: false,
			cellAlign: 'left',
			prevNextButtons: false
		});
		$('.modal-custom-white').on('shown.bs.modal', function(event) {
	        $('#nav_show-33').flickity('resize');
	        $('#carousel_show-33').flickity('resize');
	    });
	});
</script>
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