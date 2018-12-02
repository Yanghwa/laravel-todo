<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Model\ToDoList;
use App\Http\Controllers\Controller;

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

    public function create(Request $request) {
        return ToDoList::create($request->all());
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

    public function userlist() {
        $users = User::all();
        return $users;
    }
}