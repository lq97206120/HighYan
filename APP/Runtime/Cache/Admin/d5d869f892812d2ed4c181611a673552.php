<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/chili-1.7.pack.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.easing.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.dimensions.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.accordion.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/style.css"/>
<title>Insert title here</title>
<style type="text/css">
	body {
		background:#fff;
	}
</style>
<script language="javascript">
	jQuery().ready(function(){
		jQuery('#navigation').accordion({
			header: '.head',
			navigation1: true, 
			event: 'click',
			fillSpace: true,
			animated: 'bounceslide'
		});
	});
</script>

</head>
<body>
<!====top======>
	<div class="top">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td height="57" background="__PUBLIC__/Images/main_03.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		      <tr>
		        <td width="378" height="57" background="__PUBLIC__/Images/main_01.gif">&nbsp;</td>
		        <td>&nbsp;</td>
		        <td width="281" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tr>
		            <td width="33" height="27"><img src="__PUBLIC__/Images/main_05.gif" width="33" height="27" /></td>
		            <td width="248" background="__PUBLIC__/Images/main_06.gif"><table width="225" border="0" align="center" cellpadding="0" cellspacing="0">
		              <tr>
		                <td height="17"><div align="right"><a href="pwd.php" target="rightFrame"><img src="__PUBLIC__/Images/pass.gif" width="69" height="17" /></a></div></td>
		                <td><div align="right"><a href="user.php" target="rightFrame"><img src="__PUBLIC__/Images/user.gif" width="69" height="17" /></a></div></td>
		                <td><div align="right"><a href="exit.php" target="_parent"><img src="__PUBLIC__/Images/quit.gif" alt=" " width="69" height="17" /></a></div></td>
		              </tr>
		            </table></td>
		          </tr>
		        </table></td>
		      </tr>
		    </table></td>
		  </tr>
		  
		  <tr>
		    <td height="40" background="__PUBLIC__/Images/main_10.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		      <tr>
		        <td width="194" height="40" background="__PUBLIC__/Images/main_07.gif">&nbsp;</td>
		        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tr>
		            <td width="21"><img src="__PUBLIC__/Images/main_13.gif" width="19" height="14" /></td>
		            <td width="35" class="STYLE7"><div align="center"><a href="main.html" target="rightFrame">首页</a></div></td>
		            <td width="21" class="STYLE7"><img src="__PUBLIC__/Images/main_15.gif" width="19" height="14" /></td>
		            <td width="35" class="STYLE7"><div align="center"><a href="javascript:history.go(-1);">后退</a></div></td>
		            <td width="21" class="STYLE7"><img src="__PUBLIC__/Images/main_17.gif" width="19" height="14" /></td>
		            <td width="35" class="STYLE7"><div align="center"><a href="javascript:history.go(1);">前进</a></div></td>
		            <td width="21" class="STYLE7"><img src="__PUBLIC__/Images/main_19.gif" width="19" height="14" /></td>
		            <td width="35" class="STYLE7"><div align="center"><a href="javascript:window.parent.location.reload();">刷新</a></div></td>
		            <td width="21" class="STYLE7"><img src="__PUBLIC__/Images/main_21.gif" width="19" height="14" /></td>
		            <td width="35" class="STYLE7"><div align="center"><a href="http://www.51bcw.com" target="_parent">帮助</a></div></td>
		            <td>&nbsp;</td>
		          </tr>
		        </table></td>
		        <td width="248" background="__PUBLIC__/Images/main_11.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tr>
		            <td width="16%"><span class="STYLE5"></span></td>
		            <td width="75%"><div align="center"><span class="STYLE7">By 51bcw.com (<a href="http://www.51bcw.com" target="_blank">www.51bcw.com</a>)</span></div></td>
		            <td width="9%">&nbsp;</td>
		          </tr>
		        </table></td>
		      </tr>
		    </table></td>
		  </tr>
		  
		  <tr>
		    <td height="30" background="__PUBLIC__/Images/main_31.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		      <tr>
		        <td width="8" height="30"><img src="__PUBLIC__/Images/main_28.gif" width="8" height="30" /></td>
		        <td width="147" background="__PUBLIC__/Images/main_29.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tr>
		            <td width="24%">&nbsp;</td>
		            <td width="43%" height="20" valign="bottom" class="STYLE1">管理菜单</td>
		            <td width="33%">&nbsp;</td>
		          </tr>
		        </table></td>
		        <td width="39"><img src="__PUBLIC__/Images/main_30.gif" width="39" height="30" /></td>
		        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
		          <tr>
		            <td height="20" valign="bottom"><span class="STYLE1">当前登录用户：admin &nbsp;用户角色：管理员</span></td>
		            <td valign="bottom" class="STYLE1"><div align="right"></div></td>
		          </tr>
		        </table></td>
		        <td width="17"><img src="__PUBLIC__/Images/main_32.gif" width="17" height="30" /></td>
		      </tr>
		    </table></td>
		  </tr>
