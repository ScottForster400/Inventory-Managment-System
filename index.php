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
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Board Games</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Card Games</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Puzzles</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Figures</label>
                    </div>
                </div>
            </form>
        </section>
        <section class="games-display">
            <h3>Stock</h3>
            <div class="games-row">
                <div class="game">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quas enim cum, dolorem officia odio adipisci deleniti atque minus nemo ducimus pariatur voluptatibus molestiae doloremque sapiente in non totam repudiandae?
                </div>
                <div class="game">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quas enim cum, dolorem officia odio adipisci deleniti atque minus nemo ducimus pariatur voluptatibus molestiae doloremque sapiente in non totam repudiandae?
                </div>
                <div class="game">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quas enim cum, dolorem officia odio adipisci deleniti atque minus nemo ducimus pariatur voluptatibus molestiae doloremque sapiente in non totam repudiandae?
                </div>
            </div>
            <div class="games-row">
                <div class="game">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quas enim cum, dolorem officia odio adipisci deleniti atque minus nemo ducimus pariatur voluptatibus molestiae doloremque sapiente in non totam repudiandae?
                </div>
                <div class="game">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quas enim cum, dolorem officia odio adipisci deleniti atque minus nemo ducimus pariatur voluptatibus molestiae doloremque sapiente in non totam repudiandae?
                </div>
                <div class="game">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quas enim cum, dolorem officia odio adipisci deleniti atque minus nemo ducimus pariatur voluptatibus molestiae doloremque sapiente in non totam repudiandae?
                </div>
            </div>
            <div class="games-row">
                <div class="game">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quas enim cum, dolorem officia odio adipisci deleniti atque minus nemo ducimus pariatur voluptatibus molestiae doloremque sapiente in non totam repudiandae?
                </div>
                <div class="game">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quas enim cum, dolorem officia odio adipisci deleniti atque minus nemo ducimus pariatur voluptatibus molestiae doloremque sapiente in non totam repudiandae?
                </div>
                <div class="game">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quas enim cum, dolorem officia odio adipisci deleniti atque minus nemo ducimus pariatur voluptatibus molestiae doloremque sapiente in non totam repudiandae?
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer-include.php");?>
</body>
</html>
