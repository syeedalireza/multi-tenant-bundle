# Configuration

## Basic Setup

```yaml
multi_tenant:
    resolver: subdomain
    database:
        strategy: schema_per_tenant
```

## Resolver Types

- `subdomain`: tenant.example.com
- `header`: X-Tenant-ID header
- `cookie`: tenant_id cookie

## Database Strategies

- `schema_per_tenant`: Each tenant gets own schema
- `shared_schema`: Row-level security
