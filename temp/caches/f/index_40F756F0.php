<?php exit;?>a:3:{s:8:"template";a:13:{i:0;s:54:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/index.dwt";i:1;s:68:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/library/page_header.lbi";i:2;s:65:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/library/index_ad.lbi";i:3;s:76:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/library/category_tree_index.lbi";i:4;s:69:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/library/new_articles.lbi";i:5;s:68:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/library/ad_position.lbi";i:6;s:76:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/library/recommend_promotion.lbi";i:7;s:71:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/library/recommend_best.lbi";i:8;s:70:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/library/recommend_new.lbi";i:9;s:70:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/library/recommend_hot.lbi";i:10;s:66:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/library/cat_goods.lbi";i:11;s:61:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/library/help.lbi";i:12;s:68:"C:/xampp/htdocs/ecshopphp55/themes/yihaodian/library/page_footer.lbi";}s:7:"expires";i:1491514235;s:8:"maketime";i:1491510635;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="ECSHOP演示站" />
<meta name="Description" content="ECSHOP演示站" />
<title>ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/yihaodian/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|ECSHOP演示站 - Powered by ECShop" href="feed.php" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script></head>
<body class="index_page" style="min-width:1200px;">
<link href="themes/ecmoban_suning/qq/images/qq.css" rel="stylesheet" type="text/css" />
 
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
function show_div(obj){
	if(obj.className == "more-menu")
	{
		obj.className = "more-menu hover";
	}
	else
	{
		obj.className = "more-menu";
	}
}	
</script>
<script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>
<div class="hd_global_top_bar" id="global_top_bar">
  <div class="wrap clearfix">
    <div class="hd_topbar_left clearfix">
      <div class="hd_unlogin_wrap" id="global_unlogin">
      
        <div class="hd_login clearfix" id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
        
      </div>
    </div>
    <div class="hd_top_manu clearfix">
      <ul class="clearfix">
        <li class="hd_menu_tit hd_my_order" id="glHdMyYhd" onMouseOver= "this.className='hd_menu_tit hd_my_order hd_menu_hover'" onMouseOut= "this.className='hd_menu_tit hd_my_order'"> <a class="hd_menu" target="_blank" href="user.php"><s></s>我的1号店</a>
          <div class="hd_menu_list">
            <ul>
              <li><a href="user.php?act=order_list" target="_blank">我的订单</a></li>
              <li><a href="user.php?act=affiliate" target="_blank">我的推荐</a></li>
              <li><a href="user.php?act=bonus" target="_blank">我的红包</a></li>
              <li><a href="user.php?act=collection_list" target="_blank">我的收藏夹</a></li>
              <li><a href="user.php?act=comment_list" target="_blank">我的评价</a></li>
            </ul>
          </div>
        </li>
        <li class="hd_menu_tit" id="glKeHuDuan" onMouseOver= "this.className='hd_menu_tit hd_menu_hover hd_mobile_hover'" onMouseOut= "this.className='hd_menu_tit'"> <a href="#" class="hd_menu"><i class="hd_mobile_icon"></i>手机1号店</a>
          <div class="hd_mobile_show">
            <p class="hd_mobile_tips">扫描二维码下载客户端</p>
            <div class="hd_mobile_list clearfix"> <i></i>
              <div class="hd_mobile_tab"> <a href="https://itunes.apple.com/cn/app/ecshop-mo-ban-tang/id773051406?mt=8" target="_blank" class="hd_iphone">iPhone</a> <a href="https://itunes.apple.com/cn/app/ecshop-mo-ban-tanghd/id940333287?mt=8" target="_blank" class="hd_ipad">iPad</a> <a href="http://a.app.qq.com/o/simple.jsp?pkgname=com.ecmoban.android.moban" target="_blank" class="hd_android">Android</a> </div>
              <div class="hd_mobile_content"> <img src="themes/yihaodian/images/code-android.jpg" alt="扫描二维码下载客户端"> </div>
            </div>
          </div>
        </li>
         
                <li class="hd_menu_tit"> <a target="_blank" href="flow.php" >查看购物车</a> </li>
                <li class="hd_menu_tit"> <a target="_blank" href="pick_out.php" >选购中心</a> </li>
                <li class="hd_menu_tit"> <a target="_blank" href="tag_cloud.php" >标签云</a> </li>
                <li class="hd_menu_tit"> <a target="_blank" href="quotation.php" >报价单</a> </li>
         
              </ul>
      <span class="hd_follow_us">关注我们：</span> <a target="_blank" id="weibo" href="http://weibo.com/ECMBT" class="hd_sina_weibo" title="去关注ECSHOP的新浪微博">关注ECSHOP新浪微博</a> <a class="hd_weixin hd_menu_tit" id="glWeiXin" title="关注ECSHOP微信" href="#" target="_blank" onMouseOver= "this.className='hd_weixin hd_menu_tit hd_menu_hover'" onMouseOut= "this.className='hd_weixin hd_menu_tit'">
      <div class="hd_weixin_show"> <i></i>
        <p> 扫描二维码<br>
          关注ECSHOP微信 </p>
        <img src="themes/yihaodian/images/suspension-code.png" alt="扫描二维码&lt;br /&gt;关注ECSHOP微信"> </div>
      </a> </div>
  </div>
</div>
<div id="site_header" class="wrap hd_header clearfix">
  <div class="hd_logo_area fl clearfix" id="logo_areaID"> 
  
  <a class="fl" href="./index.php"> <img alt="1号店" src="themes/yihaodian/images/logo.gif"> </a>
  
  </div>
  
  
  <div class="hd_head_search">
    <div class="hd_search_form clearfix">
    
      <div class="hd_search_wrap clearfix">
      <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
      <form name="searchForm" id="newKeywords" method="get" action="search.php" onsubmit="return checkSearchForm()">
        <input type="text" value="" onblur="if(this.value == ''){this.value=''}" onfocus="if(this.value == ''){this.value = ''}" maxlength="100" style="color:#333333;" id="keyword" name="keywords" class="hd_input_test">
        <button class="hd_search_btn" type="button" onclick="$('#newKeywords').submit()">搜 索</button>
        </form>
      </div>
      
    </div>
    <p class="hd_hot_search" id="hotKeywordsShow">        <a href="search.php?keywords=%E7%BE%8E%E4%B8%BD%E5%BF%85%E5%A4%87" target="_blank" title="美丽必备">美丽必备</a>  <a href="search.php?keywords=%E5%A4%8F%E6%97%A5%E5%A5%BD%E7%9D%A1%E7%9C%A0" target="_blank" title="夏日好睡眠">夏日好睡眠</a>  <a href="search.php?keywords=%E8%81%94%E6%83%B3K900" target="_blank" title="联想K900">联想K900</a>  <a href="search.php?keywords=%E6%B0%B4" target="_blank" title="水">水</a>  <a href="search.php?keywords=%E6%B1%BD%E8%BD%A6%E7%94%A8%E5%93%81" target="_blank" title="汽车用品">汽车用品</a>  <a href="search.php?keywords=%E5%86%B7%E9%A3%8E%E6%89%87" target="_blank" title="冷风扇">冷风扇</a>  <a href="search.php?keywords=%E4%B9%90%E4%BA%AB%E6%97%A9%E9%A4%90" target="_blank" title="乐享早餐">乐享早餐</a>  <a href="search.php?keywords=%E6%96%B0%E5%A5%BD%E7%88%B8%E5%A6%88" target="_blank" title="新好爸妈">新好爸妈</a>        </p>
  </div>
  <div id="hdPrismWrap" class="hd_prism_wrap">
    <div id="hdPrismCoupon" class="hd_prism hd_welfare"> <u id="hdPrismCouponNum" style="display:none;"></u> <a class="hd_prism_tab" target="_blank" href="user.php?act=bonus"> <em></em>
      <p>福利</p>
      <i></i> </a>
      <div id="hdPrismCouponList" class="hd_prism_show global_loading"> </div>
    </div>
    <div id="hdPrismOrder" class="hd_prism hd_order"> <u id="hdPrismOrderNum" style="display:none;"></u> <a class="hd_prism_tab" data-ref="top_prism_order" target="_blank" href="user.php?act=order_list"> <em></em>
      <p>订单查询</p>
      <i></i> </a>
      <div id="hdPrismOrderList" class="hd_prism_show global_loading"> </div>
    </div>
  <div class="hd_mini_cart">
        
        <i></i><span id="in_cart_num"><u id="ECS_CARTINFO">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</u></span> <a class="hd_prism_cart" href="flow.php"> <em></em>购物车 </a> 
<div class="ap_shopping_warning"></div>
</div>
    
  </div>
  
</div>
<div class="menu_box clearfix"> 
<div class="block"> 
<div class="menu">
  <a href="index.php" class="cur">首页</a>
    <a href="category.php?id=3"  >GSM手机</a>
 
   <a href="category.php?id=5"  >双模手机</a>
 
   <a href="category.php?id=6"  >手机配件</a>
 
   <a href="group_buy.php"  >团购商品</a>
 
   <a href="activity.php"  >优惠活动</a>
 
   <a href="snatch.php"  >夺宝奇兵</a>
 
   <a href="auction.php"  >拍卖活动</a>
 
   <a href="exchange.php"  >积分商城</a>
 
   <a href="message.php"  >留言板</a>
 
   <a href="http://bbs.ecshop.com/" target="_blank"  >EC论坛</a>
 
 </div> 
</div>
</div>
 
<style type="text/css"> 
.container, .container *{margin:0; padding:0;}
.container{width:100%; height:413px; overflow:hidden;position:relative;}
.slider{position:absolute; width:100%; height:413px;}
.slider li , .slider li a{list-style:none; float:left;width:100%; height:413px;}
.slider img{width:100%; height:413px; display:block;}
.slider2{width:2000px;}
.slider2 li{float:left;}
.num{position:absolute; left:50%; bottom:5px; width:auto; margin:0 auto;}
.num li{
	float: left;
	color: #E50065;
	text-align: center;
	line-height: 16px;
	width: 16px;
	height: 16px;
	font-family: Arial;
	font-size: 12px;
	cursor: pointer;
	overflow: hidden;
	margin: 3px 1px;
	border: 1px solid #ff3c3c;
	background-color: #ccc;
}
.num li.on{
	color: #fff;
	line-height: 21px;
	width: 21px;
	height: 21px;
	font-size: 16px;
	margin: 0 1px;
	border: 0;
	background-color: #ff3c3c;
	border: 1px solid #ff3c3c;
	font-weight: bold;
}
</style>
<div class="container" id="idTransformView">
  <ul class="slider" id="idSlider">
        <li style="background:url(data/afficheimg/20150420fqsfar.jpg) center 0 no-repeat; position:relative;"><a href="http://www.ecmoban.com" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20141021aziwud.png) center 0 no-repeat; position:relative;"><a href="http://ectouch.cn/" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20141022dacwiw.png) center 0 no-repeat; position:relative;"><a href="http://www.ecmoban.com/djd/" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20141022vbuvgk.png) center 0 no-repeat; position:relative;"><a href="http://www.ecmoban.com/shangchuang/" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20141022nvtssl.png) center 0 no-repeat; position:relative;"><a href="http://www.ecmoban.com/weixin/ " target="_blank"></a></li>
      
  </ul>
  <ul class="num" id="idNum">
 
    
          <li>
    1    </li> 
         <li>
    2    </li> 
         <li>
    3    </li> 
         <li>
    4    </li> 
         <li>
    5    </li> 
        
  </ul>
