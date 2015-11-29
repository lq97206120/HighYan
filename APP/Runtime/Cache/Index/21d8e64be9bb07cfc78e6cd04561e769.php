<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>标题栏</title>
<link rel="stylesheet" href="__PUBLIC__/css/common.css"/>
<link rel="stylesheet" href="__PUBLIC__/css/title_bar.css"/>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script language="JavaScript" src="__PUBLIC__/js/adapt_screen.js"></script>
<SCRIPT language="JavaScript">
function show(d1){
 if(document.getElementById(d1).style.display=='none'){
  document.getElementById(d1).style.display='block';  //如果触动的层如果处于隐藏状态，即显示
 }
 else{
  document.getElementById(d1).style.display='none';  //如果触动的层如果处于显示状态，即隐藏
 }
}
</SCRIPT>
</head>
<!--;javascript:onClick=show('test1')-->
<body>
<div style="background-color:#434444;height:25px">
	<span style="padding-right:200px;padding-left:220px"><a href="<?php echo U(GROUP_NAME.'/Index/homepage');?>" target="change"><font>首页</font></a></span>
	<span><a href="<?php echo U(GROUP_NAME.'/Index/jiehunji');?>" target="change"><font>结婚季</font></a></span>	
	<span><a href="<?php echo U(GROUP_NAME.'/Index/youxiuanli');?>" target="change"><font>优秀案例</font></a></span>	
	<span><a href="<?php echo U(GROUP_NAME.'/Index/chanpinxilie');?>" target="change"><font>产品系列</font></a></span>
	<span><a href="<?php echo U(GROUP_NAME.'/Index/gongyizhanshi');?>" target="change"><font>工艺展示</font></a></span>
	<span><a href="<?php echo U(GROUP_NAME.'/Index/contactMe');?>" target="change"><font>联系我们</font></a></span>

</div>
<div style="display:none" id="test1">
	<font>测试1</font><br/>
	<font>测试2</font>
	</div>
</body>
</html>