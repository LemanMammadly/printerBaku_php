<header>
    <div class="header-area">
        <div class="header-mid header-sticky">
            <div class="container">
                <div class="menu-wrapper">

                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('front/assets/img/logo/logo.png') }}"
                                alt=""></a>
                    </div>

                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                @foreach ($navItems as $item)
                                <li><a href="#">{{$item->name}}</a></li>
                                @endforeach
                                <li><a href="#">{{(LaravelLocalization::getCurrentLocaleName()) == 'English' ? 'Products' : 'Məhsullar'}} <i class="fas fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        @foreach ($categories as $cat)
                                        <li><a href="#">{{$cat->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="header-right">
                        <ul>
                            <li>
                                <div class="nav-search search-switch hearer_icon">
                                    <a id="search_1" href="javascript:void(0)">
                                        <span class="flaticon-search"></span>
                                    </a>
                                </div>
                            </li>
                            <li> <a href="login.html"><span class="flaticon-user"></span></a></li>
                            <li class="cart"><a href="cart.html"><span class="flaticon-shopping-cart"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="search_input" id="search_input_box">
                    <form class="search-inner d-flex justify-content-between ">
                        <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                        <button type="submit" class="btn"></button>
                        <span class="ti-close" id="close_search" title="Close Search"></span>
                    </form>
                </div>

                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <div class="header-bottom text-center">
            <p>
                @if (LaravelLocalization::getCurrentLocaleName() == 'English')
                    Sale Up To 50% Biggest Discounts. Hurry! Limited Period Offer <a href="#" class="browse-btn">Shop Now</a>
                @else
                    50%-ə qədər Ən Böyük Endirimlər. Tələsin! Məhdud Müddət Təklifi <a href="#" class="browse-btn">İndi alış-veriş edin</a>
                @endif
            </p>
            
        </div>
    </div>
</header>

