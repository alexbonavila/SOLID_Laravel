<?php

namespace App\Http\Controllers;

use App\Jobs\SendSubscriptonEmail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactEmailController extends Controller
{
    public function send(Request $request)
    {
        Flash::message('Email sent!');
        return redirect()->route('welcome');

    }
    public function sendEmail(){

        $this->dispatch(new SendSubscriptonEmail());
    }
}
