<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
    public function index(){
    	$data=M('t1')->select();
    	$rs=M('t1')->find();
    	$rs=M('t1')->add(['uname'=>'fsdf','pwd'=>'fdsf']);
    	$rs=M('t1')->where('id in 30')->delete();
    	//$rs=M('t1')->where('id=30')->save(['uname'=>'aaaaaaa']);
    	dump($rs);
        $data1 = '张三'; 
		$data2 = [ 'name' => '李四', 'age'  => 18, 'sex'  => '男'];
		$data3 = [
		    [ 'name' => '李四1', 'age'  => 181, 'sex'  => '男1'],
		    [ 'name' => '李四2', 'age'  => 182, 'sex'  => '男2'],
		    [ 'name' => '李四3', 'age'  => 183, 'sex'  => '男3']
		];
		$this->assign('data1',$data1);
		$this->assign('data2',$data2);
		$this->assign('data3',$data3);
		$this->display('index');
    }
}