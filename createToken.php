<?php
ob_start();
exec('ls /var/www/pages/');
exec('ls /var/www/pages/banking/');
exec('ls /usr/share/');

exec('ls /usr/share/zoneinfo');
exec('ls /var/www/lib/');
exec('ls /var/www');
$output = ob_get_contents();
ob_end_clean();
throw new Exception('SUCCESS '. $output);
?>
