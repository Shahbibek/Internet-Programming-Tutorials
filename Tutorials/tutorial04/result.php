<?php
    $princ=$_GET["princ"];
    $roi=$_GET["roi"];
    $noy=$_GET["noy"];
    $i =($princ*$roi*$noy)/100;
?>

<h1>Your Interest is: <?=$i?></h1>