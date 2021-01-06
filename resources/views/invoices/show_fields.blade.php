<!-- Reception Id Field -->
<div class="form-group">
    {!! Form::label('reception_id', 'Reception Id:') !!}
    <p>{{ $invoice->reception_id }}</p>
</div>

<!-- Patient Id Field -->
<div class="form-group">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $invoice->patient_id }}</p>
</div>

<!-- Patient Name Field -->
<div class="form-group">
    {!! Form::label('patient_name', 'Patient Name:') !!}
    <p>{{ $invoice->patient_name }}</p>
</div>

<!-- Patient Status Field -->
<div class="form-group">
    {!! Form::label('patient_status', 'Patient Status:') !!}
    <p>{{ $invoice->patient_status }}</p>
</div>

<!-- Reservation Price Field -->
<div class="form-group">
    {!! Form::label('reservation_price', 'Reservation Price:') !!}
    <p>{{ $invoice->reservation_price }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $invoice->phone }}</p>
</div>

