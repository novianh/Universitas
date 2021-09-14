<?php
	$id = $_GET['id'];
	unlink('img/'.$id);
	header('Location: FORM.php');
?>