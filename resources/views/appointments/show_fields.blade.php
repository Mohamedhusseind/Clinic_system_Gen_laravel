<!-- Doctor Id Field -->
<div class="form-group">
    {!! Form::label('doctor_id', 'Doctor Id:') !!}
    <p>{{ $appointment->doctor_id }}</p>
</div>

<!-- Patient Id Field -->
<div class="form-group">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{{ $appointment->patient_id }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $appointment->status }}</p>
</div>

<!-- Diagnosis Field -->
<div class="form-group">
    {!! Form::label('diagnosis', 'Diagnosis:') !!}
    <p>{{ $appointment->diagnosis }}</p>
</div>

