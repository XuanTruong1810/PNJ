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
        return "../../Public";
    }
    public function ConnectString()
    {
        $jsonData = file_get_contents(__DIR__ . "../../config.json");
        $config = json_decode($jsonData, true);
        if (isset($config['db_connect_string'])) {
            return $config['db_connect_string'];
        } else {
            return null;
        }
    }
}
