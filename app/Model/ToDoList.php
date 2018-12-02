<?php

namespace App\Model;
use \Illuminate\Database\Eloquent\Model as Eloquent;

class ToDoList extends Eloquent
{
    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'tb_todolist';

    protected $primaryKey = 'id';
}