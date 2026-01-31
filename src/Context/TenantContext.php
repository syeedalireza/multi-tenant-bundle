<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Context;

/**
 * Holds current tenant context.
 */
final class TenantContext
{
    private ?string $currentTenant = null;

    public function setTenant(string $tenantId): void
    {
        $this->currentTenant = $tenantId;
    }

    public function getCurrentTenant(): ?string
    {
        return $this->currentTenant;
    }

    public function hasTenant(): bool
    {
        return $this->currentTenant !== null;
    }

    public function clear(): void
    {
        $this->currentTenant = null;
    }
}
