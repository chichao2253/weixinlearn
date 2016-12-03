<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller {
    public function index(){
        echo "后台首页";
    }
    public function verifyImg(){
    	$config=array(
    	'imageH'=>36,
    	'imageW'=>127,
    	'fontSize'=>14,
    	'length'=>4,
    	);
    	$verify=new \Think\Verify($config);
    	$verify->entry();
    }
}