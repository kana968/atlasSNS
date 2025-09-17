<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function search(){
        return view('users.search');
        // usersファイルに入っているsearchに誘導する
    }
}
