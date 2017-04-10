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
                    <h2>Usuarios
                        <small>Nuevo Usuario</small>
                    </h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch', 'class' => 'form-horizontal form-label-left input_mask']) !!}
                    <div class="col-md-4 col-xs-12">
                        @include('users.partials.fields')
                    </div>
                    <div class="col-md-8 col-xs-12">
                        @include('users.partials.permissions')
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#selectRoles').selectize({
            delimiter: ',',
            persist: false,
            openOnFocus: true,
            valueField: 'id',
            labelField: 'name',
            searchField: 'name',
            render: {
                item: function (item, escape) {
                    return '<div><span class="label label-primary">' + escape(item.name) + '</span></div>';
                }
            },
            options: {!! $rolesJson !!}
        });
    </script>
@append
