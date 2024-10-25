<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php?page=home">My Track</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <?php
                    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                    ?>
                    <li class="nav-item <?php echo $page == 'home' ? 'active' : ''; ?>">
                        <a class="nav-link" href="index.php?page=home">Home</a>
                    </li>
                    <li class="nav-item <?php echo $page == 'meal' ? 'active' : ''; ?>">
                        <a class="nav-link" href="index.php?page=meal">Meal</a>
                    </li>
                    <li class="nav-item <?php echo $page == 'training' ? 'active' : ''; ?>">
                        <a class="nav-link" href="index.php?page=training">Training</a>
                    </li>
                    <li class="nav-item <?php echo $page == 'appraisal' ? 'active' : ''; ?>">
                        <a class="nav-link" href="index.php?page=appraisal">Appraisal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>