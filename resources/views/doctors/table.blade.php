<div class="table-responsive">
    <table class="table" id="doctors-table">
        <thead>
            <tr>
<<<<<<< HEAD
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
=======
                <th>Type</th>
        <th>Name</th>
        <th>Email</th>
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Remember Token</th>
        <th>Phone</th>
        <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
<<<<<<< HEAD
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->email }}</td>
            <td>{{ $doctor->phone }}</td>
            <td>{{ $doctor->address }}</td>
=======
                <td>{{ $doctor->type }}</td>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->email }}</td>
>>>>>>> 2de66a7b8df2aa48179fb6dbca349b72710b0b72
            <td>{{ $doctor->email_verified_at }}</td>
            <td>{{ $doctor->password }}</td>
            <td>{{ $doctor->remember_token }}</td>
            <td>{{ $doctor->phone }}</td>
            <td>{{ $doctor->address }}</td>
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
