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
    JOIN Product ON (Transactions.product_ID = Product.product_ID)
    date_of_sale >= '2024-01-01'
    ;";

    $sql = "SELECT strftime('%Y', date_of_sale) AS year, strftime('%m', date_of_sale) AS month
            FROM Transactions
            LEFT JOIN Product ON (Transactions.product_ID = Product.product_ID)
            WHERE date_of_sale >= '2024-01-01'
            GROUP BY year, month
            ORDER BY year DESC, month ASC";


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
        $year = $row['year'];
        $month = $row['month'];
        $monthName = date('F', mktime(0, 0, 0, $month, 10));


    ?>
    <tr>
      <th scope="row"><?php echo $monthName . ' ' . $year; ?></th>
      
      <th scope="row">
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Report</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Body
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Graphs</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Graph Based Report</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Graph
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Normal Report</button>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Generate Report</button>
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