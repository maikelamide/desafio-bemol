<?php
	//define('DS', DIRECTORY_SEPARATOR);
	//define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	//define('SITE_ROOT', ROOT.DS.'scac');
	//$raiz = SITE_ROOT.DS.'index';
	
	session_start();
	session_unset();
	session_destroy();
	header('Location: ../');
?>