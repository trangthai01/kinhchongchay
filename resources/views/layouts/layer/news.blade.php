<!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->

<div class="tp-banner-container" style="visibility: visible;background: rgb(51, 79, 161);padding: 0px;margin: 0px auto;display: block;width: auto;max-height: none;overflow: visible;z-index: 1;position: relative;">
    <div id="newsBanner" class="tp-banner" >
        <ul>
        @if(!empty($latest_news))
            @foreach ($latest_news as $post)

            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                <!-- MAIN IMAGE -->
                <img src="{{ asset('images/slider/HB-Louvre-Installation.jpg') }}"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                {!! $post->imageTag('thumbnail', true) !!}

                <!-- LAYER NR. 1 -->
                <div class="tp-caption maincaption"
                    data-x="left" data-hoffset="20"
                    data-y="top" data-voffset="300"
                    style="z-index: 15; font-family: &quot;Work Sans&quot;; color: rgb(255, 255, 255); text-decoration: none; white-space: nowrap; min-height: 0px; min-width: 0px; max-height: none; max-width: none; text-align: left; line-height: 79px; letter-spacing: 0px; font-weight: 800; font-size: 79px; padding-bottom: 10px; backdrop-filter: none; filter: blur(0px); transform-origin: 50% 50%; opacity: 1; transform: translate(0px, 0px); visibility: visible;">{{$post->title}}
                </div>
            </li>

            @endforeach
        @endif
            
        </ul>
        <div class="tp-bannertimer"></div>
    </div>
</div>

<!-- THE SCRIPT INITIALISATION -->
<!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
<script type="text/javascript">

    var newsApi;

    jQuery(document).ready(function() {

        newsApi = jQuery('#newsBanner').revolution(
            {
                delay:9000,
                startwidth:1170,
                startheight:965,
                hideThumbs:10
            });

    });	//ready

</script>

<!-- END REVOLUTION SLIDER -->