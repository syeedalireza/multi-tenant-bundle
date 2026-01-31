<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Tests\Unit\Exception;

use PHPUnit\Framework\TestCase;
use Syeedalireza\MultiTenantBundle\Exception\InvalidTenantException;

final class InvalidTenantExceptionTest extends TestCase
{
    public function testEmpty(): void
    {
        $exception = InvalidTenantException::empty();

        $this->assertStringContainsString('empty', $exception->getMessage());
    }

    public function testInvalid(): void
    {
        $exception = InvalidTenantException::invalid('bad@tenant');

        $this->assertStringContainsString('bad@tenant', $exception->getMessage());
    }
}
