                                                                            <?php
namespace Model;
use Think\Model;



class ManagerModel extends Model {
	public function checkNamePwd($name,$pwd){
		
		$info = $this->getBymg_name($name);
		var_dump($info);
	}
?>