<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UIandElementController extends Controller
{
    public function buttons_and_icons(){
        return view('admin.ui_and_elements.buttons_and_icons');
    }

    public function content_sliders(){
        return view('admin.ui_and_elements.content_sliders');
    }

    public function elements(){
        return view('admin.ui_and_elements.elements');
    }

    public function jquery_ui(){
        return view('admin.ui_and_elements.jquery_ui');
    }

    public function nestable_lists(){
        return view('admin.ui_and_elements.nestable_lists');
    }

    public function treeview(){
        return view('admin.ui_and_elements.treeview');
    }

    public function typography(){
        return view('admin.ui_and_elements.typography');
    }

}
