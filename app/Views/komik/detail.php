<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Detail Komik</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><b><?= $komik['judul']; ?></b></h5>
                            <p class="card-text">Penulis : <?= $komik['penulis']; ?></p>
                            <p class="card-text">Penerbit : <?= $komik['penerbit']; ?></p>
                            <p class="card-text"><small class="text-muted">Last updated : <?= $komik['updated_at']; ?></small></p>

                            <div class="col-md-8">
                                <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn btn-outline-warning">Edit</a>

                                <form action="/komik/<?= $komik['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn btn-outline-danger" onclick="return confirm('Apakah anda yakin');">Delete</button>
                                </form>

                                <a href="/komik/" class="btn btn-outline-dark">Back</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>