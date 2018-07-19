<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msg extends CI_Controller {

	
	public function index()
	{
		$this->load->model('MsgModel');
		$msgs=$this->MsgModel->all();
		$this->load->view('msg/index',['msgs'=>$msgs]);
	}
	//添加
	public function add(){
		if(IS_POST){
			$postData=$this->input->post();
			$postData['created_at']=$postData['updated_at']=time();
			$this->load->model('MsgModel');
			$rs=$this->MsgModel->add($postData);
			if($rs){
				echo "<script>alert('留言成功');location.href='".site_url('msg/index')."'</script>";
			}else{
				echo "<script>alert('留言失败');location.href='".site_url('msg/index')."'</script>";
			}
		}
	}
}