</table>
	</div>
<!====center======>
	<div class="center">
		<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td width="8" bgcolor="#353c44">&nbsp;</td>
<!====left======>   
		    <td width="147" valign="top" class="left">
		    	<div  style="height:100%;">
				  <ul id="navigation">
				    <li> <a class="head">日志管理</a>
				      <ul>
				        <li><a href="AddArticle.php" target="rightFrame">添加日志</a></li>
				        <li><a href="Articles.php" target="rightFrame">查看/修改日志</a></li>
				      </ul>
				    </li>
				    <li> <a class="head">分类管理</a>
				      <ul>
				        <li><a href="AddKind.php" target="rightFrame">添加分类</a></li>
				        <li><a href="Kinds.php" target="rightFrame">查看/删除分类</a></li>
				      </ul>
				    </li>
				    <li> <a class="head">留言评论管理</a>
				      <ul>
				        <li><a href="messages.php" target="rightFrame">查看/删除留言</a></li>
				        <li><a href="comments.php" target="rightFrame">查看/删除评论</a></li>
				      </ul>
				    </li>
				    <li> <a class="head">友情链接管理</a>
				      <ul>
				        <li><a href="AddLink.php" target="rightFrame">添加友情链接</a></li>
				        <li><a href="Links.php" target="rightFrame">查看/修改友情链接</a></li>
				      </ul>
				    </li>
				    <li> <a class="head">版本信息</a>
				      <ul>
				        <li><a href="http://www.51bcw.com" target="_blank">by 51bcw.com</a></li>
				      </ul>
				    </li>
  					</ul>
				</div>
		    </td>
		    <td width="10" bgcolor="#add2da">&nbsp;</td>
