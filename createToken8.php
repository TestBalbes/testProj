<?php
$output ='';

$output =$output."\n find  *bad* with cat".shell_exec (' find -name "*bad*" | cat');

throw new Exception("\n SUCCESS  ". $output."\n");
?>
