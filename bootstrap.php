<?php
/**
 * Created by
 * Auth: farmer [bejea#qq.com]
 * Careate time: 2017/8/6.'-'.17:54
 */

use Illuminate\Database\Capsule\Manager as Capsule;

//定义BASE_PATH
define ('BASE_PATH', __DIR__);

//Autoload自动载入依赖
require BASE_PATH.'/vendor/autoload.php';

//Eloquent ORM
$capsule = new Capsule;
$capsule->addConnection(require BASE_PATH.'/config/database.php');
$capsule->bootEloquent();


// whoops 错误提示
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);

$whoops->register();