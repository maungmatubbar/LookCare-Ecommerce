<header>
    <!-- Top bar starts -->
    <div class="top-bar">
        <div class="container">

            <!-- Contact starts -->
            <div class="tb-contact pull-left">
                <!-- Email -->
                <i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:contact@domain.com">contact@domain.com</a>
                &nbsp;&nbsp;
                <!-- Phone -->
                <i class="fa fa-phone color"></i> &nbsp; +1 (342)-(323)-4923
            </div>
            <!-- Contact ends -->
            <!-- Shopping kart starts -->
            <div class="tb-shopping-cart pull-right">
                <!-- Link with badge -->
                <a href="#" class="btn btn-white btn-xs b-dropdown"><i class="fa fa-shopping-cart"></i> <i class="fa fa-angle-down color"></i> <span class="badge badge-color">{{Cart::count()}}</span></a>
                <!-- Dropdown content with item details -->
                <div class="b-dropdown-block">
                    <!-- Heading -->
                    <h4><i class="fa fa-shopping-cart color"></i> Your Items</h4>
                    <ul class="list-unstyled">
                        <!-- Item 1 -->
                        @php($cartProducts = Cart::content())
                        @foreach($cartProducts as $cartProduct)
                        <li>
                            <!-- Item image -->
                            <div class="cart-img">
                                <a href="#"><img src="{{asset($cartProduct->options->image)}}" alt="" class="img-responsive" /></a>
                            </div>
                            <!-- Item heading and price -->
                            <div class="cart-title">
                                <h5><a href="#">{{$cartProduct->name}}</a></h5>
                                <!-- Item price -->
                                <span class="label label-color label-sm">{{$cartProduct->price}}</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        @endforeach

                    </ul>
                    <a href="{{route('show-cart')}}" class="btn btn-white btn-sm">View Cart</a> &nbsp; <a href="#" class="btn btn-color btn-sm">Checkout</a>
                </div>
            </div>
            <!-- Shopping kart ends -->

            <!-- Langauge starts -->
            <div class="tb-language dropdown pull-right">
               {{-- <a href="#" data-target="#" data-toggle="dropdown"><i class="fa fa-globe"></i> English <i class="fa fa-angle-down color"></i></a>
                <!-- Dropdown menu with languages -->
                <ul class="dropdown-menu dropdown-mini" role="menu">
                    <li><a href="#">Germany</a></li>
                    <li><a href="#">France</a></li>
                    <li><a href="#">Brazil</a></li>
                </ul>--}}
                @if(Session::get('customerId'))
                    <a href="#" onclick="document.getElementById('customerLogoutForm').submit()"><span class="fa fa-arrow-circle-o-left"></span> Logout</a>
                    {{Form::open(['route'=>'customer-logout','method'=>'POST','id'=>'customerLogoutForm'])}}

                    {{Form::close()}}

                @else
                    <a href="{{route('new-customer-login')}}"><span class="fa fa-arrow-circle-o-right"></span> Login</a>
                @endif
            </div>
            <!-- Language ends -->

            <!-- Search section for responsive design -->
            <div class="tb-search pull-left">
                <a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
                <div class="b-dropdown-block">
                    <form>
                        <!-- Input Group -->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type Something">
                            <span class="input-group-btn">
                                <button class="btn btn-color" type="button">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Search section ends -->

            <!-- Social media starts -->
            <div class="tb-social pull-right">
                <div class="brand-bg text-right">
                    <!-- Brand Icons -->
                    <a href="#" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
                    <a href="#" class="google-plus"><i class="fa fa-google-plus square-2 rounded-1"></i></a>
                </div>
            </div>
            <!-- Social media ends -->

            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Top bar ends -->

    <!-- Header One Starts -->
    <div class="header-1">

        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <!-- Logo section -->
                    <div class="logo">
                        <h1><a href="index-2.html"><i class="fa fa-bookmark-o"></i> LookCare</a></h1>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
                    <!-- Search Form -->
                    <div class="header-search">
                        @include('front-end.includes.search')
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation starts -->

        <div class="navi">
            <div class="container">
                <div class="navy">
                    <ul>
                        <!-- Main menu -->
                        <li><a href="{{route('/')}}">Home</a>
                            <!-- Submenu -->
                        </li>
                        @foreach($categories as $category)
                         <li class="active"><a href="{{route('category-product',['id'=>$category->id])}}">{{$category->category_name}}</a></li>
                        @endforeach
                        <li><a href="#">About Us</a></li>
                        <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Navigation ends -->

    </div>

    <!-- Header one ends -->

</header>
