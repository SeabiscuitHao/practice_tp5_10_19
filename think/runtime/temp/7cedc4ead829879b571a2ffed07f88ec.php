<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"F:\www\Tp_try\think\public/../application/index\view\article\article.html";i:1508420019;s:69:"F:\www\Tp_try\think\public/../application/index\view\common\head.html";i:1508326876;s:70:"F:\www\Tp_try\think\public/../application/index\view\common\right.html";i:1508406184;s:71:"F:\www\Tp_try\think\public/../application/index\view\common\footer.html";i:1507639668;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>童老师ThinkPHP交流群：484519446</title>
        <meta name="keywords" content="童老师ThinkPHP交流群：484519446" />
        <meta name="description" content="童老师ThinkPHP交流群：484519446" />
        <meta name="mobile-agent" content="format=html5; url=http://m.zx.wed114.cn/shenghuo/20160920156214.html" />
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<link href="__PUBLIC__/style/lady.css" type="text/css" rel="stylesheet" />
		<script type='text/javascript' src='__PUBLIC__/style/ismobile.js'></script>
    </head>

    <body>


        <div class="ladytop">
            <div class="nav">
                <div class="left"><a href=""><img src="__PUBLIC__/images/hunshang.png" alt="wed114婚尚"></a></div>
                <div class="right">
                <div class="box">
                    <a href="<?php echo url('Index/index'); ?>">首页</a>
                    <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('cate/index',array('cateid' => $vo['id'])); ?>"  rel='dropmenu209'><?php echo $vo['catename']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
    </div>

<div class="hotmenu">
	<div class="con">热门标签：
        <?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <a href='qiwenqushi/'><?php echo $vo['tagname']; ?></a> 
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

        <!--顶部通栏-->
        <script src='/jiehun/goto/my-65547.js' language='javascript'></script>

        <div class="position"><a href='<?php echo url('index/index'); ?>'>主页</a> > <a href='<?php echo url('cate/index',array('cateid' => $cates['id'])); ?>'><?php echo $cates['catename']; ?></a> >  </div>

        <div class="overall">
            <div class="left">
                <div class="scrap">
                    <h1><?php echo $articles['title']; ?></h1>
                    <div class="spread">
                        <span class="writor">发布时间：<?php echo date("Y-m-d",$articles['time']); ?></span>
                        <span class="writor">编辑：<?php echo $articles['author']; ?></span>
                        <span class="writor">标签：<a href='/jiehun/z97712.html'><?php echo $articles['keywords']; ?></a></span>
                        <span class="writor">热度：<?php echo $articles['click']; ?></span>
                    </div>
                </div>

                <!--百度分享-->
                <script src='/jiehun/goto/my-65542.js' language='javascript'></script>

                <div class="takeaway">
                    <span class="btn arr-left"></span>
                    <p class="jjxq"><?php echo $articles['desc']; ?></p>
                    <span class="btn arr-right"></span>
                </div>

                  <script src='/jiehun/goto/my-65541.js' language='javascript'></script>

                <div class="substance"><?php echo $articles['content']; ?>
                    <img alt="" border="0"  width="750" height="375" src="
                    <?php if($articles['pic'] != ''): ?>
                    __IMG__<?php echo $articles['pic']; else: ?>
                    __PUBLIC__/images/images.jpg
                    <?php endif; ?>
                    " /></a></p>
                    </div>

                <div class="biaoqian">
                   
                </div>



                <!--相关阅读 -->
                <div class="xgread">
                    <div class="til"><h4>相关阅读</h4></div>
                    <div class="lef"><!--相关阅读主题链接--><script src='/jiehun/goto/my-65540.js' language='javascript'></script></div>
                    <div class="rig">
                        <ul>
                            <li><a href='./images/20160907155021.html' target="_blank">蓝牙耳机怎么和手机连接 连接手机及电脑的方法</a></li>
                            <li><a href='./images/20141026134140.html' target="_blank">湖南邵阳夏美玲资料照片 5岁留守女童当环卫工</a></li>
                            <li><a href='./images/20140924132601.html' target="_blank">张彦文女友林佩真资料照片 砍杀女友事件原因真相</a></li>
                            <li><a href='./images/20140917132145.html' target="_blank">天使女孩胡依萱个人资料 曝胡依萱案件始末</a></li>
                            <li><a href='./images/20140916132072.html' target="_blank">周友平个人资料照片 连环性虐6男子致死案始末</a></li>
                            <li><a href='./images/20140904131317.html' target="_blank">泰国小胖墩变性前男儿身照片 变身辣妹今夕对比</a></li>
                            <li><a href='./images/20140828130836.html' target="_blank">女孩凡莎莎遇害死亡照片 蹊跷身亡凡料微博求助</a></li>
                        </ul>
                    </div>
                </div>

                <!--频道推荐-->
                <div class="hotsnew">
                    <div class="til"><h4>频道推荐</h4></div>
                    <ul>
                        <?php if(is_array($recres) || $recres instanceof \think\Collection || $recres instanceof \think\Paginator): $i = 0; $__LIST__ = $recres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li><div class="tu"><a href='./images/20160920156214.html' target="_blank"><img src="
                            <?php if($vo['pic'] == ''): ?>
                            __PUBLIC__/images/images.jpg
                            <?php else: ?>
                            __IMG__<?php echo $vo['pic']; endif; ?>
                            " alt=""/></a></div><p><a href='./images/20160920156214.html'><?php echo $vo['title']; ?></a></p></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>		
            </div>

	<div class="right">
                <!--右侧各种广告-->
                <!--猜你喜欢-->
