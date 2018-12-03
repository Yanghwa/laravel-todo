<?php

namespace App\Http\Controllers;

use Auth;
use App\Model\ToDoList;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function __construct() {
		$this->middleware('auth');
    }
    
    public function show() {
        $user = Auth::user();
        $userId = $user->id;
        $list = ToDoList::where('userId', $userId)->get();
        return $list;
    }

    public function create() {
        return view('todo.create');
    }

    public function createMethod(Request $request) {
        $input = $request->all();
        if($input['done'] == 'true') {
            $input['done'] = true;
        } else {
            $input['done'] = false;
        }
        unset($input['_token']);
        ToDoList::create($input);
        return view('todo.create');
    }

    public function update(Request $request, $id) {
        $toDo = ToDoList::findOrFail($id);
        $toDo->update($request->all());

        return $toDo;
    }

    public function delete(Request $request, $id) {
        $toDo = ToDoList::findOrFail($id);
        $toDo->delete();

        return 204;
    }
}