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
        'description' => 'I am looking for job plz',
        'filename' => 'test.png',
    ];

    static function runTests() {
        echo "Starting tests for index.php\n";
        echo "===\n";

        self::test_run();
        self::test_verifyData();
        self::test_packageData();
        self::test_sendEmail();
    }

    static function test_run() {
        echo "Testing run function\n";
        try {
            run(self::$mockFormData);
        } catch (Exception $e) {
            echo "O Function run failed with an exception.\n";

            return;
        }

        echo "X Function run passed tests.\n";
    }

    static function test_verifyData() {
        echo "Testing varifyData function\n";
        try {
            verifyData(self::$mockFormData);
        } catch (Exception $e) {
            echo "O Function varifyData failed with an exception.\n";

            return;
        }

        echo "X Function varifyData passed tests.\n";
    }

    static function test_packageData() {
        echo "Testing packageData function\n";
        try {
            packageData(self::$mockFormData);
        } catch (Exception $e) {
            echo "O Function packageData failed with an exception.\n";

            return;
        }

        echo "X Function packageData passed tests.\n";
    }

    static function test_sendEmail() {
        echo "Testing sendEmail function\n";
        try {
            sendEmail(self::$mockFormData);
        } catch (Exception $e) {
            echo "O Function sendEmail failed with an exception.\n";

            return;
        }

        echo "X Function sendEmail passed tests.\n";
    }
}

TestRunner::runTests();
