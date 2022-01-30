<?php
$file = fopen("index.html", "r");

while(! feof($file)) {
  $line = fgets($file);
}

fclose($file);
?>
,