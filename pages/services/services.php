<?php
    @$page = $_GET['action'];
        switch ($page) {
        case 'iso-9001':
            include 'iso-9001.php';
        break;
        case 'iso-14001':
            include 'iso-14001.php';
        break;
        case 'ohsas-18001':
            include 'ohsas-18001.php';
        break;
        case 'iso-45001':
            include 'iso-45001.php';
        break;
        default:
            include 'show.php';
        break;
    }
?>