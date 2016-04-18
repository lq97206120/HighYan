<?php
class EmployeeAction extends CommonAction{
	
	public function book(){
		//预约查询
		import("ORG.Util.Page");
		$count=M('book')->where(array('bsid'=>$_GET['sid']))->count();
		$page=new Page($count,12);
		$limit = $page->firstRow . ',' . $page->listRows;
		$book=M('book')->where(array('bsid'=>$_GET['sid']))->limit($limit)->order('bstatus,bdate desc')->select();
		$this->book=$book;
		//店铺id
		$this->bsid=$_GET['sid'];
		$this->uid=$_GET['uid'];
		$this->page = $page->show ();
		$this->display();
	}
	//处理预约单状态
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
			$page=new Page($count,12);
			$limit=$page->firstRow . ',' . $page->listRows;
			$book=M('book')->where($condition)->limit ( $limit )->order('bstatus asc')->select ();
			$this->page = $page->show ();
			$this->book=$book;
			$this->bsid=$_POST['bsid'];
			$this->uid=$_POST['uid'];
			$this->display('book');
		
		}
	}
	//个人订单查询
	public function selforder(){
		
		import("ORG.Util.Page");
		$count=M('order')->where(array('osunum'=>$_GET['unum']))->count();
		$page=new Page($count,12);
		$limit = $page->firstRow . ',' . $page->listRows;
		$field=array('onum','reservenum','oscalenum','omname','ommale','omphone','bookdate','bookpulldate','bookgetdate','total','osunum','ispull','inspectorverify','shopleaderverify','opsname','pullok','pullstatus','goodsok','pullokdate','goodsokdate','repairlock');
		$order=M('order')->where(array('osunum'=>$_GET['unum']))->limit($limit)->field($field)->order('bookdate desc,inspectorverify,shopleaderverify')->select();
		$order=subtime($order);
		$this->order=$order;
		
		$shop=D('ShopRelation')->relation('goods')->where(array('sid'=>$_GET['sid']))->find();
		$possess=$shop['goods'];
		
		$cloth=shopposess($possess,1);
		$pants=shopposess($possess,2);
		$vest=shopposess($possess,3);
//		p($cloth);
//		p($pants);
//		p($vest);
		$this->sid=$_GET['sid'];
		$this->osunum=$_GET['unum'];
		$this->cloth=$cloth;
		$this->pants=$pants;
		$this->vest=$vest;
		$this->page = $page->show ();
		$this->time=time();
		$this->display();
	}
