@foreach($projects as $item)
    <div class="{{ $loop->first? 'col-sm-12 col-md-6 col-lg-8 col' : 'col-sm-6 col-md-6 col-lg-4' }} col">
        <div class="custom-grid  {{ $loop->first? 'custom-grid-big' : '' }}">
            <figure class="effect-architecture">
                <img src="{{ asset('images/projects/' .  $item -> image) }}" class="img-responsive" alt="{{ $item -> project_name}}">				
                <figcaption>
                    <h2>{{ $item -> project_name}}</h2><p>{{ $item -> location}}</p>					
                    <a data-toggle="modal" href="#arc-{{$item-> project_id}}">View more</a>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="modal fade modal-custom-white" id="arc-{{$item-> project_id}}">
        <div class="modal-dialog container">
            <div class="modal-content">
                <div class="modal-body row">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                    <div class="text-holder col-sm-12">
                        <strong>{{ $item -> project_name}}</strong>					
                        <ul class="architecture-nav-list">
                            <li>Location<strong>{{ $item -> location}}</strong></li>
                            <li>Architect / Owner<strong>{{ $item -> owner}}</strong></li>
                            <li>Client<strong>{{ $item -> client}}</strong></li>
                            <li>Product<strong>{{ $item -> project_info}}</strong></li>					
                        </ul>
                    </div>

                    <div class="modal-image-gallery all-gallery col-sm-12">
                        <div class="architectureModal-carousel-nav nav-carousel" id="nav_{{$item-> project_id}}">
                            @for ($i = 1; $i <= 5; $i++)
                                @if(!empty($item->{'image_oth_thumbnail_' . $i}))
                                    <div class="item-list carousel-cell">
                                        <div class="image-holder">
                                            <img src="{{$item -> imageUrl('image_oth_thumbnail_'. $i)}}" class="img-responsive" alt="{{ $item -> project_name}}">							
                                        </div>
                                    </div>
                                @endif
                            @endfor
                            
                        </div>
                        <div class="architectureModal-carousel" id="carousel_{{$item-> project_id}}">
                            @for ($i = 1; $i <= 5; $i++)
                                @if(!empty($item->{'image_oth_' . $i}))
                                <div class="item-list carousel-cell">
                                    <div class="image-holder">
                                        <img src="{{$item -> imageUrl('image_oth_'. $i)}}" class="img-responsive" alt="{{$item -> project_name}}">							
                                    </div>
                                </div>
                                @endif
                            @endfor                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function ($) {
            $('#carousel_' + {{$item-> project_id}}).flickity({
                contain: true,
                autoPlay: false,
                pageDots: false,
                prevNextButtons: true,
            });
            $('#nav_' + {{$item-> project_id}}).flickity({
                asNavFor: '#carousel_' + {{$item-> project_id}},
                contain: true,
                pageDots: false,
                cellAlign: 'left',
                prevNextButtons: false
            });
            $('.modal-custom-white').on('shown.bs.modal', function(event) {
                $('#nav_' + {{$item-> project_id}}).flickity('resize');
                $('#carousel_' + {{$item-> project_id}}).flickity('resize');
            });
        });
    </script>
@endforeach