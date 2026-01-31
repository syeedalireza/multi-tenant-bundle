<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Tests\Unit\Context;

use PHPUnit\Framework\TestCase;
use Syeedalireza\MultiTenantBundle\Context\TenantContext;

final class TenantContextTest extends TestCase
{
    public function testSetAndGetTenant(): void
    {
        $context = new TenantContext();
        $context->setTenant('tenant123');

        $this->assertEquals('tenant123', $context->getCurrentTenant());
        $this->assertTrue($context->hasTenant());
    }

    public function testClear(): void
    {
        $context = new TenantContext();
        $context->setTenant('tenant123');
        $context->clear();

        $this->assertNull($context->getCurrentTenant());
        $this->assertFalse($context->hasTenant());
    }
}
