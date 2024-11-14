<!-- </?= $this->extend('frontend/blog/base'); ?> -->
<?= $this->extend('frontend/base'); ?>
<?= $this->section('content'); ?>

<section>
  <div style="margin: 8vh 0 30vh 0rem;">
    <div style="background-image: url('<?= base_url('api/image/' . $blog->image . '/400x1650/90') ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;" class="p-4 p-md-5 mb-4 text-white">
      <div class="col-md-6 px-0 div-height">
      </div>
    </div>
    <div class="container py-3">
      <article class="blog-post">
        <h2 class="blog-post-title"><?= $title; ?></h2>
        <small class="blog-post-meta"><?= date("F j, Y", strtotime($blog->created_at)); ?></small>
        <div class="p-2">
          <p><?= $blog->content; ?></p>
        </div>
      </article>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>

