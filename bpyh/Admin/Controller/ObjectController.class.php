<?php
namespace Admin\Controller;
use Think\Controller;
class ObjectController extends Controller {
    public function add(){
    	if(!empty($_POST)){
    		$_POST['add_time']=date('Y-m-d H:i:s',time());
    		$_POST['add_user']=session('mg_name');
    		echo $_POST['staus'];
    		if($_POST['staus']=='保存'){
    			$_POST['staus']=0;
    		}else{
    			$_POST['staus']=1;
    		}
    		if(!empty($_FILES)){
    			$config=array(
    			'rootPath'=>'./bpyh/public/',
    			'savePath'=>'upload/'
    			);
    			$uploadpic= new \Think\Upload($config);
    			$uploadfile= new \Think\Upload($config);
    			$rspic=$uploadpic->uploadOne($_FILES['pic']);
    			$rsfujian=$uploadfile->uploadOne($_FILES['fujian']);
    				$_POST['pic']=$rspic['savepath'].$rspic['savename'];
    				$_POST['fujian']=$rsfujian['savepath'].$rsfujian['savename'];
    		}
		    	$obj=M('Object');
		    	$obj->create();
		    	$addrs=$obj->add();
		    	if($addrs){
		    		
		    		echo "添加成功";
		    	}else{
		    		echo "添加失败";
		    	}
    		
    	}else{
    		$this->display();
    	}
    	
    }
    public function edict(){
    	if(!empty($_GET)){
    		$obj=M('Object');
    		$rs=$obj->select();
    		return $rs;
    	}
    }
    public function addpic (){
    	if(!empty($_POST)){
    		
    		if(!empty($_FILES)){
    			$config=array(
    			'rootPath'=>'./bpyh/public/',
    			'savePath'=>'upload/'
    			);
    			$uploadpic= new \Think\Upload($config);
    			$uploadfile= new \Think\Upload($config);
    			$rspic=$uploadpic->uploadOne($_FILES['pic']);
    			$rsfujian=$uploadfile->uploadOne($_FILES['fujian']);
    				$_POST['pic']=$rspic['savepath'].$rspic['savename'];
    				$_POST['fujian']=$rsfujian['savepath'].$rsfujian['savename'];
    		}
		    	$obj=M('Pic');
		    	$obj->create();
		    	$addrs=$obj->add();
		    	if($addrs){
		    		$arr=array(
		    			'errcode'=>1,
		    			'resultObj'=>$_POST['pic']
		    		);
		    		echo json_encode($arr);
		    	}else{
		    		$arr=array(
		    			'errcode'=>-1,
		    			'resultObj'=>$_POST['pic']
		    		);
		    		echo json_encode($arr);
		    	}
    		
    	}
    }
    public function approve(){
    	
    	$this->display();
    }
    public function ajaxshenpi(){
    	if(!empty($_GET)){
    		$obj=M('Object');
    		if($_GET['staus']==2){
    			$data['staus']  = 2;
    			$data['err']=1;
    		}else{
    			$data['staus']  = 0;
    			$data['err']=-1;
    		}
    		
    		$res=$obj->where("ob_id='".$_GET['id']."'")->save($data);
    		if($res){
    			
    			$this->ajaxReturn($data,'json');
    		}
    		$data['err']=0;
    		$this->ajaxReturn($data,'json');
    	}
    	
    }
    public function shenpi(){
    	if(!empty($_GET)){
    		$obj=M('Object');
    		$rs=$obj->where('staus=1||staus=0')->select() ;
    		echo json_encode($rs);
    	}else{
    		$this->display();
    	}
    }
    public function guanli(){
    	
    	if(!empty($_GET)){
    		$obj=M('Object');
    		$rs=$obj->select();
    		echo json_encode($rs);
    	}else{
    		$this->display();
    	}
    }
    public function stop(){
    	$this->display();
    }
    public function chaxun(){
    	
    	if(!empty($_GET)){
    		$obj=M('Object');
    		$biaoti=$_GET['biaoti'];
    		$select=$_GET['select'];
    		$select1=$_GET['select1'];
    		$add_user=$_GET['add_user'];
    		$where=array(
    			'staus'=>1,
    			'biaoti'=>$biaoti,
    			'select'=>$select,
    			'select1'=>$select1,
				'add_name'=>$add_user
			);
    		$rs=$obj->where($where)->select();
    		echo json_encode($rs);
    	}else{
    		$this->display();
    	}
    }
    	
   }