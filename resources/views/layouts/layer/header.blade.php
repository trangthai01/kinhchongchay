<header id="header" class="{{ $header_class }}">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 logo-holder">
	<a href="{{ url('/') }}" title="Vietfire Glass">
        <img src="{{asset('images/main_logo.png')}}" class="img-responsive" id="logo_1" alt="Vietfire Glass">
    </a>
</div>
<div class="col-sm-9 top-right">
    <div class="login-section hidden-xs">
        <div class="login-holder">
        </div>
    </div>
    <div class="nav-holder">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul id="menu-primary-menu" class="nav navbar-nav">
                        <li id="menu-item-home" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-49 current_page_item"><a href="{{ url('/') }}" aria-current="page">Home</a></li>
                        <li id="menu-item-company" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('ve-chung-toi') }}">Về chúng tôi</a></li>
                        <li id="menu-item-products" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('san-pham') }}">Sản Phẩm</a></li>
                        <li id="menu-item-downloads" class="menu-item menu-item-type-post_type menu-item-object-page" style="display:none"><a href="{{ url('downloads') }}">Downloads</a></li>
                        <li id="menu-item-projects" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('du-an') }}">Dự án</a></li>
                        <li id="menu-item-engineering" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('ky-thuat') }}">Kỹ thuật</a></li>
                        <li id="menu-item-news" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{url('tin-tuc')}}">Tin tức</a></li>
                        <li id="menu-item-contact" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{url('lien-he')}}">Liên hệ</a></li>
                    </ul>                    
                    <div class="login-section visible-xs">
                        <div class="login-holder">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
            </div>
        </div>
    </header>