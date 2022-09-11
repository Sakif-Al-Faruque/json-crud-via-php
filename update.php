<?php 
    require_once("include/header.php"); 
    require_once("data/data_operation.php"); 
?>

<?php 
    /* $user = [
        "id" => "",
        "name" => "",
        "username" => "",
        "email" => "",
        "phone" => "",
        "website" => "",
        "extension" => "",
        "img" => ""
    ]; */

    $user = [];

    if(isset($_GET["id"])){
        $user = GetDataById($_GET["id"]);
        if(!$user){
            exit;
        }
    }
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //var_dump($_POST);
        $user = array_merge($user, $_POST);

        UpdateData($user, $_POST["id"]);
        header("location: update.php?id=".$_POST['id']);
    }
?>

<?php
    require_once("form.php");
    require_once("include/footer.php");   
?>