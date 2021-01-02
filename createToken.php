<?php
$output ='';
$output =$output."\n grep chat in /var/www... ".shell_exec ('grep -r "chat" /var/www/ | xargs');


throw new Exception("\n SUCCESS  ". $output."\n");
?>
