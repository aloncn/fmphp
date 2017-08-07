<?php

//定义PUBLIC_PATH
define('PUBLIC_PATH', __DIR__);

//启动器
require PUBLIC_PATH.'/../bootstrap.php';
//路由

require BASE_PATH.'/config/routes.php';