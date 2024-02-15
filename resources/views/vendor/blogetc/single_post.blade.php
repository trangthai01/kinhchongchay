
@extends("layouts.default", ['title' => $post->genSeoTitle()])

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
    <div class="content-part">
        <div id="vnt-navation" class="breadcrumb vhponsition-re">
            <div class="wrapper">
                <div class="list-breadcrumb">
                    <ul>
                        <li><a class="home" href="{{url('')}}"><span>Trang chủ</span></a></li>
                        @if(is_null($post->categories))
                        <li><a href="{{url('blog-da-quy')}}"><span>Blog Đá Phong Thủy</span></a></li>
                        @else
                            @php
                            $isBlog = 'Y';
                            @endphp
                            @foreach ($post->categories as $category)
                                @if($category->id == '1')
                                    <li><a href="{{url('phong-thuy')}}"><span>Tâm Linh - Phong Thủy</span></a></li>
                                    @php $isBlog = 'N'; @endphp
                                    @break
                                @endif
                            @endforeach
                            @if($isBlog == 'Y')
                            <li><a href="{{url('blog-da-quy')}}"><span>Blog Đá Phong Thủy</span></a></li>
                            @endif
                        @endif
                        <li><a href="javascript:;"><span>{{$post->title}}</span></a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="blog_detail_sec">
            <div class="centering">
                @include("blogetc::partials.show_errors")
                @include("blogetc::partials.full_post_details")

                @if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled')
                    <div id="maincommentscontainer">
                        <h2 class="text-center" id="blogetccomments">Comments</h2>
                        @include("blogetc::partials.show_comments")
                    </div>
                @endif
            </div>
        </div>
        @if(!empty($otherPosts))
        <div class="" style="width:100%;float:left">
            <div class="centering">
                <hr>
                <p style="font-size: 14px;line-height: 35px;">Có thể bạn sẽ thích:</p>
                <div class="blog_listing_sec">
                    <div class="row">
                        <div class="appendText">
                        @foreach ($otherPosts as $otherPost)
                            <div class="blog_box ">
                                <a href="{{$otherPost->url()}}" class="pic"></a>
                                <a class="" href="{{$otherPost->url()}}">{!! $otherPost->imageTag('thumbnail', true, '') !!}</a>
                                <div class="text">
                                    <span class="top">
                                        @foreach($otherPost->categories as $category)
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
                                    <h4><a href="{{$otherPost->url()}}">{{$otherPost->title}}</a></h4>
                                    <div class="conText">
                                        <p></p>
                                        <p>{!! $otherPost->generateIntroduction(400) !!}</p>
                                        <p></p><a href="{{$otherPost->url()}}" class="read_more">Chi tiết <i>&gt;</i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
    </div>
@endsection

