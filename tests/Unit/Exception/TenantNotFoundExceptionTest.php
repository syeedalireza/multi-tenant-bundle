<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Tests\Unit\Exception;

use PHPUnit\Framework\TestCase;
use Syeedalireza\MultiTenantBundle\Exception\TenantNotFoundException;

final class TenantNotFoundExceptionTest extends TestCase
{
    public function testWithId(): void
    {
        $exception = TenantNotFoundException::withId('tenant123');

        $this->assertStringContainsString('tenant123', $exception->getMessage());
        $this->assertStringContainsString('not found', $exception->getMessage());
    }
}
