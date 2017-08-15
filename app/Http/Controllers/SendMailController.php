<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Mail;

class SendMailController extends Controller
{
    public function sendMail()
    {
    	$content = [
    		'title'=> 'Laravel 5.4 - send email using Markdown Mailables', 
    		'body'=> 'The body of your message.',
    		'button' => 'Click Here'
    		];
    	$receiverAddress = ' d76de96aac-d22b3b@inbox.mailtrap.io';
    	Mail::to($receiverAddress)->send(new OrderShipped($content));
       	dd('mail send successfully');

    }
}
