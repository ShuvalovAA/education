<?php
session_start();
$title = "SECURITY PAGE";
$page_title = "Task list";


if (isset($_COOKIE['login'])){
    $content = "ENTER NEW TASK, DARLING";
    include("components/layout.php");
    
}
else{
    $content = "ERROR:FORRBIDEAN!!!";
    echo $content;
} 

?>