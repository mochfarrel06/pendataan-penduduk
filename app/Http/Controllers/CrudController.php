<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        return 'Ini dari controller dengan method index';
    }
    public function edit(){
        return 'Ini methos edit';
    }
}
