@extends("layouts.default",['title'=>'News', 'header_class'=> 'header-white'])
@section("content")
    <main id="main" class="bottom-gap top-gap">
	    <div class="section breadcrumb-holder">
	        <div class="container">
		        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                    <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <meta name="numberOfItems" content="2">
                        <meta name="itemListOrder" content="Ascending">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
                            <a href="{{ url('/') }}" rel="home" itemprop="item"><span itemprop="name">Home</span></a><meta itemprop="position" content="1">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
                            <span itemprop="item"><span itemprop="name">News</span></span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ul>
                </div>	
            </div>
        </div>
        <section class="section section-news-page">
	        <div class="container">
		        <div class="row">
			        <div class="col-sm-12">
				        <div class="title">
					        <h2>News</h2>				
                        </div>
			        </div>
		        </div>
		        <div class="row">
                    <div class="col-sm-9">
                        @can(\WebDevEtc\BlogEtc\Gates\GateTypes::MANAGE_BLOG_ADMIN)
                            <div class="text-center">
                                <p class="mb-1">
                                    You are logged in as a blog admin user.
                                    <br>
                                    <a href="{{route("blogetc.admin.index")}}"
                                    class="btn border btn-outline-primary btn-sm">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                        Go To Blog Admin Panel
                                    </a>
                                </p>
                            </div>
                        @endcan
                        @forelse($posts as $post)
                            @include("blogetc::partials.index_loop")
                        @empty
                            <div class="alert alert-danger">No posts</div>
                        @endforelse
                                            
                        <div class="text-center col-sm-4 mx-auto">
                            {{$posts->appends( [] )->links()}}
                        </div>
                    </div>
			        <div class="row">
	                    <div class="col-sm-3">
		                    <div class="news-right">
			                    <h3>Latest projects</h3>
                                <ul class="news-list news-list-image">
                                    <li>
                                            <a href="https://tecfires.com/architecture" title="Porsche Dealership">
                                                <img src="https://tecfires.com/wp-content/uploads/2017/10/AR-PO-01-520x320.png" class="img-responsive" alt="Porsche Dealership">			</a>
                                    </li>
                                        <li>
                                        <a href="https://tecfires.com/architecture" title="The Address Residence Sky View Dubai">
                                            <img src="https://tecfires.com/wp-content/uploads/2019/12/Skyview-Dubai-520x320.jpg" class="img-responsive" alt="The Address Residence Sky View Dubai">			</a>
                                    </li>
                                        <li>
                                        <a href="https://tecfires.com/architecture" title="Louvre Museum">
                                            <img src="https://tecfires.com/wp-content/uploads/2017/05/AR-1-main-pict-520x320.jpg" class="img-responsive" alt="Louvre Museum">			</a>
                                    </li>
                                        <li>
                                        <a href="https://tecfires.com/architecture" title="Qatar National Museum">
                                            <img src="https://tecfires.com/wp-content/uploads/2017/05/AR-4-main-pict-520x320.jpg" class="img-responsive" alt="Qatar National Museum">			</a>
                                    </li>
                                </ul>
                                <h3>Latest updates</h3>
                                <ul class="news-list">
                                    <li>
                                    <div class="image-holder">
                                        <a href="https://tecfires.com/news/tecfire-big-5-riyadh-exhibition-2024/">
                                            <img style="width: 100px;" src="https://tecfires.com/wp-content/uploads/2024/01/Big-5-Banner-Blue-wit-Opacity-300x134.png" class="img-responsive" alt="TECFIRE all set to Ignite Innovation at Big 5 Riyadh Exhibition 2024">				</a>
                                    </div>
                                    <div class="text-holder">
                                        <h4><a href="https://tecfires.com/news/tecfire-big-5-riyadh-exhibition-2024/" title="">TECFIRE all set to Ignite Innovation...</a></h4>
                                        <em class="date">January 23, 2024</em>
                                    </div>

                                </li>
                                    <li>
                                    <div class="image-holder">
                                        <a href="https://tecfires.com/news/new-project-in-illinois-enhanced-safety-at-indian-creek-high-school-with-tecfire/">
                                            <img style="width: 100px;" src="https://tecfires.com/wp-content/uploads/2024/01/Indian-Creek-News-Template-300x134.jpg" class="img-responsive" alt="New Project in Illinois: Enhanced Safety at Indian Creek High School with Tecfire">				</a>
                                    </div>
                                    <div class="text-holder">
                                        <h4><a href="https://tecfires.com/news/new-project-in-illinois-enhanced-safety-at-indian-creek-high-school-with-tecfire/" title="">New Project in Illinois: Enhanced Safety...</a></h4>
                                        <em class="date">January 5, 2024</em>
                                    </div>

                                </li>
                                    <li>
                                    <div class="image-holder">
                                        <a href="https://tecfires.com/news/tecfires-innovative-solutions-safeguard-dallah-namar-hospital-in-riyadh/">
                                            <img style="width: 100px;" src="https://tecfires.com/wp-content/uploads/2023/12/Dallah-Namar-300x134.jpg" class="img-responsive" alt="Tecfire’s Innovative Solutions Safeguard Dallah Namar Hospital in Riyadh">				</a>
                                    </div>
                                    <div class="text-holder">
                                        <h4><a href="https://tecfires.com/news/tecfires-innovative-solutions-safeguard-dallah-namar-hospital-in-riyadh/" title="">Tecfire’s Innovative Solutions Safeguard Dallah Namar...</a></h4>
                                        <em class="date">December 11, 2023</em>
                                    </div>

                                </li>
                                    <li>
                                    <div class="image-holder">
                                        <a href="https://tecfires.com/news/tecfire-group-maps-out-ambitious-plans-for-expansion-and-innovation-at-annual-board-of-directors-meeting-in-spain/">
                                            <img style="width: 100px;" src="https://tecfires.com/wp-content/uploads/2023/11/News-annual-meet@72x-80-300x134.jpg" class="img-responsive" alt="Tecfire Group Maps Out Ambitious Plans for Expansion and Innovation at Annual Board of Directors Meeting in Spain">				</a>
                                    </div>
                                    <div class="text-holder">
                                        <h4><a href="https://tecfires.com/news/tecfire-group-maps-out-ambitious-plans-for-expansion-and-innovation-at-annual-board-of-directors-meeting-in-spain/" title="">Tecfire Group Maps Out Ambitious Plans...</a></h4>
                                        <em class="date">November 30, 2023</em>
                                    </div>

                                </li>
                                    <li>
                                    <div class="image-holder">
                                        <a href="https://tecfires.com/news/revolutionizing-fire-rated-glass-tecfires-spectacular-debut-at-glassbuild-america-2023/">
                                            <img style="width: 100px;" src="https://tecfires.com/wp-content/uploads/2023/11/Glassbuild-A-300x134.jpg" class="img-responsive" alt="Revolutionizing Fire-Rated Glass: Tecfire’s Spectacular Debut at GlassBuild America 2023">				</a>
                                    </div>
                                    <div class="text-holder">
                                        <h4><a href="https://tecfires.com/news/revolutionizing-fire-rated-glass-tecfires-spectacular-debut-at-glassbuild-america-2023/" title="">Revolutionizing Fire-Rated Glass: Tecfire’s Spectacular Debut...</a></h4>
                                        <em class="date">November 7, 2023</em>
                                    </div>

                                </li>
                                    <li>
                                    <div class="image-holder">
                                        <a href="https://tecfires.com/news/fire-safety-excellence-tecfires-contribution-to-parisian-architecture/">
                                            <img style="width: 100px;" src="https://tecfires.com/wp-content/uploads/2023/10/Beaugrenelle-Paris-Tecfire-300x134.jpg" class="img-responsive" alt="Fire Safety Excellence: Tecfire’s Contribution to Parisian Architecture">				</a>
                                    </div>
                                    <div class="text-holder">
                                        <h4><a href="https://tecfires.com/news/fire-safety-excellence-tecfires-contribution-to-parisian-architecture/" title="">Fire Safety Excellence: Tecfire’s Contribution to...</a></h4>
                                        <em class="date">October 16, 2023</em>
                                    </div>

                                </li>
                                    <li>
                                    <div class="image-holder">
                                        <a href="https://tecfires.com/news/17447/">
                                            <img style="width: 100px;" src="https://tecfires.com/wp-content/uploads/2023/10/King-Abdullah-Financial-District-300x134.jpg" class="img-responsive" alt="Tecfire’s Fire-Resistant Glass Systems Selected for King Abdullah Financial District">				</a>
                                    </div>
                                    <div class="text-holder">
                                        <h4><a href="https://tecfires.com/news/17447/" title="">Tecfire’s Fire-Resistant Glass Systems Selected for...</a></h4>
                                        <em class="date">September 30, 2023</em>
                                    </div>

                                </li>
                                    <li>
                                    <div class="image-holder">
                                        <a href="https://tecfires.com/news/tecfires-t-flame-3-meter-high-glass-component-triumphs-in-rigorous-fire-tests/">
                                            <img style="width: 100px;" src="https://tecfires.com/wp-content/uploads/2023/10/T-Flame-3m-News-2-300x134.jpg" class="img-responsive" alt="Tecfire’s T-Flame 3-meter-high Glass Triumphs in Rigorous Fire Tests">				</a>
                                    </div>
                                    <div class="text-holder">
                                        <h4><a href="https://tecfires.com/news/tecfires-t-flame-3-meter-high-glass-component-triumphs-in-rigorous-fire-tests/" title="">Tecfire’s T-Flame 3-meter-high Glass Triumphs in...</a></h4>
                                        <em class="date">September 15, 2023</em>
                                    </div>

                                </li>
                                    <li>
                                    <div class="image-holder">
                                        <a href="https://tecfires.com/news/glassbuild-2023-tecfire-redefines-fire-safety-in-architecture/">
                                            <img style="width: 100px;" src="https://tecfires.com/wp-content/uploads/2023/08/Glassbuild-2023-Feature-Image-300x134.jpg" class="img-responsive" alt="GlassBuild 2023: Tecfire Redefines Fire Safety in Architecture">				</a>
                                    </div>
                                    <div class="text-holder">
                                        <h4><a href="https://tecfires.com/news/glassbuild-2023-tecfire-redefines-fire-safety-in-architecture/" title="">GlassBuild 2023: Tecfire Redefines Fire Safety...</a></h4>
                                        <em class="date">August 31, 2023</em>
                                    </div>

                                </li>
                                    <li>
                                    <div class="image-holder">
                                        <a href="https://tecfires.com/news/new-awarded-project-commercial-building-office-in-uae/">
                                            <img style="width: 100px;" src="https://tecfires.com/wp-content/uploads/2023/07/S5070-hinged-door-news2-300x134.jpg" class="img-responsive" alt="New Awarded Project: Commercial Building Office in UAE">				</a>
                                    </div>
                                    <div class="text-holder">
                                        <h4><a href="https://tecfires.com/news/new-awarded-project-commercial-building-office-in-uae/" title="">New Awarded Project: Commercial Building Office...</a></h4>
                                        <em class="date">July 31, 2023</em>
                                    </div>

                                </li>
	</ul>
		</div>
	</div>