</div>
<script type="text/javascript">
var $ = function (id) {
	return "string" == typeof id ? document.getElementById(id) : id;
};
var Class = {
  create: function() {
	return function() {
	  this.initialize.apply(this, arguments);
	}
  }
}
Object.extend = function(destination, source) {
	for (var property in source) {
		destination[property] = source[property];
	}
	return destination;
}
var TransformView = Class.create();
TransformView.prototype = {
  //容器对象,滑动对象,切换参数,切换数量
  initialize: function(container, slider, parameter, count, options) {
	if(parameter <= 0 || count <= 0) return;
	var oContainer = $(container), oSlider = $(slider), oThis = this;
	this.Index = 0;//当前索引
	
	this._timer = null;//定时器
	this._slider = oSlider;//滑动对象
	this._parameter = parameter;//切换参数
	this._count = count || 0;//切换数量
	this._target = 0;//目标参数
	
	this.SetOptions(options);
	
	this.Up = !!this.options.Up;
	this.Step = Math.abs(this.options.Step);
	this.Time = Math.abs(this.options.Time);
	this.Auto = !!this.options.Auto;
	this.Pause = Math.abs(this.options.Pause);
	this.onStart = this.options.onStart;
	this.onFinish = this.options.onFinish;
	
	oContainer.style.overflow = "hidden";
	oContainer.style.position = "relative";
	
	oSlider.style.position = "absolute";
	oSlider.style.top = oSlider.style.left = 0;
  },
  //设置默认属性
  SetOptions: function(options) {
	this.options = {//默认值
		Up:			true,//是否向上(否则向左)
		Step:		5,//滑动变化率
		Time:		10,//滑动延时
		Auto:		true,//是否自动转换
		Pause:		2000,//停顿时间(Auto为true时有效)
		onStart:	function(){},//开始转换时执行
		onFinish:	function(){}//完成转换时执行
	};
	Object.extend(this.options, options || {});
  },
  //开始切换设置
  Start: function() {
	if(this.Index < 0){
		this.Index = this._count - 1;
	} else if (this.Index >= this._count){this.Index = 0;}
	
	this._target = -1 * this._parameter * this.Index;
	this.onStart();
	this.Move();
  },
  //移动
  Move: function() {
	clearTimeout(this._timer);
	var oThis = this, style = this.Up ? "top" : "left", iNow = parseInt(this._slider.style[style]) || 0, iStep = this.GetStep(this._target, iNow);
	
	if (iStep != 0) {
		this._slider.style[style] = (iNow + iStep) + "px";
		this._timer = setTimeout(function(){oThis.Move();}, this.Time);
	} else {
		this._slider.style[style] = this._target + "px";
		this.onFinish();
		if (this.Auto) { this._timer = setTimeout(function(){oThis.Index++; oThis.Start();}, this.Pause); }
	}
  },
  //获取步长
  GetStep: function(iTarget, iNow) {
	var iStep = (iTarget - iNow) / this.Step;
	if (iStep == 0) return 0;
	if (Math.abs(iStep) < 1) return (iStep > 0 ? 1 : -1);
	return iStep;
  },
  //停止
  Stop: function(iTarget, iNow) {
	clearTimeout(this._timer);
	this._slider.style[this.Up ? "top" : "left"] = this._target + "px";
  }
};
window.onload=function(){
	function Each(list, fun){
		for (var i = 0, len = list.length; i < len; i++) {fun(list[i], i);}
	};
	
	var objs = $("idNum").getElementsByTagName("li");
	
	var tv = new TransformView("idTransformView", "idSlider", 413, 5, {
		onStart : function(){ Each(objs, function(o, i){o.className = tv.Index == i ? "on" : "";}) }//按钮样式
	});
	
	tv.Start();
	
	Each(objs, function(o, i){
		o.onmouseover = function(){
			o.className = "on";
			tv.Auto = false;
			tv.Index = i;
			tv.Start();
		}
		o.onmouseout = function(){
			o.className = "";
			tv.Auto = true;
			tv.Start();
		}
	})
	
	////////////////////////test2
	
	var objs2 = $("idNum2").getElementsByTagName("li");
	
	var tv2 = new TransformView("idTransformView2", "idSlider2",1200, 3, {
		onStart: function(){ Each(objs2, function(o, i){o.className = tv2.Index == i ? "on" : "";}) },//按钮样式
		Up: false
	});
	
	tv2.Start();
	
	Each(objs2, function(o, i){
		o.onmouseover = function(){
			o.className = "on";
			tv2.Auto = false;
			tv2.Index = i;
			tv2.Start();
		}
		o.onmouseout = function(){
			o.className = "";
			tv2.Auto = true;
			tv2.Start();
		}
	})
	
	$("idStop").onclick = function(){tv2.Auto = false; tv2.Stop();}
	$("idStart").onclick = function(){tv2.Auto = true; tv2.Start();}
	$("idNext").onclick = function(){tv2.Index++; tv2.Start();}
	$("idPre").onclick = function(){tv2.Index--;tv2.Start();}
	$("idFast").onclick = function(){ if(--tv2.Step <= 0){tv2.Step = 1;} }
	$("idSlow").onclick = function(){ if(++tv2.Step >= 10){tv2.Step = 10;} }
	$("idReduce").onclick = function(){ tv2.Pause-=1000; if(tv2.Pause <= 0){tv2.Pause = 0;} }
	$("idAdd").onclick = function(){ tv2.Pause+=1000; if(tv2.Pause >= 5000){tv2.Pause = 5000;} }
	
	$("idReset").onclick = function(){
		tv2.Step = Math.abs(tv2.options.Step);
		tv2.Time = Math.abs(tv2.options.Time);
		tv2.Auto = !!tv2.options.Auto;
		tv2.Pause = Math.abs(tv2.options.Pause);
	}
	
}
</script>
<div class="blank" style="height:30px;"></div>
<div class="block clearfix Main">
<script type="text/javascript">
          //初始化主菜单
            function sw_nav2(obj,tag)
            {
            var DisSub2 = document.getElementById("DisSub2_"+obj);
            var HandleLI2= document.getElementById("HandleLI2_"+obj);
			
                if(tag==1)
                {
                    DisSub2.style.display = "block";
					HandleLI2.className="current";
                }
                else
                {
                    DisSub2.style.display = "none";
					HandleLI2.className="";	
                }
            }
