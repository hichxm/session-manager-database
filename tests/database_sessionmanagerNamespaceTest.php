<?php

use Hichxm\SessionManager\Session\DATABASE_SessionManager;

/**
 * Class database_sessionmanagerNamespaceTest
 */
class database_sessionmanagerNamespaceTest extends \PHPUnit\Framework\TestCase {

    /**
     * @test
     */
    public function check_namespace_work_with_psr_4()
    {
        $session_method = new DATABASE_SessionManager();

        $this->assertTrue(true);
    }

}