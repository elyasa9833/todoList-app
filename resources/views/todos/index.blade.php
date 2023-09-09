@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">TodoList</div>
                    <div class="panel-body">
                        <a href="{{ url('todos/create') }}" class="btn btn-primary">Add Todo</a>
                        <br> <br> <br>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    <th>Is Done</th>
                                    <th class="col-lg-3">Action</th>
                                </tr>

                                @if (!count($todos))
                                    <tr>
                                        <td colspan="3">No Todo</td>
                                    </tr>
                                @endif
                                @foreach ($todos as $todo)
                                    <tr>
                                        <td>{{ $todo->name }}</td>
                                        <td>{{ $todo->is_done ? 'done':'not done' }}</td>
                                        <td>
                                            <a href="{{ url('/todos/'.$todo->id.'/edit') }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ url('/todos/'.$todo->id.'/edit') }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection