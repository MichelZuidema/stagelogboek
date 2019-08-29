<header>
    <div class="container">
        <div id="branding">
            <h1>Stageblog</h1>
        </div>
        <nav
            <ul>
                <li class="<?php if($selectedLink == "home" OR $selectedLink == "blog/home"){ echo "current";} ?>"><a href="index.php">Thuis</a></li>
                <?php
                    if(isset($_SESSION['username'])) {
                        if($_SESSION['userlevel'] == 2) {
                            if($selectedLink == "blog/create") {
                                echo '<li class="current"><a href="createpost.php">Create Post</a></li>';
                            } else {
                                echo '<li><a href="createpost.php">Create Post</a></li>';
                            }
                        }

                        if($selectedLink == "blog/home") {
                            echo '<li><a href="../logout.php">Logout</a></li>';
                        } else if($selectedLink == "blog/profile") {
                            echo '<li><a href="../logout.php">Logout</a></li>';
                        } else {
                            echo '<li><a href="logout.php">Logout</a></li>';
                        }
                    } else {
                        echo '<li class="' . ($selectedLink == "login" ? 'current' : '') . '"><a href="login.php">Login / Registreer</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>