// 添加订单
	public function orderinsert() {
		
		$shop=M('shop')->where(array('sid'=>$_POST['sid']))->field(array('sname,saddr,sphone,smail'))->find();	
		//p($shop);	
//		p($_POST['cloth']);
//		p($_POST['pants']);
//		p($_POST['vest']);
		$field=array('gnum','gname','gid');
		//处理选择框
		$ougid=I('cloth',0,'intval');
		$odgid=I('pants',0,'intval');
		$obgid=I('vest',0,'intval');
		$otgid=I('tcloth',0,'intval');
		//处理数据库字段为空的问题
		$cloth=M('goods')->where(array('gid'=>$ougid))->field($field)->find();
			if(empty($cloth))
				{
					$cloth['gnum']='';$cloth['gname']='';
				}	
		$pants=M('goods')->where(array('gid'=>$odgid))->field($field)->find();	
			if(empty($pants))
					{
						$pants['gnum']='';$pants['gname']='';
					}	
		$vest=M('goods')->where(array('gid'=>$obgid))->field($field)->find();
			if(empty($vest))
					{
						$vest['gnum']='';$vest['gname']='';
					}
		$tcloth=M('goods')->where(array('gid'=>$otgid))->field($field)->find();
			if(empty($tcloth))
					{
						$tcloth['gnum']='';$tcloth['gname']='';
					}
								
		if($_POST['rbook']=="on"){
			$rbook=1;
		}
		else{
			$rbook=0;
		}
		if($_POST['rsale']=="on"){
			$rsale=1;
		}
		else{
			$rsale=0;
		}
		if($_POST['rrent']=="on"){
			$rrent=1;
		}
		else{
			$rrent=0;
		}
		if($_POST['rpacke']=="on"){
			$rpacke=1;
		}
		else{
			$rpacke=0;
		}
	if($_POST['belly']=="on"){
				$belly=1;
			}
			else{
				$belly=0;
			}
			if($_POST['sleg']=="on"){
				$sleg=1;
			}
			else{
				$sleg=0;
			}
			if($_POST['upleg']=="on"){
				$upleg=1;
			}
			else{
				$upleg=0;
			}
			if($_POST['flathip']=="on"){
				$flathip=1;
			}
			else{
				$flathip=0;
			}
			if($_POST['oleg']=="on"){
				$oleg=1;
			}
			else{
				$oleg=0;
			}
			if($_POST['xleg']=="on"){
				$xleg=1;
			}
			else{
				$xleg=0;
			}
		$receive=array(
				'reservenum'=>$_POST['reservenum'],
				'photocom'=>$_POST['photocom'],
				'bookdate'=>$_POST['bookdate'],
				'photodate'=>$_POST['photodate'],
				'omname'=>$_POST['omname'],
				'engagedate'=>$_POST['engagedate'],
				'marrydate'=>$_POST['marrydate'],
				'ommale'=>$_POST['ommale'],
				'bookpulldate'=>$_POST['bookpulldate'],
				'omnum'=>$_POST['omnum'],
				'bookgetdate'=>$_POST['bookgetdate'],
				'omphone'=>$_POST['omphone'],
				'rentgetdate'=>$_POST['rentgetdate'],
				'rentbackdate'=>$_POST['rentbackdate'],
				'omaddr'=>$_POST['omaddr'],
				'clothremark1'=>$_POST['clothremark1'],
				'clothremark2'=>$_POST['clothremark2'],
				'clothremark3'=>$_POST['clothremark3'],
				'clothremark4'=>$_POST['clothremark4'],
				'clothremark5'=>$_POST['clothremark5'],
				'deposit'=>$_POST['deposit'],
				'total'=>$_POST['total'],
				'rbook'=>$rbook,
				'rrent'=>$rrent,
				'rsale'=>$rsale,
				'rpacke'=>$rpacke,
				'gather1bookmoney'=>$_POST['gather1bookmoney'],
				'gather1sparemoney'=>$_POST['gather1sparemoney'],
				'gather1date'=>$_POST['gather1date'],
				'gather1user'=>$_POST['gather1user'],
				'gather2bookmoney'=>$_POST['gather2bookmoney'],
				'gather2sparemoney'=>$_POST['gather2sparemoney'],
				'gather2date'=>$_POST['gather2date'],
				'gather2user'=>$_POST['gather2user'],
				'rcode'=>$_POST['rcode'],
				'rsleeve'=>$_POST['rsleeve'],
				'rneck'=>$_POST['rneck'],
				'rwaist'=>$_POST['rwaist'],
				'rleglength'=>$_POST['rleglength'],
				'rshoes'=>$_POST['rshoes'],
				'photonum'=>$_POST['photonum'],
				'majiaprice'=>$_POST['majiaprice'],
				'majiafabric'=>$_POST['majiafabric'],
				'tie1'=>$_POST['tie1'],
				'tie2'=>$_POST['tie2'],
				'referee'=>$_POST['referee'],
				'rremark'=>$_POST['rremark'],
		
				'oscalenum'=>$_POST['oscalenum'],
				'scale'=>$_POST['scale'],
				'ougid'=>$ougid,
				'ougnum'=>$cloth['gnum'],
				'ougname'=>$cloth['gname'],
				'uremark'=>$_POST['uremark'],			
				'ushoulderwidth1'=>$_POST['ushoulderwidth1'],
				'ushoulderwidth2'=>$_POST['ushoulderwidth2'],
				'usleevewidth1'=>$_POST['usleevewidth1'],
				'usleevewidth2'=>$_POST['usleevewidth2'],
				'uclothlength1'=>$_POST['uclothlength1'],
				'uclothlength2'=>$_POST['uclothlength2'],
				'ubreathsur1'=>$_POST['ubreathsur1'],
				'ubreathsur2'=>$_POST['ubreathsur2'],
				'uwaistsur1'=>$_POST['uwaistsur1'],
				'uwaistsur2'=>$_POST['uwaistsur2'],
				'uhipsur1'=>$_POST['uhipsur1'],
				'uhipsur2'=>$_POST['uhipsur2'],
				'ubreathwidth1'=>$_POST['ubreathwidth1'],
				'ubreathwidth2'=>$_POST['ubreathwidth2'],
				'ubackwidth1'=>$_POST['ubackwidth1'],
				'ubackwidth2'=>$_POST['ubackwidth2'],
				'unecksur'=>$_POST['unecksur'],
				'uneckstyle'=>$_POST['uneckstyle'],
				'ubosom'=>$_POST['ubosom'],
				'usleevesur'=>$_POST['usleevesur'],
				'ucode'=>$_POST['ucode'],
				'uclothfabric'=>$_POST['uclothfabric'],
		
				'odgid'=>$odgid,
				'odgnum'=>$pants['gnum'],
				'odgname'=>$pants['gname'],
				'dremark'=>$_POST['dremark'],
				'dwaistsur1'=>$_POST['dwaistsur1'],
				'dwaistsur2'=>$_POST['dwaistsur2'],
				'dhipsur1'=>$_POST['dhipsur1'],
				'dhipsur2'=>$_POST['dhipsur2'],
				'dpantslength1'=>$_POST['dpantslength1'],
				'dpantslength2'=>$_POST['dpantslength2'],
				'dupcrotch1'=>$_POST['dupcrotch1'],
				'dupcrotch2'=>$_POST['dupcrotch2'],
				'dallcrotch1'=>$_POST['dallcrotch1'],
				'dallcrotch2'=>$_POST['dallcrotch2'],
				'dwaistdown1'=>$_POST['dwaistdown1'],
				'dwaistdown2'=>$_POST['dwaistdown2'],
				'dlegsur1'=>$_POST['dlegsur1'],
				'dlegsur2'=>$_POST['dlegsur2'],
				'dkneesur1'=>$_POST['dkneesur1'],
				'dkneesur2'=>$_POST['dkneesur2'],
				'dpantssur'=>$_POST['dpantssur'],
				'belly'=>$belly,
				'sleg'=>$sleg,
				'upleg'=>$upleg,
				'flathip'=>$flathip,
				'oleg'=>$oleg,
				'xleg'=>$xleg,
				'dcode'=>$_POST['dcode'],
				'dpantsfabric'=>$_POST['dpantsfabric'],
		
				'obgid'=>$obgid,
				'obgnum'=>$vest['gnum'],
				'obgname'=>$vest['gname'],
				'bfrontlength'=>$_POST['bfrontlength'],
				'bbacklength'=>$_POST['bbacklength'],
				'bup'=>$_POST['bup'],
				'bcenter'=>$_POST['bcenter'],
				'bcode'=>$_POST['bcode'],
				'bbackfabric'=>$_POST['bbackfabric'],
				'clothgetdate'=>$_POST['clothgetdate'],
		
				'otgid'=>$otgid,
				'otgnum'=>$tcloth['gnum'],
				'otgname'=>$tcloth['gname'],
				'tremark'=>$_POST['tremark'],			
				'tshoulderwidth1'=>$_POST['tshoulderwidth1'],
				'tshoulderwidth2'=>$_POST['tshoulderwidth2'],
				'tsleevewidth1'=>$_POST['tsleevewidth1'],
				'tsleevewidth2'=>$_POST['tsleevewidth2'],
				'tclothlength1'=>$_POST['tclothlength1'],
				'tclothlength2'=>$_POST['tclothlength2'],
				'tbreathsur1'=>$_POST['tbreathsur1'],
				'tbreathsur2'=>$_POST['tbreathsur2'],
				'twaistsur1'=>$_POST['twaistsur1'],
				'twaistsur2'=>$_POST['twaistsur2'],
				'thipsur1'=>$_POST['thipsur1'],
				'thipsur2'=>$_POST['thipsur2'],
				'tbreathwidth1'=>$_POST['tbreathwidth1'],
				'tbreathwidth2'=>$_POST['tbreathwidth2'],
				'tbackwidth1'=>$_POST['tbackwidth1'],
				'tbackwidth2'=>$_POST['tbackwidth2'],
				'tnecksur'=>$_POST['tnecksur'],
				'tneckstyle'=>$_POST['tneckstyle'],
				'tbosom'=>$_POST['tbosom'],
				'tsleevesur'=>$_POST['tsleevesur'],
				'tcode'=>$_POST['tcode'],
				'tclothfabric'=>$_POST['tclothfabric'],
				'tclothgetdate'=>$_POST['tclothgetdate'],
		
				'ossname'=>$shop['sname'],
				
				'ossmail'=>$shop['smail'],
				'osunum'=>$_POST['osunum'],
				
			);
			$db=M('order');
			$result=$db->add($receive);
			
			if($result){
				$this->success("添加成功",U('Admin/Employee/selforder',array('unum'=>$_POST['osunum'],'sid'=>$_POST['sid'])));
			}else 
				$this->error("添加失败",U('Admin/Employee/selforder',array('unum'=>$_POST['osunum'],'sid'=>$_POST['sid'])));
			
		

	}
	//读取修改订单
	public function readselforder(){
		
		$order=D('OrderRelation')->relation(true)->where(array('onum'=>$_GET['onum']))->find();
		$this->order=$order;
				
		$shop=D('ShopRelation')->relation('goods')->where(array('sid'=>$_GET['sid']))->find();
		$possess=$shop['goods'];
		
		$cloth=shopposess($possess,1);
		$pants=shopposess($possess,2);
		$vest=shopposess($possess,3);
//		p($cloth);
//		p($pants);
//		p($vest);
		
		$this->sid=$_GET['sid'];
		$this->osunum=$_GET['unum'];
		$this->cloth=$cloth;
		$this->pants=$pants;
		$this->vest=$vest;
		
		$this->display();
	}
	//更新订单信息
	public function orderupdate() {
		
			if($_POST['belly']=="on"){
				$belly=1;
			}
			else{
				$belly=0;
			}
			
			if($_POST['sleg']=="on"){
				$sleg=1;
			}
			else{
				$sleg=0;
			}
			if($_POST['upleg']=="on"){
				$upleg=1;
			}
			else{
				$upleg=0;
			}
			if($_POST['flathip']=="on"){
				$flathip=1;
			}
			else{
				$flathip=0;
			}
			if($_POST['oleg']=="on"){
				$oleg=1;
			}
			else{
				$oleg=0;
			}
			if($_POST['xleg']=="on"){
				$xleg=1;
			}
			else{
				$xleg=0;
			}
			
		$field=array('gnum','gname','gid');
		//处理选择框
		$ougid=I('cloth',0,'intval');
		$odgid=I('pants',0,'intval');
		$obgid=I('vest',0,'intval');
		$otgid=I('tcloth',0,'intval');
		
		$orderold=M('order')->where(array('onum'=>$_POST['onum']))->find();
		
		if($orderold['inspectorverify']=='0'){
			if($_POST['rbook']=="on"){
				$rbook=1;
			}
			else{
				$rbook=0;
			}
			if($_POST['rsale']=="on"){
				$rsale=1;
			}
			else{
				$rsale=0;
			}
			if($_POST['rrent']=="on"){
				$rrent=1;
			}
			else{
				$rrent=0;
			}
			if($_POST['rpacke']=="on"){
				$rpacke=1;
			}
			else{
				$rpacke=0;
			}
		
		//处理数据库字段为空的问题
		$cloth=M('goods')->where(array('gid'=>$ougid))->field($field)->find();
			if(empty($cloth))
				{
					$cloth['gnum']='';$cloth['gname']='';
				}	
		$pants=M('goods')->where(array('gid'=>$odgid))->field($field)->find();	
			if(empty($pants))
					{
						$pants['gnum']='';$pants['gname']='';
					}	
		$vest=M('goods')->where(array('gid'=>$obgid))->field($field)->find();
			if(empty($vest))
					{
						$vest['gnum']='';$vest['gname']='';
					}	
		$tcloth=M('goods')->where(array('gid'=>$otgid))->field($field)->find();
			if(empty($tcloth))
					{
						$tcloth['gnum']='';$tcloth['gname']='';
					}
		//订购单				
		$receive1=array(
				'onum'=>$_POST['onum'],
				'reservenum'=>$_POST['reservenum'],
				'photocom'=>$_POST['photocom'],
				'bookdate'=>$_POST['bookdate'],
				'photodate'=>$_POST['photodate'],
				'omname'=>$_POST['omname'],
				'engagedate'=>$_POST['engagedate'],
				'marrydate'=>$_POST['marrydate'],
				'ommale'=>$_POST['ommale'],
				'bookpulldate'=>$_POST['bookpulldate'],
				'omnum'=>$_POST['omnum'],
				'bookgetdate'=>$_POST['bookgetdate'],
				'omphone'=>$_POST['omphone'],
				'rentgetdate'=>$_POST['rentgetdate'],
				'rentbackdate'=>$_POST['rentbackdate'],
				'omaddr'=>$_POST['omaddr'],
				'clothremark1'=>$_POST['clothremark1'],
				'clothremark2'=>$_POST['clothremark2'],
				'clothremark3'=>$_POST['clothremark3'],
				'clothremark4'=>$_POST['clothremark4'],
				'clothremark5'=>$_POST['clothremark5'],
				'deposit'=>$_POST['deposit'],
				'total'=>$_POST['total'],
				'rbook'=>$rbook,
				'rrent'=>$rrent,
				'rsale'=>$rsale,
				'rpacke'=>$rpacke,
				'gather1bookmoney'=>$_POST['gather1bookmoney'],
				'gather1sparemoney'=>$_POST['gather1sparemoney'],
				'gather1date'=>$_POST['gather1date'],
				'gather1user'=>$_POST['gather1user'],
				'gather2bookmoney'=>$_POST['gather2bookmoney'],
				'gather2sparemoney'=>$_POST['gather2sparemoney'],
				'gather2date'=>$_POST['gather2date'],
				'gather2user'=>$_POST['gather2user'],
				'rcode'=>$_POST['rcode'],
				'rsleeve'=>$_POST['rsleeve'],
				'rneck'=>$_POST['rneck'],
				'rwaist'=>$_POST['rwaist'],
				'rleglength'=>$_POST['rleglength'],
				'rshoes'=>$_POST['rshoes'],
				'photonum'=>$_POST['photonum'],
				'majiaprice'=>$_POST['majiaprice'],
				'majiafabric'=>$_POST['majiafabric'],
				'tie1'=>$_POST['tie1'],
				'tie2'=>$_POST['tie2'],
				'referee'=>$_POST['referee'],
				'rremark'=>$_POST['rremark'],
		
			);
			if($_POST['shopleaderverify']=='0'){
				$db=M('order');
				$result1=$db->save($receive1);
				
			}
			//修改量身单
			$receive2=array(
				'onum'=>$_POST['onum'],
			
				'oscalenum'=>$_POST['oscalenum'],
				'scale'=>$_POST['scale'],
				'ougid'=>$ougid,
				'ougnum'=>$cloth['gnum'],
				'ougname'=>$cloth['gname'],
				'uremark'=>$_POST['uremark'],			
				'ushoulderwidth1'=>$_POST['ushoulderwidth1'],
				'ushoulderwidth2'=>$_POST['ushoulderwidth2'],
				'usleevewidth1'=>$_POST['usleevewidth1'],
				'usleevewidth2'=>$_POST['usleevewidth2'],
				'uclothlength1'=>$_POST['uclothlength1'],
				'uclothlength2'=>$_POST['uclothlength2'],
				'ubreathsur1'=>$_POST['ubreathsur1'],
				'ubreathsur2'=>$_POST['ubreathsur2'],
				'uwaistsur1'=>$_POST['uwaistsur1'],
				'uwaistsur2'=>$_POST['uwaistsur2'],
				'uhipsur1'=>$_POST['uhipsur1'],
				'uhipsur2'=>$_POST['uhipsur2'],
				'ubreathwidth1'=>$_POST['ubreathwidth1'],
				'ubreathwidth2'=>$_POST['ubreathwidth2'],
				'ubackwidth1'=>$_POST['ubackwidth1'],
				'ubackwidth2'=>$_POST['ubackwidth2'],
				'unecksur'=>$_POST['unecksur'],
				'uneckstyle'=>$_POST['uneckstyle'],
				'ubosom'=>$_POST['ubosom'],
				'usleevesur'=>$_POST['usleevesur'],
				'ucode'=>$_POST['ucode'],
				'uclothfabric'=>$_POST['uclothfabric'],
		
				'odgid'=>$odgid,
				'odgnum'=>$pants['gnum'],
				'odgname'=>$pants['gname'],
				'dremark'=>$_POST['dremark'],
				'dwaistsur1'=>$_POST['dwaistsur1'],
				'dwaistsur2'=>$_POST['dwaistsur2'],
				'dhipsur1'=>$_POST['dhipsur1'],
				'dhipsur2'=>$_POST['dhipsur2'],
				'dpantslength1'=>$_POST['dpantslength1'],
				'dpantslength2'=>$_POST['dpantslength2'],
				'dupcrotch1'=>$_POST['dupcrotch1'],
				'dupcrotch2'=>$_POST['dupcrotch2'],
				'dallcrotch1'=>$_POST['dallcrotch1'],
				'dallcrotch2'=>$_POST['dallcrotch2'],
				'dwaistdown1'=>$_POST['dwaistdown1'],
				'dwaistdown2'=>$_POST['dwaistdown2'],
				'dlegsur1'=>$_POST['dlegsur1'],
				'dlegsur2'=>$_POST['dlegsur2'],
				'dkneesur1'=>$_POST['dkneesur1'],
				'dkneesur2'=>$_POST['dkneesur2'],
				'dpantssur'=>$_POST['dpantssur'],
				'belly'=>$belly,
				'sleg'=>$sleg,
				'upleg'=>$upleg,
				'flathip'=>$flathip,
				'oleg'=>$oleg,
				'xleg'=>$xleg,
				'dcode'=>$_POST['dcode'],
				'dpantsfabric'=>$_POST['dpantsfabric'],
		
				'obgid'=>$obgid,
				'obgnum'=>$vest['gnum'],
				'obgname'=>$vest['gname'],
				'bfrontlength'=>$_POST['bfrontlength'],
				'bbacklength'=>$_POST['bbacklength'],
				'bup'=>$_POST['bup'],
				'bcenter'=>$_POST['bcenter'],
				'bcode'=>$_POST['bcode'],
				'bbackfabric'=>$_POST['bbackfabric'],
		
				'otgid'=>$otgid,
				'otgnum'=>$tcloth['gnum'],
				'otgname'=>$tcloth['gname'],
				'tremark'=>$_POST['tremark'],			
				'tshoulderwidth1'=>$_POST['tshoulderwidth1'],
				'tshoulderwidth2'=>$_POST['tshoulderwidth2'],
				'tsleevewidth1'=>$_POST['tsleevewidth1'],
				'tsleevewidth2'=>$_POST['tsleevewidth2'],
				'tclothlength1'=>$_POST['tclothlength1'],
				'tclothlength2'=>$_POST['tclothlength2'],
				'tbreathsur1'=>$_POST['tbreathsur1'],
				'tbreathsur2'=>$_POST['tbreathsur2'],
				'twaistsur1'=>$_POST['twaistsur1'],
				'twaistsur2'=>$_POST['twaistsur2'],
				'thipsur1'=>$_POST['thipsur1'],
				'thipsur2'=>$_POST['thipsur2'],
				'tbreathwidth1'=>$_POST['tbreathwidth1'],
				'tbreathwidth2'=>$_POST['tbreathwidth2'],
				'tbackwidth1'=>$_POST['tbackwidth1'],
				'tbackwidth2'=>$_POST['tbackwidth2'],
				'tnecksur'=>$_POST['tnecksur'],
				'tneckstyle'=>$_POST['tneckstyle'],
				'tbosom'=>$_POST['tbosom'],
				'tsleevesur'=>$_POST['tsleevesur'],
				'tcode'=>$_POST['tcode'],
				'tclothfabric'=>$_POST['tclothfabric'],
				
		
			);
			if($_POST['inspectorverify']=='0'){
				$db=M('order');
				$result2=$db->save($receive2);
				
			}
			if($result1 || $result2){
				$this->success("修改成功",U('Admin/Employee/selforder',array('unum'=>$_POST['osunum'],'sid'=>$_POST['sid'])));
			}else 
				$this->error("修改失败",U('Admin/Employee/selforder',array('unum'=>$_POST['osunum'],'sid'=>$_POST['sid'])));
	
		}
		else{
			if($orderold['repairlock']=='0'){
					//上衣西服部分
					
				if($_POST['ushoulderwidth1']!=$orderold['ushoulderwidth1']){
					$rupcloth="上衣实际肩宽".$orderold['ushoulderwidth1']."=>".$_POST['ushoulderwidth1']."\n";
				}
				if($_POST['ushoulderwidth2']!=$orderold['ushoulderwidth2']){
					$rupcloth=$rupcloth."上衣完成肩宽".$orderold['ushoulderwidth2']."=>".$_POST['ushoulderwidth2']."\n";
				}
				
				if($_POST['usleevewidth1']!=$orderold['usleevewidth1']){
					$rupcloth=$rupcloth."上衣实际袖长".$orderold['usleevewidth1']."=>".$_POST['usleevewidth1']."\n";
				}
				if($_POST['usleevewidth2']!=$orderold['usleevewidth2']){
					$rupcloth=$rupcloth."上衣完成袖长".$orderold['usleevewidth2']."=>".$_POST['usleevewidth2']."\n";
				}
				
				if($_POST['uclothlength1']!=$orderold['uclothlength1']){
					$rupcloth=$rupcloth."上衣实际衣长".$orderold['uclothlength1']."=>".$_POST['uclothlength1']."\n";
				}
				if($_POST['uclothlength2']!=$orderold['uclothlength2']){
					$rupcloth=$rupcloth."上衣完成衣长".$orderold['uclothlength2']."=>".$_POST['uclothlength2']."\n";
				}
				
				if($_POST['ubreathsur1']!=$orderold['ubreathsur1']){
					$rupcloth=$rupcloth."上衣实际胸围".$orderold['ubreathsur1']."=>".$_POST['ubreathsur1']."\n";
				}
				if($_POST['ubreathsur2']!=$orderold['ubreathsur2']){
					$rupcloth=$rupcloth."上衣完成胸围".$orderold['ubreathsur2']."=>".$_POST['ubreathsur2']."\n";
				}
				
				if($_POST['uwaistsur1']!=$orderold['uwaistsur1']){
					$rupcloth=$rupcloth."上衣实际腰围".$orderold['uwaistsur1']."=>".$_POST['uwaistsur1']."\n";
				}
				if($_POST['uwaistsur2']!=$orderold['uwaistsur2']){
					$rupcloth=$rupcloth."上衣完成腰围".$orderold['uwaistsur2']."=>".$_POST['uwaistsur2']."\n";
				}
				
				if($_POST['uhipsur1']!=$orderold['uhipsur1']){
					$rupcloth=$rupcloth."上衣实际臀围".$orderold['uhipsur1']."=>".$_POST['uhipsur1']."\n";
				}
				if($_POST['uhipsur2']!=$orderold['uhipsur2']){
					$rupcloth=$rupcloth."上衣完成臀围".$orderold['uhipsur2']."=>".$_POST['uhipsur2']."\n";
				}
				
				if($_POST['ubreathwidth1']!=$orderold['ubreathwidth1']){
					$rupcloth=$rupcloth."上衣实际胸宽".$orderold['ubreathwidth1']."=>".$_POST['ubreathwidth1']."\n";
				}
				if($_POST['ubreathwidth2']!=$orderold['ubreathwidth2']){
					$rupcloth=$rupcloth."上衣完成胸宽".$orderold['ubreathwidth2']."=>".$_POST['ubreathwidth2']."\n";
				}
				
				if($_POST['ubackwidth1']!=$orderold['ubackwidth1']){
					$rupcloth=$rupcloth."上衣实际背宽".$orderold['ubackwidth1']."=>".$_POST['ubackwidth1']."\n";
				}
				if($_POST['ubackwidth2']!=$orderold['ubackwidth2']){
					$rupcloth=$rupcloth."上衣完成背宽".$orderold['ubackwidth2']."=>".$_POST['ubackwidth2']."\n";
				}
				
				if($_POST['unecksur']!=$orderold['unecksur']){
					$rupcloth=$rupcloth."上衣领围".$orderold['unecksur']."=>".$_POST['unecksur']."\n";
				}
				
				if($_POST['uneckstyle']!=$orderold['uneckstyle']){
					$rupcloth=$rupcloth."上衣领型".$orderold['uneckstyle']."=>".$_POST['uneckstyle']."\n";
				}
				
				if($_POST['ubosom']!=$orderold['ubosom']){
					$rupcloth=$rupcloth."上衣前襟".$orderold['ubosom']."=>".$_POST['ubosom']."\n";
				}
				
				if($_POST['usleevesur']!=$orderold['usleevesur']){
					$rupcloth=$rupcloth."上衣袖口".$orderold['usleevesur']."=>".$_POST['usleevesur']."\n";
				}
				
				if($_POST['ucode']!=$orderold['ucode']){
					$rupcloth=$rupcloth."上衣码数".$orderold['ucode']."=>".$_POST['ucode']."\n";
				}
				
				if($_POST['uclothfabric']!=$orderold['uclothfabric']){
					$rupcloth=$rupcloth."上衣布号".$orderold['uclothfabric']."=>".$_POST['uclothfabric']."\n";
				}	
					
				//上衣衬衫部分
				if($_POST['tshoulderwidth1']!=$orderold['tshoulderwidth1']){
					$rupcloth=$rupcloth."衬衫实际肩宽".$orderold['tshoulderwidth1']."=>".$_POST['tshoulderwidth1']."\n";
				}
				if($_POST['tshoulderwidth2']!=$orderold['tshoulderwidth2']){
					$rupcloth=$rupcloth."衬衫完成肩宽".$orderold['tshoulderwidth2']."=>".$_POST['tshoulderwidth2']."\n";
				}
				
				if($_POST['tsleevewidth1']!=$orderold['tsleevewidth1']){
					$rupcloth=$rupcloth."衬衫实际袖长".$orderold['tsleevewidth1']."=>".$_POST['tsleevewidth1']."\n";
				}
				if($_POST['tsleevewidth2']!=$orderold['tsleevewidth2']){
					$rupcloth=$rupcloth."衬衫完成袖长".$orderold['tsleevewidth2']."=>".$_POST['tsleevewidth2']."\n";
				}
				
				if($_POST['tclothlength1']!=$orderold['tclothlength1']){
					$rupcloth=$rupcloth."衬衫实际衣长".$orderold['tclothlength1']."=>".$_POST['tclothlength1']."\n";
				}
				if($_POST['tclothlength2']!=$orderold['tclothlength2']){
					$rupcloth=$rupcloth."衬衫完成衣长".$orderold['tclothlength2']."=>".$_POST['tclothlength2']."\n";
				}
				
				if($_POST['tbreathsur1']!=$orderold['tbreathsur1']){
					$rupcloth=$rupcloth."衬衫实际胸围".$orderold['tbreathsur1']."=>".$_POST['tbreathsur1']."\n";
				}
				if($_POST['tbreathsur2']!=$orderold['tbreathsur2']){
					$rupcloth=$rupcloth."衬衫完成胸围".$orderold['tbreathsur2']."=>".$_POST['tbreathsur2']."\n";
				}
				
				if($_POST['twaistsur1']!=$orderold['twaistsur1']){
					$rupcloth=$rupcloth."衬衫实际腰围".$orderold['twaistsur1']."=>".$_POST['twaistsur1']."\n";
				}
				if($_POST['twaistsur2']!=$orderold['twaistsur2']){
					$rupcloth=$rupcloth."衬衫完成腰围".$orderold['twaistsur2']."=>".$_POST['twaistsur2']."\n";
				}
				
				if($_POST['thipsur1']!=$orderold['thipsur1']){
					$rupcloth=$rupcloth."衬衫实际臀围".$orderold['thipsur1']."=>".$_POST['thipsur1']."\n";
				}
				if($_POST['thipsur2']!=$orderold['thipsur2']){
					$rupcloth=$rupcloth."衬衫完成臀围".$orderold['thipsur2']."=>".$_POST['thipsur2']."\n";
				}
				
				if($_POST['tbreathwidth1']!=$orderold['tbreathwidth1']){
					$rupcloth=$rupcloth."衬衫实际胸宽".$orderold['tbreathwidth1']."=>".$_POST['tbreathwidth1']."\n";
				}
				if($_POST['tbreathwidth2']!=$orderold['tbreathwidth2']){
					$rupcloth=$rupcloth."衬衫完成胸宽".$orderold['tbreathwidth2']."=>".$_POST['tbreathwidth2']."\n";
				}
				
				if($_POST['tbackwidth1']!=$orderold['tbackwidth1']){
					$rupcloth=$rupcloth."衬衫实际背宽".$orderold['tbackwidth1']."=>".$_POST['tbackwidth1']."\n";
				}
				if($_POST['tbackwidth2']!=$orderold['tbackwidth2']){
					$rupcloth=$rupcloth."衬衫完成背宽".$orderold['tbackwidth2']."=>".$_POST['tbackwidth2']."\n";
				}
				
				if($_POST['tnecksur']!=$orderold['tnecksur']){
					$rupcloth=$rupcloth."衬衫领围".$orderold['tnecksur']."=>".$_POST['tnecksur']."\n";
				}
				
				if($_POST['tneckstyle']!=$orderold['tneckstyle']){
					$rupcloth=$rupcloth."衬衫领型".$orderold['tneckstyle']."=>".$_POST['tneckstyle']."\n";
				}
				
				if($_POST['tbosom']!=$orderold['tbosom']){
					$rupcloth=$rupcloth."衬衫前襟".$orderold['tbosom']."=>".$_POST['tbosom']."\n";
				}
				
				if($_POST['tsleevesur']!=$orderold['tsleevesur']){
					$rupcloth=$rupcloth."衬衫袖口".$orderold['tsleevesur']."=>".$_POST['tsleevesur']."\n";
				}
				
				if($_POST['tcode']!=$orderold['tcode']){
					$rupcloth=$rupcloth."衬衫码数".$orderold['tcode']."=>".$_POST['tcode']."\n";
				}
				
				if($_POST['tclothfabric']!=$orderold['tclothfabric']){
					$rupcloth=$rupcloth."衬衫布号".$orderold['tclothfabric']."=>".$_POST['tclothfabric']."\n";
				}
				//裤子部分
				if($_POST['dwaistsur1']!=$orderold['dwaistsur1']){
					$rpants="实际腰围".$orderold['dwaistsur1']."=>".$_POST['dwaistsur1']."\n";
				}
				if($_POST['dwaistsur2']!=$orderold['dwaistsur2']){
					$rpants=$rpants."完成腰围".$orderold['dwaistsur2']."=>".$_POST['dwaistsur2']."\n";
				}
				
				if($_POST['dhipsur1']!=$orderold['dhipsur1']){
					$rpants=$rpants."实际臀围".$orderold['dhipsur1']."=>".$_POST['dhipsur1']."\n";
				}
				if($_POST['dhipsur2']!=$orderold['dhipsur2']){
					$rpants=$rpants."完成臀围".$orderold['dhipsur2']."=>".$_POST['dhipsur2']."\n";
				}
				
				if($_POST['dpantslength1']!=$orderold['dpantslength1']){
					$rpants=$rpants."实际裤长".$orderold['dpantslength1']."=>".$_POST['dpantslength1']."\n";
				}
				if($_POST['dpantslength2']!=$orderold['dpantslength2']){
					$rpants=$rpants."完成裤长".$orderold['dpantslength2']."=>".$_POST['dpantslength2']."\n";
				}
				
				if($_POST['dupcrotch1']!=$orderold['dupcrotch1']){
					$rpants=$rpants."实际上裆".$orderold['dupcrotch1']."=>".$_POST['dupcrotch1']."\n";
				}
				if($_POST['dupcrotch2']!=$orderold['dupcrotch2']){
					$rpants=$rpants."完成上裆".$orderold['dupcrotch2']."=>".$_POST['dupcrotch2']."\n";
				}
				
				if($_POST['dallcrotch1']!=$orderold['dallcrotch1']){
					$rpants=$rpants."实际全裆".$orderold['dallcrotch1']."=>".$_POST['dallcrotch1']."\n";
				}
				if($_POST['dallcrotch2']!=$orderold['dallcrotch2']){
					$rpants=$rpants."完成全裆".$orderold['dallcrotch2']."=>".$_POST['dallcrotch2']."\n";
				}
				
				if($_POST['dwaistdown1']!=$orderold['dwaistdown1']){
					$rpants=$rpants."实际腰下".$orderold['dwaistdown1']."=>".$_POST['dwaistdown1']."\n";
				}
				if($_POST['dwaistdown2']!=$orderold['dwaistdown2']){
					$rpants=$rpants."完成腰下".$orderold['dwaistdown2']."=>".$_POST['dwaistdown2']."\n";
				}
				
				if($_POST['dlegsur1']!=$orderold['dlegsur1']){
					$rpants=$rpants."实际腿围".$orderold['dlegsur1']."=>".$_POST['dlegsur1']."\n";
				}
				if($_POST['dlegsur2']!=$orderold['dlegsur2']){
					$rpants=$rpants."完成腿围".$orderold['dlegsur2']."=>".$_POST['dlegsur2']."\n";
				}
				
				if($_POST['dkneesur1']!=$orderold['dkneesur1']){
					$rpants=$rpants."实际膝围".$orderold['dkneesur1']."=>".$_POST['dkneesur1']."\n";
				}
				if($_POST['dkneesur2']!=$orderold['dkneesur2']){
					$rpants=$rpants."完成膝围".$orderold['dkneesur2']."=>".$_POST['dkneesur2']."\n";
				}
				
				if($_POST['dpantssur']!=$orderold['dpantssur']){
					$rpants=$rpants."裤口".$orderold['dpantssur']."=>".$_POST['dpantssur']."\n";
				}
				
				if($belly!=$orderold['belly']){
					$rpants=$rpants."有肚".$orderold['belly']."=>".$belly."\n";
				}
				
				if($sleg!=$orderold['sleg']){
					$rpants=$rpants."S腿".$orderold['sleg']."=>".$sleg."\n";
				}
				
				if($upleg!=$orderold['upleg']){
					$rpants=$rpants."翘腿".$orderold['upleg']."=>".$upleg."\n";
				}
				
				if($flathip!=$orderold['flathip']){
					$rpants=$rpants."平臀".$orderold['flathip']."=>".$flathip."\n";
				}
				
				if($oleg!=$orderold['oleg']){
					$rpants=$rpants."O腿".$orderold['oleg']."=>".$oleg."\n";
				}
				if($xleg!=$orderold['xleg']){
					$rpants=$rpants."X腿".$orderold['xleg']."=>".$xleg."\n";
				}
				if($_POST['dcode']!=$orderold['dcode']){
					$rpants=$rpants."码数".$orderold['dcode']."=>".$_POST['dcode']."\n";
				}
				
				if($_POST['dclothfabric']!=$orderold['dclothfabric']){
					$rpants=$rpants."布号".$orderold['dclothfabric']."=>".$_POST['dclothfabric']."\n";
				}	
				
				//背心部分
				if($_POST['bfrontlength']!=$orderold['bfrontlength']){
					$rvest="前长".$orderold['bfrontlength']."=>".$_POST['bfrontlength']."\n";
				}
				
				if($_POST['bbacklength']!=$orderold['bbacklength']){
					$rvest=$rvest."后长".$orderold['bbacklength']."=>".$_POST['bbacklength']."\n";
				}
				if($_POST['bup']!=$orderold['bup']){
					$rvest=$rvest."上".$orderold['bup']."=>".$_POST['bup']."\n";
				}
				
				if($_POST['bcenter']!=$orderold['bcenter']){
					$rvest=$rvest."中".$orderold['bcenter']."=>".$_POST['bcenter']."\n";
				}
				if($_POST['bcode']!=$orderold['bcode']){
					$rvest=$rvest."码数".$orderold['bcode']."=>".$_POST['bcode']."\n";
				}
				if($_POST['bbackfabric']!=$orderold['bbackfabric']){
					$rvest=$rvest."布号".$orderold['bbackfabric']."=>".$_POST['bbackfabric']."\n";
				}
				//记录结束
				$repairold=M('repair')->where(array('rid'=>$orderold['repairid']))->find();
				$rupcloth=$repairold['upremark2']."\n"."修改人工号：".$_POST['osunum']."\n".$rupcloth."=========="."\n";
				$rpants=$repairold['downremark2']."\n"."修改人工号：".$_POST['osunum']."\n".$rpants."=========="."\n";
				$rvest=$repairold['backremark2']."\n"."修改人工号：".$_POST['osunum']."\n".$rvest."=========="."\n";
				$repair=array('rid'=>$orderold['repairid'],'upremark2'=>$rupcloth,'downremark2'=>$rpants,'backremark2'=>$rvest,);
				M('repair')->save($repair);
				
				//处理量身单的修改
				$receive2=array(
					'onum'=>$_POST['onum'],
					'oscalenum'=>$_POST['oscalenum'],
					'scale'=>$_POST['scale'],
					//'ougid'=>$ougid,
					//'ougnum'=>$cloth['gnum'],
					//'ougname'=>$cloth['gname'],
				//	'uremark'=>$_POST['uremark'],			
					'ushoulderwidth1'=>$_POST['ushoulderwidth1'],
					'ushoulderwidth2'=>$_POST['ushoulderwidth2'],
					'usleevewidth1'=>$_POST['usleevewidth1'],
					'usleevewidth2'=>$_POST['usleevewidth2'],
					'uclothlength1'=>$_POST['uclothlength1'],
					'uclothlength2'=>$_POST['uclothlength2'],
					'ubreathsur1'=>$_POST['ubreathsur1'],
					'ubreathsur2'=>$_POST['ubreathsur2'],
					'uwaistsur1'=>$_POST['uwaistsur1'],
					'uwaistsur2'=>$_POST['uwaistsur2'],
					'uhipsur1'=>$_POST['uhipsur1'],
					'uhipsur2'=>$_POST['uhipsur2'],
					'ubreathwidth1'=>$_POST['ubreathwidth1'],
					'ubreathwidth2'=>$_POST['ubreathwidth2'],
					'ubackwidth1'=>$_POST['ubackwidth1'],
					'ubackwidth2'=>$_POST['ubackwidth2'],
					'unecksur'=>$_POST['unecksur'],
					'uneckstyle'=>$_POST['uneckstyle'],
					'ubosom'=>$_POST['ubosom'],
					'usleevesur'=>$_POST['usleevesur'],
					'ucode'=>$_POST['ucode'],
					'uclothfabric'=>$_POST['uclothfabric'],
			
				//	'odgid'=>$odgid,
				//	'odgnum'=>$pants['gnum'],
				//	'odgname'=>$pants['gname'],
				//	'dremark'=>$_POST['dremark'],
					'dwaistsur1'=>$_POST['dwaistsur1'],
					'dwaistsur2'=>$_POST['dwaistsur2'],
					'dhipsur1'=>$_POST['dhipsur1'],
					'dhipsur2'=>$_POST['dhipsur2'],
					'dpantslength1'=>$_POST['dpantslength1'],
					'dpantslength2'=>$_POST['dpantslength2'],
					'dupcrotch1'=>$_POST['dupcrotch1'],
					'dupcrotch2'=>$_POST['dupcrotch2'],
					'dallcrotch1'=>$_POST['dallcrotch1'],
					'dallcrotch2'=>$_POST['dallcrotch2'],
					'dwaistdown1'=>$_POST['dwaistdown1'],
					'dwaistdown2'=>$_POST['dwaistdown2'],
					'dlegsur1'=>$_POST['dlegsur1'],
					'dlegsur2'=>$_POST['dlegsur2'],
					'dkneesur1'=>$_POST['dkneesur1'],
					'dkneesur2'=>$_POST['dkneesur2'],
					'dpantssur'=>$_POST['dpantssur'],
					'belly'=>$belly,
					'sleg'=>$sleg,
					'upleg'=>$upleg,
					'flathip'=>$flathip,
					'oleg'=>$oleg,
					'xleg'=>$xleg,
					'dcode'=>$_POST['dcode'],
					'dpantsfabric'=>$_POST['dpantsfabric'],
			
				//	'obgid'=>$obgid,
				//	'obgnum'=>$vest['gnum'],
				//	'obgname'=>$vest['gname'],
					'bfrontlength'=>$_POST['bfrontlength'],
					'bbacklength'=>$_POST['bbacklength'],
					'bup'=>$_POST['bup'],
					'bcenter'=>$_POST['bcenter'],
					'bcode'=>$_POST['bcode'],
					'bbackfabric'=>$_POST['bbackfabric'],
			
				//	'otgid'=>$otgid,
				//	'otgnum'=>$tcloth['gnum'],
				//	'otgname'=>$tcloth['gname'],
				//	'tremark'=>$_POST['tremark'],			
					'tshoulderwidth1'=>$_POST['tshoulderwidth1'],
					'tshoulderwidth2'=>$_POST['tshoulderwidth2'],
					'tsleevewidth1'=>$_POST['tsleevewidth1'],
					'tsleevewidth2'=>$_POST['tsleevewidth2'],
					'tclothlength1'=>$_POST['tclothlength1'],
					'tclothlength2'=>$_POST['tclothlength2'],
					'tbreathsur1'=>$_POST['tbreathsur1'],
					'tbreathsur2'=>$_POST['tbreathsur2'],
					'twaistsur1'=>$_POST['twaistsur1'],
					'twaistsur2'=>$_POST['twaistsur2'],
					'thipsur1'=>$_POST['thipsur1'],
					'thipsur2'=>$_POST['thipsur2'],
					'tbreathwidth1'=>$_POST['tbreathwidth1'],
					'tbreathwidth2'=>$_POST['tbreathwidth2'],
					'tbackwidth1'=>$_POST['tbackwidth1'],
					'tbackwidth2'=>$_POST['tbackwidth2'],
					'tnecksur'=>$_POST['tnecksur'],
					'tneckstyle'=>$_POST['tneckstyle'],
					'tbosom'=>$_POST['tbosom'],
					'tsleevesur'=>$_POST['tsleevesur'],
					'tcode'=>$_POST['tcode'],
					'tclothfabric'=>$_POST['tclothfabric'],
				);
				$db=M('order');
				$result2=$db->save($receive2);
				if($result2){
						$this->success("修改成功",U('Admin/Employee/selforder',array('unum'=>$_POST['osunum'],'sid'=>$_POST['sid'])));
			}else 
				$this->error("修改失败",U('Admin/Employee/selforder',array('unum'=>$_POST['osunum'],'sid'=>$_POST['sid'])));
	
			}
		}
		//处理复选框
		
		}
	
	//个人查询
	public function selfsearch(){
		
		$searchcondition = I ( 'searchcondition','');
		$searchcontent = I('searchcontent','');
		$osunum=I('osunum','');
		if(!empty($searchcondition) && !empty($searchcontent)){
			import ( 'ORG.Util.Page' );
			//处理总监审核
			if($searchcondition=="inspectorverify"){
				if($searchcontent=="已通过")$searchcontent=1;
				else $searchcontent=0;
			}
			//处理店长审核
			if($searchcondition=="shopleaderverify"){
				if($searchcontent=="已通过")$searchcontent=1;
				else $searchcontent=0;
			}
			//处理是否打样
			if($searchcondition=="ispull"){
				if($searchcontent=="要打样")$searchcontent=1;
				else $searchcontent=0;
			}
			
			$condition[$searchcondition] = array('like','%'.$searchcontent.'%');
			//员工查询编号条件
			$condition['osunum']=$osunum;
			$count=M('order')->where($condition)->count ();
			$page=new Page($count,12);
			$limit=$page->firstRow . ',' . $page->listRows;
			$field=array('onum','reservenum','oscalenum','omname','ommale','omphone','bookdate','bookpulldate','bookgetdate','total','osunum','ispull','inspectorverify','shopleaderverify','opsname','pullok','pullstatus','goodsok','pullokdate','goodsokdate','repairlock');
			$order=M('order')->where($condition)->limit ( $limit )->order('bookdate desc,inspectorverify,shopleaderverify')->select ();
			$order=subtime($order);	
			//分配商品
				
			$shop=D('ShopRelation')->relation('goods')->where(array('sid'=>$_POST['sid']))->find();
			$possess=$shop['goods'];
			
			$cloth=shopposess($possess,1);
			$pants=shopposess($possess,2);
			$vest=shopposess($possess,3);
		
			$this->sid=$_POST['sid'];
			$this->osunum=$_POST['osunum'];
			$this->cloth=$cloth;
			$this->pants=$pants;
			$this->vest=$vest;
			$this->page = $page->show ();
			$this->order = $order;
			$this->time=time();
			$this->display('selforder');
		
		}
	}
