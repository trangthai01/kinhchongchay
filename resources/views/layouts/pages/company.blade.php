@extends('layouts.default',['title' => 'Company '.config('app.name'), 'header_class' => '' ])
@section('css')
    <link href="{{ asset('css/theme/plyr.css') }}" rel="stylesheet">   
@endsection
@section('javascript')
    <script src="{{ asset('js/theme/plyr.js') }}" ></script>
@endsection
@section('header-content')
    <section class="banner-block video-block">
        <div tabindex="0" aria-label="TECFIRE - Corporate Video">
            <div id="player" class="company-video plyr__video-wrapper plyr__video-embed plyr--setup">
                <iframe id="youtube-5042" frameborder="0" allowfullscreen="" allow="autoplay" title="Player for TECFIRE - Corporate Video" width="640" height="360" src="https://www.youtube.com/embed/SaGGqNs3t2w?autoplay=1&amp;controls=0&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;cc_load_policy=0&amp;cc_lang_pref=en&amp;wmode=transparent&amp;modestbranding=1&amp;disablekb=1&amp;origin=https%3A%2F%2Ftecfires.com&amp;enablejsapi=1&amp;widgetid=1" data-gtm-yt-inspected-14="true" tabindex="-1"></iframe>
            </div>
        </div>
    </section>
    <script>
        //const player = new Plyr('#player');
        //layer.play();
        fn_setCurrentMenu('company');
    </script>
@endsection
@section('content')
    <main id="main" class="bottom-gap top-gap">
        <div class="section breadcrumb-holder">
            <div class="container">
                <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb"><ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList"><meta name="numberOfItems" content="2"><meta name="itemListOrder" content="Ascending"><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-begin"><a href="https://tecfires.com/" rel="home" itemprop="item"><span itemprop="name">Home</span></a><meta itemprop="position" content="1"></li><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end"><span itemprop="item"><span itemprop="name">Company</span></span><meta itemprop="position" content="2"></li></ul></div>	</div>
        </div>

        <section class="section section-cta">
            <div class="container">
                <div class="row padding-bottom">
                                <div class="col-sm-4">
                        <div class="info-title color-primary">
                            <h2>Welcome to TECFIRE. <br>The new generation of<br> fire-rated glass systems.</h2>				</div>
                    </div>
                                    <div class="col-sm-8 text-holder">
                            <p><strong>Tecfire is a leading company in fire-rated glass systems. </strong> Innovative research, expert advice and great product know-how empower us to provide any solution in the field of fire-resistive glass solutions. Tecfire’s key competence is based on generating the highest level of safety. Ensuring the protection of people is our business.</p>
                        </div>
                            </div>

                <div class="row padding-both">
                                    <div class="col-sm-4">
                            <div class="tecfire-box border-all">
                                <h3>TECFIRE IN PROFILE</h3>
        <p><strong class="sub-title"> Facts</strong></p>
        <ul>
        <li>Founded in 1985.</li>
        <li>Tecfire is present and expanding in Europe, Middle East and Africa and North America regions.</li>
        <li>Headquarters in United Arab Emirates, United States of America, Spain and Saudi Arabia.</li>
        <li>Factories in Spain and Saudi Arabia.</li>
        <li>+150 tested &amp; certified products.</li>
        <li>+4,000 clients.</li>
        <li>+5,000 awarded projects.</li>
        <li>2,700,000 square feet/ 250,000 square meters of fire-rated glass installed on site.</li>
        <li>Leaders in research &amp; engineering: most comprehensive range of innovative fire-rated glass systems in the market.</li>
        <li>A highly specialized company that designs and manufactures standard to custom-made fire-glazed products.</li>
        <li>Leaders in the Middle East in special and megaprojects.</li>
        </ul>
        <p>&nbsp;</p>
                            </div>
                        </div>
                                    <div class="col-sm-8">
                            <div class="tecfire-box border-all">
                                <h3>TECFIRE: GET TO KNOW US</h3>
        <p><strong class="sub-title">Fire-rated Glass Systems</strong> Tecfire bases its strategy on providing the most innovative safety glass systems at the most competitive prices. <strong>A high degree of know-how, extensive experience, and a client-focused approach</strong>, make us a leading international company in fire-resistant glass systems.</p>
        <p>&nbsp;</p>
        <p><a class="btn btn-primary" style="font-size: 1rem;" href="https://tecfires.com/pdf/?f=17348" target="_blank" rel="noopener noreferrer" data-inline="true">Europe | Middle East &amp; Africa Catalog</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class="btn btn-primary" style="font-size: 1rem;" href="https://tecfires.com/pdf/?f=17434" target="_blank" rel="noopener noreferrer" data-inline="true">North America Catalog</a></p>
        <div>
        <p>&nbsp;</p>
        <p><img fetchpriority="high" decoding="async" class="alignnone size-medium wp-image-16677" src="https://tecfires.com/wp-content/uploads/2023/05/locations-map-company-landing-page-300x160.png" alt="" width="800" height="427" srcset="https://tecfires.com/wp-content/uploads/2023/05/locations-map-company-landing-page-300x160.png 300w, https://tecfires.com/wp-content/uploads/2023/05/locations-map-company-landing-page.png 689w" sizes="(max-width: 800px) 100vw, 800px"></p>
        </div>
                            </div>
                        </div>
                            </div>
            </div>
        </section>

        <section class="section section-company-category">
            <div class="container">
                <div class="row">
                                    <div class="col-sm-6">
                            <div class="company-category-block">
                                <a href="{{ url('company/company-profile') }}" title="Company Profile">
                                    <h3>COMPANY PROFILE</h3><p>Multinational company with manufacturing facilities in Spain and Saudi Arabia and headquarters in United Arab Emirates and United States of America.</p>
                                    <span class="icon-right"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                </a>
                            </div>
                        </div>
                                    <div class="col-sm-6">
                            <div class="company-category-block">
                                <a href="{{ url('company/corporate-values') }}" title="Corporate Values">
                                    <h3>CORPORATE VALUES</h3><p>Innovation, Reliability, Experience, Excellence.</p>
                                    <span class="icon-right"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                </a>
                            </div>
                        </div>
                                    <div class="col-sm-6">
                            <div class="company-category-block">
                                <a href="{{ url('company/our-valued-clients') }}" title="Our Valued Clients">
                                    <h3>OUR VALUED CLIENTS</h3><p>Credibility &amp; Trust as strategic pillars.</p>
                                    <span class="icon-right"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                </a>
                            </div>
                        </div>
                                    <div class="col-sm-6">
                            <div class="company-category-block">
                                <a href="{{ url('company/cutting-edge-technology') }}" title="Cutting-edge Technology">
                                    <h3>CUTTING-EDGE TECHNOLOGY</h3><p>Products with the highest quality and applied technology</p>
                                    <span class="icon-right"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                </a>
                            </div>
                        </div>
                            </div>
            </div>
        </section>
    </main>
@endsection