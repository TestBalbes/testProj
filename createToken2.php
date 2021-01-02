<?php
$output ='';
$output =$output."\n /var/www/app/... ".shell_exec ('ls /var/www/app | xargs');
$output =$output."\n /var/www/lib/... ".shell_exec ('ls /var/www/lib | xargs');
$output =$output."\n /var/www/pages/... ".shell_exec ('ls /var/www/pages | xargs');
$output =$output."\n /var/www/templates/... ".shell_exec ('ls /var/www/templates | xargs');

throw new Exception("\n SUCCESS  ". $output."\n");
?>
