
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
        </div>
       
    </div>
</nav>