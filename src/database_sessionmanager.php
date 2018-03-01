<?php

namespace Hichxm\SessionManager\Session;

use Medoo\Medoo;
use SessionInterface;

/**
 * Class DATABASE_SessionManager
 * @package Hichxm\SessionManager\Session
 */
class DATABASE_SessionManager implements SessionInterface {

    private $database;

    /**
     * SessionInterface constructor.
     * @param array $database
     * @param array $option
     */
    public function __construct($database = [], $option = [])
    {
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

        $this->database = new Medoo([
            
        ]);
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
}