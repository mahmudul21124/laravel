<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()

    {

        $mailData = [

            'title' => 'Mail from TCLK',

            'body' => 'This is for testing email using smtp.'

        ];



        Mail::to('hossainjamil6208@gmail.com')->send(new DemoMail($mailData));



        dd("Email is sent successfully.");
    }
}
