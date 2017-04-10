<div class="col-md-9 product-price1">
    <div class="mens-toolbar">
        <p class="showing">Mostrando 1–9 of 21 results</p>
        {{--<div class="sort">--}}
        {{--<select>--}}
        {{--<option value=""> Sorting By Rate</option>--}}
        {{--<option value="">Sorting By Color </option>--}}
        {{--<option value="">Sorting By Price </option>--}}
        {{--</select>--}}

        {{--</div>--}}

        <div class="clearfix"></div>
    </div>
    <div class="product-right-top">
        @foreach ($productsMatrix as $p)
            <div class="top-product">
                @for($i = 0; $i <= 2; $i++)
                    @if(array_key_exists($i, $p))
                    <div class="col-md-4 chain-grid  simpleCart_shelfItem">
                        <div class="grid-span-1">
                            <a href="{{ route('products.show', $p[$i]->id) }}"><img class="img-responsive " src="{{ "/images/products/" . $p[$i]->id . ".jpg"}}" alt=" ">
                                <div class="link">
                                    <ul>
                                        <li><i> </i></li>
                                        <li><i class="white1"> </i></li>

                                    </ul>
                                </div>
                            </a>
                        </div>
                        <div class="grid-chain-bottom ">
                            <h6><a href="{{ route('products.show', $p[$i]->id) }}">{{ $p[$i]->description }}</a></h6>
                            <div class="star-price">
                                <div class="price-at">
                                    <ul class="star-footer">
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                    </ul>
                                </div>
                                <div class="price-at-bottom ">
                                    <span class="item_price">$ 75.00</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="cart-add">
                                <a class="add1 item_add" href="{{ route('products.show', $p[$i]->id) }}">Ver mas <i> </i></a>
                                <a class="add2" href="#"><i> </i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endfor
            </div>
        @endforeach


        <div class="top-product">
            <div class="col-md-4 chain-grid  simpleCart_shelfItem">
                <div class="grid-span-1">
                    <a href="single.html"><img class="img-responsive " src="images/pr.jpg" alt=" ">
                        <div class="link">
                            <ul>
                                <li><i> </i></li>
                                <li><i class="white1"> </i></li>

                            </ul>
                        </div>
                    </a>
                </div>
                <div class="grid-chain-bottom ">
                    <h6><a href="single.html">WOO JACKET #1</a></h6>
                    <div class="star-price">
                        <div class="price-at">
                            <ul class="star-footer">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>
                        </div>
                        <div class="price-at-bottom ">
                            <span class="item_price">$ 75.00</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="cart-add">
                        <a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
                        <a class="add2" href="#"><i> </i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 chain-grid simpleCart_shelfItem">
                <div class="grid-span-1">
                    <a href="single.html"><img class="img-responsive " src="images/pr1.jpg" alt=" ">
                        <div class="link">
                            <ul>
                                <li><i> </i></li>
                                <li><i class="white1"> </i></li>

                            </ul>
                        </div>
                    </a>
                </div>
                <div class="grid-chain-bottom ">
                    <h6><a href="single.html">WOO JACKET #1</a></h6>
                    <div class="star-price">
                        <div class="price-at">
                            <ul class="star-footer">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>
                        </div>
                        <div class="price-at-bottom ">
                            <span class="item_price">$ 75.00</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="cart-add">
                        <a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
                        <a class="add2" href="#"><i> </i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 chain-grid simpleCart_shelfItem">
                <div class="grid-span-1">
                    <a href="single.html"><img class="img-responsive " src="images/pr2.jpg" alt=" ">
                        <div class="link">
                            <ul>
                                <li><i> </i></li>
                                <li><i class="white1"> </i></li>

                            </ul>
                        </div>
                    </a>
                </div>
                <div class="grid-chain-bottom ">
                    <h6><a href="single.html">WOO JACKET #1</a></h6>
                    <div class="star-price">
                        <div class="price-at">
                            <ul class="star-footer">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>
                        </div>
                        <div class="price-at-bottom ">
                            <span class="item_price">$ 75.00</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="cart-add">
                        <a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
                        <a class="add2" href="#"><i> </i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="top-product">

            <div class="col-md-4 chain-grid simpleCart_shelfItem">
                <div class="grid-span-1">
                    <a href="single.html"><img class="img-responsive " src="images/pr7.jpg" alt=" ">
                        <div class="link">
                            <ul>
                                <li><i> </i></li>
                                <li><i class="white1"> </i></li>

                            </ul>
                        </div>
                        <span>NEW</span></a>
                </div>
                <div class="grid-chain-bottom ">
                    <h6><a href="single.html">WOO JACKET #1</a></h6>
                    <div class="star-price">
                        <div class="price-at">
                            <ul class="star-footer">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>
                        </div>
                        <div class="price-at-bottom ">
                            <span class="item_price">$ 75.00</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="cart-add">
                        <a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
                        <a class="add2" href="#"><i> </i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 chain-grid simpleCart_shelfItem">

                <div class="grid-span-1">
                    <a href="single.html"><img class="img-responsive " src="images/pr4.jpg" alt=" ">
                        <div class="link">
                            <ul>
                                <li><i> </i></li>
                                <li><i class="white1"> </i></li>

                            </ul>
                        </div>
                    </a>
                </div>
                <div class="grid-chain-bottom ">
                    <h6><a href="single.html">WOO JACKET #1</a></h6>
                    <div class="star-price">
                        <div class="price-at">
                            <ul class="star-footer">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>
                        </div>
                        <div class="price-at-bottom ">
                            <span class="item_price">$ 75.00</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="cart-add">
                        <a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
                        <a class="add2" href="#"><i> </i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 chain-grid simpleCart_shelfItem">
                <div class="grid-span-1">
                    <a href="single.html"><img class="img-responsive " src="images/pr5.jpg" alt=" ">
                        <div class="link">
                            <ul>
                                <li><i> </i></li>
                                <li><i class="white1"> </i></li>

                            </ul>
                        </div>
                    </a>
                </div>
                <div class="grid-chain-bottom ">
                    <h6><a href="single.html">WOO JACKET #1</a></h6>
                    <div class="star-price">
                        <div class="price-at">
                            <ul class="star-footer">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>
                        </div>
                        <div class="price-at-bottom ">
                            <span class="item_price">$ 75.00</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="cart-add">
                        <a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
                        <a class="add2" href="#"><i> </i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="top-product">

            <div class="col-md-4 chain-grid simpleCart_shelfItem">
                <div class="grid-span-1">
                    <a href="single.html"><img class="img-responsive " src="images/pr6.jpg" alt=" ">
                        <div class="link">
                            <ul>
                                <li><i> </i></li>
                                <li><i class="white1"> </i></li>

                            </ul>
                        </div>
                        <span>NEW</span></a>
                </div>
                <div class="grid-chain-bottom ">
                    <h6><a href="single.html">WOO JACKET #1</a></h6>
                    <div class="star-price">
                        <div class="price-at">
                            <ul class="star-footer">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>
                        </div>
                        <div class="price-at-bottom ">
                            <span class="item_price">$ 75.00</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="cart-add">
                        <a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
                        <a class="add2" href="#"><i> </i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 chain-grid simpleCart_shelfItem">
                <div class="grid-span-1">
                    <a href="single.html"><img class="img-responsive " src="images/pr7.jpg" alt=" ">
                        <div class="link">
                            <ul>
                                <li><i> </i></li>
                                <li><i class="white1"> </i></li>

                            </ul>
                        </div>
                        <span>NEW</span></a>
                </div>
                <div class="grid-chain-bottom ">
                    <h6><a href="single.html">WOO JACKET #1</a></h6>
                    <div class="star-price">
                        <div class="price-at">
                            <ul class="star-footer">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>
                        </div>
                        <div class="price-at-bottom ">
                            <span class="item_price">$ 75.00</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="cart-add">
                        <a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
                        <a class="add2" href="#"><i> </i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 chain-grid simpleCart_shelfItem">
                <div class="grid-span-1">
                    <a href="single.html"><img class="img-responsive " src="images/pr.jpg" alt=" ">
                        <div class="link">
                            <ul>
                                <li><i> </i></li>
                                <li><i class="white1"> </i></li>

                            </ul>
                        </div>
                        <span>NEW</span></a>
                </div>
                <div class="grid-chain-bottom ">
                    <h6><a href="single.html">WOO JACKET #1</a></h6>
                    <div class="star-price">
                        <div class="price-at">
                            <ul class="star-footer">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>
                        </div>
                        <div class="price-at-bottom ">
                            <span class="item_price">$ 75.00</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="cart-add">
                        <a class="add1 item_add" href="#">ADD TO CART <i> </i></a>
                        <a class="add2" href="#"><i> </i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <ul class="start">
        <li><a href="#"><i> </i></a></li>
        <li><span>1</span></li>
        <li class="arrow"><a href="#">2</a></li>
        <li class="arrow"><a href="#">3</a></li>


        <li><a href="#"><i class="next"> </i></a></li>
    </ul>
    <div class="clearfix"></div>
</div>