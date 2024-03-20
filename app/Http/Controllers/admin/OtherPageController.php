<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherPageController extends Controller
{
    public function blank_page(){
        return view('admin.other_pages.blank_page');
    }

    public function error_404(){
        return view('admin.other_pages.error_404');
    }

    public function error_500(){
        return view('admin.other_pages.error_500');
    }

    public function faq(){
        return view('admin.other_pages.faq');
    }

    public function grid(){
        return view('admin.other_pages.grid');
    }

}
