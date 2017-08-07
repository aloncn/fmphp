<?php
/**
 * Created by
 * Auth: farmer [bejea#qq.com]
 * Careate time: 2017/8/6.'-'.16:40
 */
class HomeController extends BaseController {
	public function home(){
		echo "<h1>Hello World.</h1>";
	}

	public function articles(){
		$data = Article::first();
		//require dirname(__FILE__).'/../views/home.html';
		$this->view = View::make('home')->with('data',$data)
			->withTitle('FMPHP');
	}

	public function mail(){
		$this->mail = Mail::to('bejea@qq.com')

			->from('0110net <10946081@qq.com>')

			->title('Send Mail Demo!')

			->content('<h1>Hello~~</h1>');
	}

	public function redis(){
		FmRedis::set('iname','fmphp',5,'s');
		echo FmRedis::get('iname');
	}
}