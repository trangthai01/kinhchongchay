@extends('layouts.default',['title' => 'Projects '.config('app.name'), 'header_class' => '' ])
@section('header-content')
    <div class="system-main">
        <div class="container-fluid no-ltr-padding">
            <div class="system-main__list parallex-550 col-sm-12 no-ltr-padding">
                <img src="https://tecfires.com/wp-content/uploads/2017/05/AR_H550-1920x550.jpg" srcset="https://tecfires.com/wp-content/uploads/2017/05/AR_H550.jpg 1x" class="img-responsive" alt="">			<div class="system-main__mask valign-bottom">
                    <div class="text-holder">
                        <h1>Các dự án nổi bật</h1>
                        <p>Kính chống cháy Việt tự hào tham gia vào nhiều dự án lớn và quan trọng của cả nước.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
		fn_setCurrentMenu('projects');
    </script>
@endsection

@section('content')
    <main id="main" class="bottom-gap top-gap">
        <div class="section breadcrumb-holder">
            <div class="container">
                <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                    <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <meta name="numberOfItems" content="2"><meta name="itemListOrder" content="Ascending">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
                            <a href="{{url('')}}" rel="home" itemprop="item">
                                <span itemprop="name">Home</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
                            <span itemprop="item"><span itemprop="name">Công trình kiến trúc</span></span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ul>
                </div>	
            </div>
        </div>
        <div class="section section-architecture">
            <div class="container">
                <div class="row">
                    <div id="resultProject" style="overflow: auto">
                        @include('layouts.layer.project_loop')
                    </div>
                    <div id="pagination">
                        <div class="viewmore" id="pageProjectNav">
                            <a href="javascript:;" rel="nofollow"><span class="fa-caret-down">Xem thêm</span></a>
                        </div>
                    </div>
			
		        </div>
	        </div>
        </div>
        <script>
            var page = 2;
            $(document).on('click', '#pageProjectNav', function(e){
                var _this = $(this);
                var html_ = '#resultProject';
                var len_ = '#resultProject .col';
                var offset = parseInt($(len_).length);
                    
                $(_this).addClass('disabled').children('a').html('<div class="lds-ellipsis h20"><div></div><div></div><div></div><div></div></div>');
                setTimeout(function(){
                    var mydata = 'page='+page;
                    $.ajax({
                        url: ROOT_MOD + '/projects',
                        type: 'GET',
                        data: mydata,
                        beforeSend: function() {},
                    })
                    .done(function(data) {
                        page++;
                        $(html_).append(data.html);
                        total = data.total;

                        var offset = $(len_).length;
                        if (offset >= total) {
                            _this.remove();
                        }
                    })
                    .fail(function() {})
                    .always(function() {
                        $(_this).removeClass('disabled').children('a').html('<span class="fa-caret-down">Xem thêm</span>');
                    });
                }, 1000);
            });
        </script>
	</main>
@endsection