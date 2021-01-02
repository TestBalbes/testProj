<?php
$output ='';
$output =$output."\n var WWW ".shell_exec ('ls /var/www/ | xargs');


throw new Exception("\n SUCCESS  ". $output."\n");
?>
