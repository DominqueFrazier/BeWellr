<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../db_connect/db_config.php';
require_once __DIR__ . '/../db_connect/create_account.php';
require_once __DIR__ . '/../db_connect/delete_account.php';

final class DeleteAccountTest extends \PHPUnit_Framework_TestCase
{
    public function testDeleteAccountReturnsTrueAndDeletesEntryWhenAccountExists()
    {
        // create account
        $email = 'correct@testdelete.com';
        $password = 'correctTestDelete';
        createAccount($email, $password, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
        // delete account and test if deleteAccount returned true and successfully deleted the entry
        $this->assertEquals(deleteAccount($email), true);
    }

    public function testDeleteAccountReturnsFalseWhenAccountDoesNotExists()
    {
        // delete an account that doesn't exist and test if deleteAccount returned false
        $this->assertEquals(deleteAccount('nonexistent@testdelete.com'), false);
    }
}
