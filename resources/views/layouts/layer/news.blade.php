
<div class="boxhome">
    <div class="wrapper">
        <div class="new_arrival_sec ">
            <h1>NEWS</h1>
            <ul class="new_arrival_slider">
                @if(empty($latest_news))
                @else
                    @foreach($latest_news as $post)
                        <li class="product type-product">
                            <span class="category"></span>
                            <div class="image-wishlist" style="">
                            {!! $post->imageTag('thumbnail', true) !!}
                            </div>
                            <h2 class="woocommerce-loop-product__title" style="z-index: 10; font-family: Roboto; cursor: pointer; touch-action: pan-y; height: auto; color: rgb(51, 79, 161); text-decoration: none; white-space: normal; width: 100%; min-height: 0px; min-width: 0px; max-height: none; max-width: none; text-align: center; line-height: 30px; letter-spacing: 0px; font-weight: 700; font-size: 20px; backdrop-filter: none; filter: none; transform-origin: 50% 50%; opacity: 1; transform: translate(0px, 0px); visibility: visible;"><a href="{{$post->url()}}">{{$post -> title}}</a></h2>
                            <a class="rs-layer rev-btn" href="{{$post->url()}}" target="_self" data-type="button" style="z-index: 6; background-color: rgb(51, 79, 161); font-family: Roboto; touch-action: pan-y; height: auto; width: auto; color: rgb(255, 255, 255); text-decoration: none; white-space: normal; min-height: 0px; min-width: 0px; max-height: none; max-width: none; text-align: center; line-height: 40px; letter-spacing: 0px; font-weight: 300; font-size: 16px; border-color: transparent; border-style: solid; border-width: 1px; padding-left: 10px; padding-right: 10px; backdrop-filter: none; filter: none; transform-origin: 50% 50%; opacity: 1; transform: translate(0px, 0px); visibility: visible; border-radius: 0px;">Read More </a>
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
            slidesToShow:2,
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