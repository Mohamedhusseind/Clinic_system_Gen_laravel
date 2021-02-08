<div class="table-responsive">
    <table class="table" id="reseptionists-table">
        <thead>
            <tr>
                <th>Type</th>
        <th>Name</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Remember Token</th>
        <th>Phone</th>
        <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reseptionists as $reseptionist)
            <tr>
                <td>{{ $reseptionist->type }}</td>
            <td>{{ $reseptionist->name }}</td>
            <td>{{ $reseptionist->email }}</td>
            <td>{{ $reseptionist->email_verified_at }}</td>
            <td>{{ $reseptionist->password }}</td>
            <td>{{ $reseptionist->remember_token }}</td>
            <td>{{ $reseptionist->phone }}</td>
            <td>{{ $reseptionist->address }}</td>
                <td>
                    {!! Form::open(['route' => ['reseptionists.destroy', $reseptionist->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reseptionists.show', [$reseptionist->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('reseptionists.edit', [$reseptionist->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
