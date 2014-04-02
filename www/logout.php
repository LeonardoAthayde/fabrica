<?php
	require(dirname(__FILE__) . '/../includes/prepend.inc.php');

	unset($_SESSION['login_id']);
	QApplication::Redirect(__VIRTUAL_DIRECTORY__);
?>