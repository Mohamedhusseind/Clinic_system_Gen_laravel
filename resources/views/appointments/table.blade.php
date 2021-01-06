<div class="table-responsive">
    <table class="table" id="appointments-table">
        <thead>
            <tr>
                <th>Doctor Id</th>
        <th>Patient Id</th>
        <th>Status</th>
        <th>Diagnosis</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->doctor_id }}</td>
            <td>{{ $appointment->patient_id }}</td>
            <td>{{ $appointment->status }}</td>
            <td>{{ $appointment->diagnosis }}</td>
                <td>
                    {!! Form::open(['route' => ['appointments.destroy', $appointment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('appointments.show', [$appointment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('appointments.edit', [$appointment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
