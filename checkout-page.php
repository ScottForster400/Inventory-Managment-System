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
<?php 
        include("includes/nav-include.php");
    ?>
</head>
<body>
    
    <section class = "checkout">
        
        <div class="checkout-container">
    <a href="item-checkout.php" class="checkout-box-link">
        <div class="checkout-box">Board Games</div>
    </a>
    <a href="item-checkout.php" class="checkout-box-link">
        <div class="checkout-box">Card Games</div>
    </a>
    <a href="item-checkout.php" class="checkout-box-link">
        <div class="checkout-box">Puzzles</div>
    </a>
    <a href="item-checkout.php" class="checkout-box-link">
        <div class="checkout-box">Figures</div>
    </a>
</div>

<div class= "checkout-functions">
            <div class ="checkout-buttons"> AUDIT ROLL</div>
            <div class ="checkout-buttons"> PRINT LAST RECEIPT</div>
            <div class ="checkout-buttons"> FUNCTIONS</div>
    
   

    </section>






  
    
    <?php include("includes/footer-include.php");?>
    
    
    
    
    
    
    
    
    
    
    

</body>
</html>