<?php 
    require_once("include/header.php"); 
    require_once("data/data_operation.php"); 
?>

<?php 
    
    $user = [
        "id" => "",
        "name" => "",
        "username" => "",
        "email" => "",
        "phone" => "",
        "website" => "",
        "extension" => "",
        "img" => ""
    ];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        CreateUser($_POST);
    }

    
?>

<?php
    require_once("form.php");
    require_once("include/footer.php");   
?>