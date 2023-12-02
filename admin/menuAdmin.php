<?php
@$page = $_GET['page'];
switch ($page) {
	// Admin
	case 'login';
		include '../login/login.php';
		break;
	case 'register';
		include '../login/register.php';
		break;
	case 'dashboard';
		include './dashboard.php';
		break;
	default:
		include 'login/login.php';
		break;
}
?>