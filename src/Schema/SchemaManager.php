<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Schema;

use Doctrine\DBAL\Connection;

final class SchemaManager
{
    public function __construct(
        private readonly Connection $connection,
    ) {
    }

    public function createTenantSchema(string $tenantId): void
    {
        $schemaName = "tenant_{$tenantId}";
        $this->connection->executeStatement("CREATE SCHEMA IF NOT EXISTS {$schemaName}");
    }

    public function dropTenantSchema(string $tenantId): void
    {
        $schemaName = "tenant_{$tenantId}";
        $this->connection->executeStatement("DROP SCHEMA IF EXISTS {$schemaName} CASCADE");
    }

    public function tenantExists(string $tenantId): bool
    {
        $schemaName = "tenant_{$tenantId}";
        $result = $this->connection->fetchOne(
            "SELECT EXISTS(SELECT 1 FROM information_schema.schemata WHERE schema_name = ?)",
            [$schemaName]
        );

        return (bool) $result;
    }
}
