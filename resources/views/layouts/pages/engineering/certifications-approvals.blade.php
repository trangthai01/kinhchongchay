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
            <div class="section section-certification-approvals" style="display:none">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-5">
                            <div class="title-holder">
                                <h2>Europe</h2>                    
                            </div>
                            <div class="panel-group" id="parent-65ced544ea10a">
                                <div class="panel panel-custom">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#parent-65ced544ea10a" href="#con-65ced544ea10e" aria-expanded="true">Europe<i class="plus-minus"></i></a>                                        </h3>
                                    </div>
                                    <div id="con-65ced544ea10e" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="accordian-content">
                                                
                                                                                                    <div class="list-holder">
                                                        <ul class="certification-list three-column">
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-EN.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-CE-copia.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                                    <div class="list-holder">
                                                        <h3>Official testing bodies:</h3>
                                                        <ul class="certification-list two-column">
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced545038c6" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-1-TB-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced545038c6">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-1-TB-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54505337" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-2-applus-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54505337">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-2-applus-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced545064cf" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-3-Aitex-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced545064cf">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-3-Aitex-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Bullet-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54507672" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-4-giordano-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54507672">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-4-giordano-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Burglar-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                                    <div class="list-holder">
                                                        <h3>Official certification bodies:</h3>
                                                        <ul class="certification-list two-column">
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54508e18" title="">
                                                                <img style="width: 215px;" src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-ce-marking-3-215x135.png" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54508e18">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-ce-marking-3-750x470.png" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">The CE Marking is a process by means of which the manufacturer informs the users and competent authorities whether a given product complies with obligatory legislation with regard to general requirements.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                    </div>
                                    </div>
                            <div class="col-sm-6 col-md-5 col-md-offset-2">
                    <div class="title-holder">
                        <h2>Middle East</h2>                    </div>

                                            <div class="panel-group" id="parent-65ced5450b977">
                                                            <div class="panel panel-custom">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#parent-65ced5450b977" href="#con-65ced5450b97b" aria-expanded="true">United Arab Emirates<i class="plus-minus"></i></a>                                        </h3>
                                    </div>
                                    <div id="con-65ced5450b97b" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="accordian-content">
                                                
                                                                                                    <div class="list-holder">
                                                        <ul class="certification-list three-column">
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-EN.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-NFPA.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-IFC.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-ABU-D.jpg" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-DUBAI.jpg" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/T-EN.jpg" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/TR-EN.jpg" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/CERTIFICATION-LABEL-COVER.jpg" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                                    <div class="list-holder">
                                                        <h3>Official testing bodies:</h3>
                                                        <ul class="certification-list two-column">
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54512e0d" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-1-TB-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54512e0d">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-1-TB-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54512f74" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-2-applus-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54512f74">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-2-applus-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54513043" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-3-Aitex-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54513043">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-3-Aitex-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Bullet-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced545130f3" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-4-giordano-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced545130f3">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-4-giordano-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Burglar-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                                    <div class="list-holder">
                                                        <h3>Official certification bodies:</h3>
                                                        <ul class="certification-list two-column">
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced545131c7" title="">
                                                                <img style="width: 215px;" src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-1-215x135.png" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced545131c7">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-1-750x470.png" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54513bea" title="">
                                                                <img style="width: 215px;" src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-2-215x135.png" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54513bea">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-2-750x470.png" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Official Product Certification Body.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="panel panel-custom">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#parent-65ced5450b977" href="#con-65ced545149a9" aria-expanded="">Qatar<i class="plus-minus"></i></a>                                        </h3>
                                    </div>
                                    <div id="con-65ced545149a9" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="accordian-content">
                                                
                                                                                                    <div class="list-holder">
                                                        <ul class="certification-list three-column">
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-EN.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-NFPA-1.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-IFC.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-QATAR.jpg" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/CERTIFICATION-LABEL-COVER.jpg" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                                    <div class="list-holder">
                                                        <h3>Official testing bodies:</h3>
                                                        <ul class="certification-list two-column">
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced5451ac9e" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-1-TB-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced5451ac9e">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-1-TB-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced5451ae0b" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-2-applus-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced5451ae0b">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-2-applus-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced5451aed4" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-3-Aitex-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced5451aed4">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-3-Aitex-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Bullet-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced5451af89" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-4-giordano-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced5451af89">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-4-giordano-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Burglar-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                                    <div class="list-holder">
                                                        <h3>Official certification bodies:</h3>
                                                        <ul class="certification-list two-column">
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced5451b039" title="">
                                                                <img style="width: 215px;" src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-1-215x135.png" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced5451b039">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-1-750x470.png" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced5451b10b" title="">
                                                                <img style="width: 215px;" src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-2-215x135.png" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced5451b10b">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-2-750x470.png" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Official Product Certification Body.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="panel panel-custom">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#parent-65ced5450b977" href="#con-65ced5451b1f4" aria-expanded="">Oman<i class="plus-minus"></i></a>                                        </h3>
                                    </div>
                                    <div id="con-65ced5451b1f4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="accordian-content">
                                                
                                                                                                    <div class="list-holder">
                                                        <ul class="certification-list three-column">
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-EN.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-NFPA.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-IFC.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-OMAN.jpg" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/CERTIFICATION-LABEL-COVER.jpg" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                                    <div class="list-holder">
                                                        <h3>Official testing bodies:</h3>
                                                        <ul class="certification-list two-column">
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54520241" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-1-TB-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54520241">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-1-TB-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54520414" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-2-applus-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54520414">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-2-applus-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced5452051d" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-3-Aitex-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced5452051d">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-3-Aitex-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Bullet-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced5452060a" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-4-giordano-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced5452060a">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-4-giordano-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Burglar-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                                    <div class="list-holder">
                                                        <h3>Official certification bodies:</h3>
                                                        <ul class="certification-list two-column">
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54520714" title="">
                                                                <img style="width: 215px;" src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-1-215x135.png" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54520714">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-1-750x470.png" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced545207f1" title="">
                                                                <img style="width: 215px;" src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-2-215x135.png" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced545207f1">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-2-750x470.png" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Official Product Certification Body.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="panel panel-custom">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#parent-65ced5450b977" href="#con-65ced5452092b" aria-expanded="">Saudi Arabia<i class="plus-minus"></i></a>                                        </h3>
                                    </div>
                                    <div id="con-65ced5452092b" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="accordian-content">
                                                
                                                                                                    <div class="list-holder">
                                                        <ul class="certification-list three-column">
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-EN.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-NFPA.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-IFC.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/CERTIFICATION-LABEL-COVER.jpg" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                                    <div class="list-holder">
                                                        <h3>Official testing bodies:</h3>
                                                        <ul class="certification-list two-column">
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54524902" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-1-TB-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54524902">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-1-TB-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54524ab1" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-2-applus-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54524ab1">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-2-applus-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54524b71" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-3-Aitex-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54524b71">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-3-Aitex-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Bullet-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54524c1f" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-4-giordano-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54524c1f">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-4-giordano-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Burglar-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                                    <div class="list-holder">
                                                        <h3>Official certification bodies:</h3>
                                                        <ul class="certification-list two-column">
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54524ce3" title="">
                                                                <img style="width: 215px;" src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-1-215x135.png" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54524ce3">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-1-750x470.png" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54524d80" title="">
                                                                <img style="width: 215px;" src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-2-215x135.png" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54524d80">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-2-750x470.png" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Official Product Certification Body.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="panel panel-custom">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#parent-65ced5450b977" href="#con-65ced54524e6e" aria-expanded="">Kuwait<i class="plus-minus"></i></a>                                        </h3>
                                    </div>
                                    <div id="con-65ced54524e6e" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="accordian-content">
                                                
                                                                                                    <div class="list-holder">
                                                        <ul class="certification-list three-column">
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-EN.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-NFPA-1.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/COVER-IFC.png" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                        <li>
                                                                <a href="https://tecfires.com/pdf/?f=" target="_blank">
                                                                <img style="min-height: 170px;" src="https://tecfires.com/wp-content/uploads/2017/05/CERTIFICATION-LABEL-COVER.jpg" class="img-responsive" alt="">                                                                </a>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                                    <div class="list-holder">
                                                        <h3>Official testing bodies:</h3>
                                                        <ul class="certification-list two-column">
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54529454" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-1-TB-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54529454">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-1-TB-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced545295d3" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-2-applus-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced545295d3">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-2-applus-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54529683" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-3-Aitex-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54529683">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-3-Aitex-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Bullet-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced5452974e" title="">
                                                                <img style="width: 215px; min-height: 123px;" src="https://tecfires.com/wp-content/uploads/2017/05/Lab-4-giordano-215x135.jpg" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced5452974e">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/Lab-4-giordano-750x470.jpg" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Burglar-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                    </ul>
                                                    </div>
                                                
                                                                                                    <div class="list-holder">
                                                        <h3>Official certification bodies:</h3>
                                                        <ul class="certification-list two-column">
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54529855" title="">
                                                                <img style="width: 215px;" src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-1-215x135.png" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54529855">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-1-750x470.png" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Fire-Resistance tests development and execution Laboratory.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
                                                                                                                        <li>
                                                                <a data-toggle="modal" href="#show-65ced54529902" title="">
                                                                <img style="width: 215px;" src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-2-215x135.png" class="img-responsive" alt="">                                                                </a>
                                                                <div class="modal fade modal-custom-white" id="show-65ced54529902">
	<div class="modal-dialog container">
		<div class="modal-content">
			<div class="modal-body row">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="col-sm-12">
					<div class="certification-holder-popup">
													<div class="image-holder">
								<img src="https://tecfires.com/wp-content/uploads/2017/05/CA-CERTIF-ENTITIE-2-750x470.png" class="img-responsive" alt="">							</div>
						<div class="desc-certification-popup">Official Product Certification Body.</div>					</div>
				</div>
			</div>
		</div>
	</div>
</div>
                                                            </li>
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
			</main>               
@endsection