<?php
class IndexAction extends Action{
	
	//微信首页
	public function index(){
		echo  C(APP_ID);
		$this->display();
	}
	
	public function products(){
		$this->display();
	}
	
	public function contactus(){
		$this->display();
	}
	
	public function arts(){
		$this->display();
	}
	
	public function jiehunji(){
		$this->display();
	}
	
	public function cases(){
		$this->display();
	}
}