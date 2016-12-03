<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	if(session('mg_name')==null){
    		$this->redirect('User/login');
    	}else{
    		$mg_name=session('mg_name');
    		$this->assign('mg_name',$mg_name);
    		$this->display();
    	}
        
    }

    	
    	
   }