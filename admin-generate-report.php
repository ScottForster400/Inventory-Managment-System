<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        include ("includes/connection.php");
        include ("includes/header-links-include.php");
    ?>
</head>
<body>
<?php include("includes/nav-include.php");?>

<?php



    $sql = "SELECT *
    FROM Transactions
    LEFT JOIN Product ON (Transactions.product_ID = Product.product_ID)
    ";

    $statement = $db->query($sql);
?>


<table class="table">

  <thead>
    <tr>
      <th scope="col">Month</th>
      <th scope="col">Reports</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
      while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <tr>
      <th scope="row"><?php echo $row["date_of_sale"]?></th>
      
      <th><?php echo $row["name"]?>: <?php echo $row["price"]?></th>

    </tr>
    <?php
      }
    ?>
  </tbody>

</table>





<?php include("includes/footer-include.php");?>
</body>
</html>