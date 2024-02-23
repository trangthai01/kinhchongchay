@if($application->projects ->isNotEmpty())
	<div class="section section-gallery section-gallery-secondary">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bg-title">
						<h3>Thư viện ảnh</h3>
					</div>
					<div class="col-sm-7 door-gallery door-gallery-height">
						<div id="gallery" class="system-gallery slidingDoor-carousel all-gallery" style="border: 1px solid #000;">
							@foreach($application->projects as $item)
							<div class="carousel-cell">
								<img src="{{$item -> imageAppUrl('image_app')}}" class="img-responsive" alt="">
								<figcaption>{{$item ->project_name}}<br>{{$item ->location}}</figcaption>	
							</div>
							@endforeach
						</div>
					</div>
					<div class="col-sm-5">
						<div class="border-title">
							<h3>Dự án</h3>
						</div>
						<ul class="system-project-list list-projects">
							@foreach($application->projects as $item)
							<li>
								<a href="#" onclick="return false;" data-number="0">
									<img src="{{$item -> imageAppUrl('image_app_thumbnail')}}" class="img-responsive">										
								</a>							
							</li>
							@endforeach
						</ul>
					</div>
					<script>
						$("#gallery").flickity({
							slidesToShow: 1,
							slidesToScroll: 1,
							arrows: true,
							focusOnSelect: true,
						});
					</script>
                </div>
            </div>
        </div>
    </div>
@endif