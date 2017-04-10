<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('contact_first_name' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Nombre' ]) !!}
    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('contact_last_name' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Apellido' ]) !!}
    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('idnum' ,  null, ['class' => 'form-control has-feedback-left',
    'autocomplete' => 'off', 'placeholder' => 'Cedula']) !!}
    <span class="fa fa-globe form-control-feedback left" aria-hidden="true"></span>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('tax_code' ,  null, ['class' => 'form-control has-feedback-left',
    'autocomplete' => 'off', 'placeholder' => 'Ruc']) !!}
    <span class="fa fa-gavel form-control-feedback left" aria-hidden="true"></span>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('email' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Email' ]) !!}
    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('address' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Direccion' ]) !!}
    <span class="fa fa-car form-control-feedback left" aria-hidden="true"></span>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('telephone' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Telefono' ]) !!}
    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
</div>




<div class="form-group">
    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
        <button class="btn btn-info" type="reset">Limpiar</button>
        <button type="submit" class="btn btn-dark">Guardar</button>
    </div>
</div>