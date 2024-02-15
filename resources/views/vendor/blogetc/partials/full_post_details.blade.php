@php
    /** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp
@can(\WebDevEtc\BlogEtc\Gates\GateTypes::MANAGE_BLOG_ADMIN)
    <a href="{{$post->editUrl()}}" class="btn btn-outline-secondary btn-sm pull-right float-right" style="position:relative;z-index:999">
        Edit Post
    </a>
@endcan
<div class="page_heading">
    <span class="top"></span>
    <h1>{{$post->title}}</h1>
    <hr class="dashed">
</div>
<div class="vhpadding-lg-bottom-50 vhpadding-sm-bottom-20">
    {!! $post->imageTag('medium', false, 'd-block mx-auto') !!}

    <div class="blog_body_content">
        {!! $post->renderBody() !!}

        {{--@if(config("blogetc.use_custom_view_files")  && $post->use_view_file)--}}
        {{--                                // use a custom blade file for the output of those blog post--}}
        {{--   @include("blogetc::partials.use_view_file")--}}
        {{--@else--}}
        {{--   {!! $post->post_body !!}        // unsafe, echoing the plain html/js--}}
        {{--   {{ $post->post_body }}          // for safe escaping --}}
        {{--@endif--}}
    </div>

    <hr/>

    @if($post->posted_at)
        Posted <strong>{{ $post->posted_at->diffForHumans() }}</strong>
    @endif

    @includeWhen($post->author, 'blogetc::partials.author', ['post'=>$post])
    @includeWhen($post->categories, 'blogetc::partials.categories', ['post'=>$post])
    
    @if(!empty($post->productson()) and $post->productson()->count() > 0)
        <div class="tp_info">
            <div class="titlecare">
                <h2>Có thể bạn cũng thích</h2>
            </div>
            <div class="gridPP">
                @foreach ($post->productson() as $item)
                <div class="grid-item col">
                    <div class="itemprohome">
                        <a href="{{ url('san-pham/'.$item->slug) }}" class="grid-item-link product-lists-item">
                            <figure class="grid-image preScale scaleIn">
                                <div class="grid-image-wrapper">
                                    <img src="{{ asset('images/products/' .  $item -> image) }}" alt="{{ $item -> product_name}}" data-load="false" class="grid-item-image grid-image-cover" data-parent-ratio="0.8"  /> 
                                </div>
                            </figure>
                        </a>
                        <div class="decs">
                            <div class="tttitle">
                                <h3><a href="{{ url('san-pham/'.$item->slug) }}">{{ $item -> product_name}}</a></h3>
                            </div>
                            <hr class="dashed" style="background-color:#ce2a2b">
                            <div class="grpPrice">
                                <div class="ttprice">
                                    @if($item -> price == 0)
                                        <div class="tnews">Liên hệ</div>
                                    @else
                                        <div class="tnews">{{number_format($item -> price, 0)}}đ</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @endif;
    @if(!empty($relatedPosts))
        <hr>
        <p style="font-size:14px">Xem thêm:</p>
        <ul class="related_posts_ul">
            @foreach ($relatedPosts as $post)
            <li><a href="{{$post->url()}}" target="_self" rel="nofollow">{{$post->title}}</a></li>
            @endforeach
        </ul>
    @endif
    
</div>

