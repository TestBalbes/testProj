<?php
$output ='';
$output =$output.'\n pages multi'.shell_exec ('ls /var/www/pages/ | xargs');
$output =$output.'\n bank'.shell_exec ('ls /var/www/pages/banking/| xargs');
$output =$output.'\n lib'.shell_exec ('ls /var/www/lib/| xargs');

$output =$output.'\n FIND'.shell_exec ('find / -name "chat*"| xargs');


throw new Exception('SUCCESS '. $output.'\n');
?>
