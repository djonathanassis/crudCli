<?php


namespace Source\Core;

use PDO;

class Connect
{
    private const DBNAME = 'banco';
    private const HOST = 'localhost';
    private const USER = 'root';
    private const PASS = '';
    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;

    /**
     * @return PDO
     */
    public static function getInstance(): PDO
    {

        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=" . self::HOST . ";dbname=" . self::DBNAME,
                    self::USER,
                    self::PASS,
                    self::OPTIONS
                );
            } catch (\PDOException $exception) {
                echo "ERRO: " . $exception->getMessage();
                exit;
            }
        }
        return self::$instance;
    }


}