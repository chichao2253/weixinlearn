<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "网站首页";
    }
    public function getBaseInfo(){
    	header("Content-type:text/html;charset=utf-8");
    	$appid="wxbc1a412f433ca202";
    	$redirect_uri=urlencode("http://weixin.highyanan.com/index.php/home/index/getUserOpenId");
    	$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$redirect_uri."&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect";
    	header('location:'.$url);
    }
    public function getUserOpenId(){
    	header("Content-type:text/html;charset=utf-8");
    	$appid="wxbc1a412f433ca202";
    	$secret="29f1ea3f1a72b8a2e06c0c29f29257e8";
    	$code=$_GET['code'];
    	$url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$secret."&code=".$code."&grant_type=authorization_code ";
    	$html = file_get_contents($url);
    	$de_json = json_decode($html,TRUE);
    	var_dump($de_json);
    }
}