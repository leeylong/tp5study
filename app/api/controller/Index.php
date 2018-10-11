<?php
namespace app\api\controller;

use think\Request;
use think\Config;
class index
{

    public function getUserInfo($type='json'){
        if(!isset($type) || !in_array($type,['json','xml'])){
            $type = 'json';
        }

        Config::set('default_return_type',$type);
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