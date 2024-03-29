@php
/** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp
{{--Used on the index page (so shows a small summary--}}
{{--See the guide on webdevetc.com for how to copy these files to your /resources/views/ directory--}}
{{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}
<div class="news-post-list">
    <div class="col-sm-5 no-ltr-padding image-holder">
        {!! $post->imageTag('thumbnail', true, '') !!}
    </div>
    <div class="col-sm-7 text-holder">
        <h3><a href="{{$post->url()}}" title="{{$post->title}}">{{$post->title}}</a></h3>
        <em class="date">{{date("M j, Y", strtotime($post->posted_at))}}</em>
        <strong title="{!! $post->generateIntroduction(200) !!}">{!! $post->generateIntroduction(200) !!}</strong>
        <p></p>
        <div class="btn-holder">
            <a href="{{$post->url()}}" class="btn btn-primary">Chi tiết</a>
        </div>
    </div>
</div>