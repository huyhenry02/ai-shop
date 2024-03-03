<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{route('customer.index')}}"><img src="/customer/img/logo.png"
                                                                                       alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{route('customer.index')}}">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="{{route('customer.product')}}" class="nav-link dropdown-toggle"
                            >Shop</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{route('customer.contact')}}">Contact</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">My Account</a>
                            @if(isset(auth()->user()->name))
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{route('customer.order.confirmation')}}">Your Order</a></li>
                                    <li class="nav-item"><a class="nav-link" href="">Your Information</a></li>
                                    <li class="nav-item"><a class="nav-link" href={{route('customer.logout.post')}}>Sign Out</a></li>
                                </ul>
                            @else
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{route('customer.login')}}">Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('customer.register')}}">Register</a></li>
                                </ul>
                            @endif
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="{{route('customer.cart.index')}}" class="cart"><span class="ti-bag"></span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
