<?php
	if(isset($_REQUEST["destination"])){
		header("Location: {$_REQUEST["destination"]}");
	}else if(isset($_SERVER["HTTP_REFERER"])){
		header("Location: {$_SERVER["HTTP_REFERER"]}");
	}else{
		/* some fallback, maybe redirect to index.php */
	}
?>
