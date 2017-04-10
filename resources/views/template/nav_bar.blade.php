<div class="container">
    <div class="logo">
        <h1><a href="{{ url('/') }}">Herralandia</a></h1>
    </div>
    <div class="top-nav">
        <!-- start header menu -->
        <ul class="megamenu skyblue menu-in">
            <li><a  href="index.html">Inicio</a></li>
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
            {{--<div class="clearfix"> </div>--}}
        </div>
        <!---->
    </div>
    <div class="clearfix"> </div>
</div>