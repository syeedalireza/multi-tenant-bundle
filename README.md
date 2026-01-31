# Multi-Tenant SaaS Bundle

Enterprise multi-tenancy for Symfony with schema-per-tenant, row-level security, and automatic tenant resolution.

## Features

- Schema-per-tenant strategy
- PostgreSQL Row-Level Security
- Automatic tenant resolution (subdomain/header/cookie)
- Tenant-aware Entity Manager
- Cross-tenant query prevention
- Automatic schema creation
- Tenant migration system

## Installation

```bash
composer require syeedalireza/multi-tenant-bundle
```

## Configuration

```yaml
multi_tenant:
    resolver: subdomain  # or header, cookie
    database:
        strategy: schema_per_tenant
```

## Usage

```php
// Tenant is automatically resolved from request
$tenantId = $this->tenantContext->getCurrentTenant();

// All queries are automatically scoped to current tenant
$users = $userRepository->findAll();
```