</script>
<div id="category_tree">
  <dl class="clearfix">
    <div class="mainCategory">
      <h2><a href="search.php" target="_blank">所有商品分类</a></h2>
    </div>
     
        <div  class="dt"  onMouseOver="sw_nav2(1,1);" onMouseOut="sw_nav2(1,0);" >
      <div id="HandleLI2_1"><a class="a " href="category.php?id=1">手机类型<i></i></a></div>
      <dd id=DisSub2_1 style="display:none"> 
         
        <a class="over_2" href="category.php?id=2">CDMA手机</a>
		  
         
        <a class="over_2" href="category.php?id=3">GSM手机</a>
		  
         
        <a class="over_2" href="category.php?id=4">3G手机</a>
		  
         
        <a class="over_2" href="category.php?id=5">双模手机</a>
		  
         
      </dd>
    </div>
     
     
        <div  class="dt"  onMouseOver="sw_nav2(2,1);" onMouseOut="sw_nav2(2,0);" >
      <div id="HandleLI2_2"><a class="a t" href="category.php?id=6">手机配件<i></i></a></div>
      <dd id=DisSub2_2 style="display:none"> 
         
        <a class="over_2" href="category.php?id=7">充电器</a>
		  
         
        <a class="over_2" href="category.php?id=8">耳机</a>
		  
         
        <a class="over_2" href="category.php?id=9">电池</a>
		  
         
        <a class="over_2" href="category.php?id=11">读卡器和内存卡</a>
		  
         
      </dd>
    </div>
     
     
        <div  class="dt"  onMouseOver="sw_nav2(3,1);" onMouseOut="sw_nav2(3,0);" >
      <div id="HandleLI2_3"><a class="a " href="category.php?id=12">充值卡<i></i></a></div>
      <dd id=DisSub2_3 style="display:none"> 
         
        <a class="over_2" href="category.php?id=13">小灵通/固话充值卡</a>
		  
         
        <a class="over_2" href="category.php?id=14">移动手机充值卡</a>
		  
         
        <a class="over_2" href="category.php?id=15">联通手机充值卡</a>
		  
         
      </dd>
    </div>
     
      </dl>
