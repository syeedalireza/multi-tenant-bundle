<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Doctrine;

use Doctrine\DBAL\Connection;

final class TenantConnection
{
    public function __construct(
        private readonly Connection $connection,
        private ?string $currentTenant = null,
    ) {
    }

    public function setTenant(string $tenantId): void
    {
        $this->currentTenant = $tenantId;
        $this->connection->executeStatement("SET search_path TO tenant_{$tenantId}");
    }

    public function getCurrentTenant(): ?string
    {
        return $this->currentTenant;
    }
}
