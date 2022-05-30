<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
   public function __construct()
   {

   }

   public function login()
   {

       return view('components.admin.login');
   }
   public function loginForm(Request $request)
   {

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'email alanı gerekli',
            'email.email' => 'geçerli bir eposta girin.',
            'password.required' => 'Şisre boş bırakılamaz.',

        ]);

        if($validator->fails()){

            return response()->json([
                'mesaj' => $validator->errors()->all()

            ]);

        }


            $isUser=User::where('email', $request->email)->where('password',md5($request->password))->first();


       if($isUser)
       {
        Auth::login($isUser);
        return redirect()->route('admin.index');

       }


    return redirect()->back()->withhInput($request->only('email', 'remember'));
   }
}


  // $ps="1234";
        // $ps=Hash::make($ps);
        // $ps2="1234";
        // if(Hash::make($ps2) == $ps){
        //     dd("başarılı");
        // }
        //     echo("<br>");
        //     dd(Hash::make($ps2), $ps);
        // dd("dgd");
