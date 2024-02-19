
<div class="boxhome">
    <div class="wrapper">
        <div class="new_arrival_sec ">
            <h1>TIN TỨC</h1>
            <ul class="new_arrival_slider">
                @if(empty($latest_news))
                @else
                    @foreach($latest_news as $post)
                        <li class="product type-product">
                            <span class="category"></span>
                            <div class="image-wishlist" style="">
                            {!! $post->imageTag('thumbnail', true) !!}
                            </div>
                            <h2 style="font-family: Roboto; cursor: pointer; color: rgb(51, 79, 161); width: 100%; text-align: center; line-height: 30px; font-weight: 700; font-size: 20px;"><a href="{{$post->url()}}">{{$post -> title}}</a></h2>
                            <span style="font-family: Roboto; color: rgb(0, 0, 0); text-align: center; line-height: 20px; font-weight: 400; font-size: 14px;">{{date("M j, Y", strtotime($post->posted_at))}}</span><br/>
                            <a class="rs-layer rev-btn" href="{{$post->url()}}" target="_self" data-type="button" style="background-color: rgb(51, 79, 161); font-family: Roboto; color: rgb(255, 255, 255); text-align: center; line-height: 40px; font-weight: 300; font-size: 16px; border-color: transparent; border-style: solid; border-width: 1px; padding: 10px">Xem thêm </a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>
<?php
$latestNews = '{{ $latest_news }}';
?>
<script>

    var newsApi;
    var latestNews = "{{$latestNews}}";
    $(document).ready(function(){
        $(".new_arrival_slider").slick({
            infinite: true,
            slidesToShow:3,
            slidesToScroll:1,
            arrows: true,
            dots: true,
            focusOnSelect: true,
            responsive: [{
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 5
                    }
                }, 
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    })

</script>

<!-- END REVOLUTION SLIDER -->