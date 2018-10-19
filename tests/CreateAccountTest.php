<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../db_connect/db_config.php';
require_once __DIR__ . '/../db_connect/create_account.php';
require_once __DIR__ . '/../db_connect/delete_account.php';

final class CreateAccountTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateAccountReturnsTrue()
    {
        // create account
        $email = 'correct@testcreate.com';
        $password = 'correctTestCreate';
        $result = createAccount($email, $password, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
        // delete account and test if deleteAccount returned true and successfully deleted the entry
        deleteAccount($email);
        $this->assertEquals($result, true);
    }
}
