<div class="table-responsive">
    <table class="table" id="invoices-table">
        <thead>
            <tr>
                <th>Reception Id</th>
        <th>Patient Id</th>
        <th>Patient Name</th>
        <th>Patient Status</th>
        <th>Reservation Price</th>
        <th>Phone</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($invoices as $invoice)
            <tr>
                <td>{{ $invoice->reception_id }}</td>
            <td>{{ $invoice->patient_id }}</td>
            <td>{{ $invoice->patient_name }}</td>
            <td>{{ $invoice->patient_status }}</td>
            <td>{{ $invoice->reservation_price }}</td>
            <td>{{ $invoice->phone }}</td>
                <td>
                    {!! Form::open(['route' => ['invoices.destroy', $invoice->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('invoices.show', [$invoice->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('invoices.edit', [$invoice->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
