<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('first_name' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Nombre' ]) !!}
    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('last_name' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Apellido' ]) !!}
    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
</div>

<!-- TODO validar si el correo electronico puede cambiarse -->
<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('email' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Email' ]) !!}
    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('username' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Nombre de Usuario' ]) !!}
    <span class="fa fa-meh-o form-control-feedback left" aria-hidden="true"></span>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('telephone' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Telefono' ]) !!}
    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    <label class="control-label col-md-6 col-sm-6 col-xs-12">Roles de Usuario</label>
    {!! Form::text('roles' , !empty($rolesIds) ? $rolesIds : null, ['class' => 'form-control has-feedback-left',
    'autocomplete' => 'off', 'placeholder' => 'Roles', 'id' => 'selectRoles' ]) !!}
</div>


<div class="form-group">
    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
        <button class="btn btn-info" type="reset">Limpiar</button>
        <button type="submit" class="btn btn-dark">Guardar</button>
    </div>
</div>