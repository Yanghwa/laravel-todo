@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show ToDo</div>

                <div class="card-body">
                    <table>
                        <tr>
                            <th>Todo</th>
                            <th>Done</th>
                            <th>Change</th>
                        </tr>
                    @if(count($list) > 0)
                    @foreach ($list as $key)
                    <tr>
                        <td>{{ $key['text'] }}</td>
                        <td>{{ $key['done'] }}</td>
                        <td><a href="/todo/{{ $key['id'] }}">Update</a></td>
                    </tr>
                    @endforeach
                    @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