// 个人删除订单
	public function deleteorder($onum) {
		
			if (! empty ($onum )) {
				$order = M ( "order" );
				$result = $order->delete ($onum);
				if (false !== $result) {
					
				} else {
					$this->error ( '删除出错！' );
				}
			} else {
				$this->error ( '帐号错误！' );
			}
		
	}
	
	//店铺订单查询
	public function shoporder(){
		
		import("ORG.Util.Page");
		$count=M('order')->where(array('ossname'=>$_GET['ossname']))->count();
		$page=new Page($count,12);
		$limit = $page->firstRow . ',' . $page->listRows;
		$field=array('onum','reservenum','oscalenum','omname','ommale','omphone','bookdate','bookpulldate','bookgetdate','total','osunum','ispull','inspectorverify','shopleaderverify','opsname','pullok','pullstatus','goodsok','pullokdate','goodsokdate','repairlock');
		$order=M('order')->where(array('ossname'=>$_GET['ossname']))->limit($limit)->field($field)->order('bookdate desc,inspectorverify,shopleaderverify')->select();
		$order=subtime($order);
		$this->order=$order;
		
		$shop=D('ShopRelation')->relation('goods')->where(array('sid'=>$_GET['sid']))->find();
		$possess=$shop['goods'];
		
		$cloth=shopposess($possess,1);
		$pants=shopposess($possess,2);
		$vest=shopposess($possess,3);
//		p($cloth);
//		p($pants);
//		p($vest);
		
		$this->sid=$_GET['sid'];
		$this->ossname=$_GET['ossname'];
		$this->cloth=$cloth;
		$this->pants=$pants;
		$this->vest=$vest;
		$this->page = $page->show ();
		$this->display();
	}
	//店铺订单读取
	public function readshoporder(){
		$order=D('OrderRelation')->relation(true)->where(array('onum'=>$_GET['onum']))->find();
		$this->order=$order;
		$this->ossname=$_GET['ossname'];
		$this->display();
	}
	//读取店铺返修单
	public function readshoprepair(){
		$repair=M('repair')->where(array('rid'=>$_GET['rid']))->find();
		$this->repair=$repair;
		$this->onum=$_GET['onum'];
		
		$this->display();
	}
//店铺订单查询
	public function shopsearch(){
		
		$searchcondition = I ( 'searchcondition','');
		$searchcontent = I('searchcontent','');
		$ossname=I('ossname','');
		if(!empty($searchcondition) && !empty($searchcontent)){
			import ( 'ORG.Util.Page' );
			//处理总监审核
			if($searchcondition=="inspectorverify"){
				if($searchcontent=="已通过")$searchcontent=1;
				else $searchcontent=0;
			}
			//处理店长审核
			if($searchcondition=="shopleaderverify"){
				if($searchcontent=="已通过")$searchcontent=1;
				else $searchcontent=0;
			}
			//处理是否打样
			if($searchcondition=="ispull"){
				if($searchcontent=="要打样")$searchcontent=1;
				else $searchcontent=0;
			}
			
			$condition[$searchcondition] = array('like','%'.$searchcontent.'%');
			//查询条件
			$condition['ossname']=$ossname;
			$count=M('order')->where($condition)->count ();
			$page=new Page($count,12);
			$limit=$page->firstRow . ',' . $page->listRows;
			$field=array('onum','reservenum','oscalenum','omname','ommale','omphone','bookdate','bookpulldate','bookgetdate','total','osunum','ispull','inspectorverify','shopleaderverify','opsname','pullok','pullstatus','goodsok','pullokdate','goodsokdate','repairlock');
			$order=M('order')->where($condition)->limit($limit)->field($field)->order('bookdate desc,inspectorverify,shopleaderverify')->select();
			$order=subtime($order);
			$this->order=$order;//分配商品
			
			$this->sid=$_POST['sid'];
			$this->ossname=$_POST['ossname'];
			$this->page = $page->show ();
			$this->order = $order;
			$this->display('shoporder');
		
		}
	}
//处理打样收发
	public function pullok($onum){
		if (! empty ($onum )) {
				$receive=array('onum'=>$onum,'pullok'=>1,);
				$result =M('order')->save($receive);
				
				$order=M(order)->where(array('onum'=>$onum))->find();
				$opsname=$order['opsname'];
				$shop=M('shop')->where(array('sname'=>$opsname))->find();
				$mail=$shop['smail'];
				$r=think_send_mail("{$mail}",'海彦',"打样完成","打样完成,订单号为:{$onum}.");
				
				if (false !== $result) {
					
				} else {
					$this->error ( '删除出错！' );
				}
			} else {
				$this->error ( '帐号错误！' );
			}
		}
	//处理成品收发
	public function shopok($onum){
		if (! empty ($onum )) {
				$date=date("Y-m-d");
				$receive=array('onum'=>$onum,'shopok'=>1,'okdate'=>$date,);
				$result =M('order')->save($receive);
				if (false !== $result) {
					
				} else {
					$this->error ( '删除出错！' );
				}
			} else {
				$this->error ( '帐号错误！' );
			}
		}
	//会员查询
	public function memb(){
		
		import("ORG.Util.Page");
		$count=M('memb')->count();
		$page=new Page($count,10);
		$limit = $page->firstRow . ',' . $page->listRows;
		$memb=M('memb')->limit($limit)->select();
		$this->memb=$memb;
		$this->page = $page->show ();
		$this->display();
	}

	// 添加会员
	public function insertmemb() {
				
		$receive=array(
			
			'mname'=>$_POST['mname'],
			'mmale'=>$_POST['mmale'],
			'mdate'=>$_POST['mdate'],
			'mmarrydate'=>$_POST['mmarrydate'],
			'mphone'=>$_POST['mphone'],
			'mhigh'=>$_POST['mhigh'],
			'mweight'=>$_POST['mweight'],
			'mmail'=>$_POST['mmail'],
			'mwechat'=>$_POST['mwechat'],
			'mstatus'=>'1',
			);
		
			$memb=M('memb')->add($receive);
			if($memb){
				$this->success("添加成功",U('Admin/Employee/memb'));
			}else 
				$this->error("添加失败",U('Admin/Employee/memb'));

	}	
//修改会员信息
	public function updatememb(){
		$receive=array(
			'mnum'=>$_POST['mnum'],
			'mname'=>$_POST['mname'],
			'mmale'=>$_POST['mmale'],
			'mstatus'=>$_POST['mstatus'],
			'mpoints'=>$_POST['mpoints'],
			'mdate'=>$_POST['mdate'],
			'mphone'=>$_POST['mphone'],
			'mmarrydate'=>$_POST['mmarrydate'],
			'mhigh'=>$_POST['mhigh'],
			'mweight'=>$_POST['mweight'],
			'mmail'=>$_POST['mmail'],
			'mwechat'=>$_POST['mwechat'],
			);
		
			$memb=M('memb')->save($receive);
			if($memb){
				$this->success("修改成功");
			}else 
				$this->error("修改失败");
		
	}
	//会员查询
	public function searchmemb(){
	
	$searchcondition = I ( 'searchcondition','');
	$searchcontent = I('searchcontent','');
			if(!empty($searchcondition) && !empty($searchcontent)){
			import ( 'ORG.Util.Page' );
			//处理性别
			if($searchcondition=="mmale"){
				if($searchcontent=="男")$searchcontent=1;
				else $searchcontent=0;
			}
			//处理状态
			if($searchcondition=="mstatus"){
				if($searchcontent=="开启")$searchcontent=1;
				else $searchcontent=0;
			}
			$condition[$searchcondition] = array('like','%'.$searchcontent.'%');
			$count=M('memb')->where($condition)->count ();
			$page=new Page($count,10);
			$limit=$page->firstRow . ',' . $page->listRows;
			$memb=M('memb')->where($condition)->limit ( $limit )->select ();
			$this->page = $page->show ();
			$this->memb = $memb;
			$this->display('memb');
		
		}
	}
	
	//处理流程修改
	public function readExpressHandle(){
		
		if(empty($_POST['sexpress'])){
			$sexpress='';
		}else{
			$sexpress=$_POST['sexpress'];
		}
		if(empty($_POST['sexpressnum'])){
			$sexpressnum='';
		}else{
			$sexpressnum=$_POST['sexpressnum'];
		}
		
		if($_POST['sgetstatus']=='1'){
			$reco=array('onum'=>$_POST['onum'],'pullstatus'=>'2',);
			$order=M('order')->save($reco);
		}
		
		
		if(!empty($_POST['sexpressnum'])){
			$reco=array('onum'=>$_POST['onum'],'pullstatus'=>'3',);
			$order=M('order')->save($reco);
		}
		
		if($_POST['eclass']=="样品"){
			if($_POST['okstatus']=='1'){
				$recop=array('onum'=>$_POST['onum'],'pullok'=>'1','pullstatus'=>'0','pullokdate'=>time(),);
				$order=M('order')->save($recop);
			}else{
				$recop=array('onum'=>$_POST['onum'],'pullok'=>'0',);
				$order=M('order')->save($recop);
			}
		}
		else{
			if($_POST['okstatus']=='1'){
				$recop=array('onum'=>$_POST['onum'],'goodsok'=>'1','goodsokdate'=>time(),);
				$order=M('order')->save($recop);
			}else{
				$recop=array('onum'=>$_POST['onum'],'goodsok'=>'0',);
				$order=M('order')->save($recop);
			}
			
		}
		$receive=array(
			'eid'=>$_POST['eid'],
			'sexpress'=>$sexpress,
			'sexpressnum'=>$sexpressnum,
			'sgetstatus'=>$_POST['sgetstatus'],
		);
		
		$db=M('express');
		$express=$db->save($receive);
		
		if($express || $order){
			
				$order=M('order')->where(array('onum'=>$_POST['onum']))->field(array('opsname'))->find();
				$shop=M('shop')->where(array('sname'=>$order["opsname"]))->find();
				$mail=$shop["smail"];
				$r=think_send_mail("{$mail}",'海彦',"新物流","有新快递;快递公司:{$sexpress},物流号：{$sexpressnum},合订号为:{$_POST['onum']}.");
					
				$this->success("修改成功");
			}else 
				$this->error("未修改");
	}	
	//处理添加返修单
	public function addRepair(){
		$db=M('repair');
		$numResult=$db->where(array('rnum'=>$_POST['rnum']))->find();
		
		if(empty($numResult)){
				$receive=array(
				'rnum'=>$_POST['rnum'],
				'isback'=>$_POST['isback'],
				'senddate'=>$_POST['senddate'],
				'getdate'=>$_POST['getdate'],
				'upremark1'=>$_POST['upremark1'],
				'downremark1'=>$_POST['downremark1'],
				'backremark1'=>$_POST['backremark1'],
				'rphoto'=>$_POST['rphoto'],
				
			);
			$repair=M('repair')->add($receive);
			$merge=array('repair_id'=>$repair,'order_num'=>$_POST['onum']);
			$result=M('repair_order')->add($merge);
			if($repair){
				//改变repairlock
				$reco=array('onum'=>$_POST['onum'],'repairlock'=>0,'repairid'=>$repair,);
				$order=M('order')->save($reco);
				$this->success("添加成功");
			}else 
				$this->error("添加失败");
			
		}
		else{
			
			$this->error("改订单已经存在");
		}
	}
	//读取返修单
	public function readrepair(){
		$repair=M('repair')->where(array('rid'=>$_GET['rid']))->find();
		$this->sid=$_GET['sid'];
		$this->osunum=$_GET['osunum'];
		$this->repair=$repair;
		$this->onum=$_GET['onum'];
		
		$this->display();
	}
	
	public function readRepairHandle(){
		$receive=array(
			'rid'=>$_POST['rid'],
			'rnum'=>$_POST['rnum'],
			'isback'=>$_POST['isback'],
			'senddate'=>$_POST['senddate'],
			'getdate'=>$_POST['getdate'],
			'upremark1'=>$_POST['upremark1'],
			'downremark1'=>$_POST['downremark1'],
			'backremark1'=>$_POST['backremark1'],
			'rphoto'=>$_POST['rphoto'],
		);
		$repair=M('repair')->save($receive);
		if($repair){
				$this->success("修改成功");
			}else 
				$this->error("修改失败");
	}
	
}