@extends('layouts.default',['title' => 'Our Valued Clients - '.config('app.name'), 'header_class' => 'header-white' ])
@section('header-content')
    <div class="banner-block parallex-700 parallex-white-700">
        <img src="{{ asset('images/pages/our-valued-clients-low.jpg') }}" class="img-responsive" alt="">	<div class="banner-text">
            <a href="{{ url('company/our-valued-clients') }}" title="Our Valued Clients">Our Valued Clients</a>
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
                            <a href="{{url('/company')}}" itemprop="item"><span itemprop="name">Company</span></a>
                            <meta itemprop="position" content="2">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
                            <span itemprop="item"><span itemprop="name">Out Valued Clients</span></span>
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
					        <h2>Tecfire's strategy is<br>based on a clear focus<br>on the client, offering<br>Custom-Made Solutions<br>for each construction project.</h2>				
                        </div>
			        </div>
					<div class="col-sm-8 text-holder">
                        <p>Our overriding aim is to provide our clients with the greatest possible degree of <strong>Know-How, Quality and Technical Solutions</strong>, offering the widest range of Certified Glass Protection solutions in the market.</p>
                        <p>The tests are carried out in an extensive network of internationally-recognised laboratories, which makes it possible to <strong>guarantee absolute reliability in product certification at all times</strong>, for the specific solution adopted by the project.</p>
                        <p>Tecfire has recently collaborated with some of the most highly-regarded architects and architecture studios worldwide, such as: <strong>Ateliers Jean Nouvel</strong> (Louvre Museum Abu Dhabi and National Museum of Qatar); <strong>Foster + Partners</strong> (High-Speed Railway Stations in Mecca, Saudi Arabia); and <strong>Janus Rostock – Atkins</strong> (Dubai Opera), etc.</p>
                    </div>
				</div>
	        </div>
        </section>
        <section class="section section-client-icon">
	        <div class="container">
		        <div class="row client-icon-block">
					<div class="col-xs-6 col-sm-3 col-md-2">
                        <a href="#" title="">
                            <img src="https://tecfires.com/wp-content/uploads/2017/05/1-1-250x250.png" class="img-responsive" alt="">
                        </a>
                    </div>
					<div class="col-xs-6 col-sm-3 col-md-2">
                        <a href="#" title="">
                            <img src="https://tecfires.com/wp-content/uploads/2017/05/2-1-250x250.png" class="img-responsive" alt="">
                        </a>
                    </div>
					<div class="col-xs-6 col-sm-3 col-md-2">
                        <a href="#" title="">
                            <img src="https://tecfires.com/wp-content/uploads/2017/05/3-1-250x250.png" class="img-responsive" alt="">
                        </a>
                    </div>
					<div class="col-xs-6 col-sm-3 col-md-2">
                        <a href="#" title="">
                            <img src="https://tecfires.com/wp-content/uploads/2017/05/4-1-250x250.png" class="img-responsive" alt="">
                        </a>
                    </div>
					<div class="col-xs-6 col-sm-3 col-md-2">
                        <a href="#" title="">
                            <img src="https://tecfires.com/wp-content/uploads/2017/05/5-1-250x250.png" class="img-responsive" alt="">
                        </a>
                    </div>
					<div class="col-xs-6 col-sm-3 col-md-2">
                        <a href="#" title="">
                            <img src="https://tecfires.com/wp-content/uploads/2017/05/6-1-250x250.png" class="img-responsive" alt="">
                        </a>
                    </div>
				</div>
	        </div>
        </section>
	</main>
@endsection