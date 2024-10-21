<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Post Content-->
<div class="grid-container">
    <?php foreach ($plant as $p) : ?>
        <div class="card" data-bs-toggle="modal" data-bs-target="#staticBackdrop-<?= $p['id'] ?>" data-caption="Map">
            <img src="/img/<?= $p['img']; ?>" class="foto">
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop-<?= $p['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $p['tanaman']; ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="/img/<?= $p['img']; ?>" class="col-md-5 justify-content-center mb-2 me-md-3" alt="...">
                        <div class="row gx-4 gx-lg-3 justify-content-center">
                            <div class="col-md-2 col-lg-8 col-xl-8">
                                <p class="card-text"><?= $p['suhu']; ?>&deg;C</p>
                                <hr>
                                <p class="card-text"><?= $p['kelembapan']; ?></p>
                                <hr>
                                <p class="card-text"><?= $p['avg-hujan']; ?></p>
                                <hr>
                                <p class="card-text"><?= $p['pH']; ?></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>
<?= $this->endSection('content'); ?>