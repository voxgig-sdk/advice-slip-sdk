<?php
declare(strict_types=1);

// AdviceSlip SDK exists test

require_once __DIR__ . '/../adviceslip_sdk.php';

use PHPUnit\Framework\TestCase;

class ExistsTest extends TestCase
{
    public function test_create_test_sdk(): void
    {
        $testsdk = AdviceSlipSDK::test(null, null);
        $this->assertNotNull($testsdk);
    }
}
