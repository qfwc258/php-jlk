<?php
/* Smarty version 3.1.30, created on 2017-01-13 06:34:31
  from "D:\wamp\www\jlk\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587874f7b3ad96_25382077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f76d9e6d1268d549b1f606e4e2fb4be6572ecfc' => 
    array (
      0 => 'D:\\wamp\\www\\jlk\\message.html',
      1 => 1484285004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587874f7b3ad96_25382077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17924587874f78035a5_42668281';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>关于我们</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="洁立康环保 http://www.qzjlk.com" />
<link rel="stylesheet" href="/jlk/css/reset.css" />
<link rel="stylesheet" href="/jlk/css/head.css" />
<link rel="stylesheet" href="/jlk/css/main.css" />
<link rel="stylesheet" href="/jlk/css/service_hot.css" />
<?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.0/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="/jlk/js/jquery-1.11.0.js"><\/script>');<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/jlk/js/jquery.flexslider-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/jlk/js/scroll.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/jlk/js/ScrollToPlugin.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/jlk/js/TweenMax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/jlk/js/rocket.js"><?php echo '</script'; ?>
>
</head>
    <body>
    	 <div id="rocket">
		  <span id="gotop1">
		    <img src="/zwj/view/images/front/rocked.png" alt="返回顶部小火箭">
		  </span>
	  </div>
    	<div id="header">
	    	<img src="/jlk/images/company.png" alt="logo" class="img_one"/>
	    	<img src="/jlk/images/服务热线.png" alt="服务热线" class="img_two"/>
	    	<ul class="nav">
	    		<li class="first"><a href="/main.php" >网站首页</a></li>
	    		<li><a href="/jlk/about.php" >关于我们</a>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about_result']->value, 'about_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['about_value']->value) {
?>
			     <ul class="nav_son">
	    				<li><a href="/jlk/about.php?id=<?php echo $_smarty_tpl->tpl_vars['about_value']->value['id'];?>
" target="right"><?php echo $_smarty_tpl->tpl_vars['about_value']->value['title'];?>
</a></li>
	    		    </ul>
	    		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</li>
	    		<li><a href="/jlk/cases.php" >项目实例</a>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cases_result']->value, 'cases_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cases_value']->value) {
?>
			     <ul class="nav_son">
	    				<li><a href="/jlk/cases.php?id=<?php echo $_smarty_tpl->tpl_vars['cases_value']->value['cat_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['cases_value']->value['cat_title'];?>
</a></li>
	    		    </ul>
	    		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</li>
	    		<li><a href="/jlk/product.php" >产品中心</a>
				 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_result']->value, 'product_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_value']->value) {
?>
			     <ul class="nav_son">
	    				<li><a href="/jlk/product.php?id=<?php echo $_smarty_tpl->tpl_vars['product_value']->value['cat_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['product_value']->value['cat_title'];?>
</a></li>
	    		    </ul>
	    		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</li>
	    		<li><a href="/jlk/culture.php" >企业文化</a>
			     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['culture_result']->value, 'culture_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['culture_value']->value) {
?>
			     <ul class="nav_son">
	    				<li><a href="/jlk/culture.php?id=<?php echo $_smarty_tpl->tpl_vars['culture_value']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['culture_value']->value['title'];?>
</a></li>
	    		    </ul>
	    		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</li>
	    		<li><a href="/jlk/news.php" >新闻资讯</a>
			    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news_result']->value, 'news_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news_value']->value) {
?>
			     <ul class="nav_son">
	    				<li><a href="/jlk/news.php?id=<?php echo $_smarty_tpl->tpl_vars['news_value']->value['cat_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['news_value']->value['cat_title'];?>
</a></li>
	    		    </ul>
	    		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</li>
	    		<li><a href="/jlk/joins.php" >加入我们</a>
			     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['joins_result']->value, 'joins_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['joins_value']->value) {
?>
			       <ul class="nav_son">
	    				<li><a href="/jlk/joins.php?id=<?php echo $_smarty_tpl->tpl_vars['joins_value']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['joins_value']->value['title'];?>
</a></li>
	    		    </ul>
	    		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</li>
	    		<li><a href="/jlk/contact.php" >联系我们</a>
			       <ul class="nav_son">
			       	     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact_result']->value, 'contact_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact_value']->value) {
?>
	    				<li><a href="/jlk/contact.php?id=<?php echo $_smarty_tpl->tpl_vars['contact_value']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['contact_value']->value['title'];?>
</a></li>
	    			     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    			     <li><a href="/jlk/message.php">留言反馈</a></li>
	    		    </ul>
	    		</li>
	    	</ul>
    	</div>
    	<div class="clear"></div>
	    <div class="flexslider" >
		  <ul class="slides">
		    <li ><img src="/jlk/images/4.jpg" alt="1.jpg" /></li>
		    <li ><img src="/jlk/images/1.jpg" alt="2.jpg" /></li>
		    <li ><img src="/jlk/images/2.jpg" alt="3.jpg" /></li>
		    <li ><img src="/jlk/images/5.jpg" alt="4.jpg" /></li>
		  </ul>
	   </div>
	   <div class="clear"></div>
	   <div id="here"></div>
	   <div id="main">
	   	   <div id="left">
	    		<ul class="nav"> 
	    			<li class="first"><a href="#">联系我们</a></li>
	    			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact_result']->value, 'contact_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact_value']->value) {
?>
	    			<li><a href="/jlk/contact.php?id=<?php echo $_smarty_tpl->tpl_vars['contact_value']->value['id'];?>
" ><span class="span_one"><?php echo $_smarty_tpl->tpl_vars['contact_value']->value['title'];?>
</span><span  class="span_two"/>》</span></a></li>
	    		         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		         <li><a href="/jlk/message.php" target="right" ><span class="span_one">留言反馈</span><span  class="span_two"/>》</span></a></li>
	    		</ul>
	    		<div class="clear"></div>
	    		<div class="contact"><a href="/jlk/contact.php" ><img src="/jlk/images/联系我们.jpg" alt="联系我们" /></a></div>
    		</div>
    		<div id="right"><div class="right_title">留言反馈</div>
    		<div class="right_position">
    			<img src="/jlk/images/首页-首页.png" alt="首页-首页.png" /><span>&nbsp;当前位置：</span>
    			<a href="/main.php">首页</a><span>></span><a href="/jlk/contact.php">联系我们</a><span>></span><a href="/jlk/message.php?">留言反馈</a>
    		</div>
    			<div class="clear"></div>
    			<div >
    				<form action="/jlk/message_deal.php" method="post" name="form1" id="form1">
    					<p><span class="span_one">留言标题：</span><input type="text" name="title" id="title"/><span class="span_two">&nbsp;*</span></p>
    					<p><span class="span_one">姓名：</span><input type="text" name="username" id="username"/><span class="span_two">&nbsp;*</span></p>
    					<p><span class="span_one">电话：</span><input type="text" name="telephone" id="telephone"/><span class="span_two">&nbsp;*</span></p>
    					<p><span class="span_one">E-mail：</span><input type="text" name="email" id="email"/><span class="span_two">&nbsp;*</span></p>
    					<p><span class="span_one">留言内容：</span><textarea name="content" id="content" cols="30" rows="10"></textarea><span class="span_two">&nbsp;*</span></p>
    					<p><span class="captcha">验证码：</span><input type="text" name="captcha" id="captcha" class="captcha_input"/><img src="/jlk/captcha.php" alt="验证码"  onclick="this.src='/jlk/captcha.php?'+Math.random()"/></p>
					<p ><input type="reset" value="重填" class="reset"/>
						<input type="submit" value="确定" class="submit"/></p>
    				</form>
    			</div>
    		</div>	
	   </div> 
	   	   <div class="clear"></div>
	   <div id="footer" >
	   	<pre>   电话：0595-85050607     地址：晋江市青阳街道洪山路一百文创园1#楼402-3
版权所有@ 泉州市洁立康环保工程有限公司</pre>
	   </div>
	    <div id="service_hot_show"><img src="/jlk/images/服务热线3.png" alt="" /></div>
	   <div id="service_hot_hide">
	   	<div id="service_hot_hide_top"><div class="close"><img src="/jlk/images/关闭4.png" alt="" /></div></div>
	   	<div id="service_hot_hide_bottom">
	   		<img src="/jlk/images/qqonline.gif" alt="" /><span>在线QQ咨询：</span>
	   		<div class="clear"></div>
	   		<div class="hot_here"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=693170717&site=qq&menu=yes">693170717</a></div>
	   		<img src="/jlk/images/tel.gif" alt="" /><span style="margin-top:11px;display:block;margin-left:5px;">咨询热线：</span>
	   		<div class="clear"></div>
	   		<div style="margin-left:50px;color:rgb(245,45,34);font-weight:bold;padding-top:11px;">0595-85050607</div>
	   		<div style="margin-left:50px;color:rgb(245,45,34);font-weight:bold;padding-top:11px;">13305060599</div>
	   		<img src="/jlk/images/msg.gif" alt="" style="margin-top:11px;" /><a style="margin-top:11px;display:block;float:left;color:rgb(51,51,51);margin-left: 11px;font-size:13px;font-weight: bold;">留言咨询：</a>
	   		<div class="clear"></div>
	   		<a class="message_here" href="/jlk/message.php">点这里留言</a>
	   	</div>
	   </div>	
		<?php echo '<script'; ?>
 type="text/javascript">
		
		$(document).ready(function(){	
			$("#iframe").load(function(){ 
			var mainheight = $(this).contents().find("body").height()+10; 
			$(this).height(mainheight); 
			}); 
		  $('.flexslider').flexslider({
		    directionNav: true,
		    pauseOnAction: false
		  });
		  $('ul.nav>li').hover(function(){
				$(this).find('ul.nav_son').stop(true,false).animate({top:'0px'});
		},function(){
				$(this).find('ul.nav_son').stop(true,false).animate({top:'50px'});
		      });
		  $('#form1').submit(function(e){
		  	var flag=0;
		  	var reg=/^.+$/;
		  	var ph_reg = /^[1][345789]\d{9}$/;
		  	var email_reg=/^([0-9A-Za-z\-_\.]+)@([0-9a-z]+\.[a-z]{2,3}(\.[a-z]{2})?)$/;
		  	var title=$.trim($('#title').val());
		  	var username=$.trim($('#username').val());
		  	var telephone=$.trim($('#telephone').val());
		  	var email=$.trim($('#email').val());
		  	var content=$.trim($('#content').val());
		  	if(!reg.test(title)){
		  		flag=1;
		  		$('#title').next().html('&nbsp;*必填');
		  	}
		  	if(!reg.test(telephone)){
		  		flag=1;
		  		$('#telephone').next().html('&nbsp;*必填');
		  	}
		  	if(!reg.test(username)){
		  		flag=1;
		  		$('#username').next().html('&nbsp;*必填');
		  	}
		  	if(!reg.test(email)){
		  		flag=1;
		  		$('#email').next().html('&nbsp;*必填');
		  	}
		  	if(!reg.test(content)){
		  		flag=1;
		  		$('#content').next().html('&nbsp;*必填');
		  	}
		  	if(flag==1){
		  		e.preventDefault();
		  	}else{
		  		if(!ph_reg.test(telephone)){
		  			$('#telephone').next().html('&nbsp;*手机号格式不正确');
		  			e.preventDefault();
		  		}else{
		  			$('#telephone').next().html('&nbsp;*');
		  			if(!email_reg.test(email)){
		  			$('#email').next().html('&nbsp;*email格式不正确');
		  			e.preventDefault();
		  		}else{
		  			
		  			}
		  		}
		  		
		  	}

		  	
		  });
$('#service_hot_show').trigger('click');
		});   
		
		
		<?php echo '</script'; ?>
>     	
    </body>
</html><?php }
}
