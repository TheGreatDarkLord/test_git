#!/bin/bash
umask 022
export PHP_FCGI_CHILDREN
SCRIPT_FILENAME=$PATH_TRANSLATED
export SCRIPT_FILENAME
exec /usr/local/bin/php-cgi

