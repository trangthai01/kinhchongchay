@extends('layouts.default',['title' => 'Giá trị cốt lõi - '.config('app.fullname'), 'header_class' => 'header-white' ])
@section('header-content')
    <script>
		fn_setCurrentMenu('company');
    </script>
@endsection

@section('content')
    <main id="main" class="bottom-gap top-gap">
        <section class="section section-full">
            <div class="container-fluid no-ltr-padding">
                <div class="row">
                    <div class="col-sm-12 col-md-4 full-column">
                        <div class="image-holder">
                            <img src="{{ asset('images/pages/corporate-values-kid-low-1230x1090.png') }}" class="img-responsive" alt="">
                            <div class="banner-text">
                                <a href="{{ url('company/corporate-values') }}" title="Giá trị cốt lõi">Giá trị cốt lõi</a>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h2>PHÁT TRIỂN BỀN VỮNG</h2>						
                            <p>Chúng tôi xem trung thực, minh bạch và giữ uy tín trong kinh doanh; liên tục cải tiến hệ thống quản lý, điều hành và áp dụng công nghệ tiên tiến là nền tảng để phát triển bền vững.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 full-column">
                        <div class="image-holder">
                            <img src="{{ asset('images/pages/img2-1230x1090.jpg') }}" class="img-responsive" alt="">
                        </div>
                        <div class="text-holder">
                            <h2>KINH NGHIỆM</h2>						
                            <p>Sức mạnh của chúng tôi nằm ở trình độ tích lũy: nẵm rõ kỹ thuật của sản phẩm và ứng dụng của nó, cùng với trình độ chuyên môn cao của đội ngũ kỹ thuật và nghiên cứu & phát triển, cho phép chúng tôi sản xuất các hệ thống công nghệ tiên tiến nhất trên thị trường. Tất cả những điều này luôn phù hợp với chứng nhận và phê duyệt sản phẩm theo quy định của Pháp Luật.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 full-column">
                        <div class="image-holder">
                            <img src="{{ asset('images/pages/HB-Louvre-Installation-1230x1090.jpg') }}" class="img-responsive" alt="">
                        </div>
                        <div class="text-holder">
                            <h2>CHẤT LƯỢNG</h2>						
                            <p>Chúng tôi tin rằng làm đúng ngay từ đầu và chú ý đến từng công tác chi tiết sẽ góp phần đảm bảo chất lượng và giảm thiểu chi phí khắc phục các sự cố của công trình.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection