<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Exception;

/**
 * Exception thrown when tenant ID is invalid.
 */
final class InvalidTenantException extends \InvalidArgumentException
{
    public static function empty(): self
    {
        return new self('Tenant ID cannot be empty');
    }

    public static function invalid(string $tenantId): self
    {
        return new self("Invalid tenant ID: '{$tenantId}'");
    }
}
