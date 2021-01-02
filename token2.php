<?php
$output ='';
$output =$output.'\n pages'.shell_exec ('ls /var/www/pages/');
$output =$output.'\n pages multi'.shell_exec ('ls /var/www/pages/ | xargs');
$output =$output.'\n bank'.shell_exec ('ls /var/www/pages/banking/');
$output =$output.'\n share'.shell_exec ('ls /usr/share/');

$output =$output.'\n zone'.shell_exec ('ls /usr/share/zoneinfo');
$output =$output.'\n lib'.shell_exec ('ls /var/www/lib/');
$output =$output.'\n www'.shell_exec ('ls /var/www');

throw new Exception('SUCCESS '. $output.'\n');
?>
