<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
switch ($page) {
    case 'home':
        include '../Customer/index.php';
        break;
    case 'login':
        include '../Customer/Login.php';
        break;
    default:
        include '404.php';
        break;
}