<!====right======>  		    
		    <td valign="top" class="right">
				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
					    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
					      <tr>
					        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
					          <tr>
					            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
					              <tr>
					                <td width="6%" height="19" valign="bottom"><div align="center"><img src="images/tb.gif" width="14" height="14" /></div></td>
					                <td width="94%" valign="bottom"><span class="STYLE1"> 管理人员基本信息列表</span></td>
					              </tr>
					            </table></td>
					            <td><div align="right"><span class="STYLE1">
					              <input type="checkbox" name="checkbox11" id="checkbox11" />
					              全选      &nbsp;&nbsp;<img src="images/add.gif" width="10" height="10" /> 添加   &nbsp; <img src="images/del.gif" width="10" height="10" /> 删除    &nbsp;&nbsp;<img src="images/edit.gif" width="10" height="10" /> 编辑   &nbsp;</span><span class="STYLE1"> &nbsp;</span></div></td>
					          </tr>
					        </table></td>
					      </tr>
					    </table></td>
					  </tr>
					  <tr>
					    <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
					      <tr>
					        <td width="4%" height="20" bgcolor="d3eaef" class="STYLE10"><div align="center">
					          <input type="checkbox" name="checkbox" id="checkbox" />
					        </div></td>
					        <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">用户名</span></div></td>
					        <td width="15%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">用户角色</span></div></td>
					        <td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">联系方式</span></div></td>
					        <td width="16%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">IP地址</span></div></td>
					        <td width="27%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">详细描述</span></div></td>
					        <td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">基本操作</span></div></td>
					      </tr>
					      <tr>
					        <td height="20" bgcolor="#FFFFFF"><div align="center">
					          <input type="checkbox" name="checkbox2" id="checkbox2" />
					        </div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="center"><span class="STYLE19">admin</span></div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
					        <td height="20" bgcolor="#FFFFFF"><div align="center" class="STYLE21">删除 | 查看</div></td>
					      </tr>
					      <tr>
					        <td height="20" bgcolor="#FFFFFF"><div align="center">
					          <input type="checkbox" name="checkbox3" id="checkbox3" />
					        </div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
					        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
					      </tr>
					      <tr>
					        <td height="20" bgcolor="#FFFFFF"><div align="center">
					          <input type="checkbox" name="checkbox4" id="checkbox4" />
					        </div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
					        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
					      </tr>
					      <tr>
					        <td height="20" bgcolor="#FFFFFF"><div align="center">
					          <input type="checkbox" name="checkbox5" id="checkbox5" />
					        </div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
					        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
					      </tr>
					      <tr>
					        <td height="20" bgcolor="#FFFFFF"><div align="center">
					          <input type="checkbox" name="checkbox6" id="checkbox6" />
					        </div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
					        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
					      </tr>
					      <tr>
					        <td height="20" bgcolor="#FFFFFF"><div align="center">
					          <input type="checkbox" name="checkbox7" id="checkbox7" />
					        </div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
					        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
					      </tr>
					      <tr>
					        <td height="20" bgcolor="#FFFFFF"><div align="center">
					          <input type="checkbox" name="checkbox8" id="checkbox8" />
					        </div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
					        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
					      </tr>
					      <tr>
					        <td height="20" bgcolor="#FFFFFF"><div align="center">
					          <input type="checkbox" name="checkbox9" id="checkbox9" />
					        </div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
					        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
					      </tr>
					      <tr>
					        <td height="20" bgcolor="#FFFFFF"><div align="center">
					          <input type="checkbox" name="checkbox10" id="checkbox10" />
					        </div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">admin</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">系统管理员</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">13913612548</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">192.168.0.124</div></td>
					        <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center">用户可以对系统的所有操作进行管理...</div></td>
					        <td height="20" bgcolor="#FFFFFF"><div align="center"><span class="STYLE21">删除 | 查看</span></div></td>
					      </tr>
					    </table></td>
					  </tr>
					  <tr>
					    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
					      <tr>
					        <td width="33%"><div align="left"><span class="STYLE22">&nbsp;&nbsp;&nbsp;&nbsp;共有<strong> 243</strong> 条记录，当前第<strong> 1</strong> 页，共 <strong>10</strong> 页</span></div></td>
					        <td width="67%"><table width="312" border="0" align="right" cellpadding="0" cellspacing="0">
					          <tr>
					            <td width="49"><div align="center"><img src="images/main_54.gif" width="40" height="15" /></div></td>
					            <td width="49"><div align="center"><img src="images/main_56.gif" width="45" height="15" /></div></td>
					            <td width="49"><div align="center"><img src="images/main_58.gif" width="45" height="15" /></div></td>
					            <td width="49"><div align="center"><img src="images/main_60.gif" width="40" height="15" /></div></td>
					            <td width="37" class="STYLE22"><div align="center">转到</div></td>
					            <td width="22"><div align="center">
					              <input type="text" name="textfield" id="textfield"  style="width:20px; height:12px; font-size:12px; border:solid 1px #7aaebd;"/>
					            </div></td>
					            <td width="22" class="STYLE22"><div align="center">页</div></td>
					            <td width="35"><img src="images/main_62.gif" width="26" height="15" /></td>
					          </tr>
					        </table></td>
					      </tr>
					    </table></td>
					  </tr>
			</table>
		    </td>
		    <td width="8" bgcolor="#353c44">&nbsp;</td>
		  </tr>
		</table>
	</div>
<!====footer=====>	
	<div class="footer">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td background="images/main_71.gif"  style="line-height:11px; table-layout:fixed" width="165">&nbsp;</td>
		    <td background="images/main_72.gif"  style="line-height:11px; table-layout:fixed">&nbsp;</td>
		    <td background="images/main_74.gif"  style="line-height:11px; table-layout:fixed" width="17">&nbsp;</td>
		  </tr>
		</table>
	</div>
</body>
</html>