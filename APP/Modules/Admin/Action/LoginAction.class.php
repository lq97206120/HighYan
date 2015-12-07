<?php
class LoginAction extends Action{
	public function index(){
		$this->display();
	}
	

	//生成验证码
	public function verify() {
		import('ORG.Util.Image');
		Image::buildImageVerify (4,1,'png',60,26);
	}
	
}