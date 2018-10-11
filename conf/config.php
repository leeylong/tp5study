<?php

use think\Env;

return [
    'app_status'                => Env::get('status','dev'),
    	// 入口自动绑定模块
    'auto_bind_module' => true,
    'show_error_msg'   => true,

    // 是否开启路由
    'url_route_on'           => true,
    // 路由配置文件（支持配置多个）
    'route_config_file'      => ['route'],
    // 路由使用完整匹配
    'route_complete_match'   => false,
    // 是否强制使用路由
    'url_route_must'         => false,
];