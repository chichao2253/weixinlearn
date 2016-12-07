<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
    	
    	if(!empty($_POST)){
    		$use=new \Model\ManagerModel();
    		$res=$use->checkNamePwd($_POST['username'],$_POST['password']);
    		if($res===false){
    			echo "登陆失败";
    		}else{
    			session('[start]');
    			session('mg_name',$res['mg_name']);
    			session('mg_role_id',$res['mg_role_id']);    			
    			$this->redirect('Index/index');    			
    		}
    		
    	}else{
    		$this->display();
    	}
    	
    }
    public function signup(){
    	$user=D('User');
		if(!empty($_POST)){
			$verify=new \Think\Verify();
			if($verify->check($_POST['chapcher'])){
				$rs=$user->create();
				$rs=$user->add();
				if($rs){
				$this->success('注册成功','Index/inex');
				}else{
				$this->error('注册失败','Index/signup');
				}
			}else{
				echo "验证码错误";
			}			
		}else{
			$this->display();
		}
    	
    	
    }
}