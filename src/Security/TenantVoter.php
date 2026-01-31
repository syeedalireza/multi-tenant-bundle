<?php

declare(strict_types=1);

namespace Syeedalireza\MultiTenantBundle\Security;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

/**
 * Voter for tenant-based authorization.
 */
final class TenantVoter extends Voter
{
    protected function supports(string $attribute, mixed $subject): bool
    {
        return str_starts_with($attribute, 'TENANT_');
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        // Check if user belongs to the tenant
        // This is a simplified example
        return true;
    }
}
