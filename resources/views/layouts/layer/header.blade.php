<header id="header" class="{{ $header_class }}">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 logo-holder">
	<a href="{{ url('/') }}" title="TECFIRE">
	<img src="https://tecfires.com/wp-content/uploads/2023/05/Header-Logo.png" class="img-responsive" id="logo_1" alt="TECFIRE"><img src="https://tecfires.com/wp-content/uploads/2023/05/Header-Logo-2.png" class="logo-secondary img-responsive" id="logo_2" alt="TECFIRE">	</a>
</div>
<div class="col-sm-9 top-right">
    <div class="login-section hidden-xs">
        <div class="login-holder">
                    </div>
        <div class="language-holder">
            <ul style="display: none;">
                <li><a href="#">ES</a></li>
                <li> <a href="#">FR</a> </li>
            </ul>
            <ul><li id="current-lang"><a href="">English</a></li><li><a href="https://tecfires.com/es/" class="lang-es">Español</a></li></ul>        </div>
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
                        <li id="menu-item-company" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('company') }}">Company</a></li>
                        <li id="menu-item-products" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('products') }}">Products</a></li>
                        <li id="menu-item-downloads" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="https://tecfires.com/downloads/">Downloads</a></li>
                        <li id="menu-item-projects" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('projects') }}">Projects</a></li>
                        <li id="menu-item-engineering" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('engineering') }}">Engineering</a></li>
                        <li id="menu-item-news" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{url('news')}}">News</a></li>
                        <li id="menu-item-contact" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{url('contact')}}">Contact</a></li>
                    </ul>                    
                    <div class="login-section visible-xs">
                        <div class="login-holder">
                                                    </div>
                        <div class="language-holder">
                            <ul style="display: none;">
                                <li> <a href="#">ES</a> </li>
                                <li> <a href="#">FR</a> </li>
                            </ul>
                            <ul><li id="current-lang"><a href="">English</a></li><li><a href="https://tecfires.com/es/" class="lang-es">Español</a></li></ul>                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
            </div>
        </div>
    </header>