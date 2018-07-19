<?php 
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Msg;
class MsgController extends Controller
{
	public $layout=false;
	public $enableCsrfValidation=false;
	public function actionIndex(){
		$msgs=Msg::find()->all();
		return $this->render('index',compact('msgs'));
	}
	//添加留言
	public function actionAdd(){
		if(Yii::$app->request->isPost){
			$msg=new Msg;
			$msg->uname=Yii::$app->request->post('uname');
			$msg->content=Yii::$app->request->post('content');
			$msg->created_at=$msg->updated_at=time();
			$rs=$msg->save();
			return $this->redirect(['/msg']);
		}
	}
}