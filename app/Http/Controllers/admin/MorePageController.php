<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MorePageController extends Controller
{
    public function email_templates(){
        return view('admin.more_pages.email_templates');
    }

    public function index(){
        return view('admin.more_pages.index');
    }

    public function invoice(){
        return view('admin.more_pages.invoice');
    }

    public function login_and_register(){
        return view('admin.more_pages.login_and_register');
    }

    public function pricing_tables(){
        return view('admin.more_pages.pricing_tables');
    }

    public function search_results(){
        return view('admin.more_pages.search_results');
    }

    public function timeline(){
        return view('admin.more_pages.timeline');
    }

    public function user_profile(){
        return view('admin.more_pages.user_profile');
    }
    
}
