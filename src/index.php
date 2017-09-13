<?php
    header("Content-type: text/css; charset: UTF-8");
	if($_GET['theme'] == 'dark') include('octo-dark.css');
	else include('octo-light.css');
?>