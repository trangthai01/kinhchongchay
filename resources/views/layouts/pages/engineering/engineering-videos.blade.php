@extends('layouts.default',['title' => 'Videos Kỹ Thuật - '.config('app.name'), 'header_class' => '' ])
@section('header-content')
    <div class="system-main">
        <div class="container-fluid no-ltr-padding">
            <div class="system-main__list parallex-550 col-sm-12 no-ltr-padding">
                <img src="{{ asset('images/pages/eng_videos_low.jpg ') }}" class="img-responsive" alt="">			
                <div class="system-main__mask valign-bottom">
                    <div class="text-holder">
                        <h1>Kỹ thuật</h1>
                        <p>Kênh video theo yêu cầu này là nguồn tài nguyên mới nhất về kính và khung kính chống cháy. Nhấp vào bên dưới để xem các video về các sản phẩm kính chống cháy theo chủ đề và xu hướng.</p>
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
@endsection