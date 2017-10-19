<?php
namespace app\index\controller;
use app\index\controller\Base;
use think\Db;
class Article extends Base
{
    public function index()
    {
    	$arid = input('arid');
    	$articles = Db::name('article') -> find($arid);
    	$cates = Db::name('cate') -> find($articles['cateid']);
        $articleres = Db::name('article') -> order('id desc') -> paginate(4);
        $recres = Db::name('article') -> where(array('cateid' => $cates['id'],'state' => 1)) -> limit(8) -> select();
        Db::name('article') -> where('id',"=",$arid) -> setInc('click',1);
        $this -> assign(array(
        	'articles' => $articles,
        	'cates' => $cates,
        	'recres' => $recres,
        	'articleres' => $articleres,
        ));
        return $this -> fetch('article');
    }
}
