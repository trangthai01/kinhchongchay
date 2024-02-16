
@extends("layouts.default", ['title' => $post->genSeoTitle(), 'header_class'=> 'header-white'])

@section('kwMeta')
    <meta name="title" content="{{$post->genSeoTitle()}}">
    <meta name="description" content="{{$post -> meta_desc}}">
@endsection
@section('ogMeta')
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{$post -> title}}">
    <meta property="og:description" content="{{$post -> meta_desc}}">
    <meta property="og:image" content="{{asset('blog_images/' .  $post-> image_medium)}}">
    <meta property="og:image:alt" content="{{$post -> title}}">
@endsection
@section("content")
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
                            <a href="{{url('news')}}" itemprop="item"><span itemprop="name">News</span></a>
                            <meta itemprop="position" content="2">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
                            <span itemprop="item"><span itemprop="name">{{$post -> title}}</span></span>
                            <meta itemprop="position" content="3">
                        </li>
                    </ul>
                </div>	
            </div>
        </div>
        <section class="section section-news-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="info-title color-primary">
                            <h2>{{$post -> title}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="news-post">
                            @include("blogetc::partials.show_errors")
                            @include("blogetc::partials.full_post_details")
                            <div class="btn-holder">
                                <a href="{{url('news')}}" class="btn btn-primary">Back to News</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="news-right">
                                <h3>Latest projects</h3>
                                <ul class="news-list news-list-image">
                                @if(!empty($latestProjects))
                                    @foreach ($latestProjects as $latestProject)
                                    <li>
                                        <a href="{{url('projects')}}" title="{{$latestProject -> project_name}}">
                                            <img src="{{ asset('images/projects/' .  $latestProject -> image_thumbnail) }}" class="img-responsive" alt="{{$latestProject -> project_name}}">					
                                        </a>
                                    </li>
                                    @endforeach
                                @endif
                                </ul>
                                <h3>Latest updates</h3>
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