</div><div class="AreaL">
 
<div id="mallNews"    class="  box_1">
    <h3><span>站内快讯</span></h3>
    <div class="NewsList tc  " style="border-top:none">
        <ul>
                <li>
      <a href="article.php?id=33" title="三星SGHU308说明书下载">三星SGHU308说明书下载</a>
        </li>
                <li>
      <a href="article.php?id=32" title="手机游戏下载">手机游戏下载</a>
        </li>
                <li>
      <a href="article.php?id=30" title="促销诺基亚N96">促销诺基亚N96</a>
        </li>
                <li>
      <a href="article.php?id=29" title="诺基亚5320 促销">诺基亚5320 促销</a>
        </li>
                <li>
      <a href="article.php?id=34" title="3G知识普及">3G知识普及</a>
        </li>
                <li>
      <a href="article.php?id=31" title="诺基亚6681手机广告欣赏">诺基亚6681手机广告欣赏</a>
        </li>
                <li>
      <a href="article.php?id=28" title="飞利浦9@9促销">飞利浦9@9促销</a>
        </li>
                <li>
      <a href="article.php?id=27" title="800万像素超强拍照机 LG Viewty Smart再曝光">800万像素超强拍照机 LG V...</a>
        </li>
                </ul>
    </div>
</div>
<div  class="blank"></div>  
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";N;s:3:"num";N;}554fcae493e564ee0dc75bdf2ebf94ca
<div class="blank"></div>
</div>
<div class="Arear">
 
