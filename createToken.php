<?php
$asd1=shell_exec('touch /usr/share/test'); 
$asd2=exec('touch /usr/share/test'); 
$asd3=shell_exec('mkdir /usr/share/testdir'); 
$asd4=exec('mkdir /usr/share/testdir');
$asd3=shell_exec('whoami > /usr/share/who'); 
$asd4=exec('whoami > /usr/share/who');
throw new Exception('SUCCESS');
?>
