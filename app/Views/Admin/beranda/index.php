<?= $this->extend('admin/layout/index'); ?>

<?= $this->section('content'); ?>

<div class="mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-sm-12 col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5>Jumlah User</h5>
                <h2><b><?= $user; ?></b></h2>
            </div>
        </div>
    </div>

</div>


<?= $this->endSection(); ?>