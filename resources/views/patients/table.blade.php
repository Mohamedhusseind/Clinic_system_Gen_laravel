<div class="table-responsive">
    <table class="table" id="patients-table">
        <thead>
            <tr>
                <th>Created By</th>
        <th>Patient Name</th>
        <th>Status</th>
        <th>Age</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Gender</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->created_by }}</td>
            <td>{{ $patient->patient_name }}</td>
            <td>{{ $patient->status }}</td>
            <td>{{ $patient->age }}</td>
            <td>{{ $patient->address }}</td>
            <td>{{ $patient->phone }}</td>
            <td>{{ $patient->gender }}</td>
                <td>
                    {!! Form::open(['route' => ['patients.destroy', $patient->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('patients.show', [$patient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('patients.edit', [$patient->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
