<?php
//declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../db_connect/db_config.php';
require_once __DIR__ . '/../db_connect/create_account.php';
require_once __DIR__ . '/../db_connect/delete_account.php';
require_once __DIR__ . '/../db_connect/verify_password.php';

final class VerifyPasswordTest extends \PHPUnit_Framework_TestCase
{
    public function testVerifyPasswordReturnsTrueWhenCorrect()
    {
        $email = 'correct@test.com';
        $password = 'correctTest';
        createAccount($email, $password, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
        $result = verifyPassword($email, $password);
        deleteAccount($email);
        $this->assertEquals($result, true);
    }

    public function testVerifyPasswordReturnsFalseWhenIncorrect()
    {
        $email = 'incorrect@test.com';
        $correctPassword = 'correctTest';
        $incorrectPassword = 'incorrectTest';
        createAccount($email, $correctPassword, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
        $result = verifyPassword($email, $incorrectPassword);
        deleteAccount($email);
        $this->assertEquals($result, false);
    }
}
