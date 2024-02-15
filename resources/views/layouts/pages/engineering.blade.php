@extends('layouts.default',['title' => 'Enginerring '.config('app.name'), 'header_class' => '' ])
@section('css')
    <link href="{{ asset('css/theme/plyr.css') }}" rel="stylesheet">   
@endsection
@section('javascript')
    <script src="{{ asset('js/theme/plyr.js') }}" ></script>
@endsection

@section('header-content')
    <section class="banner-block video-block">
        <div tabindex="0" aria-label="TECFIRE - Corporate Video">
            <div id="enginerring_player" class="company-video plyr__video-wrapper plyr__video-embed plyr--setup">
                <iframe id="youtube-5042" frameborder="0" allowfullscreen="" allow="autoplay" title="Player for TECFIRE - Corporate Video" width="640" height="360" src="https://www.youtube.com/embed/MdELDO9wsPg?autoplay=1&controls=0&rel=0&showinfo=0&iv_load_policy=3&cc_load_policy=0&cc_lang_pref=en&wmode=transparent&modestbranding=1&disablekb=1&origin=https%3A%2F%2Ftecfires.com&enablejsapi=1&widgetid=1" data-gtm-yt-inspected-14="true" tabindex="-1"></iframe>
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
							<span itemprop="item"><span itemprop="name">Engineering</span></span><meta itemprop="position" content="2">
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
							<h2><p>Experts in Fire-rated Glass Systems</p></h2>				
						</div>
					</div>
					<div class="col-sm-8 col-md-9 text-holder">
						<p>Tecfire <strong>is highly specialized in the development of Special and Custom-Made Solutions</strong>. This specialization has enabled Tecfire to set a benchmark in the market in <strong>delivering solutions for the most innovative and demanding architectural projects</strong>. Tecfire has recently collaborated with some of the most highly-regarded architects and architecture studios worldwide, such a&nbsp;<strong>Ateliers Jean Nouvel</strong> (Louvre Museum Abu Dhabi and National Museum of Qatar); <strong>Foster + Partners</strong> (High-Speed Railway Stations in Mecca, Saudi Arabia); and <strong>Janus Rostock – Atkins</strong> (Dubai Opera), etc.</p>
					</div>
				</div>
			</div>
		</section>
		<div class="section section-features">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 feature-list-holder">
						<div class="feature-list feature-list__engineering">
							<a href="{{ url('engineering/testing') }}">
								<div class="image-holder">
									<img src="{{ asset('images/pages/PPAL-TEST-720x720.png') }}" class="img-responsive" alt="Testing">
								</div>
							</a>
							<div class="text-holder">
								<a href="{{ url('engineering/testing') }}" title="Testing">
									<h3>Testing</h3>								
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 feature-list-holder">
						<div class="feature-list feature-list__engineering">
							<a href="{{ url('engineering/certifications-approvals') }}">
								<div class="image-holder">
									<img src="{{ asset('images/pages/4-CERTIFICATIONS-APPROVALS-2-720x720.jpg') }}" class="img-responsive" alt="Certifications &amp; Approvals">								
								</div>
							</a>
							<div class="text-holder">
								<a href="{{ url('engineering/certifications-approvals') }}" title="Certifications &amp; Approvals">
									<h3>Certifications &amp; Approvals</h3>								
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 feature-list-holder">
						<div class="feature-list feature-list__engineering has-links">
							<a href="">
								<div class="image-holder">
									<img src="{{ asset('images/pages/3-1-720x720.jpg') }}" class="img-responsive" alt="Special Applications &amp; CMS">								
								</div>
							</a>
							<div class="mask-image">
								<ul>
									<li><a href="https://tecfires.com/engineering/applications/sliding-door-system/"><i class="fa fa-angle-right" aria-hidden="true"></i> <strong>SLIDING DOOR</strong> SYSTEM</a></li>
									<li><a href="https://tecfires.com/engineering/applications/pivot-door-system/"><i class="fa fa-angle-right" aria-hidden="true"></i> <strong>PIVOT DOOR</strong> SYSTEM</a></li>
									<li><a href="https://tecfires.com/engineering/applications/curtain-wall-system/"><i class="fa fa-angle-right" aria-hidden="true"></i> <strong>CURTAIN WALL</strong>  SYSTEM</a></li>								
								</ul>
							</div>
							<div class="text-holder">
								<a href="" title="Special Applications &amp; CMS">
									<h3>Special Applications &amp; CMS</h3>								
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-3 feature-list-holder">
						<div class="feature-list feature-list__engineering">
							<a href="{{ url('engineering/engineering-videos') }}">
								<div class="image-holder">
									<img src="{{ asset('images/pages/4-1-720x720.jpg') }}" class="img-responsive" alt="Engineering">								
								</div>
							</a>
							<div class="text-holder">
								<a href="{{ url('engineering/engineering-videos') }}" title="Engineering">
									<h3>Engineering</h3>								
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

