<div class="table-responsive">
    <table class="table" id="votes-table">
        <thead>
            <tr>
                <th>Sender</th>
        <th>Message</th>
        <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($votes as $vote)
            <tr>
                <td>{{ $vote->sender }}</td>
            <td>{{ $vote->message }}</td>
            <td>{{ $vote->email }}</td>
                <td>
                    {!! Form::open(['route' => ['votes.destroy', $vote->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('votes.show', [$vote->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('votes.edit', [$vote->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
