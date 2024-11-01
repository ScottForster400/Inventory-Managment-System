<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <?php 
        include "includes/connection.php";
        include "includes/header-links-include.php";
    ?>

</head>
<body>
    <?php 
        include("includes/nav-include.php");
        $Basket = $_GET["action"];
    ?>
    <div class="checkout-page-main-body">
        <div class="checkout-page-basket">
            <?php
                $UserID = $_SESSION["UserUID"];
            ?>
        </div>
        <div class="checkout-page-confirmation">
            <form action="checkout-page-inc.php?action=<?php echo $Basket ?>" method="POST">
                <input type="submit" name="submit" value="Finish Checkout">
            </form>
        </div>
    </div>
    <?php include("includes/footer-include.php");?>
</body>
</html>