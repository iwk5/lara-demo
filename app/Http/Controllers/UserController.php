<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users=[
            '0'=>[
                'firstName'=>'waqas',
                'lastName'=>'khan'
            ],
            '1'=>[
                'firstName'=>'aloo',
                'lastName'=>'khan'
            ]
        ];
        return view('admin.users.index',compact('users'));
    }
    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        User::create($request->all());
        return 'success';
    }
}
