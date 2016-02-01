<?php

namespace App\Http\Controllers;


use App\Jobs\SendSubscriptionEmail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ContactEmailController extends Controller
{
//    public function send(Request $request,Flash $flash){
    protected $user;
    /**
     * ContactEmailController constructor.
     * @param $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function send(Request $request){

        $this->sendEmail();

        Flash::message('Email sent PP!');

        return redirect()->route('welcome');

    }
    public function sendEmail()
    {
        $this->user->email = "alexbonavila@iesebre.com";
        $this->dispatch(new SendSubscriptionEmail($this->user));
        echo "Done!";
    }
}
