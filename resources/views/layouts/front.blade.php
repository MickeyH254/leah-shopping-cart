<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Shop</title>




    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css') }}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" " style="background-color:red">

<header class="header" id="site-header" style="background-color:white">

    <div class="container" >

        <div class="header-content-wrapper" >

            <ul class="nav-add">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <li class="align-left">
                            <a href="/home" ><p>Home</p><a>
                        </li>
                        <li class="align-left">
                            <p>Logout</p>
                        </li>
                    @else
                        <li class="align-left">
                            <a href="/home" ><p>Home</p><a>
                        </li>
                    @endif
                </div>
            @endif

                
                
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">{{ Cart::content()->count() }}</span>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart align-center">Total:Ksh {{ Cart::total() }}</h4>

                            <a href = "/cart">
                                <div class="btn btn-small btn--dark">
                                    <span class="text">View Cart</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </li>
            </ul>
        </div>

    </div>

</header>


<div class="content-wrapper">

    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">Buy Food From THE FOOD</h4>
                    <p class="heading-text">We do door to door delivery.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->

   @yield('page')
</div>

<!-- Footer -->

<footer class="footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{ asset('app/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('app/js/crum-mega-menu.js') }}"></script>
<script src="{{ asset('app/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('app/js/theme-plugins.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
<script src="{{ asset('app/js/form-actions.js') }}"></script>

<script src="{{ asset('app/js/velocity.min.js') }}"></script>
<script src="{{ asset('app/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('app/js/animation.velocity.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('sucess'))
        toastr.sucess('{{ Session::get('success') }}');
    @endif
    @if(Session::has('info'))
        toastr.info('{{ Session::get('info') }}');
    @endif  
    @if(Session::has('warning'))
        toastr.warning('{{ Session::get('warning') }}');
    @endif
    @if(Session::has('danger'))
        toastr.danger('{{ Session::get('danger') }}');
    @endif
</script>

<!-- ...end JS Script -->


</body>

</html>