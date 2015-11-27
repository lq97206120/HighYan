<?php
class LoginAction extends Action{
	public function index(){
		$this->display();
	}
	
	public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify(4,1,'png','50','28');
	}
	
}