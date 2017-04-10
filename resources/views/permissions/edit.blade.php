@extends('layout')
@section('title')
    {{--<h3>Usuarios--}}
    {{--<small>Lista</small>--}}
    {{--</h3>--}}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Permisos
                        <small>Editar Permiso</small>
                    </h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method' => 'patch', 'class' => 'form-horizontal form-label-left input_mask']) !!}
                    <div class="col-md-4 col-xs-12">
                        @include('permissions.partials.fields')
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
