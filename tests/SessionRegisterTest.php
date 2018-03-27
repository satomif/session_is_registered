<?php
namespace Satomif\SessionRegister\Tests;

class SessionIsRegisteredTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        session_destroy();
    }

    /**
     * @runInSeparateProcess
     */
    public function testSessionIsRegistered()
    {
        session_start();
        $_SESSION['hello'] = 'world';
        $return = \session_is_registered('hello');

        $this->assertSame('world', $_SESSION['hello']);
        $this->assertTrue($return);
    }

    /**
     * @runInSeparateProcess
     */
    public function testSessionRegisterFail()
    {
        session_start();
        $return = \session_is_registered('hello');

        $this->assertFalse($return);
    }
}