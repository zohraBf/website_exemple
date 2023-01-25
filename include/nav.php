<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Projet</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item <?= ($title == 'Home')? 'active' :'' ?>">
                <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?= ($title == 'Contact')? 'active' :'' ?>">
                <a class="nav-link " href="/contact.php">Contact</a>
            </li>
            <li class="nav-item dropdown <?= ($title == 'liste des pays' || $title == 'ajouter un pays')? 'active' :'' ?>">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">pays</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="/pay/index.php">Liste</a>
                    <a class="dropdown-item" href="/pay/add.php">Ajouter</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">villes</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="/ville/index.php">Liste</a>
                    <a class="dropdown-item" href="/ville/add.php">Ajouter</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">stagiaires</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="/stagiaire/index.php">Liste</a>
                    <a class="dropdown-item" href="/stagiaire/add.php">Ajouter</a>
                </div>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <?php if(empty($_SESSION)): ?>
                <li class="nav-item"><a href="/login.php" class="nav-link">Se connecter</a></li>
                <li class="nav-item"><a href="/register.php" class="nav-link">S'inscrire</a></li>
            <?php endif; ?>
            <?php if(!empty($_SESSION)): ?>
                <li class="nav-item"><a href="/logout.php" class="nav-link">Se deconnecter</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>