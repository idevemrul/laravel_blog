<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function form()
    {
        return view('form');
    }

    function formSubmit(Request $r)
    {
        // $user['fname'] = $r->post('first_name');
        // $user['lname'] = $r->post('last_name');

        // $user = array(
        //     "fname" => $r->get('first_name'),
        //     "lname" => $r->get('last_name'),
        // );
        // return $user;

        return $r->post();
    }
}
