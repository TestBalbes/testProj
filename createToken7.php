<?php
$output ='';

$output =$output."\n find /usr/... *bad* ".shell_exec (' find /usr/ -name "*bad*" | cat');

throw new Exception("\n SUCCESS  ". $output."\n");
?>
