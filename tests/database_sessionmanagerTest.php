<?php

use Hichxm\SessionManager\Session\DATABASE_SessionManager;
use Hichxm\SessionManager\SessionManager;

/**
 * Class database_sessionmanagerTest
 */
class database_sessionmanagerTest extends \PHPUnit\Framework\TestCase {

    /**
     * @test
     */
    public function check_if_work_with_default_option()
    {
        $session_method = new DATABASE_SessionManager([
            "type" => "mysql",
            "name" => "sessionmanager",
            "server" => "127.0.0.1",
            "port" => 3306,
            "username" => "root",
            "password" => ""
        ]);
        $session = new SessionManager($session_method);

        //Delete table
        $session->bridge->database->query("
            DROP TABLE `sessionmanager`;
        ");
    }


}