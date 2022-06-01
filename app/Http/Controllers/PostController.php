<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class PostController extends Controller
{
    public function sendMail(Request $request){
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone, 
            'messagetext'=>$request->message
        ];
        Mail::send('email.request', $data, function ($message) use ($request){
            $to_email = "info@hemengeliriz.com";
            $to_name  = "Hair Forever";
            $subject  = "Appoinment - Hair Forever";
            $message->subject ($subject);
            $message->from ($request->email, $to_name);
            $message->sender($request->email);
            $message->to ($to_email, $to_name);
        });
        if(count(Mail::failures()) > 0){
            $status = 'error';
        } else {
            $status = 'success';
        }
        return response()->json(['response' => $status]);
    }
}
