<div class="table-responsive">
    <table class="table" id="recipes-table">
        <thead>
            <tr>
                <th>Doctor Id</th>
        <th>Patient Id</th>
        <th>Product Name</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($recipes as $recipe)
            <tr>
                <td>{{ $recipe->doctor_id }}</td>
            <td>{{ $recipe->patient_id }}</td>
            <td>{{ $recipe->product_name }}</td>
            <td>{{ $recipe->description }}</td>
                <td>
                    {!! Form::open(['route' => ['recipes.destroy', $recipe->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('recipes.show', [$recipe->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('recipes.edit', [$recipe->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