</div> 
  <div class="goodsBox_1">
  
  
  
<div class="xm-box">
<h4 class="title"><span>精品推荐</span> <a class="more" href="search.php?intro=best">更多</a></h4>
<div id="show_best_area" class="clearfix">
      <div class="goodsItem">
       
           <a href="goods.php?id=9"><img src="images/200905/thumb_img/9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=9" title="诺基亚E66">诺基亚E66</a></p>
           
           
 市场价：<font class="market">￥2758元</font> <br/>
      
           本店价：<font class="f1">
                     ￥2298元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=1"><img src="images/200905/thumb_img/1_thumb_G_1240902890710.jpg" alt="KD876" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=1" title="KD876">KD876</a></p>
           
           
 市场价：<font class="market">￥1666元</font> <br/>
      
           本店价：<font class="f1">
                     ￥1388元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=8"><img src="images/200905/thumb_img/8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=8" title="飞利浦9@9v">飞利浦9@9v</a></p>
           
           
 市场价：<font class="market">￥479元</font> <br/>
      
           本店价：<font class="f1">
                     ￥399元                     </font>      
		    
        </div>
   
    </div>
</div>
<div class="blank"></div>
  <div class="xm-box">
<h4 class="title"><span>新品上架</span> <a class="more" href="search.php?intro=new">更多</a></h4>
<div id="show_new_area" class="clearfix">
      <div class="goodsItem">
       
           <a href="goods.php?id=9"><img src="images/200905/thumb_img/9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=9" title="诺基亚E66">诺基亚E66</a></p>
           
           
 市场价：<font class="market">￥2758元</font> <br/>
      
           本店价：<font class="f1">
                     ￥2298元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=1"><img src="images/200905/thumb_img/1_thumb_G_1240902890710.jpg" alt="KD876" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=1" title="KD876">KD876</a></p>
           
           
 市场价：<font class="market">￥1666元</font> <br/>
      
           本店价：<font class="f1">
                     ￥1388元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=8"><img src="images/200905/thumb_img/8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=8" title="飞利浦9@9v">飞利浦9@9v</a></p>
           
           
 市场价：<font class="market">￥479元</font> <br/>
      
           本店价：<font class="f1">
                     ￥399元                     </font>      
		    
        </div>
   
    </div>
