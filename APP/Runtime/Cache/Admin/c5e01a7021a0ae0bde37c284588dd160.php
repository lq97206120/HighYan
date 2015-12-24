<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>部门商品配置</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/rbacpublic.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/rbac.css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
<script>
	$(function(){
		$('input[level=1]').click(function(){
			var inputs=$(this).parents('.app').find('input');
			$(this).attr('checked')?inputs.attr('checked','checked'):inputs.removeAttr('checked');
		});
		$('input[level=2]').click(function(){
			var inputs=$(this).parents('dl').find('input');
			$(this).attr('checked')?inputs.attr('checked','checked'):inputs.removeAttr('checked');
		});
	});
</script>
</head>
<body>
<form action='<?php echo U('Admin/Shop/goodslistHandle');?>' method='post'>
		<div id='wrap'>
			<a  class='add-app' href="<?php echo U('Admin/Shop/index');?>">返回</a>
				<div class='app'>
					<p>
						<strong>单位名称：<span><?php echo ($shop["sname"]); ?></span></strong>
						<input type='checkbox'  level='1'/>
					</p>
					<?php if(is_array($goods)): foreach($goods as $key=>$g): ?><dl>
		  						<dt>
									<strong>商品种类：<span><?php echo ($g["classname"]); ?></span></strong>
									<input type='checkbox'  level='2'/>
								</dt>
		  				    <?php if(is_array($g['contents'])): foreach($g['contents'] as $key=>$v): ?><dd>
		  							<span><?php echo ($v["gname"]); ?></span>
									<input type='checkbox' name='goods[]' value="<?php echo ($v['gid']); ?>" <?php if($v["possess"]): ?>checked='checked'<?php endif; ?>/>
		  						</dd><?php endforeach; endif; ?>
	  					</dl><?php endforeach; endif; ?>
				 
				</div>
		
			
		</div>
		<input type='hidden' name='sid' value="<?php echo ($shop['sid']); ?>"/>
		<input type='submit' align='center' value='保存' style='display:block;margin:20px auto;cursor:pointer;width:70px;height:35px;color:#000;'/>
	</form>
</body>
</html>