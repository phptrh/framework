<?php echo $data1; ?>
<hr>
<?php if($data2['sex']=='男'): ?>
屌丝
<?php else: ?>
yyy
<?php endif; ?>
<hr>
<?php foreach($data3 as $data): ?>
<?=$data['name']?>-
<?=$data['age']?>-
<?=$data['sex']?>
<br>
<?php endforeach; ?>