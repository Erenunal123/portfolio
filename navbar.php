<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="index.php">Eren Toprak Ünal</a>

        <div class="d-flex align-items-center">
            <button id="themeToggle" class="btn btn-sm text-light border-0 me-2">🌙</button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= $activePage === 'index' ? 'active' : '' ?>" href="index.php">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $activePage === 'about' ? 'active' : '' ?>" href="about.php">Hakkımda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $activePage === 'skills' ? 'active' : '' ?>" href="skills.php">Yetenekler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $activePage === 'contact' ? 'active' : '' ?>" href="contact.php">İletişim</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
