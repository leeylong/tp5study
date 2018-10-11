<?php
namespace app\index\controller;

use think\Env;
use think\Config;
class index
{
    public function __construct(){
        config('dtConfix','abcde');
    }

    public function index()
    {
        // $res = config('app_namespace');
        // $res = Config::get('app_namespace');
        Config::set('username','liyunlong');

        dump(Config::get('username'));
    }
}