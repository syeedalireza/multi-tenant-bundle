# Security Best Practices

## Tenant Isolation

This bundle ensures complete tenant isolation:

1. **Schema-level isolation** - Each tenant has separate database schema
2. **Automatic resolution** - Tenant ID from subdomain/header/cookie
3. **Query prevention** - Cross-tenant queries are blocked

## Security Checklist

- ✅ Never trust tenant ID from user input
- ✅ Always validate tenant exists
- ✅ Use middleware to set tenant context
- ✅ Audit tenant access logs
- ✅ Implement rate limiting per tenant

## Row-Level Security (RLS)

For shared schema strategy:

```sql
CREATE POLICY tenant_isolation ON users
    USING (tenant_id = current_setting('app.current_tenant')::int);
```
