<!-- Reception Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reception_id', 'Reception Id:') !!}
    {!! Form::number('reception_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::number('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Patient Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_name', 'Patient Name:') !!}
    {!! Form::text('patient_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Patient Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_status', 'Patient Status:') !!}
    {!! Form::text('patient_status', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Reservation Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reservation_price', 'Reservation Price:') !!}
    {!! Form::text('reservation_price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('invoices.index') }}" class="btn btn-default">Cancel</a>
</div>
