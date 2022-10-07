<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public $message = 'Please try with valid user credentials | Redirect from Controller';

    public function index(Request $r)
    {
        return view('admin_login');
    }

    public function admin_auth(Request $r)
    {
        $form_data = $r->post();
        unset($form_data['_token']);
        unset($form_data['submit']);

        $email = $form_data['email'];
        $password = $form_data['password'];

        if ($email == 'rajik@g.com' && $password == 'rajik') {
            $r->session()->put('user_token', '12345678910');

            if ($r->session()->has('user_token')) {
                // return view('admin_dashboard');
                return redirect('admin_dashboard_mid');
            } else {
                $r->session()->flash('invalid_user', $this->message);
                return redirect(('admin_login'));
            }
        } else {
            $r->session()->flash('invalid_user', 'Please try with valid user credentials | Redirect from Controller');
            return redirect(('admin_login'));
        }
    }

    public function admin_logout(Request $r)
    {
        $r->session()->forget('user_token');
        return redirect('admin_login');
    }

    // -------user dashboard----------

    public function admin_dashboard(Request  $r)
    {
        if ($r->session()->has('user_token')) {
            session()->flash('valid_user', 'Please try with valid user credentials | Redirect from Controller');
            return view('admin_dashboard')->with(['name' => 'Rajik', 'roll' => 'admin']);
        } else {
            $r->session()->flash('invalid_user', 'Please try with valid user credentials | Redirect from Controller');
            return redirect(('admin_login'));
        }
    }
}
