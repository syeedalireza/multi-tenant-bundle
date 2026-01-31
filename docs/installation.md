# Installation

## Requirements
- PHP 8.2+
- Symfony 7.x
- PostgreSQL

## Install

```bash
composer require syeedalireza/multi-tenant-bundle
```

## Enable Bundle

```php
// config/bundles.php
Syeedalireza\MultiTenantBundle\MultiTenantBundle::class => ['all' => true],
```

## Configure

```yaml
# config/packages/multi_tenant.yaml
multi_tenant:
    resolver: subdomain
    database:
        strategy: schema_per_tenant
```

## Database Setup

```sql
-- PostgreSQL will create schemas automatically
-- tenant_1, tenant_2, etc.
```
