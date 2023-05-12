#!/usr/bin/env bash
sed -i "s/Listen 8080/Listen ${PORT:-8080}/g" /etc/apache2/ports.conf
sed -i "s/:8080/:${PORT:-8080}/g" /etc/apache2/sites-enabled/*

/usr/sbin/apache2ctl -DFOREGROUND