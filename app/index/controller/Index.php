<?php
namespace app\index\controller;

use think\Env;
use think\Config;
class index
{
    public function __construct(){
        // config('dtConfix','abcde');
    }

    public function index()
    {
        // $res = config('app_namespace');
        // $res = Config::get('app_namespace');
        // Config::set('username','liyunlong');

        // dump(Env::get('database.username'));
        // dump(Env::get('database.dbname'));
        // dump(Env::get('database.password'));
        // dump(config());
        dump(Env::get('database.dbname'));

        // dump(Config::get('username'));
    }

    public function info($id)
    {
        return "{$id}";
    }
}