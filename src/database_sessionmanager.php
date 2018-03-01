<?php

namespace Hichxm\SessionManager\Session;

use Medoo\Medoo;
use Rych\Random\Random;
use SessionInterface;

/**
 * Class DATABASE_SessionManager
 * @package Hichxm\SessionManager\Session
 */
class DATABASE_SessionManager implements SessionInterface {

    private $database;
    private $table = "sessionmanager";
    private $token;
    private $name;
    private $length;

    /**
     * SessionInterface constructor.
     * @param array $database
     * @param array $option
     */
    public function __construct($database = [], $option = [])
    {
        //Initialise option
        $option_default = [
            "name" => "PHPSESSID",
            "length" => 25
        ];
        $option_default = array_merge($option_default, $option);

        $this->name = $option_default['name'];
        $this->length = $option_default['length'];

        //Initialise database option
        $database_default = [
            "type" => "mysql",
            "name" => "",
            "server" => "localhost",
            "port" => 3306,
            "username" => "root",
            "password" => ""
        ];
        $database_default = array_merge($database_default, $database);

        if ($database_default['type'] === "sqlite") {
            $this->database = new Medoo([
                'database_type' => $database_default['type'],
                'database_file' => $database_default['file']
            ]);
        } else {
            $this->database = new Medoo([
                'database_type' => $database_default['type'],
                'database_name' => $database_default['name'],
                'server' => $database_default['server'] . ":" . $database_default['port'],
                'username' => $database_default['username'],
                'password' => $database_default['password']
            ]);
        }
    }

    /**
     * Stop current session.
     * @return void
     */
    public function stop()
    {
        // TODO: Implement stop() method.
    }

    /**
     * Start session.
     * @return void
     */
    public function start()
    {
        // TODO: Implement start() method.
    }

    /**
     * Get value of $key
     * @param string $key
     * @return string|array|int|boolean|null
     */
    public function get($key)
    {
        // TODO: Implement get() method.
    }

    /**
     * Set value of $key
     * @param string $key
     * @param string|array|int|boolean $value
     * @return void
     */
    public function set($key, $value)
    {
        // TODO: Implement set() method.
    }

    /**
     * Delete value of $key
     * @param string $key
     * @return void
     */
    public function unset($key)
    {
        // TODO: Implement unset() method.
    }


    /**
     * @param int $length
     * @return string
     */
    private function generateToken($length = 25) {
        $string = new Random();
        $string = $string->getRandomString($length);
        $string = str_replace(".", "A", $string);
        $string = str_replace("/", "B", $string);

        $req = $this->database->select($this->table, "id", [
            "token" => $string
        ]);

        if (empty($req)){
            $this->token = $string;
            return $string;
        }

        $this->generateToken($length);
    }

    /**
     * @return void
     */
    private function generateTable()
    {
        $this->database->query(
            "CREATE TABLE IF NOT EXISTS `". $this->table ."` (
                    `id` INT(11) NOT NULL AUTO_INCREMENT,
                    `token` VARCHAR(25) NOT NULL,
                    `name` VARCHAR(50) NULL DEFAULT NULL,
                    `value` LONGTEXT NULL,
                    `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
                    PRIMARY KEY (`id`))
                COLLATE='utf8_general_ci'
                ENGINE=MyISAM;
                ");
    }
}