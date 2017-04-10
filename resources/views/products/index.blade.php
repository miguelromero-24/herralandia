@extends('layout')

@section('title')
     Productos
@endsection

@section('breadcrumb')
<h6 class="dress"><a href="{{ url('/') }}">Inicio</a> <i> </i> Productos </h6>
@endsection

@section('section')
    Productos
@endsection


@section('body')

            <div class="col-md-3 product-price">
                @include('template.sidebar')
            </div>
            @include('template.products')
            <div class="clearfix"> </div>

            {{--@include('template.pre_foot')--}}


    {{--<div class="bottom-grid1">--}}

        {{--<div class="fit1">--}}
            {{--<h3>HAPPY SHOPPING</h3>--}}
            {{--<p>Lorem Ipsum sit amet consectuer adipiscing elit--}}
                {{--sed diam nonummy nibh euismod</p>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection