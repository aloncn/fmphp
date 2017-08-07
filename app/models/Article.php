<?php
/**
 * Created by
 * Auth: farmer [bejea#qq.com]
 * Careate time: 2017/8/6.'-'.16:46
 */
class Article extends Illuminate\Database\Eloquent\Model
{
	public $timestamps = false;
	/*public static function first(){

		$conn = new mysqli("localhost","root","root","fmphp");

		if ($conn->connect_error){
			die("数据库连接失败: ". $conn->connect_error);
		}

		$result = $conn->query("select id,title,content from articles limit 0,1");
		if ($result->num_rows > 0){
			return  $result->fetch_assoc();
		}else{
			return false;
		}

		$conn->close();
	}*/
}