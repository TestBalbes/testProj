<?php
$asd=$asd."+".(shell_exec('touch /usr/share/test')); 
$asd=$asd."+".(exec('touch /usr/share/test')); 
$asd=$asd."+".(shell_exec('mkdir /usr/share/testdir')); 
$asd=$asd."+".(exec('mkdir /usr/share/testdir'));
$asd=$asd."+".(shell_exec('whoami > /usr/share/who')); 
$asd=$asd."+".(exec('whoami > /usr/share/who'));
throw new Exception($asd);
?>
