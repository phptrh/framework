<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	
	public function index()
	{
		$this->load->model('t1');
		// $t1s=$this->t1->all();
		// foreach($t1s as $t1){
		// 	echo $t1['uname'].'-'.$t1['pwd'].'<br>';
		// }
		//$rs=$this->t1->add(['uname'=>'aa','pwd'=>'dasd']);
		$rs=$this->t1->del(37);
		var_dump($rs);
		$data1 = '张三'; 
		$data2 = [ 'name' => '李四', 'age'  => 18, 'sex'  => '男'];
		$data3 = [
		    [ 'name' => '李四1', 'age'  => 181, 'sex'  => '男1'],
		    [ 'name' => '李四2', 'age'  => 182, 'sex'  => '男2'],
		    [ 'name' => '李四3', 'age'  => 183, 'sex'  => '男3']
		];
		$this->load->view('test/index',compact('data1','data2','data3'));
	}
}
