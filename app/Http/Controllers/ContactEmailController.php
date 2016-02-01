<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactEmailController extends Controller
{
    public function send(Request $request)
    {
        $request->session()->flash(
            'flash_message',
            'All okk!!'
        );


        return redirect()->route('welcome');
    }
}
