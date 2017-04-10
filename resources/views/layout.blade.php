<!DOCTYPE html>
<html>
<head>
    <title>Herralandia - @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    @include('template.css')
    @include('template.javascript')

</head>
<body>
<!--header-->
<div class=" header-product">
    @include('template.up_bar')
</div>
<!---->
<div class="container">
    @yield('breadcrumb')
</div>
<div class="back">
    <h2>@yield('section')</h2>
</div>
<div class="product">
    <div class="container">
@yield('body')
    </div>
</div>


<script src="js/simpleCart.min.js"> </script>

<div class="footer">
    <div class="container">
        <div class="col-md-4 footer-top">
            <h3>QUICK CONTACT</h3>
            <form>

                <input type="text" value="ENTER YOUR NAME*" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR NAME*';}">

                <input type="text" value="ENTER YOUR EMAIL*" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR EMAIL*';}">

                <input type="text" value="ENTER YOUR PHONE" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR PHONE';}">

                <textarea cols="77" rows="6" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'ENTER YOUR MESSAGE*';}">ENTER YOUR MESSAGE*</textarea>

                <input type="submit" value="SEND MESSAGE" >

            </form>

        </div>
        <div class="col-md-4 footer-middle">
            <h3>TOP RATED PRODUCTS</h3>
            <div class="product-go">
                <div class="grid-product">
                    <h6><a href="#" >Winter Combo Style</a></h6>
                    <ul class="star-footer">
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i> </i></a></li>
                    </ul>
                    <span class=" price-in"><small>$70.00</small> $40.00</span>
                </div>
                <div class="fashion">
                    <a href="#"><img class="img-responsive " src="images/f1.jpg" alt="">
                        <p>SALE</p></a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="product-go">
                <div class="grid-product">
                    <h6><a href="#" >Winter Combo Style</a></h6>
                    <ul class="star-footer">
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i> </i></a></li>
                    </ul>
                    <span class=" price-in"><small>$70.00</small> $40.00</span>
                </div>
                <div class="fashion">
                    <a href="#"><img class="img-responsive " src="images/f2.jpg" alt="">
                        <p class="new1">NEW</p></a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="product-go">
                <div class="grid-product">
                    <h6><a href="#" >Winter Combo Style</a></h6>
                    <ul class="star-footer">
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i> </i></a></li>
                    </ul>
                    <span class=" price-in"><small>$70.00</small> $40.00</span>
                </div>
                <div class="fashion">
                    <a href="#"><img class="img-responsive " src="images/f3.jpg" alt="">
                        <p class="new1">NEW</p></a>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
        <div class="col-md-4 footer-bottom">
            <div class="logo-footer">
                <div class="logo-bottom">
                    <a href="#"><img src="images/lo.png" alt=""></a>
                </div>
                <div class="logo-the">
                    <h4>Amberegul Theme</h4>
                    <p>Was designed for opencart, magento,
                        woocommerce and prestashop platforms.
                        It is based on Bootstrap.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="indo">
                <p class="in">Bandung, Indonesia <span>40553</span></p>
                <ul class="social-footer ">
                    <li><span><i> </i>+62 226759804 </span></li>
                    <li><span><i class="down"> </i>blithemes</span></li>
                    <li><a href="mailto:info@example.com"><i class="mes"> </i>info@example.com</a></li>
                    <li><a href="#"><i class="mes-in"> </i>http://example.com</a></li>
                </ul>
                <a href="#"><img src="images/pa.png" alt=""></a>
            </div>
        </div>
        <div class="clearfix"> </div>
        <p class="footer-class">© 2015 Amberegul All Rights Reserved | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
</div>
<!---->
</body>
</html>