<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "网站首页";
    }
    public function getCode(){
    	$appid="wx1c4bba78ecc7cc24";
    	$redirect_uri="weixin.highyanan.com";
    	$url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$redirect_uri."&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect";
    }
}