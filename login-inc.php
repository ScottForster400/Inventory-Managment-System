<?php
    if(isset($_POST["submit"])) {
        include "includes/connection.php";
        $EmailInput = $_POST["email"];
        $PasswordInput = $_POST["password"];
        $id = 1;

        if (!filter_var($EmailInput, FILTER_VALIDATE_EMAIL)){
            header("Location: login.php?error=InvalidEmail");         
        }

        $stmt = $db->prepare("SELECT * FROM Employee WHERE employee_id = 1");
        //$stmt->bindParam("i", $id);
        var_dump($EmailInput);
        var_dump($PasswordInput);
        var_dump($stmt);
        $stmt->execute();
        var_dump($EmailInput);
        $Results = $stmt->fetchColumn();
        if ($Results->numRows > 0) {
            while($employee = $Results->fetch_object()) {
                $DbPWD = $employee->password;
                // if (password_verify($PasswordInput, $DbPWD) == true) {
                    var_dump($EmailInput);
                    $id = $employee->employee_id;
                    session_start();
                    $_SESSION['EmployeeUID'] = $id;
                    header('Location: index.php'); 
                    exit();    
                // }
            }
        }
    }
?>