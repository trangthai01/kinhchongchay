@extends('layouts.default',['title' => 'Công nghệ cắt lớp - '.config('app.fullname'), 'header_class' => '' ])
@section('header-content')
    <div class="banner-block parallex-700 parallex-white-700">
        <img src="{{ asset('images/pages/cutting-edge-low.jpg') }}" class="img-responsive" alt="">	<div class="banner-text">
            <a href="{{ url('ve-chung-toi/cong-nghe-cat-lop') }}" title="Công nghệ cắt lớp">Công nghệ cắt lớp</a>
        </div>
    </div>
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
                        <meta name="numberOfItems" content="3"><meta name="itemListOrder" content="Ascending">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
                            <a href="{{url('')}}" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item">
                            <a href="{{url('/ve-chung-toi')}}" itemprop="item"><span itemprop="name">Kính chống cháy Việt</span></a>
                            <meta itemprop="position" content="2">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
                            <span itemprop="item"><span itemprop="name">Công nghệ cắt lớp</span></span>
                            <meta itemprop="position" content="3">
                        </li>
                    </ul>
                </div>	
            </div>
        </div>
        <section class="section section-cta">
            <div class="container">
                <div class="row company-top padding-bottom">
                    <div class="col-sm-4">
                        <div class="info-title color-primary">
                            <h2>Vietfire Glass áp dụng công nghệ tiên tiến nhất cho quy trình sản xuất tất cả các sản phẩm kính chống cháy.</h2>				
                        </div>
                    </div>
                    <div class="col-sm-8 text-holder">
                        <p>Vietfire Glass đã triển khai quản lý kiểm soát chất lượng <strong>ISO 9001:2015</strong> trong tất cả các quy trình nội bộ.</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-developing-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="developing-block" style="background: url('{{ asset('images/pages/bg-company-developing-560x300.jpg') }}') no-repeat;">
                            <h3>KHUNG VÀ PHỤ KIỆN</h3>						
                            <p>Vietfire Glass sử dụng khung và phụ kiện chất lượng cao nhất để xây dựng sản phẩm, từ đó đảm bảo độ hoàn thiện thẩm mỹ tốt nhất cũng như khả năng chống chịu và ổn định cao nhất trong trường hợp cháy, đạn hoặc va đập mạnh.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="developing-block" style="background: url('{{ asset('images/pages/bg-company-developing2-560x300.jpg') }}') no-repeat;">
                            <h3>PHẦN CỨNG</h3>						
                            <p>Các giải pháp phần cứng đa dạng mà Vietfire Glass cung cấp cho từng hệ thống đều đã vượt qua các thử nghiệm khắt khe nhất trên thị trường để đảm bảo độ bền trong sử dụng hàng ngày.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="developing-block" style="background: url('{{ asset('images/pages/bg-company-developing3-560x300.jpg') }}') no-repeat;">
                            <h3>KÍNH CÔNG NGHỆ CAO</h3>						
                            <p>Vietfire Glass chỉ sử dụng kính an toàn có chất lượng và tính năng cao nhất trên thị trường. Tất cả những điều này chứng tỏ hệ thống kính an toàn của Vietfire Glass là đáng tin cậy và bền bỉ nhất trên thị trường.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="developing-block" style="background: url('{{ asset('images/pages/bg-company-developing4-560x300.jpg') }}') no-repeat;">
                            <h3>SẢN XUẤT</h3>						
                            <p>Thông qua hệ thống ISO 9001, Vietfire Glass đã áp dụng các tiêu chuẩn quản lý chất lượng khắt khe nhất trong tất cả các quy trình sản xuất.</p>
                            <p><img decoding="async" class="alignright wp-image-4080" src="{{ asset('images/pages/ISO-CE-150x150.png') }}" alt="" width="170" height="75" sizes="(max-width: 170px) 100vw, 170px"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-certification">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-holder">
                            <h2>Phòng thử nghiệm và tổ chức chứng nhận sản phẩm</h2>					
                            Độ tin cậy: Vietfire Glass liên kết với các đơn vị doanh nghiệp uy tín nhất trong lĩnh vực thử nghiệm và chứng nhận sản phẩm.			
                        </div>
                        <div class="custom-acordian padding-both">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-custom">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse-65c09315d3b45" class="collapsed" aria-expanded="false">Applus Laboratory<i class="plus-minus"></i></a>										
                                        </h3>
                                        </div>
                                        <div id="collapse-65c09315d3b45" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <div class="accordian-content">
                                                    <div class="col-xs-12 col-sm-7 text-holder">
                                                        <p>It is one of the world's leading companies in terms of inspection, tests and certification.<br>
                                                        It provides solutions for clients in all kinds of sectors, with the aim of guaranteeing that their assets and products comply with environmental, quality, health and safety standards and regulations.</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 image-holder pull-right">
                                                        <img src="{{ asset('images/pages/L1-APPLUS.png') }}" class="img-responsive pull-right" alt="">													
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-custom">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-65c09315d3b4b" class="collapsed" aria-expanded="false">IFCC Consultants<i class="plus-minus"></i></a>										
                                            </h3>
                                        </div>
                                        <div id="collapse-65c09315d3b4b" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <div class="accordian-content">
                                                    <div class="col-xs-12 col-sm-7 text-holder">
                                                        <p>IFCC Consultants is an accredited, internationally-recognised entity which delivers impartial consultancy on fire safety. It is also a Certification Body accredited to certify products for the<br>CE Marking.</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 image-holder pull-right">
                                                        <img src="{{ asset('images/pages/L2-IFCC.png') }}" class="img-responsive pull-right" alt="">													
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-custom">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-65c09315d3b4e" class="collapsed" aria-expanded="false">Thomas Bell-Wright Laboratory<i class="plus-minus"></i></a>										
                                            </h3>
                                        </div>
                                        <div id="collapse-65c09315d3b4e" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <div class="accordian-content">
                                                    <div class="col-xs-12 col-sm-7 text-holder">
                                                        <p>An engineering company with multiple accreditations, providing independent testing, inspection and certification (TIC) services, mainly for the building construction sector. Thomas Bell-Wright has a wide range of inspection and testing services for the construction of architectural elements, as well as for fire separation and the safety of materials.</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 image-holder pull-right">
                                                        <img src="{{ asset('images/pages/L3-THOMAS.png') }}" class="img-responsive pull-right" alt="">													
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-custom">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-65c09315d3b50" class="collapsed" aria-expanded="false">Aitex Laboratory<i class="plus-minus"></i></a>										
                                            </h3>
                                        </div>
                                        <div id="collapse-65c09315d3b50" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <div class="accordian-content">
                                                    <div class="col-xs-12 col-sm-7 text-holder">
                                                        <p>Technology center dedicated to research, with the principal aim of improving the competitiveness of the sector while delivering society solutions to contribute to improving people's well-being, health and quality of life. Its numerous tests include fire resistance and behavior tests and bullet-resistance tests for glazed protection systems.</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 image-holder pull-right">
                                                        <img src="{{ asset('images/pages/L4-AITEX.png') }}" class="img-responsive pull-right" alt="">													
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-custom">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-65c09315d3b54" class="" aria-expanded="true">Giordano Institute Laboratory<i class="plus-minus"></i></a>										
                                            </h3>
                                        </div>
                                        <div id="collapse-65c09315d3b54" class="panel-collapse collapse in" aria-expanded="true" style="">
                                            <div class="panel-body">
                                                <div class="accordian-content">
                                                    <div class="col-xs-12 col-sm-7 text-holder">
                                                        <p>Technical organisation at the cutting edge in product tests, certification, research, design and training since 1959. Thanks to its international recognition and authorisation, which enable it to operate in different sectors, the Istituto Giordano is an entity which guarantees the quality of the products it certifies, which include its numerous tests for safety glass systems.</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 image-holder pull-right">
                                                        <img src="{{ asset('images/pages/L5-GIORDANO.png ') }}" class="img-responsive pull-right" alt="">													
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection