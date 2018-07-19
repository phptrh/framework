	hello!
	<?=$username ?>
	<?php 
		foreach($arr as $k=>$v){
			echo '<br>'.$k.'-'.$v;
		}

	; ?>
	<?php foreach($arr as $k=>$v): ?>
		<br><?=$k?>-<?=$v?>
	<?php endforeach; ?>