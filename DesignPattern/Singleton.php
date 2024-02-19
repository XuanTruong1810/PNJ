<?php
class Singleton
{
    private static $instance;

    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function PublicFile()
    {
        return "../Public";
    }
    public function ConnectString()
    {
        return "Server=XuanTruong;Database=PNJ;Uid=XuanTruong;Pwd=XuanTruong123;";
    }
}
