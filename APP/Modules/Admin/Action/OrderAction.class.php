<?php
class OrderAction extends CommonAction{
	//查询订单
	public function index(){
	
		import("ORG.Util.Page");
		$count=M('order')->order('shopok')->count();
		$page=new Page($count,10);
		$limit = $page->firstRow . ',' . $page->listRows;
		$order=M('order')->limit($limit)->where(array('leaderverifystatus'=>'1'))->order('assignstatus,shopok')->select();
		$this->order=$order;
		$provider=M('shop')->where(array('sclass'=>'3'))->select();
	
		$this->provider=$provider;
		$this->unum=$_GET['unum'];
		$this->page = $page->show ();
		$this->display();
	}
	//读取订单
	public function readorder(){
		
		$order=M('order')->where(array('onum'=>$_GET['onum']))->find();
		$this->order=$order;
		$ossname=$order['ossname'];
		
		$shop=D('ShopRelation')->relation('goods')->where(array('sname'=>$ossname))->find();
		$possess=$shop['goods'];
		
		$cloth=shopposess($possess,1);
		$pants=shopposess($possess,2);
		$vest=shopposess($possess,3);
//		p($cloth);
//		p($pants);
//		p($vest);
		$this->cloth=$cloth;
		$this->pants=$pants;
		$this->vest=$vest;
		$this->onum=$_GET['onum'];
		$this->unum=$_GET['unum'];
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
			
			//处理店长意见
			if($searchcondition=="ispullleader"){
				if($searchcontent=="要打样")$searchcontent=1;
				else $searchcontent=0;
			}
			//处理指派状态
			if($searchcondition=="assignstatus"){
				if($searchcontent=="已分配")$searchcontent=1;
				else $searchcontent=0;
			}
			
			//处理打样状态
			if($searchcondition=="pullok"){
				if($searchcontent=="已打样")$searchcontent=1;
				else $searchcontent=0;
			}
			
			//处理完成状态
			if($searchcondition=="shopok"){
				if($searchcontent=="已完成")$searchcontent=1;
				else $searchcontent=0;
			}
			//处理商品编号
			if($searchcondition=="ognum"){
				$db=M('goods');
				$gclass=$db->where(array('gnum'=>$searchcontent))->field(array('gclass'))->find();
				$gclass=$gclass['gclass'];
				switch($gclass){
					case '1': $searchcondition="ougnum";break;
					case '2': $searchcondition="odgnum";break;
					case '3': $searchcondition="obgnum";break;
						
				}
			}
			//处理商品名称
			if($searchcondition=="ogname"){
				$db=M('goods');
				$gclass=$db->where(array('gname'=>$searchcontent))->field(array('gclass'))->find();
				$gclass=$gclass['gclass'];
				switch($gclass){
					case '1': $searchcondition="ougname";break;
					case '2': $searchcondition="odgname";break;
					case '3': $searchcondition="obgname";break;
						
				}
			}
			$condition[$searchcondition] = array('like','%'.$searchcontent.'%');
			$condition['leaderverifystatus']=1;			
			$count=M('order')->where($condition)->count ();
			$page=new Page($count,10);
			$limit=$page->firstRow . ',' . $page->listRows;
			$order=M('order')->where($condition)->limit ( $limit )->order('shopok,assignstatus,ispullleader')->select ();
			
			$provider=M('shop')->where(array('sclass'=>'3'))->select();
			$this->provider=$provider;
			$this->unum=$_POST['ocunum'];
			$this->page = $page->show ();
			$this->order = $order;
			$this->display('index');
		
		}
	}
	// 删除订单
	public function deleteorder($onum) {
		
			if (! empty ($onum )) {
				$order = M ( "order" );
				$result = $order->delete ($onum);
				if (false !== $result) {
					
				} else {
					$this->error ( '删除出错！' );
				}
			} else {
				$this->error ( '帐号错误！' );
			}
		
	}
}