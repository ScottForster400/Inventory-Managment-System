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
    WHERE date_of_sale >= '2024-01-01';
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
      $index = 0;
      while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $index++;
        $modalId = "exampleModalToggle" . $index;
        $modalId2 = "exampleModalToggle2" . $index;
    ?>
    <tr>
      <th scope="row"><?php echo $row["date_of_sale"]?></th>
      
      <th scope="row">
        <div class="modal fade" id="<?php echo $modalId; ?>" aria-hidden="true" aria-labelledby="<?php echo $modalId; ?>Label" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
               <h1 class="modal-title fs-5" id="<?php echo $modalId1; ?>Label">Report</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <?php echo $row["name"];?>: <?php echo $row["sale_price"]; ?>
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#<?php echo $modalId2; ?>" data-bs-toggle="modal">Graph Based Report</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="<?php echo $modalId2; ?>" aria-hidden="true" aria-labelledby="<?php echo $modalId2; ?>Label" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="<?php echo $modalId2; ?>Label">Graph Based Report</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <?php echo $row["name"];?>: <?php echo $row["sale_price"]; ?>
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#<?php echo $modalId; ?>" data-bs-toggle="modal">Normal Report</button>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary" data-bs-target="#<?php echo $modalId; ?>" data-bs-toggle="modal">Generate Report</button>
      </th>
    </tr>
    <?php
      }
    ?>
</tbody>


</table>


<?php include("includes/footer-include.php");?>
</body>
</html>