<?php

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


Route::view('/test_view', 'test');

Route::get('/test', function () {
    $data = [
        'name' => 'Mazid',
        'age' => 35,
        'dob' => "10 - 10 - 1990"
    ];
    $test['data'] = $data;
    $data = array('name' => 'Mazid', 'age' => 35, 'dob' => 10 - 10 - 1990);
    return view('test', $data);
});

Route::view('/test_view', 'test');
Route::get('/test_controller', 'Test@test');

Route::get('/header', 'Test@header');
Route::get('/footer', function () {
    return view('footer');
});


Route::get('/home', 'Test@home');
Route::get('/about', 'Test@about');
Route::get('/profile', 'Test@profile');
Route::get('/profile1', 'Test@profile1');

Route::get('/userForm', 'User@form');
Route::post('/formSubmit', 'User@formSubmit');

Route::view('/login', 'login.login');
Route::view('/login', 'login.login');
Route::post('/registration', 'Login@registration');

Route::view('/h1', 'h1');
Route::view('/h2', 'h2');

// =====COMPONENT==========================
Route::view('/component_view', 'component_view');
Route::view('/component_view2', 'component_view2');

// =====FORM==========================
Route::get('form_view', 'Form@form_view');
Route::get('form_submit', 'Form@form_submit');

// ========Blade============
Route::get('blade_view', function () {
    return view('blade_view', array('data' => array('name' => 'Rajik', 'age' => '20')));
});


// ======= muster templating =============
// Route::view('app', 'app');
// Route::view('app/page1', 'app_page1');
// Route::view('app/page2', 'app_page2');



// ========middleware testing======
Route::view('606', '606');


// =====group middleware=======
Route::group(['middleware' => ['UserAuth']], function () {
    Route::view('app/page1', 'app_page1');
    Route::view('app/page2', 'app_page2');
});

// ========route middleware=====
Route::view('app', 'app')->middleware('UserAuth2');


// ============SESSION TEST========
Route::get('session_set', 'Session@session_set');
Route::get('session_get', 'Session@session_get');
Route::get('session_test', 'Session@session_test');

Route::get('session_destroy', 'Session@session_destroy');



// =========STATIC LOGIN VALIDATION USNG SESSION FROM CONTROLLER ============
Route::get('admin_login', 'Admin@index');
Route::post('admin_auth', 'Admin@admin_auth');
Route::get('admin_logout', 'Admin@admin_logout');

Route::get('admin_dashboard', 'Admin@admin_dashboard');


// =========STATIC LOGIN VALIDATION USNG SESSION FROM ROUTE ============
Route::get('admin_dashboard_route', function () {
    if (session()->has('user_token')) {
        session()->flash('valid_user', 'Please try with valid user credentials | Redirect from Route');
        return view('admin_dashboard');
    } else {
        session()->flash('invalid_user', 'Please try with valid user credentials | Redirect from route');
        return redirect(('admin_login'));
    }
    // return view('admin_dashboard');
});

// =========STATIC LOGIN VALIDATION USNG SESSION FROM MIDDLEWARE ============
Route::get('admin_dashboard_mid', 'Admin@admin_dashboard')->middleware('admin');
