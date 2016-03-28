<?php
class OrderAction extends CommonAction{
	//查询订单
	public function index(){
	
		import("ORG.Util.Page");
		$count=M('order')->count();
		$page=new Page($count,12);
		$limit = $page->firstRow . ',' . $page->listRows;
		$field=array('onum','reservenum','oscalenum','ossname','omname','ommale','omphone','bookdate','bookpulldate','bookgetdate','total','osunum','ispull','inspectorverify','shopleaderverify','opsname','pullok','pullstatus','goodsok','pullokdate','goodsokdate','repairlock');
		$order=M('order')->limit($limit)->field($field)->order('bookdate desc,inspectorverify,shopleaderverify')->select();
		$order=subtime($order);
		$this->order=$order;
		
		$this->page = $page->show ();
		$this->display();
	}
	//读取订单
	public function readorder(){
		
		$order=D('OrderRelation')->relation(true)->where(array('onum'=>$_GET['onum']))->find();
		$this->order=$order;
		
		$this->display();
	}
	//处理订单参数的修改
	public function allorderupdate(){
		
	$field=array('gnum','gname','gid');
		//处理选择框
		$ougid=I('cloth',0,'intval');
		$odgid=I('pants',0,'intval');
		$obgid=I('vest',0,'intval');
		//处理数据库字段为空的问题
		$cloth=M('goods')->where(array('gid'=>$ougid))->field($field)->find();
			if(empty($cloth))
				{
					$cloth['gnum']='';$cloth['gname']='';
				}	
		$pants=M('goods')->where(array('gid'=>$odgid))->field($field)->find();	
			if(empty($pants))
					{
						$pants['gnum']='';$pants['gname']='';
					}	
		$vest=M('goods')->where(array('gid'=>$obgid))->field($field)->find();
			if(empty($vest))
					{
						$vest['gnum']='';$vest['gname']='';
					}	
				
		$receive=array(
				'onum'=>$_POST['onum'],
				'omnum'=>$_POST['omnum'],
				'omname'=>$_POST['omname'],
				'omphone'=>$_POST['omphone'],
				'ougid'=>$ougid,
				'ougnum'=>$cloth['gnum'],
				'ougname'=>$cloth['gname'],
				'ushoulderwidth1'=>$_POST['ushoulderwidth1'],
				'ushoulderwidth2'=>$_POST['ushoulderwidth2'],
				'usleevewidth1'=>$_POST['usleevewidth1'],
				'usleevewidth2'=>$_POST['usleevewidth2'],
				'uclothlength1'=>$_POST['uclothlength1'],
				'uclothlength2'=>$_POST['uclothlength2'],
				'ubreathsur1'=>$_POST['ubreathsur1'],
				'ubreathsur2'=>$_POST['ubreathsur2'],
				'uwaistsur1'=>$_POST['uwaistsur1'],
				'uwaistsur2'=>$_POST['uwaistsur2'],
				'uhipsur1'=>$_POST['uhipsur1'],
				'uhipsur2'=>$_POST['uhipsur2'],
				'ubreathwidth1'=>$_POST['ubreathwidth1'],
				'ubreathwidth2'=>$_POST['ubreathwidth2'],
				'ubackwidth1'=>$_POST['ubackwidth1'],
				'ubackwidth2'=>$_POST['ubackwidth2'],
				'unecksur'=>$_POST['unecksur'],
				'uneckstyle'=>$_POST['uneckstyle'],
				'ubosom'=>$_POST['ubosom'],
				'usleevesur'=>$_POST['usleevesur'],
				'ucode'=>$_POST['ucode'],
				'uclothfabric'=>$_POST['uclothfabric'],
		
				'odgid'=>$odgid,
				'odgnum'=>$pants['gnum'],
				'odgname'=>$pants['gname'],
				'dwaistsur1'=>$_POST['dwaistsur1'],
				'dwaistsur2'=>$_POST['dwaistsur2'],
				'dhipsur1'=>$_POST['dhipsur1'],
				'dhipsur2'=>$_POST['dhipsur2'],
				'dpantslength1'=>$_POST['dpantslength1'],
				'dpantslength2'=>$_POST['dpantslength2'],
				'dupcrotch1'=>$_POST['dupcrotch1'],
				'dupcrotch2'=>$_POST['dupcrotch2'],
				'dallcrotch1'=>$_POST['dallcrotch1'],
				'dallcrotch2'=>$_POST['dallcrotch2'],
				'dwaistdown1'=>$_POST['dwaistdown1'],
				'dwaistdown2'=>$_POST['dwaistdown2'],
				'dlegsur1'=>$_POST['dlegsur1'],
				'dlegsur2'=>$_POST['dlegsur2'],
				'dkneesur1'=>$_POST['dkneesur1'],
				'dkneesur2'=>$_POST['dkneesur2'],
				'dpantssur'=>$_POST['dpantssur'],
				'belly'=>I('belly','','intval'),
				'sleg'=>I('sleg','','intval'),
				'upleg'=>I('upleg','','intval'),
				'flathip'=>I('flathip','','intval'),
				'oleg'=>I('oleg','','intval'),
				'xleg'=>I('xleg','','intval'),
				'dcode'=>$_POST['dcode'],
				'dpantsfabric'=>$_POST['dpantsfabric'],
		
				'obgid'=>$obgid,
				'obgnum'=>$vest['gnum'],
				'obgname'=>$vest['gname'],
				'bfrontlength'=>$_POST['bfrontlength'],
				'bbacklength'=>$_POST['bbacklength'],
				'bup'=>$_POST['bup'],
				'bcenter'=>$_POST['bcenter'],
				'bcode'=>$_POST['bcode'],
				'bbackfabric'=>$_POST['bbackfabric'],
				'ispullleader'=>$_POST['ispullleader'],
				'pullok'=>$pullok,
				
						
			);
			
			$db=M('order');
			$result=$db->save($receive);
			if($result){
				
				$this->success("保存成功",U('Admin/Order/index',array('unum'=>$_POST['unum'])));
			}else 
				$this->error("保存失败",U('Admin/Order/index',array('unum'=>$_POST['unum'])));
	
	}
	//修改分配
	public function orderupdate(){
		
		$receive=array(
				'onum'=>$_POST['onum'],
				'opsname'=>$_POST['opsname'],
				'ocunum'=>$_POST['unum'],
				'assignstatus'=>1,
								
				);
				$result=M('order')->save($receive);
				
				if($result){
					
					$opsname=M('shop')->where(array('sname'=>$receive['opsname']))->find();
					$mail=$opsname['smail'];
					$r=think_send_mail("{$mail}",'海彦',"新订单","有新订单,订单号为:{$receive['onum']}.");
					
					$this->success("修改成功",U('Admin/Order/index',array('unum'=>$_POST['unum'])));
				}else
					$this->error("未改动",U('Admin/Order/index',array('unum'=>$_POST['unum'])));
		}
	
