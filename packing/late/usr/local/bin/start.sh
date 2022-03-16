#!/bin/sh
 if ! test -f /var/www/owncloud/data/.first_run_ran
 	 then
      /usr/local/bin/first_run.sh
   fi
exec /usr/sbin/apache2ctl -DFOREGROUND
