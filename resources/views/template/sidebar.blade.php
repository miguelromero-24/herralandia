<div class="price-grid">
    <div class="of-left">
        <h3 class="cate cate-on">Precio</h3>
    </div>
    <ul class="dropdown-menu1">
        <li><a href="#">
                <p>
                    <label for="amount" class="amount">Rango:</label>
                    <input type="text" id="amount" style="border: 0; color: #ff5d56; font-weight: bold;" />
                </p>
                <div id="slider-range"></div>
            </a></li>

    </ul>
    <a  class="go" href="single.html">GO</a>
    <div class="clearfix"> </div>
    <!---->




    <script type='text/javascript'>//<![CDATA[
        $(window).load(function(){
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 500000,
                values: [ 200000, 300000 ],
                slide: function( event, ui ) {  $( "#amount" ).val( "Gs." + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - Gs. " + $( "#slider-range" ).slider( "values", 1 ) );
        });//]]>

    </script>


    <!---->
</div>
<div class=" rsidebar span_1_of_left">
    <div class="of-left">
        <h3 class="cate">CATEGORIAS</h3>
    </div>
    <ul class="menu">
        @foreach($categories as $c)
            <li class="item1"><a href="#">{{ $c->description }} </a>
            </li>
        @endforeach
    </ul>
</div>
<!--initiate accordion-->
<script type="text/javascript">
    $(function() {
        var menu_ul = $('.menu > li > ul'),
            menu_a  = $('.menu > li > a');
        menu_ul.hide();
        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });

    });
</script>
<!---->
{{--<div class="product-middle">--}}

    {{--<div class="fit-top">--}}
        {{--<h6 class="shop-top">LOREM IPSUM</h6>--}}
        {{--<a href="single.html" class="shop-now">SHOP NOW</a>--}}
        {{--<div class="clearfix"> </div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="clearfix"> </div>
{{--<div class="sellers">--}}
    {{--<div class="of-left-in">--}}
        {{--<h3 class="tag">TAGS</h3>--}}
    {{--</div>--}}
    {{--<div class="tags">--}}
        {{--<ul>--}}
            {{--<li><a href="#">design</a></li>--}}
            {{--<li><a href="#">fashion</a></li>--}}
            {{--<li><a href="#">lorem</a></li>--}}
            {{--<li><a href="#">dress</a></li>--}}
            {{--<li><a href="#">fashion</a></li>--}}
            {{--<li><a href="#">dress</a></li>--}}
            {{--<li><a href="#">design</a></li>--}}
            {{--<li><a href="#">dress</a></li>--}}
            {{--<li><a href="#">design</a></li>--}}
            {{--<li><a href="#">fashion</a></li>--}}
            {{--<li><a href="#">lorem</a></li>--}}
            {{--<li><a href="#">dress</a></li>--}}

            {{--<div class="clearfix"> </div>--}}
        {{--</ul>--}}

    {{--</div>--}}

{{--</div>--}}

<div class="product-bottom">
    {{--<div class="of-left-in">--}}
        {{--<h3 class="best">BEST SELLERS</h3>--}}
    {{--</div>--}}
    {{--<div class="product-go">--}}
        {{--<div class=" fashion-grid">--}}
            {{--<a href="single.html"><img class="img-responsive " src="images/be.jpg" alt=""></a>--}}

        {{--</div>--}}
        {{--<div class=" fashion-grid1">--}}
            {{--<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit--}}
                    {{--amet consectetuer  </a></h6>--}}

            {{--<span class=" price-in1"> $40.00</span>--}}
        {{--</div>--}}

        {{--<div class="clearfix"> </div>--}}
    {{--</div>--}}
    {{--<div class="product-go">--}}
        {{--<div class=" fashion-grid">--}}
            {{--<a href="single.html"><img class="img-responsive " src="images/be1.jpg" alt=""></a>--}}

        {{--</div>--}}
        {{--<div class="fashion-grid1">--}}
            {{--<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit--}}
                    {{--amet consectetuer </a></h6>--}}

            {{--<span class=" price-in1"> $40.00</span>--}}
        {{--</div>--}}

        {{--<div class="clearfix"> </div>--}}
    {{--</div>--}}
    {{--<div class="product-go">--}}
        {{--<div class=" fashion-grid">--}}
            {{--<a href="single.html"><img class="img-responsive " src="images/be2.jpg" alt=""></a>--}}

        {{--</div>--}}
        {{--<div class=" fashion-grid1">--}}
            {{--<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit--}}
                    {{--amet consectetuer </a></h6>--}}
            {{--<ul class="star-footer">--}}
                {{--<li><a href="#"><i> </i></a></li>--}}
                {{--<li><a href="#"><i> </i></a></li>--}}
                {{--<li><a href="#"><i> </i></a></li>--}}
                {{--<li><a href="#"><i> </i></a></li>--}}
                {{--<li><a href="#"><i> </i></a></li>--}}
            {{--</ul>--}}
            {{--<span class=" price-in1"><small>$70.00</small> $40.00</span>--}}
        {{--</div>--}}

        {{--<div class="clearfix"> </div>--}}
    {{--</div>--}}
</div>
{{--<div class=" per1">--}}
    {{--<a href="single.html" ><img class="img-responsive" src="images/pro.jpg" alt="">--}}
        {{--<div class="six1">--}}
            {{--<h4>DISCOUNT</h4>--}}
            {{--<p>Up to</p>--}}
            {{--<span>60%</span>--}}
        {{--</div></a>--}}
{{--</div>--}}