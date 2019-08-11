<header>
    <div class="container">
        <div id="branding">
            <h1>Stageblog</h1>
        </div>
        <nav
            <ul>
                <li class="<?php if($selectedLink == "home"){ echo "current";} ?>"><a href="index.php">Thuis</a></li>
                <?php
                    if(isset($_SESSION['username'])) {
                        echo '<li><a href="logout.php">Logout</a></li>';
                    } else {
                        echo '<li class="' . ($selectedLink == "login" ? 'current' : '') . '"><a href="login.php">Login / Registreer</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>