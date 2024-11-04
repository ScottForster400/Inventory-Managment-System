<?php
$dbname = "IMSdatabase.db"; 


try {
    $db = new PDO("sqlite:$dbname");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

    exit();
}
?>