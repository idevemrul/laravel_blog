<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{

    public function form_view()
    {
        return view('form_view');
    }

    public function form_submit(Request $r)
    {
        // $form_data = $r->post();
        $form_data = $r->url();

        print_r($form_data);
    }
}