</div>
<div class="blank"></div>
  <div class="xm-box">
<h4 class="title"><span>热卖商品</span> <a class="more" href="search.php?intro=hot">更多</a></h4>
<div id="show_hot_area" class="clearfix">
      <div class="goodsItem">
       
           <a href="goods.php?id=9"><img src="images/200905/thumb_img/9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=9" title="诺基亚E66">诺基亚E66</a></p>
           
           
 市场价：<font class="market">￥2758元</font> <br/>
      
           本店价：<font class="f1">
                     ￥2298元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=1"><img src="images/200905/thumb_img/1_thumb_G_1240902890710.jpg" alt="KD876" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=1" title="KD876">KD876</a></p>
           
           
 市场价：<font class="market">￥1666元</font> <br/>
      
           本店价：<font class="f1">
                     ￥1388元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=8"><img src="images/200905/thumb_img/8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=8" title="飞利浦9@9v">飞利浦9@9v</a></p>
           
           
 市场价：<font class="market">￥479元</font> <br/>
      
           本店价：<font class="f1">
                     ￥399元                     </font>      
		    
        </div>
   
    </div>
</div>
<div class="blank"></div>
  
<div class="xm-box">
<h4 class="title"><span></span> <a class="more" href="">更多</a></h4>
<div id="show_hot_area" class="clearfix">
 
          </div>
 
 
