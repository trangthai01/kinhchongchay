@extends('layouts.default',['title' => 'Hồ sơ công ty '.config('app.fullname'), 'header_class' => 'header-white' ])
@section('css')
    <link href="{{ asset('css/theme/plyr.css') }}" rel="stylesheet">   
@endsection
@section('javascript')
    <script src="{{ asset('js/theme/plyr.js') }}" ></script>
@endsection
@section('header-content')
    <div class="banner-block parallex-700 parallex-white-700">
        <img src="{{ asset('images/web-company-profile-banner.jpg') }}" srcset="{{ asset('images/web-company-profile-banner.jpg') }} 1x" class="img-responsive" alt="">	
        <div class="banner-text">
            <a href="{{ url('company/company-profile') }}" title="Company Profile">Hồ sơ công ty</a>
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
                            <a href="{{url('/company')}}" itemprop="item"><span itemprop="name">Về chúng tôi</span></a>
                            <meta itemprop="position" content="2">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
                            <span itemprop="item"><span itemprop="name">Hồ sơ công ty</span></span>
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
                        <div class="info-title color-primary border-all padding-all">
                            <h2>Kính chống cháy Việt - Mang bình an đến mọi nhà<br></h2>					
                        </div>
                    </div>
                    <div class="col-sm-8 text-holder padding-both">
                        <p>Vietfire Glass hoạt động chuyên nghiệp trong lĩnh vực sản xuất và kinh doanh các loại kính chuyên dụng chống cháy.</p>
                    </div>
                </div>
                <div class="row padding-both safe-text-block">
                    <div class="col-sm-6">
                        <div class="text-holder">
                            <h1><span style="color: #000000;"><strong>An Toàn và Chuyên Nghiệp</strong></span></h1>
                            <p>Công ty TNHH Công nghệ Kính chống cháy Việt (gọi tắt là Vietfire Glass) được thành lập theo giấy đăng ký kinh doạnh số 0108849310 ngày 30/7/2019 mã số doanh nghiệp 0108849310.</p>
                            <p>Vietfire Glass hoạt động chuyên nghiệp trong lĩnh vực sản xuất và kinh doanh các loại kính chuyên dụng chống cháy như: Kính chống cháy một lớp không cách nhiệt (E); kính chống cháy nhiều lớp cách nhiệt (EI); cửa, vách kính chống cháy cách nhiệt, phi cách nhiệt khung thép hoặc hợp kim nhôm theo tiêu chuẩn Anh, Châu Âu. Các sản phẩm của Vietfire glass đều được Trung tâm Nghiên cứu Ứng dụng Khoa học Kỹ thuật PCCC, Cục Cảnh sát Phòng cháy chữa cháy&CHCN, Bộ Công an kiểm nghiệm và cấp Giấy chứng nhận phương tiện PCCC bắt buộc. Tính năng của sản phẩm hoàn toàn phù hợp với các tiêu chuẩn Quốc gia (Quy chuẩn 06:2010/BXD; TCVN 9311:2012, ISO 834-1999, ISO 834-2000 - thử nghiệm chịu lửa các công trình xây dựng; TCVN 9383:2012 – thử nghiệm chịu lửa cửa đi và cửa ngăn cháy). <br>
                            <p>Công ty chúng tôi có đội ngũ lãnh đạo, cán bộ quản lý giàu kinh nghiệm, đội ngũ kỹ sư, cử nhân chuyên ngành có trình độ cao, được tốt nghiệp các trường Đại học có uy tín trong và ngoài nước như: Đại học Xây dựng, Đại học Kiến trúc, Đại học tài chính kế toán, Đại học kinh tế quốc dân, …….. Với sự nỗ lực và sáng tạo không ngừng của toàn thể cán bộ nhân viên, Công ty sẽ trở thành một trong những doanh nghiệp lớn mạnh trong lĩnh vực sản xuất và kinh doanh các loại kính chuyên dụng chống cháy tại Việt Nam. </p>
                            <p>Giám đốc Công ty TNHH Công nghệ Kính chống cháy Việt có nhiều năm là lãnh đạo của Công ty chuyên về cung cấp, thi công lắp đặt các sản phẩm về kính chống cháy tại Việt Nam, trực tiếp điều hành, thi công, lắp đặt,…………..các dự án trên địa bàn cả nước, như: Dự án xây dựng tuyến đường sắt trên cao Cát Linh - Hà Đông; Dự án các tòa nhà chung cư An Bình City tại số 234 Phạm Văn Đồng; Dự án xây dựng Viện kiểm sát tối cao tại số 9, Phạm Văn Bạch; trụ sở Công ty xây dựng Hà Nội số 57, Quang Trung, Hà Nội;....</p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="row padding-both safe-text-block">
                        <div class="col-sm-6">
                            <div class="text-holder">
                                <h2>Ứng dụng công nghệ tiên tiến và Không ngừng học hỏi</h2>
                                <p>Cùng với các chuyên gia tại trường Đại học PCCC nghiên cứu, đốt kiểm định thành công mẫu kính chống cháy, cách nhiệt (EI) đầu tiên tại Việt Nam.</p>
                                <p>Hợp tác quốc tế về lĩnh vực kính chống cháy với các đối tác sản xuất kính chống cháy tại: Trung Quốc, Đức, Nhật Bản...</p>
                                <p>Trực tiếp tham gia thực hiện công tác đốt mẫu- kiểm định cho các loại kính chống cháy: E và EI.</p>
                                <p>Công ty TNHH Công nghệ Kính chống cháy Việt luôn không ngừng tìm tòi, nghiên cứu để trực tiếp sản xuất được sản phẩm kính chống cháy với chất lượng tốt nhất, tiến độ sản xuất nhanh nhất và giá cả hợp lý nhất mang thương hiệu Việt và là một công ty chuyên nghiệp sản xuất, cung cấp, lắp đặt kính chống cháy tại Việt Nam đảm bảo các tiêu chuẩn quy định về phòng cháy chữa cháy và xây dựng.</p>
                                <p>Luôn đi trước đón đầu để mang đến cho khách hàng các loại kính chống cháy an toàn nhất và hiện đại nhất từng bước đáp ứng các quy định của Pháp luật về phòng cháy, chữa cháy, đem lại sự bình an cho mỗi gia đình.</p>
                                <h2>Song hành tới thành công</h2>
                                <p>Với triết lý kinh doanh “Win Win”, “Song hành tới thành công”, đôi bên cùng có lợi, Công ty TNHH Công nghệ Kính chống cháy Việt khẳng định sẽ luôn là đối tác tin cậy nhất của mọi khách hàng.</p>
                                <p>Đến với Vietfire Glass, Quý khách hàng sẽ luôn được cung cấp các dịch vụ hậu mãi, chất lượng và giá cả hợp lý nhất. Các sản phẩm của chúng tôi được sản xuất dựa trên công nghệ tiên tiến hiện đại, đội ngũ kỹ thuật lành nghề, tâm huyết sẽ đảm bảo chất lượng, tính thẩm mỹ cho mỗi sản phẩm.</p>
                                <p>Chúng tôi luôn tâm niệm khách hàng là nhân tố quan trọng nhất góp phần quyết định đến sự thành công của Công ty. Luôn xem quyền lợi của Quý khách hàng là quyền lợi của chính mình để không ngừng hoàn thiện, xứng đáng trở thành đối tác, người bạn thân thiết nhất trên con đường phát triển của Quý khách hàng!</p>
                            </div>
                        </div>
                        <div class="col-sm-12 padding-both">
                            <div class="image-holder">
                                <img src="{{ asset('images/pages/1-1140x300.png') }}" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row padding-both safe-text-block">
                        <div class="col-sm-6">
                            <div class="text-holder">
                                <h2>Khách hàng của chúng tôi:</h2>
                            </div>
                    </div>
                    <div class="col-sm-12 padding-both">
                        <div class="image-holder">
                            <img src="{{ asset('images/pages/2-1140x300.png') }}" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection