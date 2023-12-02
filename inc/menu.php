<?php
@$page = $_GET['page'];
switch ($page) {
	//admin
	case 'about':
		include 'pages/about/about.php';
		break;
	case 'team':
		include 'pages/team/team.php';
		break;
	case 'pricing':
		include 'pages/pricing/pricing.php';
		break;
	case 'projects':
		include 'pages/projects/projects.php';
		break;
	case 'services':
		include 'pages/services/services.php';
		break;
	case 'other-services':
		include 'pages/other-services/other-services.php';
		break;
	case 'news':
		include 'pages/news/news.php';
		break;
	case 'contact':
		include 'pages/contact/contact.php';
		break;
	case 'check-cert':
		include 'pages/check-cert/check-cert.php';
		break;
	default:
		include 'pages/home/home.php';
		break;
}
?>