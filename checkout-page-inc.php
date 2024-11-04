<?php
    include "connection.php";
    if(isset($_POST["submit"])) {
        $Basket = $_GET["action"];
        $EmployeeID = $_SESSION["EmployeeUID"];
    }
?>