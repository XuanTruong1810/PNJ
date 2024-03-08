<?php

$action = isset($_GET['action']) ? $_GET['action'] : "index";
$controller = new ProductController();

if (method_exists($controller, $action)) {
    echo ($controller->$action());
}
class ProductController
{
    public function index()
    {
    }
    public function product()
    {
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $responseData = (object) [
                'page' => $page,
            ];


            header('Content-Type: application/json');
            $jsonData = json_encode(["data" => $responseData]);
            return $jsonData;
        }
    }
}
