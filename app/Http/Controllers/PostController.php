<?php

namespace App\Http\Controllers;

use NotificationChannels\Telegram\TelegramUpdates;

use App\Models\Appointments;

use App\Jobs\TelegramLog;

use Illuminate\Http\Request;

// use Mail;

class PostController extends Controller
{
    public function sendMail(Request $request){
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
            'language' => config('app.locale')
        ];
        Appointments::create($data);
        TelegramLog::dispatch('
        *Ad* : '. $data["name"] .'
*Email* : '. $data["email"] .'
*Phone* : '. $data["phone"] .'
*Message* : '. $data["message"].'
*Language* : '. $data["language"]);
        return response()->json(['response' => 'success']);
    }
}