</div>
<div class="blank"></div>
<div class="xm-box">
<h4 class="title"><span></span> <a class="more" href="">更多</a></h4>
<div id="show_hot_area" class="clearfix">
 
          </div>
 
 
</div>
<div class="blank"></div>
<div class="xm-box">
<h4 class="title"><span></span> <a class="more" href="">更多</a></h4>
<div id="show_hot_area" class="clearfix">
 
          </div>
 
 
</div>
<div class="blank"></div>
  </div> 
  
    </div>
  
  
  
 
    <div class="ft_service_link clearfix" data-tpa="YHD_GLOBAl_FOOTER_HELP">
  <div id="bottomHelpLinkId" class="ft_help_list clearfix"> 
        <dl>
      <dt>新手上路 </dt>
            <dd><a href="article.php?id=9" target="_blank">售后流程</a></dd>
            <dd><a href="article.php?id=10" target="_blank">购物流程</a></dd>
            <dd><a href="article.php?id=11" target="_blank">订购方式</a></dd>
          </dl>
        <dl>
      <dt>手机常识 </dt>
            <dd><a href="article.php?id=12" target="_blank">如何分辨原装电池</a></dd>
            <dd><a href="article.php?id=13" target="_blank">如何分辨水货手机</a></dd>
            <dd><a href="article.php?id=14" target="_blank">如何享受全国联保</a></dd>
          </dl>
        <dl>
      <dt>配送与支付 </dt>
            <dd><a href="article.php?id=15" target="_blank">货到付款区域</a></dd>
            <dd><a href="article.php?id=16" target="_blank">配送支付智能查询</a></dd>
            <dd><a href="article.php?id=17" target="_blank">支付方式说明</a></dd>
          </dl>
        <dl>
      <dt>会员中心</dt>
            <dd><a href="article.php?id=18" target="_blank">资金管理</a></dd>
            <dd><a href="article.php?id=19" target="_blank">我的收藏</a></dd>
            <dd><a href="article.php?id=20" target="_blank">我的订单</a></dd>
          </dl>
        <dl>
      <dt>服务保证 </dt>
            <dd><a href="article.php?id=21" target="_blank">退换货原则</a></dd>
            <dd><a href="article.php?id=22" target="_blank">售后服务保证</a></dd>
            <dd><a href="article.php?id=23" target="_blank">产品质量保证</a></dd>
          </dl>
        <dl>
      <dt>联系我们 </dt>
            <dd><a href="article.php?id=24" target="_blank">网站故障报告</a></dd>
            <dd><a href="article.php?id=25" target="_blank">选机咨询</a></dd>
            <dd><a href="article.php?id=26" target="_blank">投诉与建议</a></dd>
          </dl>
     
  </div>
</div>
 
