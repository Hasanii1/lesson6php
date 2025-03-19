<?php

$my_filename = "ds.text";
$my_file = fopen($my_filename , "r");

$my_filesize = filesize($my_filename);

$my_filedata = fread($my_filesize , $my_file);

echo ($my_filedata);


