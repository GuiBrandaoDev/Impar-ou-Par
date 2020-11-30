<?php
	$numero = $_POST['num1'];
	
	if ($numero%2 == 0) {
		echo 'par';
	}else {
		echo 'impar';
	}
?>