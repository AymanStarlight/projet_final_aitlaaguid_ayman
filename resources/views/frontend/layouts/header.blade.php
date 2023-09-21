<!--::header part start::-->
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href={{ route('home.index') }}> <img src="{{ asset('storage/img/logo.png') }}"
                            alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href={{ route('home.index') }}>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href={{ route('shop.index') }}>Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href={{ route('contact.index') }}>Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex">
                        <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <a href=""><i class="ti-heart"></i></a>
                        <div class="dropdown cart">
                            <a href={{ route('cart.index') }}>
                                @auth
                                <i class="fa-solid fa-cart-shopping" value='{{ count(auth()->user()->cart->cart_product) }}'></i>
                                @endauth
                                @if (!auth()->user())
                                <i class="fa-solid fa-cart-shopping" value='0'></i>
                                @endif
                            </a>
                        </div>
                    </div>
                    <div style="margin-bottom: 1px">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();"><i
                                        class="fa-solid fa-right-from-bracket"></i></a>
                            </form>
                        @else
                            <a href="{{ route('login') }}"><i class="fa-regular fa-user"></i></a>
                        @endauth
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
<!-- Header part end-->
