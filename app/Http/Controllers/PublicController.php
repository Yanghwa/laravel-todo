<?php

namespace App\Http\Controllers;

use App\User;

class PublicController extends Controller {

    public function userlist() {
        $users = User::all();
        return $users;
    }
}