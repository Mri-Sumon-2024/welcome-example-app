<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function calender(){
        return view('admin.calender');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function gallery(){
        return view('admin.gallery');
    }

    public function widgets(){
        return view('admin.widgets');
    }
}
