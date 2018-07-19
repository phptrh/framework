<?php
/**
 * @name IndexController
 * @author x2nnu6qmzcxip7v\administrator
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class MsgController extends BaseController {

	//列表
	public function indexAction() {
		$msg=new MsgModel;
		$msgs=$msg->get('select * from msg');
		$this->getView()->assign('msgs',$msgs);
		return $this->getView()->render('msg/index.phtml');
	}
	//添加
	public function addAction(){
		if($this->getRequest()->isPost()){
			$uname=$this->getRequest()->getPost('uname');
			$content=$this->getRequest()->getPost('content');
			$rs=(new MsgModel)->add("insert into msg values(null,'{$uname}','{$content}',".time().",".time().")");
			if($rs){
				$this->success('index','添加成功');
			}else{
				$this->error("index",'添加失败');
			}
		}
	}
}
