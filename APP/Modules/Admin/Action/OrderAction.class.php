<?php
class OrderAction extends CommonAction{
	//查询订单
	public function index(){
	
	$this->roles=M('role')->select();//列出角色表
	$this->shops=M('shop')->select();
	import("ORG.Util.Page");
	$count=D('UserRelation')->relation(true)->count();
	$page=new Page($count,12);
	$limit = $page->firstRow . ',' . $page->listRows;
	$user=D('UserRelation')->relation(true)->limit($limit)->select();
	$user=user_manyone($user);//消除数组
	$this->user=$user;
	$this->page = $page->show ();
	$this->display();
	}
}