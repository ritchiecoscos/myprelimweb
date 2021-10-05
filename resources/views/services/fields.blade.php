<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- You Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('You_email', 'You Email:') !!}
    {!! Form::text('You_email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>