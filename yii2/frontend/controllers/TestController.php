<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\T1;
class TestController extends Controller
{
    public $layout=false;
    //创建的index方法（注：每个方法必须假action前缀）
    public function actionIndex()
    {
        $t1=new T1;
        $t1->uname=str_shuffle('fafdasdffsd');
        $t1->pwd=mt_rand();
        $rs=$t1->save();
        var_dump($rs);
      $t1s=T1::find()->all();
      foreach ($t1s as $v) {
          echo $v['uname'].'-'.$v['pwd'].'<br>';
      }
        
    }

    //创建的add方法（注：每个方法必须假action前缀）
    public function actionAdd()
    {
        echo  'add';
    }
}