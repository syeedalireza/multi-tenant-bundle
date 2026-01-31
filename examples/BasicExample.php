<?php

declare(strict_types=1);

echo "=== Multi-Tenant SaaS Example ===\n\n";
echo "Tenant Resolution:\n";
echo "- tenant1.example.com → tenant: tenant1\n";
echo "- tenant2.example.com → tenant: tenant2\n";
echo "\nEach tenant gets isolated database schema.\n";
echo "✅ Multi-tenancy ready!\n";
