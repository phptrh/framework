<?php
namespace Home\Controller;
use Think\Controller;
class MsgController extends Controller {
    public function index(){
    	$msgs=M('msg')->select();
    	$this->assign("msgs",$msgs);
        $this->display('index');
    }
    //添加留言
    public function add(){
    	if(IS_POST){
    		$postData=I('post.');
    		$postData['created_at']=$postData['updated_at']=time();
    		$rs=M('msg')->add($postData);
    		if($rs){
    			$this->success('发送成功',U('msg/index'));
    		}else{
    			$this->error("发送失败");
    		}
    	}
    }
    //查询留言
    public function query(){
        if(IS_POST){
            $time1=strtotime(I('post.time1'))?:0;
            $time2=strtotime(I('post.time2'))?:0;
            $msgs=M('msg')->where("created_at>=$time1 and created_at<=$time2")->select();
            $this->assign("msgs",$msgs);
            $this->display('index');
        }
    }
}