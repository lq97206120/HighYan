<?php
class EmployeeAction extends CommonAction{
	
	public function book(){
		
		import("ORG.Util.Page");
		$count=M('book')->where(array('bsid'=>$_GET['sid']))->count();
		$page=new Page($count,10);
		$limit = $page->firstRow . ',' . $page->listRows;
		$book=M('book')->where(array('bsid'=>$_GET['sid']))->limit($limit)->order('bstatus asc')->select();
		$this->book=$book;
		//店铺id
		$this->bsid=$_GET['sid'];
		$this->uid=$_GET['uid'];
		$this->page = $page->show ();
		$this->display();
	}
	//处理状态
	public function changebstatus($bnum,$uid) {
			$user=M('user')->where(array('uid'=>$uid))->find();
			$buid=$user['uid'];
			$bunum=$user['unum'];
			$buname=$user['uname'];
			if (! empty ($bnum )) {
				$receive=array('bnum'=>$bnum,'bstatus'=>1,'buid'=>$buid,'bunum'=>$bunum,'buname'=>$buname);
				$result =M('book')->save($receive);
				if (false !== $result) {
					
				} else {
					$this->error ( '删除出错！' );
				}
			} else {
				$this->error ( '帐号错误！' );
			}
		
	}
	//预约单查询
	public function booksearch(){
	
	$searchcondition = I ( 'searchcondition','');
	$searchcontent = I('searchcontent','');
			if(!empty($searchcondition) && !empty($searchcontent)){
			import ( 'ORG.Util.Page' );
			//处理性别
			if($searchcondition=="bmale"){
				if($searchcontent=="男")$searchcontent=1;
				else $searchcontent=0;
			}
			//处理状态
			if($searchcondition=="bstatus"){
				if($searchcontent=="已处理")$searchcontent=1;
				else $searchcontent=0;
			}
			$condition[$searchcondition] = array('like','%'.$searchcontent.'%');
			$condition['bsid']=$_POST['bsid'];
			$count=M('book')->where($condition)->count ();
			$page=new Page($count,10);
			$limit=$page->firstRow . ',' . $page->listRows;
			$book=M('book')->where($condition)->limit ( $limit )->order('bstatus asc')->select ();
			$this->page = $page->show ();
			$this->book=$book;
			$this->bsid=$_POST['bsid'];
			$this->uid=$_POST['uid'];
			$this->display();
		
		}
	}
}