<?php
/**
 * @name IndexController
 * @author x2nnu6qmzcxip7v\administrator
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class TestController extends Yaf_Controller_Abstract {

	
	public function indexAction() {
		$t1=new T1Model;
		$rs=$t1->add('insert into t1 values(null,"yyy","yyy")');
		var_dump($rs);
		die;
		$t1s=$t1->get('select * from t1');
		print_r($t1s);
		return false;
	}
}
