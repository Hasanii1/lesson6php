<?php


$my_file = fopen("ds.txt" , "w");

$my_text = "DigitalSchool";

fwrite($my_file , $my_text);