<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Sentinel;
use Reminder;
use App\User;

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;

class ForgottenPasswordController extends Controller
{
    public function index(){
        return view('password.index');
    }
    /* public function store(Request $request){
        //dd($request->all());

        $user = User::whereEmail($request->email)->first();

        if($user == null){
            return redirect()->back()->with(['error' => 'Email not exists']);
        }
        $user = Sentinel::findById($user->id);
        $reminder = Reminder::exist($user) ? : Reminder::create($user);
        $this->sendEmail($user, $reminder->code);

        return redirect()->back()->with(['success' => 'Reset code sent to your email.']);
    }  
    public function sendEmail($user, $code){
        Mail::send(
            'email.index',
            ['user' => $user, 'code' => $code],
            function($message) use ($user){
                $message->to($user->email);
                $message->subject("$user->name, reset your password.");
            }
        );
    } */
    public function build()
    {
    return $this->from('example@example.com')
                ->replyTo('reply@example.com', 'Reply Name')
                ->view('emails.orders.shipped')
                ->text('emails.orders.shipped_plain');
    }


    public function sendEmail(){
        $user = User::first();


        Mail::to('test@email.com')->send(new TestEmail($user));
    }
}
