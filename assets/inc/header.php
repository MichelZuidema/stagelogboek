<header>
    <div class="container">
        <div id="branding">
            <h1>Stageblog</h1>
        </div>
        <nav
            <ul>
                <li class="<?php if($selectedLink == "home"){ echo "current";} ?>"><a href="index.php">Thuis</a></li>
                <li class="<?php if($selectedLink == "login"){ echo "current";} ?>"><a href="login.php">Login / Registreer</a></li>
                <?php
                    if(isset($_SESSION['username'])) {
                        echo '<li><a href="logout.php">Logout</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>