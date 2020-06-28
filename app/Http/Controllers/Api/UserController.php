<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 用户注册 接口
     */
    public function reg(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $pass1 = $request->input('pass1');
        $pass2 = $request->input('pass2');

        //密码长度是否大于6
        $len = strlen($pass1);
        if($len<6){
           $response = [
               'errno'  => 50001,
               'msg'    => '密码长度必须大于6'
           ];
           return $response;
        }
    }
}
