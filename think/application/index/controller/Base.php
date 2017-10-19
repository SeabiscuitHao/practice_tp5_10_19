<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Base extends Controller
{
	public function _initialize()
	{
		$cateres = Db::name('cate') -> order('id desc') -> select();
		$tags = Db::name('tags') -> order('id desc') -> select();
		$this -> assign(array(
			'cateres' => $cateres,
			'tags' => $tags,
		));
	}
}