</div>

		</div>
	</div>
</section>
			</main>




<div class="vnt_product">
    <div id="vnt-navation" class="breadcrumb vhponsition-re">
        <div class="wrapper">
            <div class="list-breadcrumb">
                <ul>
                    <li><a class="home" href="{{url('')}}"><span>Trang chủ</span></a></li>
                    <li><a href="{{url('blog-da-quy')}}"><span>Blog Đá Phong Thủy</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="vnt_product">
        <div class="wrapper">
            @can(\WebDevEtc\BlogEtc\Gates\GateTypes::MANAGE_BLOG_ADMIN)
                <div class="text-center">
                    <p class="mb-1">
                        You are logged in as a blog admin user.
                        <br>
                        <a href="{{route("blogetc.admin.index")}}"
                           class="btn border btn-outline-primary btn-sm">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            Go To Blog Admin Panel
                        </a>
                    </p>
                </div>
            @endcan
            <div class="page_heading">
                <h1>Blog Đá Phong Thủy</h1>
                <hr class="dashed">
            </div>
            <div class="vhpadding-lg-bottom-20 vhpadding-sm-bottom-20">
                <div class="blog_listing_sec">
                    <div class="row">
                        <div class="appendText">
                        @forelse($posts as $post)
                            @include("blogetc::partials.index_loop")
                        @empty
                            <div class="alert alert-danger">No posts</div>
                        @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center vhpadding-lg-bottom-50 vhpadding-sm-bottom-20 mx-auto">
                {{$posts->appends( [] )->links()}}
            </div>
            @include("blogetc::sitewide.search_form")
        </div>
    </div>
</div>
@endsection
