<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- imports cart -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width : 720px)">
    <script src="js/main.js" defer></script>
    <?php include ("connection.php");?>
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
