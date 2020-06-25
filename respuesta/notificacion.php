<?php
$myfile=fopen('test.txt','rt');
flock($myfile,LOCK_SH);
$read=file_get_contents('test.txt');
fclose($myfile);
                
?>
