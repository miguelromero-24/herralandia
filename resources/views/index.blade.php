<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    @include('template.css')
    @include('template.javascript')

</head>
<body>
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top-in">
                <ul class="support">
                    <li ><a href="mailto:herralandia@gmail.com" ><i > </i>herralandia@gmail.com</a></li>
                    <li ><span ><i class="tele-in"> </i>+595 984 652122</span></li>
                </ul>
                <ul class=" support-right">
                    <li ><a href="account.html" ><i class="men"> </i>Login</a></li>
                    <li ><a href="account.html" ><i class="tele"> </i>Crear una cuenta</a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="logo">
                    <h1><a href="{{ url('/') }}">Herralandia</a></h1>
                </div>
                <div class="top-nav">
                    <!-- start header menu -->
                    <ul class="megamenu skyblue">
                        <li><a  href="{{ url('/') }}">Home</a></li>
                        <li ><a  href="404.html">Productos</a></li>
                        <li><a  href="contact.html">Contacto</a>

                        </li>
                    </ul>
                    <!---->
                    <div class="search-in" >
                        <div class="search" >
                            <form action="search.html">
                                <input type="text" value="Keywords" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keywords';}" class="text">
                                <input type="submit" value="SEARCH">
                            </form>
                            <div class="close-in"><img src="images/close.png" alt="" /></div>
                        </div>
                        <div class="right"><button> </button></div>
                    </div>
                    <script type="text/javascript">
                        $('.search').hide();
                        $('button').click(function (){
                                $('.search').show();
                                $('.text').focus();
                            }
                        );
                        $('.close-in').click(function(){
                            $('.search').hide();
                        });
                    </script>

                    <!---->
                    <div class="cart box_1">
                        {{--<a href="checkout.html">--}}
                            {{--<h3> <div class="total">--}}
                                    {{--<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>--}}
                                {{--<img src="images/cart.png" alt=""/></h3>--}}
                        {{--</a>--}}
                        {{--<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>--}}
                        <div class="clearfix"> </div>
                    </div>

                    <div class="clearfix"> </div>
                    <!---->
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="banner">
        <div class="banner-top">
            <h2>Herralandia</h2>
            <p>Todo para su taller <span></span></p>
        </div>

        <div class="now">
            <a class="morebtn" href="{{ route('products.index') }}">Explorar</a>
            {{--<a class="morebtn at-in" href="single.html">Shop Now</a>--}}
            <div class="clearfix"> </div>
        </div>
    </div>

