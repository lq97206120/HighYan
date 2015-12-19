<?php
class HomeAction extends Action{

	//用户首页
	public function index(){
		$this->display();
	}
	//个人信息－－性别，身高，体重，三围等信息
	public function info(){
		$this->display();
	}
	
}