@extends('layouts.default',['title' => 'Company '.config('app.name'), 'header_class' => '' ])
@section('css')
    <link href="{{ asset('css/theme/plyr.css') }}" rel="stylesheet">   
@endsection
@section('javascript')
    <script src="{{ asset('js/theme/plyr.js') }}" ></script>
@endsection
@section('header-content')
    <section class="banner-block video-block">
        <div tabindex="0" aria-label="Kính chống cháy Việt - Video">
            <div id="player" class="company-video plyr__video-wrapper plyr__video-embed plyr--setup">
                <iframe id="youtube-5042" frameborder="0" allowfullscreen="" allow="autoplay" title="Kính chống cháy Việt - Video" width="640" height="360" src="https://www.youtube.com/embed/SaGGqNs3t2w?autoplay=1&amp;controls=0&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;cc_load_policy=0&amp;cc_lang_pref=en&amp;wmode=transparent&amp;modestbranding=1&amp;disablekb=1&amp;origin=https%3A%2F%2Ftecfires.com&amp;enablejsapi=1&amp;widgetid=1" data-gtm-yt-inspected-14="true" tabindex="-1"></iframe>
            </div>
        </div>
    </section>
    <script>
        fn_setCurrentMenu('company');
    </script>
@endsection
@section('content')
    <main id="main" class="bottom-gap top-gap">
        <div class="section breadcrumb-holder">
            <div class="container">
                <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                    <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <meta name="numberOfItems" content="2">
                        <meta name="itemListOrder" content="Ascending">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
                            <a href="{{url('')}}" rel="home" itemprop="item">
                                <span itemprop="name">Home</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
                            <span itemprop="item"><span itemprop="name">Company</span></span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ul>
                </div>	
            </div>
        </div>

        <section class="section section-cta">
            <div class="container">
                <div class="row padding-bottom">
                    <div class="col-sm-4">
                        <div class="info-title color-primary">
                            <h2>Kính chống cháy Việt. <br>Hệ thống kính chống cháy<br> thế hệ mới.</h2>				
                        </div>
                    </div>
                    <div class="col-sm-8 text-holder">
                        <p><strong>Kính chống cháy Việt tự hào là công ty hàng đầu trong lĩnh vực sản xuất kính chống cháy tại Việt Nam. </strong> 
                        Với sự sáng tạo trong Kỹ thuật, cùng sự tư vấn chuyên nghiệp và hiểu biết sâu sắc về sản phẩm, chúng tôi đem đến mọi giải pháp trong lĩnh vực kính chống cháy nhằm đáp ứng các quy định chặt chẽ của Pháp Luật và thị hiếu của khách hàng. Ưu tiên hàng đầu của chúng tôi là đảm bảo độ an toàn cao nhất cho người sử dụng.</p>
                    </div>
                </div>
                <div class="row padding-both">
                    <div class="col-sm-4">
                        <div class="tecfire-box border-all">
                            <h3>HỒ SƠ NĂNG LỰC</h3>
                            <ul>
                                <li>Được thành lập vào năm 2019.</li>
                                <li>Kính chống cháy Việt triển khai hơn 200 dự án trên khắp Việt Nam.</li>
                                <li>Trụ sở chính tại Hà Nội.</li>
                                <li>Nhà máy sản xuất tại Trung Quốc và Việt Nam.</li>
                                <li>Đốt mẫu và kiểm thử theo đúng quy định của Pháp Luật.</li>
                                <li>+200 khách hàng.</li>
                                <li>+500 dự án</li>
                                <li>250,000 mét vuông kính chống cháy đã được lắp đặt</li>
                                <li>Đi đầu trong lĩnh vực nghiên cứu kỹ thuật hệ thống kính chống cháy trên thị trường.</li>
                                <li>Đội ngũ kỹ thuật có trình độ chuyên môn cao trong thiết kế và sản xuất kính chịu lửa theo tiêu chuẩn yêu cầu.</li>
                            </ul>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="tecfire-box border-all">
                            <h3>Kính chống cháy Việt: Hiểu thêm về chúng tôi</h3>
                            <p><strong class="sub-title">Hệ thống kính chống cháy</strong> 
                            Chiến lực của Kính chống cháy Việt là cung cấp các hệ thống kính chống cháy an toàn nhất với mức giá cạnh tranh nhất. <strong>Trình độ chuyên môn cao, kinh nghiệm sâu rộng và cách tiếp cận tập trung vào khách hàng</strong> giúp chúng tôi trở thành công ty hàng đầu về hệ thống kính chống cháy tại Việt Nam.</p>
                            <p>&nbsp;</p>
                        <div>
                        <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-company-category">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                            <div class="company-category-block">
                                <a href="{{ url('company/company-profile') }}" title="Hồ sơ công ty">
                                    <h3>HỒ SƠ CÔNG TY</h3><p>Với các dự án trải dài trên khắp cả nước.</p>
                                    <span class="icon-right"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                </a>
                            </div>
                        </div>
                                    <div class="col-sm-6">
                            <div class="company-category-block">
                                <a href="{{ url('company/corporate-values') }}" title="Giá trị doanh nghiệp">
                                    <h3>GIÁ TRỊ DOANH NGHIỆP</h3><p>Đổi mới, Tin cậy, Kinh Nghiệm và Sáng tạo.</p>
                                    <span class="icon-right"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                </a>
                            </div>
                        </div>
                                    <div class="col-sm-6">
                            <div class="company-category-block">
                                <a href="{{ url('company/our-valued-clients') }}" title="Khách hàng">
                                    <h3>KHÁCH HÀNG</h3><p>Độ tin cậy và niềm tin của khách hàng là tư duy chiến lược của chúng tôi.</p>
                                    <span class="icon-right"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                </a>
                            </div>
                        </div>
                                    <div class="col-sm-6">
                            <div class="company-category-block">
                                <a href="{{ url('company/cutting-edge-technology') }}" title="Công nghệ cắt cạnh Cutting-edge">
                                    <h3>CÔNG NGHỆ CẮT CẠNH CUTTING-EDGE</h3><p>Sản phẩm có chất lượng và ứng dụng công nghệ cao nhất</p>
                                    <span class="icon-right"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                </a>
                            </div>
                        </div>
                            </div>
            </div>
        </section>
    </main>
@endsection