<div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
<div class="hm-t-container" style="width: 298px;"><div class="hm-t-main"><div class="hm-t-header">热门点击</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
<li class="hm-t-item hm-t-item-img"><a data-pos="0" title="深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)" target="_blank" href="http://www.wed114.cn/jiehun/jiehunxinwen/shehuiwanxiang/20130186937_4.html" class="hm-t-img-title" style="visibility: visible;"><span>深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a data-pos="1" title="吃泡面有什么坏处 泡面危害致癌拯救泡面族(5)" target="_blank" href="http://www.wed114.cn/jiehun/yingyangshipu/20131118113703_5.html" class="hm-t-img-title" style="visibility: visible;"><span>吃泡面有什么坏处 泡面危害致癌拯救泡面族(5)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a data-pos="2" title="亮点图一个凌乱了我内心的男人 姨妈巾是哪来的呢(6)" target="_blank" href="http://www.wed114.cn/jiehun/liangdiantu/20140611124111_6.html" class="hm-t-img-title" style="visibility: visible;"><span>亮点图一个凌乱了我内心的男人 姨妈巾是哪来的呢(6)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a data-pos="3" title="饱腹感强的食物 让你既能吃饱又能瘦(3)" target="_blank" href="http://www.wed114.cn/jiehun/jianfeijiqiao/20131223116574_3.html" class="hm-t-img-title" style="visibility: visible;"><span>饱腹感强的食物 让你既能吃饱又能瘦(3)</span></a></li>
</ul>
</div></div></div>

</div></div>
<div style="height:15px"></div>
<div id="hm_t_57953"><div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
<div style="width: 298px;" class="hm-t-container"><div class="hm-t-main"><div class="hm-t-header">推荐阅读</div><div class="hm-t-body"><ul class="hm-t-list hm-t-list-img">
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/jiehunxinwen/shehuiwanxiang/20130186937_4.html" target="_blank" title="深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)" data-pos="0"><span>深圳16岁女生失踪遇害 网友称赖曾裕童微博暴露隐私致杀机(4)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/yingyangshipu/20131118113703_5.html" target="_blank" title="吃泡面有什么坏处 泡面危害致癌拯救泡面族(5)" data-pos="1"><span>吃泡面有什么坏处 泡面危害致癌拯救泡面族(5)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/liangdiantu/20140611124111_6.html" target="_blank" title="亮点图一个凌乱了我内心的男人 姨妈巾是哪来的呢(6)" data-pos="2"><span>亮点图一个凌乱了我内心的男人 姨妈巾是哪来的呢(6)</span></a></li>
<li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title" href="http://www.wed114.cn/jiehun/jianfeijiqiao/20131223116574_3.html" target="_blank" title="饱腹感强的食物 让你既能吃饱又能瘦(3)" data-pos="3"><span>饱腹感强的食物 让你既能吃饱又能瘦(3)</span></a></li>
</ul>
</div></div></div>

</div></div>
<div style="height:15px"></div>

<div id="bdcs"><div class="bdcs-container"><meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->  <div id="default-searchbox" class="bdcs-main bdcs-clearfix">      <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">          <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="get" action="">              <input type="hidden" value="10711555151249188672" name="s">              <input type="hidden" value="1" name="entry">                                              <input type="hidden" value="gbk" name="ie">                                                          <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="q" autocomplete="off" style="line-height: 30px; width:220px;">              <input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">                       </form>      </div>                <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">              <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>          </div>                  </div>                           </div></div>

<div style="height:15px"></div>


                
            </div>
</div>
    
<div class="footerd">
<ul>
<li>Copyright &#169; 2008-2016  all rights reserved 版权所有   <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">蜀icp备08107937号</a></li> 
</ul>
</div>
        <div style="display:none;"><script src='/jiehun/goto/my-65537.js' language='javascript'></script><script src="/jiehun/images/js/count_zixun.js" language="JavaScript"></script></div>

    </body>
</html> 