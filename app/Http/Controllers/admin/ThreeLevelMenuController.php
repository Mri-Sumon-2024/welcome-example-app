<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThreeLevelMenuController extends Controller
{
    public function fourth_level(){
        return view('admin.ui_and_elements.three_level_manu.fourth_level');
    }

    public function item_1(){
        return view('admin.ui_and_elements.three_level_manu.item_1');
    }
}
