<div class="table-responsive">
    <table class="table" id="pessoas-table">
        <thead>
            <tr>
                <th>Nome</th>
        <th>Cpf</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pessoas as $pessoa)
            <tr>
                <td>{{ $pessoa->nome }}</td>
            <td>{{ $pessoa->cpf }}</td>
                <td>
                    {!! Form::open(['route' => ['pessoas.destroy', $pessoa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pessoas.show', [$pessoa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('pessoas.edit', [$pessoa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
