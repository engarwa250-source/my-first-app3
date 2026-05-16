<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
 {
public function index(){
   $users=User::all();
   return $users;
   # return view('$users.index',compact('users'));
}






 }
 #.ربط rute معcontroller
//   public function index(){
//     return "قائمة المستخدمين";
//   }




