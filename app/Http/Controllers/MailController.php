<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    
 
    public function basic_email()
    {
        $data = array('name' => $_GET['name'] , 'messageinbox' => $_GET['message']);

        Mail::send(['text' => 'mail'], $data,function ($message) {
            $message->to($_GET['email'],$_GET['name']);
            $message->from('s6135512027@phuket.psu.ac.th', 'Nattapat');
        });
        echo "เราทำการส่งอีเมลล์ให้คุณแล้ว";
    }
}