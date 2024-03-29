<nav class="navbar navbar-expand-lg navbar-dark bg-primary bold">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>"><i class="fab fa-app-store-ios"></i>sa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?= (uri_string() == '/') ? 'active' : '' ?>" href="<?= base_url(); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (url_title('Perhitungan') == $title) ? 'active' : '' ?>" href="<?= base_url('hasilperhitungan'); ?>">Hasil Perhitungan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?= base_url() ?>/images/profil/<?= user()->sampul; ?>" class="rounded-circle" width="30" height="30" alt="<?= user()->username; ?>">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item <?= (url_title('Profil') == $title) ? 'active' : '' ?>" href="<?= base_url('profil/' . user()->id); ?>">Profil</a>
                        <a class="dropdown-item <?= (url_title('Riwayat') == $title) ? 'active' : '' ?>" href="<?= base_url('home/riwayat/' . user()->id); ?>">Riwayat</a>
                        <?php if (in_groups('admin')) : ?>
                            <a class="dropdown-item" href="<?= base_url('admin'); ?>">Admin</a>
                        <?php endif; ?>
                        <hr>
                        <a class="dropdown-item" href="<?= base_url('logout'); ?>">Keluar</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>