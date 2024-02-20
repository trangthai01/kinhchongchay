@extends('layouts.default',['title' => 'Liên hệ '.config('app.fullname'), 'header_class' => '' ])
@section('css')
    
@endsection
@section('javascript')
    
@endsection
@section('header-content')
    <div class="system-main">
        <div class="container-fluid no-ltr-padding">
            <div class="system-main__list parallex-550 col-sm-12 no-ltr-padding">
                <img src="{{asset('images/pages/contact_low.jpg')}}" class="img-responsive" alt="">			
                <div class="system-main__mask valign-bottom">
                    <div class="text-holder">
                        <h1>Liên hệ</h1>
                        <p>Đừng ngần ngại liên hệ với chúng tôi để biết thêm bất kỳ thông tin nào bạn cần.<br>Chúng tôi rất sẵn lòng hỗ trợ bạn.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        fn_setCurrentMenu('contact');
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
							<a href="{{url('')}}" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
							<meta itemprop="position" content="1">
						</li>
						<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="trail-item trail-end">
							<span itemprop="item"><span itemprop="name">Liên hệ</span></span>
							<meta itemprop="position" content="2">
						</li>
					</ul>
				</div>	
			</div>
		</div>
		<div class="section section-contact-map">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div id="contact-map">
							<iframe style="width: 100%; height: 100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.36667609488!2d105.79150391424515!3d21.018009493522708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab583330f419%3A0xcc8fd36902f56f9a!2zVMOyYSBOaMOgIEY0IFRydW5nIEvDrW5o!5e0!3m2!1sen!2s!4v1585039565147!5m2!1sen!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBjX6ufZgLBnk5ptI03n41gudFumMntyo&amp;callback=initMap" async="" defer=""></script>
		<section class="section section-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 enquiry-form-holder">
						<h2>Gửi liên hệ</h2>
						<div class="wpcf7 js" id="wpcf7-f314-p311-o1" lang="en-US" dir="ltr">
							<div class="screen-reader-response">
								<p role="status" aria-live="polite" aria-atomic="true"></p> 
								<ul></ul>
							</div>
							@if(Session::has('success'))
							<div class="alert alert-success">
								{{ Session::get('success') }}
							</div>
							@endif
						{!! Form::open(['route'=>'contactus.store']) !!}
						<div class="form-group custom-group {{ $errors->has('name') ? 'has-error' : '' }}">
						{!! Form::label('Họ tên:') !!}
						{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Nhập họ tên']) !!}
						<span class="text-danger">{{ $errors->first('name') }}</span>
						</div>
						<div class="form-group custom-group {{ $errors->has('email') ? 'has-error' : '' }}">
						{!! Form::label('Email:') !!}
						{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Nhập Email']) !!}
						<span class="text-danger">{{ $errors->first('email') }}</span>
						</div>
						<div class="form-group custom-group {{ $errors->has('message') ? 'has-error' : '' }}">
						{!! Form::label('Tin nhắn:') !!}
						{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Nhập nội dung']) !!}
						<span class="text-danger">{{ $errors->first('message') }}</span>
						</div>
						<div class="form-group">
							<button class="btn btn-success btn-primary">Gửi liên hệ!</button>
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection