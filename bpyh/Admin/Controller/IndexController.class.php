<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	if(session('mg_name')==null){
    		$this->redirect('User/login');
    	}else{
    		$mg_name=session('mg_name');
    		$mg_role_id=session('mg_role_id');
    		$this->assign('mg_name',$mg_name);
    		$sql="select * from vo_role where role_id=".$mg_role_id;
    		$rinfo=D()->query($sql);
    		$auth_ids=$rinfo[0]['role_auth_ids'];
    		$sql="select * from vo_auth where auth_level=0 and auth_id in ($auth_ids)";
    		$pinfo=D()->query($sql); 
    		$sql="select * from vo_auth where auth_level=1 and auth_id in ($auth_ids)";
    		$sinfo=D()->query($sql);    		
    		$this->assign('pinfo',$pinfo);
    		$this->assign('sinfo',$sinfo);
    		$this->display();
    	}
        
    }

    	
    	
   }