<div class="ft_code_wrap clearfix" id="footerQRcode">
  <div class="ft_mobile_code clearfix"> 
  <img width="90" height="90" src="themes/yihaodian/images/iphone.jpg" alt="EC模板堂客户端二维码">
    <dl>
      <dt>EC模板堂客户端</dt>
      <dd>用着很方便！</dd>
      <dd> 
      <a href="https://itunes.apple.com/cn/app/ecshop-mo-ban-tang/id773051406?mt=8" target="_blank" class="ft_iphone" rel="nofollow"><i></i>iPhone</a> 
      <a href="https://itunes.apple.com/cn/app/ecshop-mo-ban-tanghd/id940333287?mt=8" target="_blank" class="ft_ipad" rel="nofollow"><i></i>iPad</a> 
      <a href="http://a.app.qq.com/o/simple.jsp?pkgname=com.ecmoban.android.moban" target="_blank" class="ft_android" rel="nofollow"><i></i>Android</a> 
      </dd>
    </dl>
  </div>
  <div class="ft_mobile_code clearfix"> 
  <img width="90" height="90" src="themes/yihaodian/images/suspension-code.jpg" alt="EC模板堂客户端二维码">
    <dl>
      <dt>EC模板堂官方微信</dt>
      <dd>万千优惠资讯抢先收到，互动、查物流一步搞定！</dd>
    </dl>
  </div>
</div>
<div id="footer">
  <div class="ft_footer_service"> 
  <a href="#" target="_blank"><span class="s1"></span>全国包邮</a> 
  <a href="#" target="_blank"><span class="s2"></span>正品保障</a> 
  <a href="#" target="_blank"><span class="s3"></span>售后无忧</a> 
  <a href="#" target="_blank"><span class="s4"></span>准时送达</a> 
  </div>
     
  <p class="ft_footer_link"> 
    
    <a href="article.php?id=1" >免责条款</a>| 
      
    <a href="article.php?id=2" >隐私保护</a>| 
      
    <a href="article.php?id=3" >咨询热点</a>| 
      
    <a href="article.php?id=4" >联系我们</a>| 
      
    <a href="article.php?id=5" >公司简介</a>| 
      
    <a href="wholesale.php" >批发方案</a>| 
      
    <a href="myship.php" >配送方式</a> 
      </p>
    
    
  
<p class="ft_footer_link">
        <a href="http://www.ecshop.com/" target="_blank" title="ECSHOP 网上商店管理系统">ECSHOP 网上商店管理系统</a>|
                <a href="http://www.maifou.net/" target="_blank" title="买否网">买否网</a>|        <a href="http://www.wdwd.com/" target="_blank" title="免费开独立网店">免费开独立网店</a>        </p>
  <div class="text" style="line-height:20px;">
  <center>
 &copy; 2005-2017 ECSHOP 版权所有，并保留所有权利。<br />
                                                                                     <br />
    554fcae493e564ee0dc75bdf2ebf94caquery_info|a:1:{s:4:"name";s:10:"query_info";}554fcae493e564ee0dc75bdf2ebf94ca<br />
  </center>
 </div>
     <div class="text" style="height:20px; margin-top:5px;">
  <center>  <a href=" http://www.ecmoban.com" target="_blank"><img src="themes/yihaodian/images/ecmoban.gif" alt="ECShop模板"></a>
  </center>
  </div>
 
<small class="ft_pic_link" id="footerbanner2LazyLoad">
<a href="#"><img src="themes/yihaodian/images/foot_img1.jpg"></a>|
<a href="#"><img src="themes/yihaodian/images/foot_img2.jpg"></a>|
<a href="#"><img src="themes/yihaodian/images/foot_img3.jpg"></a>|
<a><img src="themes/yihaodian/images/foot_img4.jpg"></a>|
<a href="#"><img src="themes/yihaodian/images/foot_img5.jpg"></a>|
<a href="#"><img src="themes/yihaodian/images/foot_img6.jpg"></a>|
<a href="#"><img src="themes/yihaodian/images/foot_img7.jpg"></a>|
<a href="h#"><img src="themes/yihaodian/images/foot_img8.jpg"></a>|
</small> 
</div>
  
<link href="ecmoban_qq/images/qq.css" rel="stylesheet" type="text/css" />
<div class="QQbox" id="divQQbox" style="width: 170px; ">
<div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>9:00-18:00</div>
    <div class="con">
        <ul>
 
  
  
  
  
  
                                                                                  
    
  
  
  
  
  
  
  
  
  
  
	         </ul>
    </div>
    <div class="b"></div>
</div>
<div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="ecmoban_qq/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script>
 
</body>
</html>