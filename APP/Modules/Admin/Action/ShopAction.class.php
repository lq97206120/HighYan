<?php
Class ShopAction extends CommonAction{
	
	//店铺列表
	public function index(){
		import("ORG.Util.Page");
		$count=M('shop')->count();
		$page=new Page($count,10);
		$limit = $page->firstRow . ',' . $page->listRows;
		$shop=M('shop')->order('sclass')->limit($limit)->select();
		$this->shop=$shop;
		$this->page = $page->show ();
		$this->display();
	}
	
// 添加部门
	public function insert() {
					
		$shopResult=M('shop')->where(array('sname'=>$_POST['sname']))->find();
		
		if(empty($shopResult)){
				$receive=array(
				'sname'=>$_POST['sname'],
				'sclass'=>$_POST['sclass'],
				'saddr'=>$_POST['saddr'],
				'sguide'=>$_POST['sguide'],
				'sphone'=>$_POST['sphone'],
				'smail'=>$_POST['smail'],
				'sstatus'=>'1',
			
			);
			$shop=M('shop')->add($receive);
			if($shop){
				$this->success("添加成功",U('Admin/Shop/index'));
			}else 
				$this->error("添加失败",U('Admin/Shop/index'));
			
		}
		else{
			
			$this->error("部门已经存在",U('Admin/Shop/index'));
		}

	}
	//更新部门信息
	public function update() {
		
			$shop=array(
				'sid'=>$_POST['sid'],
				'sname'=>$_POST['sname'],
				'sclass'=>$_POST['sclass'],
				'saddr'=>$_POST['saddr'],
				'sguide'=>$_POST['sguide'],
				'sphone'=>$_POST['sphone'],
				'smail'=>$_POST['smail'],
				'sstatus'=>$_POST['sstatus'],
								
				);
				$result=M('shop')->save($shop);
				if($result){
					$this->success("修改成功",U('Admin/Shop/index'));
				}else
					$this->error("未改动",U('Admin/Shop/index'));
	}
	
	// 删除部门
	public function delete($sid) {
		
			if (! empty ( $sid )) {
				$shop = M ( "shop" );
				$result = $shop->delete ( $sid );
				if (false !== $result) {
					
				} else {
					$this->error ( '删除出错！' );
				}
			} else {
				$this->error ( 'ID错误！' );
			}
		
	}
//查询部门
	public function searchuser(){
		
		$searchcondition = I ( 'searchcondition','');
		$searchcontent = I('searchcontent','');
		if($searchcondition=='sclass'){
			switch($searchcontent){
				case '店铺': $searchcontent=1;break;
				case '管理':	$searchcontent=2;break;
				case '供应商':$searchcontent=3;break;
					
			}
					
		}
		
		if(!empty($searchcondition) && !empty($searchcontent) ){
			import ( 'ORG.Util.Page' );
			$condition[$searchcondition] = array('like','%'.$searchcontent.'%');
			$count=M('shop')->where($condition)->count ();
			$page=new Page($count,10);
			$limit=$page->firstRow . ',' . $page->listRows;
			$shop=M('shop')->where($condition)->order('sclass')->limit ( $limit )->select ();
			$this->page = $page->show ();
			$this->shop = $shop;
			$this->display('index');
		
		}
	}
//部门商品列表
	public function goodslist(){
		//获取所有商品
		$goods=M('goods')->select();
		
		//获取该单位有的商品
		$possess=M('goods_shop')->where(array('shop_id'=>$_GET['sid']))->getField('goods_id',true);
		
		//组合数组
		$goods=goods_merge($goods,$possess);
				
		$shop=M('shop')->where(array('sid'=>$_GET['sid']))->field(array('sname,sid'))->find();
		$this->goods=$goods;
		$this->shop=$shop;
		//p($shop);
		//p($goods);
		$this->display();
		
	}
	//处理部门的商品列表
	public function goodslistHandle(){
		//清除之前的记录
		$deleteResult=M('goods_shop')->where(array('shop_id'=>$_POST['sid']))->delete();
		foreach($_POST['goods'] as $v){
			$data[]=array('goods_id'=>$v,'shop_id'=>$_POST['sid']);
		}
		
		if(M('goods_shop')->addAll($data)){
			$this->success('修改成功！',U('Admin/Shop/index'));
		}else 
			$this->error("删除失败！",U('Admin/Shop/index'));
	}
	//处理前台参数
	public function frontset(){
		$shop=M('shop')->where(array('sid'=>$_GET['sid']))->field(array('sname,sid,simage,snorth,seast'))->find();
		$this->shop=$shop;
		$this->display();
	}
	//处理前台参数handle
	public function frontsethandle(){
		$result=M('shop')->save($_POST);
		if($result)
			$this->success('修改成功！',U('Admin/Shop/index'));
		else 
			$this->error("修改失败！",U('Admin/Shop/index'));	
	}
	
}