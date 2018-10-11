<?php
namespace app\admin\controller;

use think\Config;
class index
{
    public function index()
    {
        // dump(config());
        // $res = Config::get();
        $res = config();
        dump($res);
    }
}