
<?php 
require_once("data/data_operation.php"); 

// echo $_POST["id"];
DeleteData($_POST["id"]);
header("location: index.php");

?>