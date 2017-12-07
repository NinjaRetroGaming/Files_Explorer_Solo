<?php
include("model/filesexplorer.php");


$results = new Explorer;
$explorer = $results->scan($d);

include("views/explorateurView.php");
?>