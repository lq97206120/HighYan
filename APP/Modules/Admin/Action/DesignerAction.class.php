<?php
class DesignerAction extends CommonAction{
//店铺订单查询
	public function order(){
		
		import("ORG.Util.Page");
		$count=M('order')->where(array('ossname'=>$_GET['ossname']))->count();
		$page=new Page($count,10);
		$limit = $page->firstRow . ',' . $page->listRows;
		$field=array('onum','reservenum','oscalenum','omname','ommale','omphone','bookdate','bookpulldate','bookgetdate','total','osunum','ispull','inspectorverify','shopleaderverify','opsname','pullok','pullstatus','goodsok','pullokdate','goodsokdate');
		$order=M('order')->where(array('ossname'=>$_GET['ossname']))->limit($limit)->field($field)->order('bookdate desc')->select();
		$order=subtime($order);
		$this->order=$order;
		
		$shop=D('ShopRelation')->relation('goods')->where(array('sid'=>$_GET['sid']))->find();
		$possess=$shop['goods'];
		
		$cloth=shopposess($possess,1);
		$pants=shopposess($possess,2);
		$vest=shopposess($possess,3);
//		p($cloth);
//		p($pants);
//		p($vest);
		$this->sid=$_GET['sid'];
		$this->osunum=$_GET['unum'];
		$this->ossname=$_GET['ossname'];
		$this->cloth=$cloth;
		$this->pants=$pants;
		$this->vest=$vest;
		$this->page = $page->show ();
		$this->display();
	}
	
