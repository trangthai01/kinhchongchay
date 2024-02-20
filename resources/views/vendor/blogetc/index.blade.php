@extends("layouts.default",['title'=>'Tin Tức '.config('app.fullname'), 'header_class'=> 'header-white'])
@section('header-content')
    <script>
        fn_setCurrentMenu('news');
    </script>
@endsection
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
                            <span itemprop="item"><span itemprop="name">Tin Tức</span></span>
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
					        <h2 style="font-weight:bold">TIN TỨC</h2>				
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
			                    <h3>Dự án mới</h3>
                                <ul class="news-list news-list-image">
                                @if(!empty($latestProjects))
                                    @foreach ($latestProjects as $latestProject)
                                    <li>
                                        <a href="{{url('du-an')}}" title="{{$latestProject -> project_name}}">
                                            <img src="{{ asset('images/projects/' .  $latestProject -> image_thumbnail) }}" class="img-responsive" alt="{{$latestProject -> project_name}}">					
                                        </a>
                                    </li>
                                    @endforeach
                                @endif
                                </ul>
                                <h3>Tin mới</h3>
                                <ul class="news-list">
                                @if(!empty($latestPosts))
                                    @foreach ($latestPosts as $latestPost)
                                    <li>
                                        <div class="image-holder">
                                            {!! $latestPost->imageTag('thumbnail', true, 'otherpostthumbnail') !!}
                                        </div>
                                        <div class="text-holder">
                                            <h4><a href="{{$latestPost->url()}}" title="">{{$latestPost->title}}</a></h4>
                                        <em class="date">{{date("M j, Y", strtotime($latestPost->posted_at))}}</em>
                                        </div>
                                    </li>
                                    @endforeach
                                @endif
	                            </ul>
		                    </div>
	                    </div>
                    </div>
                </div>
	        </div>
        </section>
	</main>
@endsection
