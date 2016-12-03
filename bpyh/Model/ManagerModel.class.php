<?php
namespace Model;
use Think\Model;
class ManagerModel extends Model {
	public function checkNamePwd($name,$pwd){
		$info= $this->where("mg_name='$name'")->find();
		if($info==null){
			return false;
		}else{
			if($name!=$info['mg_name']){
				return false;
			}else{
				if($pwd==$info['mg_pwd']){
					return $info;
				}else{
					return false;
				}
			}
			
		}
		
	}
}
?>