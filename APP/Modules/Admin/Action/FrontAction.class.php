<?php
class FrontAction extends CommonAction{
	//菜单管理
	public function menu(){
		$menu=M('menu')->order('mid')->select();
		$this->menu=$menu;
		$this->display();
	}
	//处理编辑
	public function  editmenu(){
		$singlemenu=M('menu')->where(array('mid'=>$_GET['mid']))->find();
		$this->singlemenu=$singlemenu;
		$this->display();
	}
	//处理编辑
	public function editmenuhandle(){
		$receive=array(
			'mid'=>$_POST['mid'],
			'mname'=>$_POST['mname'],
			'mcontent'=>$_POST['mcontent'],
		);
	//	p($receive['mid']);
		$result=M('menu')->save($receive);
		if($result){
			$this->success('保存成功',U('Admin/Front/menu'));
		}
		else
		$this->error('保存失败',U('Admin/Front/menu'));
	}
	//优秀案例
	public function example(){
		$example=M('example')->order('eid')->select();
		$this->example=$example;
		$this->display();
	}
	//添加案例
	public function addexample(){
		$this->display();
	}
	public function addexamplehandle(){
		//p($_POST);die;
		if(empty($_POST['ehead'])){
			$receive=array(
			'ename'=>$_POST['ename'],
			//'ehead'=>$_POST['ehead'],
			'emarryclass'=>$_POST['emarryclass'],
			'ephoto1'=>$_POST['ephoto1'],
			'ephoto2'=>$_POST['ephoto2'],
			'ephoto3'=>$_POST['ephoto3'],
			'ephoto4'=>$_POST['ephoto4'],
		);
		}
		else{
			$receive=array(
			'ename'=>$_POST['ename'],
			'ehead'=>$_POST['ehead'],
			'emarryclass'=>$_POST['emarryclass'],
			'ephoto1'=>$_POST['ephoto1'],
			'ephoto2'=>$_POST['ephoto2'],
			'ephoto3'=>$_POST['ephoto3'],
			'ephoto4'=>$_POST['ephoto4'],
		);
		}
		$eid=M('example')->add($receive);
		if($eid)$this->success("添加成功！",U("Admin/Front/example"));
		else $this->error("添加失败！",U("Admin/Front/example"));
	}
	
	public function editexample(){
		$singlexample=M('example')->where(array('eid'=>$_GET['eid']))->find();
		$this->singlexample=$singlexample;
		$this->display();
	}
	public function editexamplehandle(){
		//p($_POST);die;
		$receive=array(
			'eid'=>$_POST['eid'],
			'ename'=>$_POST['ename'],
			'ehead'=>$_POST['ehead'],
			'emarryclass'=>$_POST['emarryclass'],
			'ephoto1'=>$_POST['ephoto1'],
			'ephoto2'=>$_POST['ephoto2'],
			'ephoto3'=>$_POST['ephoto3'],
			'ephoto4'=>$_POST['ephoto4'],
		);
		$result=M('example')->save($receive);
		if($result)$this->success("修改成功！",U("Admin/Front/example"));
		else $this->error("修改失败！",U("Admin/Front/example"));
	}
	public function deleteexample($eid){
		if (! empty ( $eid )) {
					$example = M ( "example" );
					$result = $example->delete ( $eid );
					if (false !== $result) {
						
					} else {
						$this->error ( '删除出错！' );
					}
				} else {
					$this->error ( 'ID错误！' );
				}
	}
}