</div>
<!---->
{{--<div class="content">--}}
    {{--<div class="container">--}}
        {{--<div class="content-top">--}}
            {{--<div class="col-md-9">--}}
                {{--<div class="col-top">--}}
                    {{--<div class="col-md-6 black">--}}
                        {{--<a href="single.html"><div class="shoe" >--}}
                                {{--<h3>WOMEN SHOES</h3>--}}
                            {{--</div>--}}
                            {{--<img src="images/sh.png" alt="" ></a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 black-in">--}}
                        {{--<a href="single.html"><div class="shoe bag" >--}}
                                {{--<h3>WOMEN BAGS</h3>--}}
                            {{--</div>--}}
                            {{--<img src="images/ba.png" alt="" ></a>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"> </div>--}}
                {{--</div>--}}
                {{--<div class="col-top-bottom">--}}
                    {{--<h3 class="menber">MEMBER DISCOUNT</h3>--}}
                    {{--<a href="single.html" class="now-in">SHOP NOW</a>--}}
                    {{--<div class="clearfix"> </div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-3 per">--}}
                {{--<a href="single.html"><img class="img-responsive" src="images/pi1.jpg" alt="" >--}}
                    {{--<div class="six">--}}
                        {{--<h4>FASHION</h4>--}}
                        {{--<p>Get up to</p>--}}
                        {{--<span>60%</span>--}}
                    {{--</div></a>--}}
            {{--</div>--}}
            {{--<div class="clearfix"> </div>--}}
        {{--</div>--}}
        {{--<!---->--}}
        {{--<div class="sap_tabs">--}}
            {{--<label class="line"> </label>--}}
            {{--<h2>LATES ARRIVAL</h2>--}}
            {{--<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">--}}
                {{--<ul class="resp-tabs-list">--}}
                    {{--<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>WOMENS</span></li>--}}
                    {{--<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>MENS</span></li>--}}
                    {{--<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>SHOES</span></li>--}}
                    {{--<div class="clearfix"></div>--}}
                {{--</ul>--}}
                {{--<div class="resp-tabs-container">--}}
                    {{--<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">--}}
                        {{--<div class="tab_img">--}}
                            {{--<div class="img-top simpleCart_shelfItem">--}}

                                {{--<img src="images/pi2.jpg" class="img-responsive" alt=""/>--}}

                                {{--<div class="tab_desc">--}}
                                    {{--<ul class="round-top">--}}
                                        {{--<li><a href="#"><i> </i></a></li>--}}
                                        {{--<li><a href="#"><i class="round"> </i></a></li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="agency ">--}}
                                        {{--<div class="agency-left">--}}
                                            {{--<h6 class="jean">BAJU JEANS</h6>--}}
                                            {{--<span class="dollor item_price">$50.00</span>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="agency-right">--}}
                                            {{--<ul class="social">--}}
                                                {{--<li><a href="#"><i class="item_add"> </i></a></li>--}}
                                                {{--<li><a href="#"><i class="text"> </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="social-in">--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="img-top simpleCart_shelfItem">--}}

                                {{--<img src="images/pi3.jpg" class="img-responsive" alt=""/>--}}
                                {{--<div class="tab_desc">--}}
                                    {{--<ul class="round-top">--}}
                                        {{--<li><a href="#"><i> </i></a></li>--}}
                                        {{--<li><a href="#"><i class="round"> </i></a></li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="agency ">--}}
                                        {{--<div class="agency-left">--}}
                                            {{--<h6 class="jean">BAJU JEANS</h6>--}}
                                            {{--<span class="dollor item_price">$50.00</span>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="agency-right">--}}
                                            {{--<ul class="social">--}}
                                                {{--<li><a href="#"><i class="item_add"> </i></a></li>--}}
                                                {{--<li><a href="#"><i class="text"> </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="social-in">--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-in">--}}
                                    {{--<p>NEW</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="img-top simpleCart_shelfItem">--}}

                                {{--<img src="images/pi4.jpg" class="img-responsive" alt=""/>--}}
                                {{--<div class="tab_desc">--}}
                                    {{--<ul class="round-top">--}}
                                        {{--<li><a href="#"><i> </i></a></li>--}}
                                        {{--<li><a href="#"><i class="round"> </i></a></li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="agency ">--}}
                                        {{--<div class="agency-left">--}}
                                            {{--<h6 class="jean">BAJU JEANS</h6>--}}
                                            {{--<span class="dollor item_price">$50.00</span>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="agency-right">--}}
                                            {{--<ul class="social">--}}
                                                {{--<li><a href="#"><i class="item_add"> </i></a></li>--}}
                                                {{--<li><a href="#"><i class="text"> </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="social-in">--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-in col-in-1">--}}
                                    {{--<p>SALE <span>30%</span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">--}}
                        {{--<div class="tab_img">--}}
                            {{--<div class="img-top simpleCart_shelfItem">--}}

                                {{--<img src="images/pi9.jpg" class="img-responsive" alt=""/>--}}

                                {{--<div class="tab_desc">--}}
                                    {{--<ul class="round-top">--}}
                                        {{--<li><a href="#"><i> </i></a></li>--}}
                                        {{--<li><a href="#"><i class="round"> </i></a></li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="agency ">--}}
                                        {{--<div class="agency-left">--}}
                                            {{--<h6 class="jean">BAJU JEANS</h6>--}}
                                            {{--<span class="dollor item_price">$50.00</span>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="agency-right">--}}
                                            {{--<ul class="social">--}}
                                                {{--<li><a href="#"><i class="item_add"> </i></a></li>--}}
                                                {{--<li><a href="#"><i class="text"> </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="social-in">--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="img-top simpleCart_shelfItem">--}}

                                {{--<img src="images/pi8.jpg" class="img-responsive" alt=""/>--}}
                                {{--<div class="tab_desc">--}}
                                    {{--<ul class="round-top">--}}
                                        {{--<li><a href="#"><i> </i></a></li>--}}
                                        {{--<li><a href="#"><i class="round"> </i></a></li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="agency ">--}}
                                        {{--<div class="agency-left">--}}
                                            {{--<h6 class="jean">BAJU JEANS</h6>--}}
                                            {{--<span class="dollor item_price">$50.00</span>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="agency-right">--}}
                                            {{--<ul class="social">--}}
                                                {{--<li><a href="#"><i class="item_add"> </i></a></li>--}}
                                                {{--<li><a href="#"><i class="text"> </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="social-in">--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-in">--}}
                                    {{--<p>NEW</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="img-top simpleCart_shelfItem">--}}

                                {{--<img src="images/pi10.jpg" class="img-responsive" alt=""/>--}}
                                {{--<div class="tab_desc">--}}
                                    {{--<ul class="round-top">--}}
                                        {{--<li><a href="#"><i> </i></a></li>--}}
                                        {{--<li><a href="#"><i class="round"> </i></a></li>--}}
                                    {{--</ul>--}}
                                    {{--<div class="agency ">--}}
                                        {{--<div class="agency-left">--}}
                                            {{--<h6 class="jean">BAJU JEANS</h6>--}}
                                            {{--<span class="dollor item_price">$50.00</span>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="agency-right">--}}
                                            {{--<ul class="social">--}}
                                                {{--<li><a href="#"><i class="item_add"> </i></a></li>--}}
                                                {{--<li><a href="#"><i class="text"> </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="social-in">--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-in col-in-1">--}}
                                    {{--<p>SALE <span>30%</span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">--}}
                        {{--<div class="tab_img">--}}
                            {{--<div class="img-top simpleCart_shelfItem">--}}

                                {{--<img src="images/pi5.jpg" class="img-responsive" alt=""/>--}}

                                {{--<div class="tab_desc">--}}
                                    {{--<ul class="round-top">--}}
                                        {{--<li><a href="#"><i> </i></a></li>--}}
                                        {{--<li><a href="#"><i class="round"> </i></a></li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="agency ">--}}
                                        {{--<div class="agency-left">--}}
                                            {{--<h6 class="jean">BAJU JEANS</h6>--}}
                                            {{--<span class="dollor item_price">$50.00</span>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="agency-right">--}}
                                            {{--<ul class="social">--}}
                                                {{--<li><a href="#"><i class="item_add"> </i></a></li>--}}
                                                {{--<li><a href="#"><i class="text"> </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="social-in">--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="img-top simpleCart_shelfItem">--}}

                                {{--<img src="images/pi6.jpg" class="img-responsive" alt=""/>--}}
                                {{--<div class="tab_desc">--}}
                                    {{--<ul class="round-top">--}}
                                        {{--<li><a href="#"><i> </i></a></li>--}}
                                        {{--<li><a href="#"><i class="round"> </i></a></li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="agency ">--}}
                                        {{--<div class="agency-left">--}}
                                            {{--<h6 class="jean">BAJU JEANS</h6>--}}
                                            {{--<span class="dollor item_price">$50.00</span>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="agency-right">--}}
                                            {{--<ul class="social">--}}
                                                {{--<li><a href="#"><i class="item_add"> </i></a></li>--}}
                                                {{--<li><a href="#"><i class="text"> </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="social-in">--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-in">--}}
                                    {{--<p>NEW</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="img-top simpleCart_shelfItem">--}}

                                {{--<img src="images/pi7.jpg" class="img-responsive" alt=""/>--}}
                                {{--<div class="tab_desc">--}}
                                    {{--<ul class="round-top">--}}
                                        {{--<li><a href="#"><i> </i></a></li>--}}
                                        {{--<li><a href="#"><i class="round"> </i></a></li>--}}
                                    {{--</ul>--}}

                                    {{--<div class="agency ">--}}
                                        {{--<div class="agency-left">--}}
                                            {{--<h6 class="jean">BAJU JEANS</h6>--}}
                                            {{--<span class="dollor item_price">$50.00</span>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="agency-right">--}}
                                            {{--<ul class="social">--}}
                                                {{--<li><a href="#"><i class="item_add"> </i></a></li>--}}
                                                {{--<li><a href="#"><i class="text"> </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<ul class="social-in">--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i> </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                                {{--<li><a href="#"><i > </i></a></li>--}}
                                            {{--</ul>--}}
                                            {{--<div class="clearfix"> </div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-in col-in-1">--}}
                                    {{--<p>SALE <span>30%</span></p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!---->--}}
    {{--</div>--}}
    {{--<!---->--}}
    {{--<div class="content-bottom">--}}
        {{--<div class="container">--}}
            {{--<p>Design is a funny word. Some people think--}}
                {{--design means how it looks. But of course, if you dig deeper--}}
                {{--it’s really how it works.</p>--}}
            {{--<label class="line1"> </label>--}}
            {{--<span>Steve Jobs</span>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!---->--}}
    {{--<div class="content-bottom-top">--}}
        {{--<div class="container">--}}
            {{--<h3>Latest News</h3>--}}
            {{--<div class="blog-in">--}}
                {{--<div class="col-md-8">--}}

                    {{--<div class="wmuSlider example1">--}}
                        {{--<div class="wmuSliderWrapper">--}}
                            {{--<article style="position: absolute; width: 100%; opacity: 0;">--}}
                                {{--<div class="blog-in-top">--}}
                                    {{--<div class="col-md-6 van">--}}
                                        {{--<a href="single.html"> <img src="images/bl.jpg" class="img-responsive" alt=""/></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 on-para">--}}
                                        {{--<div class="col-on">--}}
                                            {{--<h4>Iniloh Judulnya</h4>--}}
                                            {{--<span>Saturday, 23/08/2014</span>--}}
                                        {{--</div>--}}
                                        {{--<p>Lorem ipsum dolor sit <span>amet, consectetuer adipiscing elit,--}}
{{--sed diam nonummy nibh euismod tincidunt ut laoreet dolore --}}
{{--magna aliquam erat volutpat ....</span></p>--}}
                                        {{--<a href="single.html" class="sed">Readmore</a>--}}
                                        {{--<div class="clearfix"> </div>--}}
                                    {{--</div>--}}
                                    {{--<div class="clearfix"> </div>--}}
                                {{--</div>--}}
                                {{--<div class="blog-in-bottom">--}}
                                    {{--<div class="col-md-6 van-in">--}}
                                        {{--<h5>Discount Up to</h5>--}}
                                        {{--<span>60%</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 on-para">--}}
                                        {{--<div class="col-on">--}}
                                            {{--<h4>Iniloh Judulnya</h4>--}}
                                            {{--<span>Saturday, 23/08/2014</span>--}}
                                        {{--</div>--}}
                                        {{--<p>Lorem ipsum dolor sit <span>amet, consectetuer adipiscing elit,--}}
{{--sed diam nonummy nibh euismod tincidunt ut laoreet dolore --}}
{{--magna aliquam erat volutpat ....</span></p>--}}
                                        {{--<a href="single.html" class="sed">Readmore</a>--}}
                                        {{--<div class="clearfix"> </div>--}}
                                    {{--</div>--}}
                                    {{--<div class="clearfix"> </div>--}}
                                {{--</div>--}}
                            {{--</article>--}}
                            {{--<article style="position: absolute; width: 100%; opacity: 0;">--}}
                                {{--<div class="blog-in-top">--}}
                                    {{--<div class="col-md-6 van">--}}
                                        {{--<a href="single.html"> <img src="images/bl2.jpg" class="img-responsive" alt=""/></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 on-para">--}}
                                        {{--<div class="col-on">--}}
                                            {{--<h4>Iniloh Judulnya</h4>--}}
                                            {{--<span>Saturday, 23/08/2014</span>--}}
                                        {{--</div>--}}
                                        {{--<p>Lorem ipsum dolor sit <span>amet, consectetuer adipiscing elit,--}}
{{--sed diam nonummy nibh euismod tincidunt ut laoreet dolore --}}
{{--magna aliquam erat volutpat ....</span></p>--}}
                                        {{--<a href="single.html" class="sed">Readmore</a>--}}
                                        {{--<div class="clearfix"> </div>--}}
                                    {{--</div>--}}
                                    {{--<div class="clearfix"> </div>--}}
                                {{--</div>--}}
                                {{--<div class="blog-in-bottom">--}}
                                    {{--<div class="col-md-6 van-in in-bus">--}}
                                        {{--<h5>Discount Up to</h5>--}}
                                        {{--<span>60%</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 on-para">--}}
                                        {{--<div class="col-on">--}}
                                            {{--<h4>Iniloh Judulnya</h4>--}}
                                            {{--<span>Saturday, 23/08/2014</span>--}}
                                        {{--</div>--}}
                                        {{--<p>Lorem ipsum dolor sit <span>amet, consectetuer adipiscing elit,--}}
{{--sed diam nonummy nibh euismod tincidunt ut laoreet dolore --}}
{{--magna aliquam erat volutpat ....</span></p>--}}
                                        {{--<a href="single.html" class="sed">Readmore</a>--}}
                                        {{--<div class="clearfix"> </div>--}}
                                    {{--</div>--}}
                                    {{--<div class="clearfix"> </div>--}}
                                {{--</div>--}}
                            {{--</article>--}}
                            {{--<article style="position: absolute; width: 100%; opacity: 0;">--}}
                                {{--<div class="blog-in-top">--}}
                                    {{--<div class="col-md-6 van">--}}
                                        {{--<a href="single.html"> <img src="images/bl.jpg" class="img-responsive" alt=""/></a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 on-para">--}}
                                        {{--<div class="col-on">--}}
                                            {{--<h4>Iniloh Judulnya</h4>--}}
                                            {{--<span>Saturday, 23/08/2014</span>--}}
                                        {{--</div>--}}
                                        {{--<p>Lorem ipsum dolor sit <span>amet, consectetuer adipiscing elit,--}}
{{--sed diam nonummy nibh euismod tincidunt ut laoreet dolore --}}
{{--magna aliquam erat volutpat ....</span></p>--}}
                                        {{--<a href="single.html" class="sed">Readmore</a>--}}
                                        {{--<div class="clearfix"> </div>--}}
                                    {{--</div>--}}
                                    {{--<div class="clearfix"> </div>--}}
                                {{--</div>--}}
                                {{--<div class="blog-in-bottom">--}}
                                    {{--<div class="col-md-6 van-in">--}}
                                        {{--<h5>Discount Up to</h5>--}}
                                        {{--<span>60%</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 on-para">--}}
                                        {{--<div class="col-on">--}}
                                            {{--<h4>Iniloh Judulnya</h4>--}}
                                            {{--<span>Saturday, 23/08/2014</span>--}}
                                        {{--</div>--}}
                                        {{--<p>Lorem ipsum dolor sit <span>amet, consectetuer adipiscing elit,--}}
{{--sed diam nonummy nibh euismod tincidunt ut laoreet dolore --}}
{{--magna aliquam erat volutpat ....</span></p>--}}
                                        {{--<a href="single.html" class="sed">Readmore</a>--}}
                                        {{--<div class="clearfix"> </div>--}}
                                    {{--</div>--}}
                                    {{--<div class="clearfix"> </div>--}}
                                {{--</div>--}}
                            {{--</article>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!---->--}}
                    {{--<script src="js/jquery.wmuSlider.js"></script>--}}
                    {{--<script>--}}
                        {{--$('.example1').wmuSlider({--}}
                            {{--pagination : false,--}}
                        {{--});--}}
                    {{--</script>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 amet">--}}
                    {{--<div class="grid-per">--}}
                        {{--<a href="single.html"><img class="img-responsive" src="images/bl1.jpg" alt="">--}}
                            {{--<div class="six-per">--}}
                                {{--<h4>Get up to</h4>--}}
                                {{--<span>60%</span>--}}
                                {{--<p>Lorem ipsum dolor amet, consectetuer elit--}}
                                    {{--adipiscing , sed diam nonummy nibh euismod--}}
                                    {{--tincidunt ut laoreet dolore magna erat--}}
                                    {{--aliquam volutpat.</p>--}}

                            {{--</div></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="clearfix"> </div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!---->--}}
    {{--<div class="container">--}}
        {{--<div class="bottom-grid">--}}
            {{--<img class="img-responsive" src="images/back1.jpg" alt="">--}}
            {{--<div class="fit">--}}
                {{--<h6>Best fit for women’s feet</h6>--}}
                {{--<p>TRY TO WALK IN OUR SHOES</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!---->--}}
{{--</div>--}}
<!---->
<div class="footer">
    <div class="container">
        <div class="col-md-4 footer-top">
            <h3>Contacto</h3>
            <form>

                <input type="text" value="Ingrese su nombre*" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Ingrese su nombre*';}">

                <input type="text" value="Ingrese su correo*" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Ingrese su correo*';}">

                <input type="text" value="Ingrese un numero de contacto" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Ingrese un numero de contacto';}">

                <textarea cols="77" rows="6" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Ingrese un mensaje*';}">Ingrese un mensaje*</textarea>

                <input type="submit" value="Enviar mensaje" >

            </form>

        </div>
        <div class="col-md-4 footer-middle">
            {{--<h3>TOP RATED PRODUCTS</h3>--}}
            {{--<div class="product-go">--}}
                {{--<div class="grid-product">--}}
                    {{--<h6><a href="#" >Winter Combo Style</a></h6>--}}
                    {{--<ul class="star-footer">--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                    {{--</ul>--}}
                    {{--<span class=" price-in"><small>$70.00</small> $40.00</span>--}}
                {{--</div>--}}
                {{--<div class="fashion">--}}
                    {{--<a href="#"><img class="img-responsive " src="images/f1.jpg" alt="">--}}
                        {{--<p>SALE</p></a>--}}
                {{--</div>--}}
                {{--<div class="clearfix"> </div>--}}
            {{--</div>--}}
            {{--<div class="product-go">--}}
                {{--<div class="grid-product">--}}
                    {{--<h6><a href="#" >Winter Combo Style</a></h6>--}}
                    {{--<ul class="star-footer">--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                    {{--</ul>--}}
                    {{--<span class=" price-in"><small>$70.00</small> $40.00</span>--}}
                {{--</div>--}}
                {{--<div class="fashion">--}}
                    {{--<a href="#"><img class="img-responsive " src="images/f2.jpg" alt="">--}}
                        {{--<p class="new1">NEW</p></a>--}}
                {{--</div>--}}
                {{--<div class="clearfix"> </div>--}}
            {{--</div>--}}
            {{--<div class="product-go">--}}
                {{--<div class="grid-product">--}}
                    {{--<h6><a href="#" >Winter Combo Style</a></h6>--}}
                    {{--<ul class="star-footer">--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                        {{--<li><a href="#"><i> </i></a></li>--}}
                    {{--</ul>--}}
                    {{--<span class=" price-in"><small>$70.00</small> $40.00</span>--}}
                {{--</div>--}}
                {{--<div class="fashion">--}}
                    {{--<a href="#"><img class="img-responsive " src="images/f3.jpg" alt="">--}}
                        {{--<p class="new1">NEW</p></a>--}}
                {{--</div>--}}
                {{--<div class="clearfix"> </div>--}}
            {{--</div>--}}

        </div>
        <div class="col-md-4 footer-bottom">
            <div class="logo-footer">
                <div class="logo-bottom">
                    <a href="#"><img src="images/lo.png" alt=""></a>
                </div>
                <div class="logo-the">
                    <h4>Herralandia</h4>
                    <p>Todo para su taller</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="indo">
                <p class="in">Fernando de la Mora, Paraguay<span></span></p>
                <ul class="social-footer ">
                    <li><span><i> </i>+595 984 652122 </span></li>
                    <li><span><i class="down"> </i>herralandia</span></li>
                    <li><a href="mailto:herralandia@gmail.com"><i class="mes"> </i>herralandia@gmail.com</a></li>
                    <li><a href="#"><i class="mes-in"> </i>http://herralandia.com.py</a></li>
                </ul>
                <a href="#"><img src="images/pa.png" alt=""></a>
            </div>
        </div>
        <div class="clearfix"> </div>
        <p class="footer-class">© 2017 Herralandia All Rights Reserved  </p>
    </div>
</div>
<!---->
</body>
</html>