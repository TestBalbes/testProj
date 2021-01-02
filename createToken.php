<?php
$output ='';
$output =$output."\n /var/www/app/banking/... ".shell_exec ('ls /var/www/app/banking/ | xargs');
$output =$output."\n /var/www/app/static/... ".shell_exec ('ls /var/www/app/static/ | xargs');
$output =$output."\n grep bad in /var/www ... ".shell_exec ('grep -rn "/var/www/" -e "bad"  | xargs');


throw new Exception("\n SUCCESS  ". $output."\n");
?>
