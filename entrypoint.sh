#!/bin/sh

# On Alpine Apache's user and groups are apache
chown -R apache:apache /var/www

# Launch the httpd in foreground
rm -rf /run/apache2/* || true && /usr/sbin/httpd -DFOREGROUND