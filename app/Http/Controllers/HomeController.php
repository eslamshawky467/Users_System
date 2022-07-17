<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index(){
$users=User::all();
return view('Home',compact('users'));
}
}
