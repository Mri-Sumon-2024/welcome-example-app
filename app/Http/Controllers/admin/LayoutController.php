<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function default_mobile_menu(){
        return view('admin.ui_and_elements.layouts.default_mobile_menu');
    }

    public function mobile_menu_2(){
        return view('admin.ui_and_elements.layouts.mobile_menu_2');
    }

    public function mobile_menu_3(){
        return view('admin.ui_and_elements.layouts.mobile_menu_3');
    }

    public function top_menu(){
        return view('admin.ui_and_elements.layouts.top_menu');
    }

    public function two_menus_1(){
        return view('admin.ui_and_elements.layouts.two_menus_1');
    }

    public function two_menus_2(){
        return view('admin.ui_and_elements.layouts.two_menus_2');
    }

}
