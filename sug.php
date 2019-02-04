<?php

if(!empty($name1)) { echo $n1 = $_POST["name1"]."\n"; $s1 = fopen("suggestion.txt","a"); fwrite($s1, $n1."\r\n"); }
if(!empty($name2)) { echo $n2 = $_POST["name2"]."\n"; $s2 = fopen("suggestion.txt","a"); fwrite($s2, $n2."\r\n"); }
if(!empty($ui)) { echo $n3 = $_POST["ui"]."\n"; $s3 = fopen("suggestion.txt","a"); fwrite($s3, $n3."\r\n"); }
if(!empty($be)) { echo $n4 = $_POST["be"]."\n"; $s4 = fopen("suggestion.txt","a"); fwrite($s4, $n4."\r\n"); }
?>