	//读取订单修改信息
	public function readorder(){
		
		$order=D('OrderRelation')->relation(true)->where(array('onum'=>$_GET['onum']))->find();
		$this->order=$order;
				
		$shop=D('ShopRelation')->relation('goods')->where(array('sid'=>$_GET['sid']))->find();
		$possess=$shop['goods'];
		
		$cloth=shopposess($possess,1);
		$pants=shopposess($possess,2);
		$vest=shopposess($possess,3);
//		p($cloth);
//		p($pants);
//		p($vest);
		$this->sid=$_GET['sid'];
		$this->ossname=$_GET['ossname'];
		$this->cloth=$cloth;
		$this->pants=$pants;
		$this->vest=$vest;
		$this->display();
	}
//更新订单信息
	public function orderupdate() {
					
		//处理复选框
			if($_POST['belly']=="on"){
				$belly=1;
			}
			else{
				$belly=0;
			}
			if($_POST['sleg']=="on"){
				$sleg=1;
			}
			else{
				$sleg=0;
			}
			if($_POST['upleg']=="on"){
				$upleg=1;
			}
			else{
				$upleg=0;
			}
			if($_POST['flathip']=="on"){
				$flathip=1;
			}
			else{
				$flathip=0;
			}
			if($_POST['oleg']=="on"){
				$oleg=1;
			}
			else{
				$oleg=0;
			}
			if($_POST['xleg']=="on"){
				$xleg=1;
			}
			else{
				$xleg=0;
			}
		$field=array('gnum','gname','gid');
		//处理选择框
		$ougid=I('cloth',0,'intval');
		$odgid=I('pants',0,'intval');
		$obgid=I('vest',0,'intval');
		$otgid=I('tcloth',0,'intval');
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
		$tcloth=M('goods')->where(array('gid'=>$otgid))->field($field)->find();
			if(empty($tcloth))
					{
						$tcloth['gnum']='';$tcloth['gname']='';
					}
						
		$receive=array(
				'onum'=>$_POST['onum'],
						
				'oscalenum'=>$_POST['oscalenum'],
				'scale'=>$_POST['scale'],
				'ougid'=>$ougid,
				'ougnum'=>$cloth['gnum'],
				'ougname'=>$cloth['gname'],
				'uremark'=>$_POST['uremark'],			
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
				'dremark'=>$_POST['dremark'],
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
				'belly'=>$belly,
				'sleg'=>$sleg,
				'upleg'=>$upleg,
				'flathip'=>$flathip,
				'oleg'=>$oleg,
				'xleg'=>$xleg,
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
		
				'otgid'=>$otgid,
				'otgnum'=>$tcloth['gnum'],
				'otgname'=>$tcloth['gname'],
				'tremark'=>$_POST['tremark'],			
				'tshoulderwidth1'=>$_POST['tshoulderwidth1'],
				'tshoulderwidth2'=>$_POST['tshoulderwidth2'],
				'tsleevewidth1'=>$_POST['tsleevewidth1'],
				'tsleevewidth2'=>$_POST['tsleevewidth2'],
				'tclothlength1'=>$_POST['tclothlength1'],
				'tclothlength2'=>$_POST['tclothlength2'],
				'tbreathsur1'=>$_POST['tbreathsur1'],
				'tbreathsur2'=>$_POST['tbreathsur2'],
				'twaistsur1'=>$_POST['twaistsur1'],
				'twaistsur2'=>$_POST['twaistsur2'],
				'thipsur1'=>$_POST['thipsur1'],
				'thipsur2'=>$_POST['thipsur2'],
				'tbreathwidth1'=>$_POST['tbreathwidth1'],
				'tbreathwidth2'=>$_POST['tbreathwidth2'],
				'tbackwidth1'=>$_POST['tbackwidth1'],
				'tbackwidth2'=>$_POST['tbackwidth2'],
				'tnecksur'=>$_POST['tnecksur'],
				'tneckstyle'=>$_POST['tneckstyle'],
				'tbosom'=>$_POST['tbosom'],
				'tsleevesur'=>$_POST['tsleevesur'],
				'tcode'=>$_POST['tcode'],
				'tclothfabric'=>$_POST['tclothfabric'],
				'ispull'=>$_POST['ispull'],
		
			);
			$db=M('order');
			$result=$db->save($receive);
			if($result){
				
				$this->success("保存成功",U('Admin/Designer/order',array('unum'=>$_POST['osunum'],'sid'=>$_POST['sid'],'ossname'=>$_POST['ossname'],)));
			}else 
				$this->error("保存失败",U('Admin/Designer/order',array('unum'=>$_POST['osunum'],'sid'=>$_POST['sid'],'ossname'=>$_POST['ossname'],)));
	
	}
	//处理读取返修单
	public function readrepair(){
		$repair=M('repair')->where(array('rid'=>$_GET['rid']))->find();
		$this->sid=$_GET['sid'];
		$this->ossname=$_GET['ossname'];
		$this->repair=$repair;
		$this->onum=$_GET['onum'];
		$this->display();
	}
	
		//订单查询
	public function ordersearch(){
		
		$searchcondition = I ( 'searchcondition','');
		$searchcontent = I('searchcontent','');
		$ossname=I('ossname','');
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
			//查询条件
			$condition['ossname']=$ossname;
			$count=M('order')->where($condition)->count ();
			$page=new Page($count,10);
			$limit=$page->firstRow . ',' . $page->listRows;
			$field=array('onum','reservenum','oscalenum','omname','ommale','omphone','bookdate','bookpulldate','bookgetdate','total','osunum','ispull','inspectorverify','shopleaderverify','opsname','pullok','pullstatus','goodsok','pullokdate','goodsokdate');
			$order=M('order')->where($condition)->limit($limit)->field($field)->order('bookdate desc')->select();
			$order=subtime($order);
			$this->order=$order;
			//分配商品
				
			$shop=D('ShopRelation')->relation('goods')->where(array('sid'=>$_POST['sid']))->find();
			$possess=$shop['goods'];
			
			$cloth=shopposess($possess,1);
			$pants=shopposess($possess,2);
			$vest=shopposess($possess,3);
		
			$this->sid=$_POST['sid'];
			$this->ossname=$_POST['ossname'];
			$this->cloth=$cloth;
			$this->pants=$pants;
			$this->vest=$vest;
			$this->page = $page->show ();
			$this->order = $order;
			$this->display('order');
		
		}
	}
}