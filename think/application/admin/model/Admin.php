<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Admin extends Model
{
	public function login($data)
	{
		$captcha = new \think\captcha\Captcha();
		if (!$captcha -> check($data['code'])) {
			return 4;
		}
		$user = Db::name('admin') -> where('username','=',$data['username']) -> find();
		if ($user) {
			if ($user['password'] == input('password')) {
				session('username',$user['username']);
				session('password',$user['password']);
				return 3;
			}else{
				return 2;
			}
		}
		else{
			return 1;
		}
	}
}