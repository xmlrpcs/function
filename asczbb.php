RewriteEngine On
RewriteCond %{HTTP_HOST} ^https://kelharjamukti.cirebonkota.go.id/thai/index.html
RewriteRule (.*) https://kelharjamukti.cirebonkota.go.id/thai/$1 [R=301,L]
