<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Session extends Controller
{
    public function session_set(Request $r)
    {
        // $_SESSION['name'] = 'test';

        $r->session()->put('name', 'rajik');
        // return view('session_test');
    }

    public function session_get(Request $r)
    {
        echo 'Your session [ Name ] is : ' . $r->session()->get('name');
        // return view('session_test');
    }

    public function session_destroy(Request $r)
    {
        $r->session()->forget('name');
        // return view('session_test');
    }


    public function session_test(Request $r)
    {
        if ($r->session()->has('name')) {
            echo 'Session has';
            echo 'Your session [ Name ] is : ' . $r->session()->get('name');
        } else {
            echo 'no session found';
        }
        // return view('session_test');
    }
}
