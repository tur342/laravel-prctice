<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;

class TestController extends Controller
{
    public function send(Request $request)
    {
        $name = 'テスト ユーザー';
        $email = 'syisdreaming@gmail.com';

        Mail::send(new TestMail($name, $email));

        return view('welcome');
    }
}