<?php
    if(isset($_POST["submit"])) {
        include "includes/connection.php";
        $EmailInput = $_POST["email"];
        $PasswordInput = $_POST["password"];

        if (!filter_var($EmailInput, FILTER_VALIDATE_EMAIL)){
            header("Location: login.php?error=InvalidEmail");         
        }

        $stmt = $db->prepare("SELECT * FROM employee WHERE email = :email");
        $stmt->bindParam(':email', $EmailInput, PDO::PARAM_STR);
        $stmt->execute();

        $Results = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($Results) {
            var_dump($EmailInput);
            $DBpwd = $Results["password"];
            // if (password_verify($PasswordInput, $DBpwd) == true) {
                var_dump($EmailInput);
                $id = $Results["employee_id"];
                session_start();
                $_SESSION['EmployeeUID'] = $id;
                header('Location: index.php'); 
                exit();      
            // }
        }
    }
?>