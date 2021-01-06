<div class="table-responsive">
    <table class="table" id="doctors-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
        <th>Address</th>
        <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->phone }}</td>
            <td>{{ $doctor->email }}</td>
            <td>{{ $doctor->password }}</td>
            <td>{{ $doctor->address }}</td>
            <td>{{ $doctor->remember_token }}</td>
                <td>
                    {!! Form::open(['route' => ['doctors.destroy', $doctor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('doctors.show', [$doctor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('doctors.edit', [$doctor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
