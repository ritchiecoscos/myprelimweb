<!-- Product Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Product_price', 'Product Price:') !!}
    {!! Form::text('Product_price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price', 'Price:') !!}
    {!! Form::number('Price', null, ['class' => 'form-control']) !!}
</div>