
<!-- used https://www.youtube.com/watch?v=aNDqzlAKmZc to get a sidebar burger menu -->
<div class="offscreen-menu">
    <ul>
        <li><a href="">Board Games</a></li>
        <li><a href="">Card Games</a></li>
        <li><a href="">Puzzles</a></li>
        <li><a href="">Figures</a></li>
        <li><a href="">Stock</a></li>
    </ul>
</div>

<nav>
    <div class="nav-top">
        <div class="logo">
            <a href=""><img src="imgs/logo.png" alt="logo"></a>
        </div>
        <div class="top-left-nav">
            <div class="cart">
                <a href="checkout-page.php?action=<?php echo $Basket ?>" class="nav-button"><button><i class="fa fa-shopping-cart"></i></button></a>
            </div>
            <div class="log-out">
                <a href="" class="nav-button"><button >Log Out</button></a>
            </div>
            <div class="burger-menu">
                <a href="javascript:void(0)" class="burger" onclick="burgerMenu()"><i class="fa fa-bars active"></i></a>
            </div>
        </div>
    </div>
    <div class="nav-bottom">
        <div id="page-links">
            <a href="">Board Games</a>
            <a href="">Card Games</a>
            <a href="">Puzzles</a>
            <a href="">Figures</a>
            <a href="">Stock</a>
            <?php 
                $EmployeeUID = $_SESSION["EmployeeUID"];
                $employee = $conn->query("SELECT * FROM employee WHERE employee = $EmployeeUID");
                $Results = $employee->fetch(PDO::FETCH_ASSOC);
                $ADMcheck = $Results["IsAdmin"];
                if ($ADMcheck == "true") {
                    echo "<a href='admin-manage-employees.php'>Manage Employees</a>";
                    echo "<a href='admin-generate-report.php'>Generate Report</a>";
                }
                echo "<a href='login.php?action=logout'>Log Out</a>";
            ?>
        </div>
       
    </div>
</nav>