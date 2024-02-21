@extends('layouts.default',['title' => 'Chứng chỉ - '.config('app.fullname'), 'header_class' => 'header-white' ])
@section('css')
    
@endsection
@section('javascript')
   
@endsection
@section('header-content')
    <div class="system-main">
        <div class="container-fluid no-ltr-padding">
            <div class="system-main__list parallex-700 parallex-white-700 col-sm-12 no-ltr-padding">
                <img src="{{ asset('images/pages/certif-and-approvals-low-1920x700.jpg') }}" class="img-responsive" alt="">			
                <div class="system-main__mask valign-bottom" style="display: none;">
                    <div class="text-holder">
                        <h1>Chứng chỉ</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
		fn_setCurrentMenu('engineering');
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
                            <a href="{{ url('ky-thuat') }}" itemprop="item"><span itemprop="name">Kỹ Thuật</span></a>
                            <meta itemprop="position" content="2">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
                            <span itemprop="item"><span itemprop="name">Chứng chỉ</span></span>
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
                            <h2>Chứng chỉ</h2>
                            </div>
                        </div>
                        <div class="col-sm-8 text-holder">
                        <p>Vietfire Glass tự hào có kiến thức kỹ thuật sâu rộng về sản phẩm và ứng dụng trong các công trình. Chúng tôi cam kết chất lượng đầu ra sản phẩm cao nhất dựa theo quy chuẩn PCCC và các yêu cầu các của pháp luật. Kết hợp với đội ngũ Kỹ thuật nghiên cứu và phát triển, Vietfire Glass giúp thiết kế các sản phẩm tiên tiến nhất trên thị trường đáp ứng thị hiếu và nhu cầu của khách hàng.</p>
                        <p>Vui lòng liên hệ với Vietfire Glass (san81018@gmail.com) để được cung cấp thêm các thông tin về những báo cáo thử nghiệm sản phẩm và giấy chứng nhận sản phẩm theo yêu cầu.</p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="section section-certification-approvals">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-5">
                            <div class="panel-group" id="parent-65ced544ea10a">
                                <div class="panel panel-custom">
                                    <div id="con-65ced544ea10e" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="accordian-content">
                                                <div class="list-holder">
                                                    <h3>Cơ quan kiểm nghiệm chính thức:</h3>
                                                    <ul class="certification-list two-column">
                                                        @foreach($certifications as $item)
                                                        <li>
                                                            <a data-toggle="modal" href="#show-65ced545038c6" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="{{asset('images/pages/certifications/' . $item->image_thumbnail )}}" class="img-responsive" alt="">                                                                
                                                            </a>
                                                            <div class="modal fade modal-custom-white" id="show-65ced545038c6">
                                                                <div class="modal-dialog container">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body row">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                            <div class="col-sm-12">
                                                                                <div class="certification-holder-popup">
                                                                                    <div class="image-holder">
                                                                                        <img src="{{asset('images/pages/certifications/' . $item->image )}}" class="img-responsive" alt="">							
                                                                                    </div>
                                                                                    <div class="desc-certification-popup">{{$item->meta_desc}}</div>					
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
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
        </div>
    </main>               
@endsection