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
    <main class="main-page">
        <section class="side-bar">
            <form action="">
                <div class="search-bar">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="Searchbar">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                    </div>
                </div>
                <div class="filters">
                    <h3>Filters</h3>
                    <!-- used https://css-tricks.com/value-bubbles-for-range-inputs/ for sliders -->
                    <div class="range-wrap">
                        <label for="min-price">Min Price(£)</label>
                        <input type="range" class="range" id="min-price" min="0" max="100">
                        <output class="bubble"></output>
                    </div>
                    <div class="range-wrap">
                        <label for="min-price">Max Price(£)</label>
                        <input type="range" class="range" id="min-price" min="0" max="100">
                        <output class="bubble"></output>
                    </div>
                    <div class="range-wrap">
                        <label for="min-price">Age</label>
                        <input type="range" class="range" id="min-price" min="0" max="10">
                        <output class="bubble"></output>
                    </div>
                    
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="board-game-filt">
                        <label class="form-check-label" for="board-game-filt">Board Games</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="card-game-filt">
                        <label class="form-check-label" for="card-game-filt">Card Games</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="puzzle-filt">
                        <label class="form-check-label" for="puzzle-filt">Puzzles</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="figure-filt">
                        <label class="form-check-label" for="figure-filt">Figures</label>
                    </div>
                </div>
            </form>
        </section>
        
        <section class="games-display">
            <h3>Stock</h3>
            <div class="games-row card-group">
                <div class="game card">
                    <img class = "card-img-top" src="imgs/179yearoldman.jpg" alt="game">
                    <div class="game-body card-body">
                        <h5 class="card-title">Game Name</h5>
                        <h6 class="card-title text-secondary">Genre</h6>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Description</button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                </div>
                            </div>
                        </div>
                        <div class="options">
                        <button type="button" class="btn btn-outline-primary">Add to Cart</button>
                        <button type="button" class="btn btn-outline-primary">Edit</button>
                    </div>
                    </div>
                </div>
                
        </section>
    </main>
    <?php include("includes/footer-include.php");?>
</body>
</html>
