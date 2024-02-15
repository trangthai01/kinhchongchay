@extends('layouts.default',['title' => 'Corporate Value - '.config('app.name'), 'header_class' => 'header-white' ])
@section('header-content')
    <script>
		fn_setCurrentMenu('company');
    </script>
@endsection

@section('content')
    <main id="main" class="bottom-gap top-gap">
        <section class="section section-full">
            <div class="container-fluid no-ltr-padding">
                <div class="row">
                    <div class="col-sm-12 col-md-4 full-column">
                        <div class="image-holder">
                            <img src="{{ asset('images/pages/corporate-values-kid-low-1230x1090.png') }}" class="img-responsive" alt="">
                            <div class="banner-text">
                                <a href="{{ url('company/corporate-values') }}" title="Corporate Values">Corporate Values</a>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h2>RELIABILITY</h2>						
                            <p><strong>The high degree of specialization and the quality of Tecfire’s products have earned the trust of the most prestigious international architects, successfully exceeding all kinds of requirements and technical demands.</strong> The very highest expectations have been met, making it possible to undertake significant projects. Today, Tecfire has the broadest range of innovative solutions, which have been tested and certified in official laboratories.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 full-column">
                        <div class="image-holder">
                            <img src="{{ asset('images/pages/img2-1230x1090.jpg') }}" class="img-responsive" alt="">
                        </div>
                        <div class="text-holder">
                            <h2>EXPERIENCE</h2>						
                            <p><strong>Our strength lies in our accumulated proficiency</strong>: thorough technical knowledge of the product and its applications, which, together with the high degree of specialization of our engineering, and research &amp; development teams, enable us to produce the most technologically advanced systems in the market. All of these are in concordance with the product certification and approvals at all times. Tecfire offers the most extensive and complete range of tested and certified Fire-rated Safety Glass Systems in the market.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 full-column">
                        <div class="image-holder">
                            <img src="{{ asset('images/pages/HB-Louvre-Installation-1230x1090.jpg') }}" class="img-responsive" alt="">
                        </div>
                        <div class="text-holder">
                            <h2>EXCELLENCE</h2>						
                            <p>In our constant search to satisfy the specific needs of each project, <strong>Tecfire designs and manufactures its Own Exclusive Solutions, which, once tested and approved by the official bodies, are launched onto the market for commercialization.</strong> All the products bear the Tecfire seal, a symbol of confidence and prestige. All of Tecfire’s personnel are highly qualified and extremely professional, delivering the very best service to our clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection