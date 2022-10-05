<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Test extends BaseController
{
    function test($data)
    {
        echo 'test';
        print_r($data);
        return view('test_controller');
    }

    function header()
    {
        return view('header');
    }

    function home()
    {
        return view('header') . view('home') . view('footer');
    }

    function about()
    {
        return view('header') . view('about') . view('footer');
    }

    function profile()
    {
        return view('header') . view('profile') . view('footer');
    }

    function profile1()
    {
        return view('header') . view('profile1') . view('footer');
    }
}
