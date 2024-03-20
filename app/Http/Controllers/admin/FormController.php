<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function dropzone_file_upload(){
        return view('admin.forms.dropzone_file_upload');
    }

    public function form_elements_2(){
        return view('admin.forms.form_elements_2');
    }

    public function form_elements(){
        return view('admin.forms.form_elements');
    }

    public function wizard_and_validation(){
        return view('admin.forms.wizard_and_validation');
    }

    public function index(){
        return view('admin.forms.wysiwyg_markdown');
    }

    public function wysiwyg_markdown(){
        return view('admin.forms.wysiwyg_markdown');
    }
}
