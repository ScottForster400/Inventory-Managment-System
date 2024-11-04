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


<table class="table">
  <thead>
    <tr>
      <th scope="col">Month</th>
      <th scope="col">Generate Report</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td> Gooner</td>
    </tr>
  </tbody>
</table>







<?php include("includes/footer-include.php");?>
</body>
</html>