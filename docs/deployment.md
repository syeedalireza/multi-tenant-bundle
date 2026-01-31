# Deployment Guide

## Production Deployment

### 1. Database Setup

Create main database with schema support:

```sql
CREATE DATABASE app_production;
```

### 2. Tenant Provisioning

For each new tenant:

```php
$schemaManager->createTenantSchema('tenant_123');
// Run migrations for tenant schema
```

### 3. Environment Variables

```env
DATABASE_URL=postgresql://user:pass@localhost/app_production
MULTI_TENANT_RESOLVER=subdomain
```

### 4. Docker Deployment

```bash
docker-compose -f docker-compose.prod.yml up -d
```

## Scaling Considerations

- Use connection pooling for database
- Cache tenant configurations in Redis
- Implement tenant-based sharding for large deployments
- Monitor schema sizes and performance

## Security

- Always validate tenant ID
- Use SSL for database connections
- Implement audit logging per tenant
- Regular security reviews
