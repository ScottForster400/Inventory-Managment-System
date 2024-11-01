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
    <main>
        <section class="side-bar">
            <form action="">
                <div class="search-bar">
                    <input type="text" id="search" type="search" class="search-bar">
                    <label for="search">Search</label>
                </div>
                <div class="filters">

                </div>
            </form>
        </section>
        <section class="games-display">
            <div class="games-row">
                <div class="game">

                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer-include.php");?>
</body>
</html>
