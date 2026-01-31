<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Exception;

/**
 * Exception thrown when tenant is not found.
 */
final class TenantNotFoundException extends \RuntimeException
{
    public static function withId(string $tenantId): self
    {
        return new self("Tenant with ID '{$tenantId}' not found");
    }
}
