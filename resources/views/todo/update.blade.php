@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update ToDo</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('todo_update', $toDo->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label text-md-right">Text</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="text" value="{{ $toDo->text }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="userId" class="col-md-4 col-form-label text-md-right">User ID</label>

                            <div class="col-md-6">
                                <input id="userId" type="text" class="form-control" name="userId" value="{{ $toDo->userId }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="done" class="col-md-4 col-form-label text-md-right">Done</label>

                            <div class="col-md-6">
                                @if($toDo->done == 'DONE')
                                <input id="done" type="checkbox" class="form-control" name="done" value="DONE" checked>
                                @else
                                <input id="done" type="checkbox" class="form-control" name="done" value="DONE">
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('todo_remove', $toDo->id) }}">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
