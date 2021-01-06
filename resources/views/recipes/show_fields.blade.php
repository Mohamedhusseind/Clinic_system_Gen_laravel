<!-- Doctor Id Field -->
<div class="form-group">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    <p>{{ $recipe->doctor_id }}</p>
</div>

<!-- Patient Id Field -->
<div class="form-group">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $recipe->patient_id }}</p>
</div>

<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $recipe->product_name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $recipe->description }}</p>
</div>

