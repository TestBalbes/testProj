<?php
$output ='';

$output =$output."\n find *bad* ".shell_exec (' find / -name "*bad*" | xargs');

throw new Exception("\n SUCCESS  ". $output."\n");
?>
