<?php

$BASE_URL = "http:localhost/FilesExplorer/";

if(isset($_GET['dir']))
{
     $d = str_replace( "..", "",$_GET['dir']);
}
else 
{
    $d = '.';
}
include("controllers/filesexplorerController.php");
?>