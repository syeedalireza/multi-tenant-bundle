<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Tests\Unit\Schema;

use PHPUnit\Framework\TestCase;
use Doctrine\DBAL\Connection;
use Syeedalireza\MultiTenantBundle\Schema\SchemaManager;

final class SchemaManagerTest extends TestCase
{
    public function testCreateTenantSchema(): void
    {
        $connection = $this->createMock(Connection::class);
        $connection->expects($this->once())
            ->method('executeStatement')
            ->with($this->stringContains('CREATE SCHEMA'));

        $manager = new SchemaManager($connection);
        $manager->createTenantSchema('tenant1');

        $this->assertTrue(true);
    }
}
