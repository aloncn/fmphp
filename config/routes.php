<?php
/**
 * Created by
 * Auth: farmer [bejea#qq.com]
 * Careate time: 2017/8/6.'-'.16:28
 */

use NoahBuscher\Macaw\Macaw as route;

route::get('','HomeController@articles');

route::get('list','HomeController@articles');
route::get('mail','HomeController@mail');
route::get('redis','HomeController@redis');

route::get('hi', function () {
	echo "hello world";
});


route::get('(:all)', function ($r){
	echo "Not found the route: ".$r;
});

route::$error_callback = function (){
	throw new Exception("404 Not Found!");
};

route::dispatch();