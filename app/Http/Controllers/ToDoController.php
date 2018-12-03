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
        if(!isset($input['done'])) {
            $input['done'] = "TO DO";
        }
        unset($input['_token']);
        ToDoList::create($input);
        return view('todo.create');
    }

    public function update($id) {
        $toDo = ToDoList::findOrFail($id);
        return view('todo.update', compact('toDo'));
    }

    public function updateMethod(Request $request, $id) {
        $toDo = ToDoList::findOrFail($id);
        $input = $request->all();
        if(!isset($input['done'])) {
            $input['done'] = "TO DO";
        }
        unset($input['_token']);
        $toDo->update($input);
        return view('todo.update', compact('toDo'));
    }

    public function delete($id) {
        dd($id);
        $toDo = ToDoList::findOrFail($id);
        dd($toDo);
        if($toDo)
            $toDo->delete(); 
        else
            return response()->json(null);
        return response()->json(null); 
    }
}