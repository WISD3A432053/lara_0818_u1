<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function getSend()
    {
        $content = 'test';
        $data = ['name'=>'許漢昌','content'=>$content,];
        //寄出信件
        Mail::send('email.test', $data, function($message) {
            $message->subject('Laravel 5 Mail');
            $message->from('f37c183652-b21d25@inbox.mailtrap.io', 'netadmin');
            $message->to('a0952288480@gmail.com', '許漢昌');
        });

        return "Email 已寄出";
    }
}
