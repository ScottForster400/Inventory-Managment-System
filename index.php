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
        <section class="side-bar shadow-sm p-3 mb-5 bg-white rounded">
            <form action="">
                <div class="search-bar">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="Searchbar">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="button"><i class="fas fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
                <div class="filters">
                    <h3>Filters</h3>
                    <!-- used https://css-tricks.com/value-bubbles-for-range-inputs/ for sliders -->
                     <ul>
                        <li>
                            <div class="accordion accordion-flush" id="accordionFilterOne">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="filterOne">
                                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilterOne" aria-expanded="false" aria-controls="collapseFilterOne">
                                        Price
                                    </button>
                                    </h2>
                                    <div id="collapseFilterOne" class="accordion-collapse collapse " aria-labelledby="FilterOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="range-wrap">
                                            <label for="min-price">Min Price(£)</label>
                                            <input type="range" class="range" id="min-price" min="0" max="100" value="0">
                                            <output class="bubble"></output>
                                        </div>
                                        <div class="range-wrap">
                                            <label for="min-price">Max Price(£)</label>
                                            <input type="range" class="range" id="min-price" min="0" max="100" value="100">
                                            <output class="bubble"></output>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                     
                        <li>
                            <div class="accordion accordion-flush" id="accordionFilterOne">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="filterTwo">
                                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilterTwo" aria-expanded="false" aria-controls="collapseFilterTwo">
                                        Age
                                    </button>
                                    </h2>
                                    <div id="collapseFilterTwo" class="accordion-collapse collapse " aria-labelledby="FilterTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="accordion-filters">
                                            <div class="filter-check">
                                                <input type="checkbox" class="btn-check" id="age-select-1" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="age-select-1">0-4</label><br>
                                            </div>
                                            <div class="filter-check">
                                                <input type="checkbox" class="btn-check" id="age-select-2" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="age-select-2">4-6</label><br>
                                            </div>
                                            <div class="filter-check">
                                                <input type="checkbox" class="btn-check" id="age-select-3" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="age-select-3">6-10</label><br>
                                            </div>
                                            <div class="filter-check">
                                                <input type="checkbox" class="btn-check" id="age-select-4" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="age-select-4">10+</label><br>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="accordion accordion-flush" id="accordionFilterOne">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="filterThree">
                                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilterThree" aria-expanded="false" aria-controls="collapseFilterThree">
                                        Type
                                    </button>
                                    </h2>
                                    <div id="collapseFilterThree" class="accordion-collapse collapse " aria-labelledby="FilterThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="accordion-filters">
                                            <div class="filter-check">
                                                <input type="checkbox" class="btn-check" id="type-select-1" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="type-select-1">Board Games</label><br>
                                            </div>
                                            <div class="filter-check">
                                                <input type="checkbox" class="btn-check" id="type-select-2" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="type-select-2">Card Games</label><br>
                                            </div>
                                            <div class="filter-check">
                                                <input type="checkbox" class="btn-check" id="type-select-3" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="type-select-3">Puzzles</label><br>
                                            </div>
                                            <div class="filter-check">
                                                <input type="checkbox" class="btn-check" id="type-select-4" autocomplete="off">
                                                <label class="btn btn-outline-primary" for="type-select-4">Figures</label><br>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                     </ul>
                </div>
            </form>
        </section>
        
        <section class="games-display">
            <h3>Stock</h3>
            <div class="games-row">
                <div class="game card ">
                    <div class="game-img">
                        <img class = "card-img-top" src="imgs/logo.png" alt="game">
                    </div>
                    <div class="game-body card-body">
                        <h5 class="card-title">Game Name</h5>
                        <h6 class="card-title text-secondary">Price</h6>
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
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Edit
                            </button>

                            
                        </div>
                    </div>
                </div>
                <div class="game card">
                    <div class="game-img">
                        <img class = "card-img-top" src="imgs/logo.png" alt="game">
                    </div>
                    <div class="game-body card-body">
                        <h5 class="card-title">Game Name</h5>
                        <h6 class="card-title text-secondary">Price</h6>
                        <h6 class="card-title text-secondary">Genre</h6>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Description</button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
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
                <div class="game card">
                    <div class="game-img">
                        <img class = "card-img-top" src="imgs/logo.png" alt="game">
                    </div>
                    <div class="game-body card-body">
                        <h5 class="card-title">Game Name</h5>
                        <h6 class="card-title text-secondary">Price</h6>
                        <h6 class="card-title text-secondary">Genre</h6>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Description</button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
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
            </div>
            <div class="games-row">
                <div class="game card">
                    <div class="game-img">
                        <img class = "card-img-top" src="imgs/logo.png" alt="game">
                    </div>
                    <div class="game-body card-body">
                        <h5 class="card-title">Game Name</h5>
                        <h6 class="card-title text-secondary">Price</h6>
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
                <div class="game card">
                    <div class="game-img">
                        <img class = "card-img-top" src="imgs/logo.png" alt="game">
                    </div>
                    <div class="game-body card-body">
                        <h5 class="card-title">Game Name</h5>
                        <h6 class="card-title text-secondary">Price</h6>
                        <h6 class="card-title text-secondary">Genre</h6>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Description</button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
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
                <div class="game card">
                    <div class="game-img">
                        <img class = "card-img-top" src="imgs/logo.png" alt="game">
                    </div>
                    <div class="game-body card-body">
                        <h5 class="card-title">Game Name</h5>
                        <h6 class="card-title text-secondary">Price</h6>
                        <h6 class="card-title text-secondary">Genre</h6>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Description</button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
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
            </div>
            <div class="games-row">
                <div class="game card">
                    <div class="game-img">
                        <img class = "card-img-top" src="imgs/logo.png" alt="game">
                    </div>
                    <div class="game-body card-body">
                        <h5 class="card-title">Game Name</h5>
                        <h6 class="card-title text-secondary">Price</h6>
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
                <div class="game card">
                    <div class="game-img">
                        <img class = "card-img-top" src="imgs/logo.png" alt="game">
                    </div>
                    <div class="game-body card-body">
                        <h5 class="card-title">Game Name</h5>
                        <h6 class="card-title text-secondary">Price</h6>
                        <h6 class="card-title text-secondary">Genre</h6>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Description</button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
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
                <div class="game card">
                    <div class="game-img">
                        <img class = "card-img-top" src="imgs/logo.png" alt="game">
                    </div>
                    <div class="game-body card-body">
                        <h5 class="card-title">Game Name</h5>
                        <h6 class="card-title text-secondary">Price</h6>
                        <h6 class="card-title text-secondary">Genre</h6>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Description</button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
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
            </div>
                
        </section>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                           <div class="form-group">
                            <div class="row">
                                    <div class="col">
                                        <label for="item-name">Item Name</label>
                                        <input type="text" class="form-control" placeholder="Item Name" id="item-name">
                                    </div>
                                </div>
                           </div>
                           <div class="form-group">
                            <div class="row">
                                    <div class="col">
                                        <label for="price">Price(£)</label>
                                        <input type="number" class="form-control" placeholder="Price" id="price">
                                    </div>
                                    <div class="col">
                                        <label for="amount">Amount</label>
                                        <input type="number" class="form-control" placeholder="amount" id="amount" min="0.01">
                                    </div>
                                    <div class="col">
                                        <label for="age-rating">Age Rating</label>
                                        <input type="number" class="form-control" placeholder="Age Rating" id="age-rating">
                                    </div>
                                </div>
                           </div>
                           <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="min-players">Min Players</label>
                                        <input type="number" class="form-control" placeholder="Min Players" id="min-players" min="1">
                                    </div>
                                    <div class="col">
                                        <label for="max-players">Max Players</label>
                                        <input type="number" class="form-control" placeholder="Max Players" id="max-players" >
                                    </div>
                                    <div class="col">
                                        <label for="game-length">Game Length</label>
                                        <input type="number" class="form-control" placeholder="Game Length" id="game-length">
                                    </div>
                                </div>
                           </div>
                           <div class="form-group">
                            <div class="row">
                                    <div class="col">
                                        <label for="game-type">Game Type</label>
                                        <select id="game-type" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="game-genre">Game Genre</label>
                                        <select id="game-genre" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                           </div> 
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("includes/footer-include.php");?>
</body>
</html>
