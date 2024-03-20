<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function jqgrid_plugin(){
        return view('admin.tables.jqgrid_plugin');
    }

    public function simple_and_dynamic(){
        return view('admin.tables.simple_and_dynamic');
    }
}
