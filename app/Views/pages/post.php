<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<header class="masthead" style="background-image: url('/img/bg/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>Man must explore, and this is exploration at its greatest</h1>
                    <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                    <span class="meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on August 24, 2023
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content-->
<div class="grid-container justify-content-center">
    <?php foreach ($plant as $p) : ?>
        <div class="card" data-bs-toggle="modal" data-bs-target="#staticBackdrop-<?= $p['id'] ?>" data-caption="<?= $p['tanaman']; ?>">
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
                        <div class="row gx-4 gx-lg-3 justify-content-center">
                            <div class="col-md-2 col-lg-8 col-xl-8">
                                <div class="clearfix">
                                    <img src="/img/<?= $p['img']; ?>" class="col-md-5 float-md-start mb-2 me-md-3" alt="...">
                                    <p>
                                        A paragraph of placeholder text. We're using it here to show the use of the clearfix
                                        class. We're adding quite a few meaningless phrases here to demonstrate how the
                                        columns interact here with the floated image.
                                    </p>
                                    <p>
                                        As you can see the paragraphs gracefully wrap around the floated image. Now imagine
                                        how this would look with some actual content in here, rather than just this boring
                                        placeholder text that goes on and on, but actually conveys no tangible information
                                        at. It simply takes up space and should not really be read.
                                    </p>
                                    <hr style="width: 1%; margin: auto; margin-bottom: 1em;">
                                    <p>
                                        And yet, here you are, still persevering in reading this placeholder text, hoping
                                        for some more insights, or some hidden easter egg of content. A joke, perhaps.
                                        Unfortunately, there's none of that here.
                                    </p>
                                </div>
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