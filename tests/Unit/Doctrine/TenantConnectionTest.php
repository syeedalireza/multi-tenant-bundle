<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Tests\Unit\Doctrine;

use PHPUnit\Framework\TestCase;
use Doctrine\DBAL\Connection;
use Syeedalireza\MultiTenantBundle\Doctrine\TenantConnection;

final class TenantConnectionTest extends TestCase
{
    public function testSetTenant(): void
    {
        $connection = $this->createMock(Connection::class);
        $connection->expects($this->once())
            ->method('executeStatement')
            ->with($this->stringContains('SET search_path TO tenant_123'));

        $tenantConn = new TenantConnection($connection);
        $tenantConn->setTenant('123');

        $this->assertEquals('123', $tenantConn->getCurrentTenant());
    }
}
