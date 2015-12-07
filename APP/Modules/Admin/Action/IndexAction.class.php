<?php
class IndexAction extends Action{
	//后台首页
	public function index(){
		//echo 'Admin/Index/index'; 
		$this->display();
	}
	public function home(){
		$this->display();
	}
	//注销
	public function logout(){
		session_unset();
		session_destroy();
		$this->redirect(GROUP_NAME.'/Login/index');
	}
}