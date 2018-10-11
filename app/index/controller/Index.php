<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
class index extends Controller
{
    public function index(Request $reques){
        return $this->fetch('./123.html',[
            'email'           => '1046726568@qq.com',
            'username'        => 'liyunlong'
        ],[
            'STATIC'    => '这是替换STATIC的值'
        ]);
    }

    public function getUserInfo(){

        $res = [
            'code' => 200,
            'data' => [
                'username'    => 'liyunlong',
                'paswd'       => 'qwer123',
                'phone'       => '15656568989'
            ],
        ];

        return $res;
    }
}