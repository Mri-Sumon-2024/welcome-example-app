<?php

use App\Http\Controllers\admin\FormController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\LayoutController;
use App\Http\Controllers\admin\MorePageController;
use App\Http\Controllers\admin\OtherPageController;
use App\Http\Controllers\admin\TableController;
use App\Http\Controllers\admin\ThreeLevelMenuController;
use App\Http\Controllers\admin\UIandElementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){

    //HOME ROUTES
    Route::get('/calender', [HomeController::class, 'calender'])->name('admin.calender');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/gallery', [HomeController::class, 'gallery'])->name('admin.gallery');
    Route::get('/widgets', [HomeController::class, 'widgets'])->name('admin.widgets');

    //FORM ROUTES
    Route::get('/forms/dropzone_file_upload', [FormController::class, 'dropzone_file_upload'])->name('forms.dropzone_file_upload');
    Route::get('/forms/form_elements_2', [FormController::class, 'form_elements_2'])->name('forms.form_elements_2');
    Route::get('/forms/form_elements', [FormController::class, 'form_elements'])->name('forms.form_elements');
    Route::get('/forms/wizard_and_validation', [FormController::class, 'wizard_and_validation'])->name('forms.wizard_and_validation');
    Route::get('/forms/wysiwyg_markdown', [FormController::class, 'wysiwyg_markdown'])->name('forms.wysiwyg_markdown');

    //MORE PAGE ROUTES
    Route::get('/more_pages/email_templates', [MorePageController::class, 'email_templates'])->name('more_pages.email_templates');
    Route::get('/more_pages/index', [MorePageController::class, 'index'])->name('more_pages.index');
    Route::get('/more_pages/invoice', [MorePageController::class, 'invoice'])->name('more_pages.invoice');
    Route::get('/more_pages/login_and_register', [MorePageController::class, 'login_and_register'])->name('more_pages.login_and_register');
    Route::get('/more_pages/pricing_tables', [MorePageController::class, 'pricing_tables'])->name('more_pages.pricing_tables');
    Route::get('/more_pages/search_results', [MorePageController::class, 'search_results'])->name('more_pages.search_results');
    Route::get('/more_pages/timeline', [MorePageController::class, 'timeline'])->name('more_pages.timeline');
    Route::get('/more_pages/user_profile', [MorePageController::class, 'user_profile'])->name('more_pages.user_profile');


    //OTHRR PAGE ROUTES
    Route::get('/other_pages/blank_page', [OtherPageController::class, 'blank_page'])->name('other_pages.blank_page');
    Route::get('/other_pages/error_404', [OtherPageController::class, 'error_404'])->name('other_pages.error_404');
    Route::get('/other_pages/error_500', [OtherPageController::class, 'error_500'])->name('other_pages.error_500');
    Route::get('/other_pages/faq', [OtherPageController::class, 'faq'])->name('other_pages.faq');
    Route::get('/other_pages/grid', [OtherPageController::class, 'grid'])->name('other_pages.grid');


    //TABLE PAGE ROUTES
    Route::get('/tables/jqgrid_plugin', [TableController::class, 'jqgrid_plugin'])->name('tables.jqgrid_plugin');
    Route::get('/tables/simple_and_dynamic', [TableController::class, 'simple_and_dynamic'])->name('tables.simple_and_dynamic');



    //UI AND ELEMENTS PAGE ROUTES
    Route::get('/ui_and_elements/buttons_and_icons', [UIandElementController::class, 'buttons_and_icons'])->name('ui_and_elements.buttons_and_icons');
    Route::get('/ui_and_elements/content_sliders', [UIandElementController::class, 'content_sliders'])->name('ui_and_elements.content_sliders');
    Route::get('/ui_and_elements/elements', [UIandElementController::class, 'elements'])->name('ui_and_elements.elements');
    Route::get('/ui_and_elements/jquery_ui', [UIandElementController::class, 'jquery_ui'])->name('ui_and_elements.jquery_ui');
    Route::get('/ui_and_elements/nestable_lists', [UIandElementController::class, 'nestable_lists'])->name('ui_and_elements.nestable_lists');
    Route::get('/ui_and_elements/treeview', [UIandElementController::class, 'treeview'])->name('ui_and_elements.treeview');
    Route::get('/ui_and_elements/typography', [UIandElementController::class, 'typography'])->name('ui_and_elements.typography');

    
    //LAYOUTS ROUTES
    Route::get('/ui_and_elements/layouts/default_mobile_menu', [LayoutController::class, 'default_mobile_menu'])->name('ui_and_elements.layouts.default_mobile_menu');
    Route::get('/ui_and_elements/layouts/mobile_menu_2', [LayoutController::class, 'mobile_menu_2'])->name('ui_and_elements.layouts.mobile_menu_2');
    Route::get('/ui_and_elements/layouts/mobile_menu_3', [LayoutController::class, 'mobile_menu_3'])->name('ui_and_elements.layouts.mobile_menu_3');
    Route::get('/ui_and_elements/layouts/top_menu', [LayoutController::class, 'top_menu'])->name('ui_and_elements.layouts.top_menu');
    Route::get('/ui_and_elements/layouts/two_menus_1', [LayoutController::class, 'two_menus_1'])->name('ui_and_elements.layouts.two_menus_1');
    Route::get('/ui_and_elements/layouts/two_menus_2', [LayoutController::class, 'two_menus_2'])->name('ui_and_elements.layouts.two_menus_2');


    //fourth_level ROUTES
    Route::get('/ui_and_elements/three_level_manu/fourth_level', [ThreeLevelMenuController::class, 'fourth_level'])->name('ui_and_elements.layouts.fourth_level');
    Route::get('/ui_and_elements/three_level_manu/item_1', [ThreeLevelMenuController::class, 'item_1'])->name('ui_and_elements.layouts.item_1');


});
















