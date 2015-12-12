<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/jquery-easyui-1.3.5/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/jquery-easyui-1.3.5/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/bootstrap-responsive.min.css">
	<script language="javascript" type="text/javascript" src="__PUBLIC__/My97DatePicker/WdatePicker.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="__PUBLIC__/bootstrap/bootstrap.js"></script>
	<script type="text/javascript" src="__PUBLIC__/jquery-easyui-1.3.5/jquery.easyui.min.js"></script>
</head>
<body style="padding:20px 20px 0px 20px">
	<h2 align="center">员工信息列表</h2>
	<form id="searchform" method='post' action="__URL__/searchuser" class="form-horizontal">
	<table id = "search" >
	  <tr>
	  	<td>
	  	<select name="searchcondition" class="form-control">
			  <option value ="unum">工号</option>
			  <option value ="uname">姓名</option>
			  <option value ="umale">性别</option>
			  <option value ="ustatus">状态</option>
			   <option value ="uphone">联系电话</option>
			   <option value ="role">职位</option>
			  <option value ="shop">所属单位</option>
			  
		</select>
	  	</td>
	  	<td>
	  		<input type="text" class="form-control"  id="searchcontent" name="searchcontent">
	  	</td>
	  	<td>
	  	</td>
		<td>
			<button class="btn  btn-default" id="searchbtn" name="searchbtn" type="button">查询&nbsp;<i class="icon-search icon-large icon-white"></i> </button>
		</td>
	  </tr>
	</table>
	</form>
	<br/>
	<button class="btn btn-default "  data-toggle="modal" data-target="#adduserModal">
					添加员工
			</button>
	<button id="userEdit" class="btn btn-default "  data-target="#edituserModal">
			修改员工信息
	</button>
	
	<div style="margin:10px 0;"></div>
	
	
	<table id="dg" title="学生信息列表" style="width:1100px;height:308px" >
	<?php if(is_array($user)): foreach($user as $key=>$u): ?><tr>
		<td><?php echo ($u["uid"]); ?></td>
		<td><?php echo ($u["unum"]); ?></td>
		<td><?php echo ($u["uname"]); ?></td>
		<td><?php if($u['umale'] == 1): ?>男<?php else: ?>女<?php endif; ?></td>
		<td><?php if($u['ustatus'] == 1): ?>开启<?php else: ?>关闭<?php endif; ?></td>
		<td><?php echo ($u["uphone"]); ?></td>
		<td><?php echo ($u["ubirth"]); ?></td>
		<td><?php echo ($u["udate"]); ?></td>
		<td><?php echo ($u["ulogintime"]); ?></td>
		<td><?php echo ($u["uloginip"]); ?></td>
		<td><?php echo ($u["roleremark"]); ?></td>
		<td><?php echo ($u["shopsname"]); ?></td>
		<td><?php echo ($u["role"]); ?></td>
		<td><?php echo ($u["shop"]); ?></td>
		<td>
			<a href="javascript:void(0)" onclick="deleteuser(<?php echo ($u["uid"]); ?>)">删除</a>
		</td>		
	</tr><?php endforeach; endif; ?>
	</table>
	<div align="center">
	<?php echo ($page); ?>
	</div>
	
		<!-- Modal 添加信息-->
	<div class="modal fade" id="adduserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	  <div class="modal-dialog" >
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">添加成员</h4>
	      </div>
	      <div class="modal-body">
	        <form id="form1" method='post' action="__URL__/insert" class="form-horizontal">
		
		   <div class="form-group">
			    <label for="usernum" class="col-sm-2 control-label">工号</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="usernum" name="unum"  placeholder="不能为空">
			    </div>
		  </div>
		  <div class="form-group">
			    <label for="username" class="col-sm-2 control-label">姓名</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="username" name="uname"  placeholder="不能为空">
			    </div>
		  </div>
		   <div class="form-group">
			    <label for="usersex" class="col-sm-2 control-label">性别</label>
			    <div class="col-sm-10">
			     <input type="radio"   name="umale" value='1' checked="checked" style="width: 50px"/>&nbsp;&nbsp;男&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio"                name="umale" value='0' style="width: 50px"/>&nbsp;&nbsp;女
			    </div>
		  </div>
		   <div class="form-group">
			    <label for="userbirth" class="col-sm-2 control-label">出生日期</label>
			    <div class="col-sm-10">
			     <input type="text" class="form-control" onClick="WdatePicker()" id="userbirth" name="ubirth"  placeholder="出生年月">
			    </div>
		  </div>
		  <div class="form-group">
			    <label for="userstarttime" class="col-sm-2 control-label">入职日期</label>
			    <div class="col-sm-10">
			     <input type="text" class="form-control" onClick="WdatePicker()" id="userstarttime" name="udate"  placeholder="入职日期">
			    </div>
		  </div>

		   <div class="form-group">
			    <label for="usertel" class="col-sm-2 control-label">联系电话</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="usertel" name="uphone"  placeholder="联系电话">
			    </div>
		  </div>
			
	    <div class="form-group">
			    <label for="userlimits" class="col-sm-2 control-label">职位</label>
			    <div class="col-sm-10">
				     <select id="rolelimits" name="role" class="form-control">
						<option >==请选择角色==</option>
						<?php if(is_array($roles)): foreach($roles as $key=>$v): ?><option value='<?php echo ($v['id']); ?>'><?php echo ($v["name"]); ?>(<?php echo ($v["remark"]); ?>)</option><?php endforeach; endif; ?>
					</select>
			    </div>
		  </div>
		  <div class="form-group">
			    <label for="userlimits" class="col-sm-2 control-label">所属单位</label>
			    <div class="col-sm-10">
				     <select id="shoplimits" name="shop" class="form-control" >
						<option >==请选择单位==</option>
						<?php if(is_array($shops)): foreach($shops as $key=>$v): ?><option value='<?php echo ($v['sid']); ?>'><?php echo ($v["sname"]); ?></option><?php endforeach; endif; ?>
					 </select>
			    </div>
		  </div>

		  
		   <div class="modal-footer">
		   	<input type="reset" class="btn btn-primary" name="Submit2" value="重 置">
	       <input type="submit" class="btn btn-primary" value="保 存" id="adduserbtn" name="adduserbtn">
	      </div>
		  
		  </form>
	      </div>
	    </div>
	  </div>
	</div>
	
	
	<!-- Modal 修改信息 -->
	<div class="modal fade" id="edituserModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
	   <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">修改员工信息</h4>
	      </div>
	      <div class="modal-body">
	      <form id="form2" method='post' action="__URL__/update" class="form-horizontal">

		   <div class="form-group">
			    <label for="usernum" class="col-sm-2 control-label">工号</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="usernum" name="unum"  placeholder="不能为空" readonly="true">
			      
			    </div>
		  </div>
		  <div class="form-group">
			    <label for="username" class="col-sm-2 control-label">姓名</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="username" name="uname"  placeholder="不能为空">
			    </div>
		  </div>
		  
		   <div class="form-group">
			    <label for="usersex" class="col-sm-2 control-label">性别</label>
			    <div class="col-sm-10">
		     	    <input type="radio"  name="umale" value='1' checked="checked" style="width: 50px"/>&nbsp;&nbsp;男&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio"   name="umale" value='0' style="width: 50px"/>&nbsp;&nbsp;女
			    </div>
		  </div>
		  

		  <div class="form-group">
			    <label for="userbirth" class="col-sm-2 control-label">出生日期</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" onClick="WdatePicker()" id="userbirth" name="ubirth"  placeholder="出生日期">
			    </div>
		  </div>
		  <div class="form-group">
			    <label for="userstarttime" class="col-sm-2 control-label">入职日期</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" onClick="WdatePicker()" id="userstarttime" name="udate"  placeholder="入职日期">
			    </div>
		  </div>

		  <div class="form-group">
			    <label for="usertel" class="col-sm-2 control-label">联系电话</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="usertel" name="uphone"  placeholder="联系电话">
			    </div>
		  </div>
		  <div class="form-group">
			    <label for="usersex" class="col-sm-2 control-label">状态</label>
			    <div class="col-sm-10">
			      	<input type="radio"   name="ustatus" value='1' checked="checked" style="width: 50px"/>&nbsp;&nbsp;开启&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio"   name="ustatus" value='0' style="width: 50px"/>&nbsp;&nbsp;关闭
			    </div>
		  </div> 
		    <div class="form-group">
			    <label for="userlimits" class="col-sm-2 control-label">职位</label>
			    <div class="col-sm-10">
				     <select id="rolelimits" name="rolelimits" class="form-control" >
						<?php if(is_array($roles)): foreach($roles as $key=>$v): ?><option value='<?php echo ($v['id']); ?>'><?php echo ($v["name"]); ?>(<?php echo ($v["remark"]); ?>)</option><?php endforeach; endif; ?>
					</select>
			    </div>
		  	</div>
			  <div class="form-group">
				    <label for="userlimits" class="col-sm-2 control-label">职位</label>
				    <div class="col-sm-10">
					     <select id="shoplimits" name="shoplimits" class="form-control">
							
							<?php if(is_array($shops)): foreach($shops as $key=>$v): ?><option value='<?php echo ($v['sid']); ?>'><?php echo ($v["sname"]); ?></option><?php endforeach; endif; ?>
							
						</select>
				    </div>
			  </div>
		   <div class="form-group">
		     <input type="hidden" name="uid" id="userid">
		  </div>
		  <div class="modal-footer">
	       <input type="submit" class="btn btn-primary" value="保 存" >
	      </div>
		  </form>
		 </div>
	    </div>
	  </div>
	</div>
	<script>
		function deleteuser(uid){
			if(confirm("确认删除")){
			$.ajax({
				type:"POST",
				url:"__URL__/delete/uid/"+uid,
				success:function(data,textStatus,jqXHR){
				alert("删除成功");
					window.location.reload();

				},
				error:function(jqXHR,textStatus,errorThrown){
					alert("删除失败");
				}
			})
				
			}
			else{
			
				return;
			}	
		}
		
		$(function(){
			$('#searchbtn').click(function(){
				if($('#searchcontent').val() == ''){
					alert('请输入查询内容');
					return false;
				}else{
					$('#searchform').submit();
				}
										
			});
			
		});
		
		$(function(){
			$('#adduserModal').on('shown.bs.modal',function(e){
			$('#adduserModal #usernum').focus();
		});
			$('#adduserbtn').click(function(){
								
				if($('#adduserModal #username').val() == '' || $('#adduserModal #usernum').val() == ''||$('#adduserModal #rolelimits').val() == '==请选择角色=='||$('#adduserModal #shoplimits').val() == '==请选择单位=='){
					alert('姓名或工号或角色或单位为空！');
					return false;
				}
										
			});
			
		});
		$(function(){
			$('#edituserModal').on('shown.bs.modal',function(e){
			$('#edituserModal #username').focus();
		});
			$('#edituserbtn').click(function(){
				if($('#edituserModal #username').val() == '' || $('#edituserModal #usernum').val() == ''||$('#edituserModal #password').val() == ''){
					alert('姓名或学号为空！');
					return false;
				}else{
					if($('#edituserModal #usersex').val() != '男' && $('#edituserModal #usersex').val() != '女'){
						alert('性别只能为男或女');
						return false;
					}else{
						//$('#form2').submit();
						var user_id=$("#edituserModal #userid").val();
						var user_name=$("#edituserModal #username").val();
						var user_num=$("#edituserModal #usernum").val();
						var user_sex=$("#edituserModal #usersex").val();
						var user_birth=$("#edituserModal #userbirth").val();
						var user_endtime=$("#edituserModal #userendtime").val();
						var user_grade=$("#edituserModal #usergrade").val();
						var user_major=$("#edituserModal #usermajor").val();
						var user_tel=$("#edituserModal #usertel").val();
						var user_mail=$("#edituserModal #usermail").val();
						var user_nation=$("#edituserModal #usernation").val();
						var user_limits=$("#edituserModal #userlimits").val();
						var user_url=$("#edituserModal #url").val();
						$.ajax({
							type:"POST",
							url:"__URL__/update",
							data:{userid:user_id,username:user_name,usernum:user_num,usersex:user_sex,userbirth:user_birth,userendtime:user_endtime,usergrade:user_grade,usermajor:user_major,usertel:user_tel,usermail:user_mail,usernation:user_nation,userlimits:user_limits,url:user_url},
							success:function(data,textStatus,jqXHR){
								alert("修改成功");
								window.location.reload();

							},
							error:function(jqXHR,textStatus,errorThrown){
								alert("修改失败");
								window.location.reload();
							}
						});
					}
				}
										
			});
			
		});
	
		$(function(){
			
			$('#userEdit').click(function(){
				var row = $('#dg').datagrid('getSelected');
				
				if(row == null){
					alert('请选择一条数据');
				}
				$('#edituserModal #userid').val(row.uid);
				$('#edituserModal #username').val(row.uname);
				$('#edituserModal #usernum').val(row.unum);
				$('#edituserModal #usersex').val(row.umale);
				if(row.umale=="男")$("#edituserModal input[name='umale'][value=1]").attr("checked",true);
					else $("#edituserModal input[name='umale'][value=0]").attr("checked",true);
				if(row.ustatus=="开启")$("#edituserModal input[name='ustatus'][value=1]").attr("checked",true);
				else $("#edituserModal input[name='ustatus'][value=0]").attr("checked",true);
				$('#edituserModal #userbirth').val(row.ubirth);
				$('#edituserModal #userstarttime').val(row.udate);
				$('#edituserModal #usertel').val(row.uphone);
				$('#edituserModal #rolelimits').val(row.role);
				$('#edituserModal #shoplimits').val(row.shop);
				$('#edituserModal').modal();
			});
			
			
			$('#dg').datagrid({
		       fitColumns:true,
				rownumbers:true,
				singleSelect:true,
				autoRowHeight:false,
				
			  columns:[[
				{field:'uid',hidden:true},
				{field:'unum',title:"工号",width:80},
		        {field:'uname',title:'姓名',width:100},
		        {field:'umale',title:"性别",width:40},
		        {field:'ustatus',title:"状态",width:40},
		        {field:'uphone',title:"联系电话",width:100},
		        {field:'ubirth',title:"出生日期",width:100},
		         {field:'udate',title:'入职日期',width:100}, 
		        {field:'ulogintime',title:'最近登陆时间',width:100},
		       {field:'uloginip',title:"最近登陆IP",width:120},
		        {field:'roleremark',title:"职位",width:100},
		       {field:'shopsname',title:'所属单位',width:80},
		       {field:'role',title:'rid',width:20,hidden:true},
		        {field:'shop',title:'sid',width:20,hidden:true},
		        {field:'ss',title:'操作',width:60},
		       
		        
		   	  ]]
			});
		});
	</script>
</body>
</html>