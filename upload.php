<?php


	$url = $_GET['url'];

	$nbytes = file_put_contents("daru_badnaam.mp3", fopen($url, 'r'));

	echo $nbytes/(1024*1024)."MB";

?>