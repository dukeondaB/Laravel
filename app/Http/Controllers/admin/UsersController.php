<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function user_create()
    {
        return view('admin.user.create');
    }
    public function store(Request $request){

        // $data = $request->all();

        // $data['password'] = Hash::make($request->password);


        // Users::create($data);
        // echo"success create user";
         $userInfo = new User;

        $userInfo->name = $request->name;
        $userInfo->email = $request->email;
        $userInfo->password = Hash::make($request->password);

        $userInfo->save();
    }
    public function index()
    {
        $users = Users::all();
        return \view('admin.user.index', \compact('users'));
    }
}