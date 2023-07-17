<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id){
        $data = User::find($id);
        return view('user.show',["users" =>$data]);
    }

    public function edit($id){
        $data = User::find($id);
        return view('user.edit',["users" =>$data]);
    }
}
