<?php if (!defined('THINK_PATH')) exit(); echo ($data1); ?>
<hr>
<?php if($data2['sex']= '男' ): ?>大大
    <?php else: ?> 小小<?php endif; ?>
<hr>
<?php if(is_array($data3)): foreach($data3 as $key=>$data): echo ($data["name"]); ?>|<?php echo ($data["age"]); endforeach; endif; ?>