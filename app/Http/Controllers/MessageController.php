<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $send = new Message();
        $send->name = $request->name;
        $send->email = $request->email;
        $send->subject = $request->subject;
        $send->message = $request->message;
        $send->save();
        if($send->save()){
            return redirect()->back()->with('status', 'Thank you for reaching out to us! We have received your message and we will be in touch soon!');
        }else{
            return redirect()->back()->with('status', 'Unable to send message!');
        }
    }
}
