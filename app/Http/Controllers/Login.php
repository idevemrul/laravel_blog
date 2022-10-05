<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    function registration(Request $r)
    {
        $form_data = $r->post();
        print_r($form_data);
        return $r->post();
    }
}
