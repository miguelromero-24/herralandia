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
                    <h2>Roles
                        <small>Nuevo Rol</small>
                    </h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch', 'class' => 'form-horizontal form-label-left input_mask']) !!}
                    <div class="col-md-4 col-xs-12">
                        @include('roles.partials.fields')
                    </div>
                    <div class="col-md-8 col-xs-12">
                        @include('roles.partials.permissions')
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

