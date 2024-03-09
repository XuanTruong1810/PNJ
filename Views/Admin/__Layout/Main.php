<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
switch ($page) {
    case 'home':
        include '../Admin/User.php';
        break;
    case 'orders':
        include '../Admin/orders.php';
        break;
    case 'employee':
        include '../Admin/Employee.php';
        break;
    case 'stores':
        include '../Customer/history.php';
        break;
    case 'products':
        include '../Admin/products.php';
        break;
    case 'orders-import-product':
        include '../Customer/history.php';
        break;
    case 'customer':
        include '../Customer/history.php';
        break;
    case 'statistical':
        include '../Customer/history.php';
        break;
    case 'orderdetail':
        include '../Admin/orderDetail.php';
        break;
    default:
        include '404.php';
        break;
}
