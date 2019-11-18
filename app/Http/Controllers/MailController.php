<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
 
		Mail::to("testing@nando.com")->send(new TestMail());
 
		return "Email telah dikirim";
 
	}
}