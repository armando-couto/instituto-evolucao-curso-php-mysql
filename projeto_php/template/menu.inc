<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" href="#">AJ Sistemas</a>

            <ul>
                <li class="menu-item-divided <?php echo $homeMenuSelected; ?>">
                    <a href="index.php">Home</a>
                </li>
                <li class="<?php echo $peopleMenuSelected; ?>">
                    <a href="#">People</a>
                </li>
                <li class="<?php echo $newsMenuSeleted; ?>">
                    <a href="#">News</a>
                </li>
                <li class="<?php echo $aboutMenuSelected; ?>">
                    <a href="#">About</a>
                </li>
            </ul>
        </div>
    </div>