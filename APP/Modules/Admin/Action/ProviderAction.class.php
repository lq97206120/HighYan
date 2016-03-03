<?php
class ProviderAction extends CommonAction{
	//订单查询
	public function index(){
		
		import("ORG.Util.Page");
		$count=M('order')->where(array('inspectorverify'=>'1','shopleaderverify'=>'1','opsname'=>$_GET['opsname']))->count();
		$page=new Page($count,10);
		$limit = $page->firstRow . ',' . $page->listRows;
		$field=array('onum','oscalenum','ossname','bookdate','ispull','pullstatus','pullok','goodsok','pullokdate','goodsokdate');
		$order=M('order')->limit($limit)->where(array('inspectorverify'=>'1','shopleaderverify'=>'1','opsname'=>$_GET['opsname']))->field($field)->order('bookdate desc')->select();
		
		$this->opsname=$_GET['opsname'];
		$this->order=$order;
		$this->page = $page->show ();
		$this->display();
	}
	//读取订单信息
	public function readorder(){
		
		$order=D('OrderRelation')->relation(true)->where(array('onum'=>$_GET['onum']))->find();
		
		$this->opsname=$_GET['opsname'];
		$this->order=$order;
		//p($order);
		$this->display();
	}
	//查询订单
	public function ordersearch(){
		
		$searchcondition = I ( 'searchcondition','');
		$searchcontent = I('searchcontent','');
		
		if(!empty($searchcondition) && !empty($searchcontent)){
			import ( 'ORG.Util.Page' );
			
			//处理是否打样
			if($searchcondition=="ispull"){
				if($searchcontent=="要打样")$searchcontent=1;
				else $searchcontent=0;
			}
			
			$condition[$searchcondition] = array('like','%'.$searchcontent.'%');
			//员工查询编号条件
			$condition['opsname']=$_POST['opsname'];
			$condition['inspectorverify']=1;
			$condition['shopleaderverify']=1;
			$count=M('order')->where($condition)->count ();
			$page=new Page($count,10);
			$field=array('onum','oscalenum','ossname','bookdate','ispull','pullstatus','pullok','goodsok','pullokdate','goodsokdate');
			$order=M('order')->limit($limit)->where($condition)->field($field)->order('bookdate desc')->select();
		
			$this->opsname=$_POST['opsname'];
		
			$this->page = $page->show ();
			$this->order = $order;
			$this->display('index');
		
		}
	}
	//处理打样状态
	public function changepull($onum){
		if (! empty ($onum )) {
				$receive=array('onum'=>$onum,'providerpull'=>1,);
				$result =M('order')->save($receive);
				if (false !== $result) {
					
				} else {
					$this->error ( '删除出错！' );
				}
			} else {
				$this->error ( '帐号错误！' );
			}
		}
	//处理成品状态
	public function changeproviderok($onum){
		if (! empty ($onum )) {
				$receive=array('onum'=>$onum,'providerok'=>1,);
				$result =M('order')->save($receive);
				if (false !== $result) {
					
				} else {
					$this->error ( '删除出错！' );
				}
			} else {
				$this->error ( '帐号错误！' );
			}
		}
		
//添加货物流程
	public function addExpress(){
			
		if(($_POST['pullok']=='0')||($_POST['eclass']=='1')){
					
						$receive=array(
							'pexpress'=>$_POST['pexpress'],
							'pexpressnum'=>$_POST['pexpressnum'],
							'edate'=>time(),
							'eclass'=>$_POST['eclass'],
						);
						$reco=array('onum'=>$_POST['onum'],'pullstatus'=>'1','expresslock'=>'0',);
						$order=M('order')->save($reco);
						$express=M('express')->add($receive);
						//写入订单流程关系表
						$merge=array('express_id'=>$express,'order_num'=>$_POST['onum']);
						M('express_order')->add($merge);
					if($express){
						
						$order=M('order')->where(array('onum'=>$_POST['onum']))->field(array('ossmail'))->find();
						$mail=$order['ossmail'];
				
						$r=think_send_mail("{$mail}",'海彦',"新物流","有新快递;快递公司:{$_POST['pexpress']},物流号：{$_POST['pexpressnum']},合订号为:{$_POST['onum']}.");
						
						$this->success("修改成功");
					}else 
						$this->error("修改失败");
				}
				else
					$this->error("打样已经完成");
			
			
	}
//处理修改
	public function readExpressHandle(){
		$receive=array(
			'eid'=>$_POST['eid'],
			'pexpress'=>$_POST['pexpress'],
			'pexpressnum'=>$_POST['pexpressnum'],
			'pgetstatus'=>$_POST['pgetstatus'],
		);
		if($_POST['pullok']=='1'){
			$pullstatus=0;
		}
		else{
			$pullstatus=4;
		}
		
		if($_POST['pgetstatus']=='1'){
			$reco=array('onum'=>$_POST['onum'],'pullstatus'=>$pullstatus,'expresslock'=>'1',);
			$order=M('order')->save($reco);
		}
		$express=M('express')->save($receive);
		if($express){
				$this->success("修改成功");
			}else 
				$this->error("未修改");
	}
	//处理返修单
	public function readrepair(){
		$repair=M('repair')->where(array('rid'=>$_GET['rid']))->find();
		$this->repair=$repair;
		$this->onum=$_GET['onum'];
		$this->display();
	}		
}