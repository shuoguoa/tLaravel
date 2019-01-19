<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function getInfo(){
        $users = DB::connection('mysql::read')->select('select * from member');
        var_dump($users);exit;
    }
}
