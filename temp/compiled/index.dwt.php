<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body class="index_page" style="min-width:1200px;">
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->fetch('library/index_ad.lbi'); ?>

<div class="blank" style="height:30px;"></div>
<div class="block clearfix Main">
<?php echo $this->fetch('library/category_tree_index.lbi'); ?>
<div class="AreaL">
 
  



</div>
<div class="Arear">

 
</div> 
  <div class="goodsBox_1">
  

  
  
<?php $this->assign('cat_goods',$this->_var['cat_goods_6']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_6']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_12']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_12']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

  </div> 
  
    </div>
  
  
  
 


    <?php echo $this->fetch('library/help.lbi'); ?>
 

<?php echo $this->fetch('library/page_footer.lbi'); ?>

<div id="teMaiRightNavWrap">
  <ul id="teMaiRightNav">
    <li class="youhui" id="coupon"><a href="user.php?act=bonus" target="_blank" style="color:#FFF">优惠券</a></li>
    <li class="car" id="rightcar">购物车
      <div class="box box01"><b>购物车有0件商品！</b><br>
        <a href="flow.php" target="_blank">马上去结算&gt;&gt;</a></div>
    </li>
    <li class="daog">客服 <a <="" span=""> </a><a target="_blank" href="http://p.qiao.baidu.com/im/index?siteid=6171872&amp;ucid=8105073&amp;cp=&amp;cr=&amp;cw=" class="loginAliChat"><img src="themes/yihaodian/images/news/temai_daogou.png" width="198" height="95"></a> </li>
    <li class="rexian">电话 <img src="themes/yihaodian/images/news/temai_right_bg0411.png" width="231" height="112px"> </li>
    <li class="saom"> <a>二维码
      <div class="smBox"> <img src="themes/yihaodian/images/news/jhshaoma.png" width="120" height="120">
        <p>关注领取午夜福利</p>
      </div>
      </a> </li>
    <li class="toTop"><a href="javascript:scrollTo(0,0);">Top</a></li>
  </ul>
</div>
</body>
</html>
