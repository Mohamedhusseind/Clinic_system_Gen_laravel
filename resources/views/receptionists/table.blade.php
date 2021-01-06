<div class="table-responsive">
    <table class="table" id="receptionists-table">
        <thead>
            <tr>
                <th>Doctor Id</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Email</th>
        <th>Password</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($receptionists as $receptionist)
            <tr>
                <td>{{ $receptionist->doctor_id }}</td>
            <td>{{ $receptionist->name }}</td>
            <td>{{ $receptionist->phone }}</td>
            <td>{{ $receptionist->address }}</td>
            <td>{{ $receptionist->email }}</td>
            <td>{{ $receptionist->password }}</td>
                <td>
                    {!! Form::open(['route' => ['receptionists.destroy', $receptionist->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('receptionists.show', [$receptionist->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('receptionists.edit', [$receptionist->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
