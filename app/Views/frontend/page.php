<?= $this->extend('frontend/base'); ?>
<?= $this->section('content'); ?>

<div id="contact" class="contact-area" style="margin: 10vh 0 30vh 0rem;">
    <div class="container">
        <div class=" contact-content mb-3">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1> <?= $page->title ?> </h1>
                    <ul class="breadcrumb">
                        <li><a href="/" class="me-2"><i class="fas fa-home"></i> Home</a></li>
                        <li> <?= $page->title ?> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <p> <?= $page->description; ?></p>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>