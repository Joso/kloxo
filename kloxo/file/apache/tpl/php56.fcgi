#!/bin/sh

php_rc='/opt/php56m/custom'
php_scan='/opt/php56m/etc/php.d'
php_prog='/opt/php56m/usr/bin/php-cgi'

#export PHPRC=$php_rc
export PHP_INI_SCAN_DIR=$php_scan
export PHP_FCGI_CHILDREN=6
export PHP_FCGI_MAX_REQUESTS=1000

exec $php_prog -c $php_rc $*
