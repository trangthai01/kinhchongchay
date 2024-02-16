@php
/** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp
{{--Used on the index page (so shows a small summary--}}
{{--See the guide on webdevetc.com for how to copy these files to your /resources/views/ directory--}}
{{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}
<div class="news-post-list">
    <div class="col-sm-5 no-ltr-padding image-holder">
    <a href="{{$post->url()}}">
        {!! $post->imageTag('thumbnail', true, '') !!}
    </div>
    <div class="col-sm-7 text-holder">
        <h3><a href="{{$post->url()}}" title="TECFIRE all set to Ignite Innovation at Big 5 Riyadh Exhibition 2024">{{$post->title}}</a></h3>
        <em class="date">January 23, 2024</em>
        <strong title="{!! $post->generateIntroduction(400) !!}">{!! $post->generateIntroduction(400) !!}</strong>
        <p></p>
        <div class="btn-holder">
            <a href="{{$post->url()}}" class="btn btn-primary">Read more</a>
        </div>
    </div>
</div>