	//订单查询
	public function ordersearch(){
			
			$searchcondition = I ( 'searchcondition','');
			$searchcontent = I('searchcontent','');
			
			if(!empty($searchcondition) && !empty($searchcontent)){
				import ( 'ORG.Util.Page' );
				//处理总监审核
				if($searchcondition=="inspectorverify"){
					if($searchcontent=="已通过")$searchcontent=1;
					else $searchcontent=0;
				}
				//处理店长审核
				if($searchcondition=="shopleaderverify"){
					if($searchcontent=="已通过")$searchcontent=1;
					else $searchcontent=0;
				}
				//处理是否打样
				if($searchcondition=="ispull"){
					if($searchcontent=="要打样")$searchcontent=1;
					else $searchcontent=0;
				}
				
			$condition[$searchcondition] = array('like','%'.$searchcontent.'%');
			
			$count=M('order')->where($condition)->count ();
			$page=new Page($count,12);
			$limit = $page->firstRow . ',' . $page->listRows;
			$field=array('onum','reservenum','oscalenum','ossname','omname','ommale','omphone','bookdate','bookpulldate','bookgetdate','total','osunum','ispull','inspectorverify','shopleaderverify','opsname','pullok','pullstatus','goodsok','pullokdate','goodsokdate','repairlock');
			$order=M('order')->where($condition)->limit($limit)->field($field)->order('bookdate desc,inspectorverify,shopleaderverify')->select();
			
			$order=subtime($order);
			$this->order=$order;
			$this->display('index');
		
		}
	}
	// 删除订单
	public function deleteorder($onum) {
		
			if (! empty ($onum )) {
				$order = M ( "order" );
				$result = $order->delete ($onum);
				//删除关联项
				$express=M('express_order')->where(array('order_num'=>$onum))->select();
				foreach($express as $v){
					M('express')->where(array('eid'=>$v['express_id']))->delete();
				}
				M('express_order')->where(array('order_num'=>$onum))->delete();
				
				$repair=M('repair_order')->where(array('order_num'=>$onum))->select();
				foreach($repair as $u){
					M('repair')->where(array('rid'=>$u['repair_id']))->delete();
				}
				M('repair_order')->where(array('order_num'=>$onum))->delete();
				
				if (false !== $result) {
					
				} else {
					$this->error ( '删除出错！' );
				}
			} else {
				$this->error ( '帐号错误！' );
			}
		
	}
	//读取返修单
	public function readrepair(){
			
		$repair=M('repair')->where(array('rid'=>$_GET['rid']))->find();
		$this->repair=$repair;
		$this->onum=$_GET['onum'];
		
		$this->display();
	}
}