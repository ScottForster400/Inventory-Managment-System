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
    FROM Transactions";

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
    <tr>
      <th scope="row">October 2024</th>
      
      <th>Gooner</th>

    </tr>
  </tbody>
</table>


<div class="flex-table">
        <?php
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="card" style="width: 18rem; margin-bottom: 50px;">
            <div class="card-body">
                <h5 class="card-title"><b><?php echo $row["employee_id"] . " Year " . $row["product_id"]; ?></b></h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Price: </b><?php echo $row["price"]; ?></li>
                    <li class="list-group-item"><b>Date: </b><?php echo $row["date_of_sale"]; ?></li>
                </ul>
                <br>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                    <button type="submit" name="compare" class="btn btn-primary">Compare</button>
                </form>
            </div>
        </div>
        <?php
        }
        ?>

  </div>



<?php include("includes/footer-include.php");?>
</body>
</html>