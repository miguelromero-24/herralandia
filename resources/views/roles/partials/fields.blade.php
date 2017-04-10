<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('name' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Nombre' ]) !!}
    <span class="fa fa-blind form-control-feedback left" aria-hidden="true"></span>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('slug' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Identificador' ]) !!}
    <span class="fa fa-fire-extinguisher form-control-feedback left" aria-hidden="true"></span>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
    {!! Form::text('description' , null , ['class' => 'form-control has-feedback-left', 'autocomplete' => 'off',
    'placeholder' => 'Descripcion' ]) !!}
    <span class="fa fa-pencil-square form-control-feedback left" aria-hidden="true"></span>
</div>

<div class="form-group">
    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
        <button class="btn btn-info" type="reset">Limpiar</button>
        <button type="submit" class="btn btn-dark">Guardar</button>
    </div>
</div>