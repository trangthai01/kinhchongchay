@extends('layouts.default',['title' => 'Company Profile'.config('app.name'), 'header_class' => 'header-white' ])
@section('css')
    <link href="{{ asset('css/theme/plyr.css') }}" rel="stylesheet">   
@endsection
@section('javascript')
    <script src="{{ asset('js/theme/plyr.js') }}" ></script>
@endsection
@section('header-content')
    <div class="banner-block parallex-700 parallex-white-700">
        <img src="{{ asset('images/web-company-profile-banner.jpg') }}" srcset="{{ asset('images/web-company-profile-banner.jpg') }} 1x" class="img-responsive" alt="">	<div class="banner-text">
            <a href="{{ url('company/company-profile') }}" title="Company Profile">Company Profile</a>
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
                            <span itemprop="item"><span itemprop="name">Company Profile</span></span>
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
                        <div class="info-title color-primary border-all padding-all">
                            <h2>Tecfire is currently active<br>in over 15 countries.<br></h2>					
                        </div>
                    </div>
                    <div class="col-sm-8 text-holder padding-both">
                        <p>Based in Spain, United Arab Emirates, Saudi Arabia, Qatar, and United States of America. <strong>Tecfire operates internationally</strong>, being its main markets: <strong>Europe, North America, the Middle East and Africa</strong>. Tecfire designs and manufactures tested and certified fire-rated glass systems from standard to customized solutions.</p>
                    </div>
                </div>
                <div class="row padding-both safe-text-block">
                    <div class="col-sm-6">
                        <div class="video-block-small">
                            <div tabindex="0" class="plyr plyr--youtube plyr--video plyr--fullscreen-enabled plyr--stopped plyr--ready" aria-label="TECFIRE - Corporate Video">
                                <div class="plyr__video-wrapper plyr__video-embed plyr--setup" style="cursor: pointer;">
                                    <iframe id="youtube-3926" frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Player for TECFIRE - Corporate Video" width="640" height="360" src="https://www.youtube.com/embed/SaGGqNs3t2w?autoplay=0&amp;controls=0&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;cc_load_policy=0&amp;cc_lang_pref=en&amp;wmode=transparent&amp;modestbranding=1&amp;disablekb=1&amp;origin=https%3A%2F%2Ftecfires.com&amp;enablejsapi=1&amp;widgetid=1" data-gtm-yt-inspected-14="true" tabindex="-1"></iframe>
                                </div>
                                <button type="button" data-plyr="play" class="plyr__play-large" aria-label="Play, TECFIRE - Corporate Video"><svg><use xlink:href="#plyr-play"></use></svg><span class="plyr__sr-only">Play</span></button><div class="plyr__controls"><button type="button" data-plyr="play" aria-label="Play, TECFIRE - Corporate Video"><svg><use xlink:href="#plyr-play"></use></svg><span class="plyr__sr-only">Play</span></button><button type="button" data-plyr="pause"><svg><use xlink:href="#plyr-pause"></use></svg><span class="plyr__sr-only">Pause</span></button><span class="plyr__progress"><label for="seek3938" class="plyr__sr-only">Seek</label><input id="seek3938" class="plyr__progress--seek" type="range" min="0" max="100" step="0.1" value="0" data-plyr="seek"><progress class="plyr__progress--played" max="100" value="0" role="presentation"></progress><progress class="plyr__progress--buffer" max="100" value="0"><span>0</span>% buffered</progress><span class="plyr__tooltip" style="left: 0%;">00:00</span></span><span class="plyr__time"><span class="plyr__sr-only">Current time</span><span class="plyr__time--current">03:29</span></span><button type="button" data-plyr="mute" aria-pressed="false"><svg class="icon--muted"><use xlink:href="#plyr-muted"></use></svg><svg><use xlink:href="#plyr-volume"></use></svg><span class="plyr__sr-only">Toggle Mute</span></button><span class="plyr__volume"><label for="volume3938" class="plyr__sr-only">Volume</label><input id="volume3938" class="plyr__volume--input" type="range" min="0" max="10" value="10" data-plyr="volume"><progress class="plyr__volume--display" max="10" value="10" role="presentation"></progress></span><button type="button" data-plyr="captions"><svg class="icon--captions-on"><use xlink:href="#plyr-captions-on"></use></svg><svg><use xlink:href="#plyr-captions-off"></use></svg><span class="plyr__sr-only">Toggle Captions</span></button><button type="button" data-plyr="fullscreen" aria-pressed="false"><svg class="icon--exit-fullscreen"><use xlink:href="#plyr-exit-fullscreen"></use></svg><svg><use xlink:href="#plyr-enter-fullscreen"></use></svg><span class="plyr__sr-only">Toggle Fullscreen</span></button></div></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-holder">
                                <h1><span style="color: #000000;"><strong>Safety is Invisible</strong></span> <span style="color: #000000;"> <strong> New Corporate Video</strong></span></h1>
                                <p>Safety and protection are among the most basic and primitive needs. When these needs are assured, something remarkable happens; the worries stop, and life goes on.</p>
                                <p>Tecfire’s key competence is based on generating the highest level of safety.<br>
                                Ensuring the protection of people is our business.</p>
                                <p>Tecfire has extensive experience in the design, testing and certification of fire protection glass systems. All our products are rigorously tested, and certified in accordance with all applicable standards wherever Tecfire sells its products. We work turnkey and we are able to adapt to the needs of any construction project where it is required to customize one of our products or even develop a completely new one. We offer you peace of mind and trust.</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="row padding-both safe-text-block">
                        <div class="col-sm-6">
                            <div class="text-holder">
                                <h2>Tecfire owns factories with the latest applied technology.</h2>
                                <p>For Tecfire, the safety and protection of people is a non-negotiable requirement. For that reason, Tecfire’s technical team, in its search for excellence and perfection, guarantees that every one of the custom-made systems and solutions is manufactured, certified and approved by the regulations applicable in each country. <strong>Multiple solutions: One source.</strong></p>
                                <p>Tecfire has over 9,000 sqm of manufacturing facilities with the most modern machinery split into two factories: one in Europe (Spain) &amp; one in the Middle East (Saudi Arabia).</p>
                                <p>Tecfire has more than 80 employees and over 50 staff dedicated to fabrication &amp; manufacturing.</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="image-holder">
                                <img src="{{ asset('images/pages/Tecfire-Spain-HD-Photo-560x300.jpg') }}" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="col-sm-12 padding-both">
                            <div class="image-holder">
                                <img src="{{ asset('images/pages/1-1140x300.png') }}" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row padding-both safe-text-block">
                        <div class="col-sm-6">
                            <div class="text-holder">
                                <h2>Some of our clients:</h2>
                            </div>
                    </div>
                    <div class="col-sm-12 padding-both">
                        <div class="image-holder">
                            <img src="{{ asset('images/pages/2-1140x300.png') }}" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            plyr.setup();
        </script>

        <section class="section section-company-category">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-holder">
                            <h2>Company Profile</h2>									
                        </div>
                    </div>
                </div>
                <div class="row padding-both profile-list-holder">
                    <div class="col-sm-6">
                        <div class="profile-list">
                            <h3>Foundation</h3>
                            <p>Tecfire is a pioneering and highly specialized company in the design, innovation,<br>manufacture, testing and certification fire-rated glass systems.</p>
                            <p>&nbsp;</p>
                            <p>Founded in 1985 in Europe, Tecfire has today become a leading international<br>
                            company with presence in four continents. We base our strategy on offering the<br>
                            widest and most innovative range of products and with the maximum guarantee<br>
                            of quality and product certification.</p>
                            <p>&nbsp;</p>
                            <p>We have the most specialized team of engineers capable of providing any fire protection solution that is in need of resistant glass and with the aim<br>
                            of protecting people in buildings in case of fire. Why settle for anything less? We provide the most innovative solutions in the market</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="profile-list">
                            <h3>Work Network &amp; International Presence</h3><p>Tecfire currently has a broad portfolio of clients, as well as a network of dealers serving over 15 countries, with over 4,000 clients and 5,000 awarded projects internationally.</p>
                            <p>&nbsp;</p>
                            <p>With three facilities spanning +80.000 square feet fully dedicated to the manufacture of solutions with fire resistant glass we guarantee the best service to our customers with the most competitive prices in the market.</p>
                            <p>&nbsp;</p>
                            <p>Tecfire currently offers the most extensive range of fire-rated glass protection in the market, entirely tested and approved in an extensive network of laboratories recognized worldwide, which makes it possible to guarantee the clients absolute reliability of the specific solution adopted for the project at all times.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="profile-list">
                            <h3>Factories &amp; Headquarters</h3><h3>TECFIRE HEADQUARTERS &amp; FACTORY EUROPE</h3>
                            <address>Pol. Industrial Sector 9<br>
                            Calle Ventorrillo No.1<br>
                            Yuncler – CP: 45529<br>
                            Toledo, Spain</address>
                            <p><em>Phone:&nbsp;<a href="tel:+34925551955"><span class="phone">+34 925 55 19 55</span></a></em></p>
                            <p><em>Email: <a href="mailto:info@tecfires.com">info@tecfires.com</a></em></p>
                            <p>&nbsp;</p>
                            <h3>TECFIRE CORPORATE HEADQUARTERS MIDDLE EAST</h3>
                            <p><em>6831 Al Mishael Dist.</em><br>
                            <em>Unit No.24 Riyadh</em><br>
                            <em>14328–3859, Saudi Arabia</em></p>
                            <p><em>Phone:&nbsp;<a href="tel:+966 8001220021"><span class="phone">+966 8001220021</span></a></em></p>
                            <p><em>Email: <a href="mailto:info@tecfires.com">info@tecfires.com</a></em></p>
                            <p>&nbsp;</p>
                            <address>Dubai Silicon Oasis<br>
                            E-Wing, 502<br>
                            P.O. BOX 341012<br>
                            Dubai – United Arab Emirates</address>
                            <p><em>Phone:&nbsp;<a href="tel:+97143724480"><span class="phone">+971 4 372 4480</span></a></em></p>
                            <p><em>Fax:&nbsp;<a href="fax:+97143724482"><span class="fax">+971 4 372 4482</span></a></em></p>
                            <p><em>Email: <a href="mailto:info@tecfires.com">info@tecfires.com</a></em></p>
                            <h3>TECFIRE CORPORATE HEADQUARTERS IN NORTH AMERICA</h3>
                            <address>12770 W. New Market St.<br>
                            Suite 204, Carmel<br>
                            Indiana 46032<br>
                            United States of America</address>
                            <address>Phone:&nbsp;<a href="tel: 833 832-3473"><span class="phone">833-TECFIRE</span></a><p></p>
                            <p>Email: <a href="mailto:info@tecfire.us">info@tecfire.us</a></p>
                            <p>&nbsp;</p>
                            </address>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="profile-list">
                            <h3>Guarantee of Certification</h3><p>Tecfire is a certified ISO 9001: Quality &amp; Manufacturing with over 35 years of experience in the manufacturing of Special and Megaprojects worldwide. Tecfire has implemented the most innovative and productive manufacturing procedures to guarantee the right execution for the most demanding projects.</p>
                            <p>&nbsp;</p>
                            <p>Over 150 Tecfire safety systems are tested and certified with different test standards (EN, BS-EN, NFPA), and approved by official certification bodies.</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <h3>Experience Area</h3>
                            <p>Design, Development, Testing, Certification, and Installation of fire-rated, bulletproof &amp; burglar-resistant glass Custom-Made Safety Solutions</p>
                            <p>&nbsp;</p>
                            <p><strong>FUNCTIONALITY:</strong>&nbsp;Frameless, steel, aluminum, and wood framing systems. Fixed Partition Systems. Door Systems (sliding, pivot, and swinging).</p>
                            <p>&nbsp;</p>
                            <p>Curtain Wall Systems. Horizontal Systems (floors and ceilings). Curved Systems. Butt Joint solutions (without perimeter framing). Experts in Custom-Made Solutions on demand.</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <h3>Company Administration</h3>
                            <p>Founder &amp; CEO: Mr. Jorge de la Rosa.</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection