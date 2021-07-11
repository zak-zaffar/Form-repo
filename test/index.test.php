<?php

include_once '../src/index.php';

class TestRunner {
    static $mockFormData = [
        'firstname' => 'Zak',
        'lastname' => 'Zaffar',
        'email' => 'example@example.com',
        'phonenumber' => '02222222222',
        'address1' => 'Hello road',
        'address2' => 'Goodbye street',
        'town' => 'London',
        'county' => 'London',
        'postcode' => 'CL1 1CL',
        'country' => 'United Country',
        'description' => 'CV application',
        'filename' => 'test.png',
    ];

    static function runTests() {
        echo "Starting tests for index.php\n";
        echo "======\n";

        $runResult = self::test_run();
        $verifyDataResult = self::test_verifyData();
        $packageDataResult = self::test_packageData();
        $sendEmailResult = self::test_sendEmail();

        if (!$runResult || !$verifyDataResult || !$packageDataResult || !$sendEmailResult) {
            throw new Error('Tests failed. Check above for details.');
        }

        echo "======\n";
        echo "Index.php tests passed.";
    }

    static function test_run() {
        echo "Testing run function\n";
        try {
            run(self::$mockFormData);
        } catch (Exception $e) {
            echo "O Function run failed with an exception.\n";
            print_r($e);

            return false;
        }

        echo "X Function run passed tests.\n";
        return true;
    }

    static function test_verifyData() {
        echo "Testing varifyData function\n";
        try {
            verifyData(self::$mockFormData);
        } catch (Exception $e) {
            echo "O Function varifyData failed with an exception.\n";
            print_r($e);

            return false;
        }

        echo "X Function varifyData passed tests.\n";
        return true;
    }

    static function test_packageData() {
        echo "Testing packageData function\n";
        try {
            packageData(self::$mockFormData);
        } catch (Exception $e) {
            echo "O Function packageData failed with an exception.\n";
            print_r($e);

            return false;
        }

        echo "X Function packageData passed tests.\n";
        return true;
    }

    static function test_sendEmail() {
        echo "Testing sendEmail function\n";
        try {
            sendEmail(self::$mockFormData);
        } catch (Exception $e) {
            echo "O Function sendEmail failed with an exception.\n";
            print_r($e);

            return false;
        }

        echo "X Function sendEmail passed tests.\n";
        return true;
    }
}

TestRunner::runTests();
