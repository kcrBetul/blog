<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function ___construct()
   {

   }
   public function index()
   {
       return view('layouts.index');
   }
   public function logout(Request $request)
   {
       Auth::guard('admin')->logout();
       $request->session()->flush();
       $request->session()->regenerate();
       return redirect()->guest(route('admin.login'));
   }
}
