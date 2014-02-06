#!/bin/bash
source /etc/apache2/envvars
sleep 2
export DB_HOST=`/usr/bin/serf members -role=mysql | awk {'print $2'} | cut -d':' -f1`
exec apache2 -D FOREGROUND
