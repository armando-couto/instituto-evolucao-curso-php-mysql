<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading">AC Sistemas</a>

            <ul>
                <li class="menu-item-divided <?php echo $homeMenuSelected; ?>">
                    <a href="<?php echo $path; ?>/index.php">Home</a>
                </li>
                <li class="<?php echo $peopleMenuSelected; ?>">
                    <a href="<?php echo $path; ?>/pages/people/index.php">People</a>
                </li>
                <li class="<?php echo $newsMenuSeleted; ?>">
                    <a href="<?php echo $path; ?>/pages/news/index.php">News</a>
                </li>
                <li class="<?php echo $aboutMenuSelected; ?>">
                    <a href="<?php echo $path; ?>/pages/about/index.php">About</a>
                </li>
            </ul>
        </div>
    </div>