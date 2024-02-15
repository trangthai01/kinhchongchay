@php
/** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp
{{--Used on the index page (so shows a small summary--}}
{{--See the guide on webdevetc.com for how to copy these files to your /resources/views/ directory--}}
{{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}
<div class="blog_box ">
    <a href="{{$post->storyUrl()}}" class="pic"></a>
    <a class="" href="{{$post->storyUrl()}}">{!! $post->imageStoryTag('medium', true, '') !!}</a>
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
        <h4><a href="{{$post->storyUrl()}}">{{$post->title}}</a></h4>
        <div class="conText">
            <p></p>
            <p>{!! $post->generateIntroduction(400) !!}</p>
            <p></p><a href="{{$post->storyUrl()}}" class="read_more">Chi tiết <i>&gt;</i></a>
        </div>
    </div>
</div>