@php
/** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp
{{--Used on the index page (so shows a small summary--}}
{{--See the guide on webdevetc.com for how to copy these files to your /resources/views/ directory--}}
{{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}
<div class="blog_box ">
    <a href="{{$post->url()}}" class="pic"></a>
    <a class="" href="{{$post->url()}}">{!! $post->imageTag('thumbnail', true, '') !!}</a>
    <div class="text">
        <span class="top">
            @foreach($post->categories as $category)
                @if($category->id != '1')
                <a href="{{ $category->url() }}" rel="category tag">
                    {{ $category->category_name }}
                </a>
                @endif
                @if (!$loop->last)
                ,
                @endif
            @endforeach
        </span>
        <h4><a href="{{$post->url()}}">{{$post->title}}</a></h4>
        <div class="conText">
            <p></p>
            <p>{!! $post->generateIntroduction(400) !!}</p>
            <p></p><a href="{{$post->url()}}" class="read_more">Chi tiết <i>&gt;</i></a>
        </div>
    </div>
</div>

<div class="news-post-list">
    <div class="col-sm-5 no-ltr-padding image-holder">
    <a href="{{$post->url()}}">
        {!! $post->imageTag('thumbnail', true, '') !!}
    </div>
    <div class="col-sm-7 text-holder">
        <h3><a href="{{$post->url()}}" title="TECFIRE all set to Ignite Innovation at Big 5 Riyadh Exhibition 2024">{{$post->title}}</a></h3>
        <em class="date">January 23, 2024</em>
        <strong title="TECFIRE, a pioneering force in the fire-rated glass systems industry, is gearing up to showcase its latest innovations at the highly anticipated Big 5 Riyadh Exhibition, scheduled to take place from February 26th to 29th, 2024. ">TECFIRE, a pioneering force in the fire-rated glass systems industry, is gearing up to showcase...</strong>
        <p>{!! $post->generateIntroduction(400) !!}</p>
        <div class="btn-holder">
            <a href="{{$post->url()}}" class="btn btn-primary">Read more</a>
        </div>
    </div>
</div>