<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section class="section">
  <div class="container project-detail">

    <h1 class="project-title">
      <?= esc($project['title']) ?>
    </h1>

    <div class="project-hero">
      <img
        src="/uploads/projects/thumbs/<?= esc($project['thumbnail']) ?>"
        alt="<?= esc($project['title']) ?>"
      >
    </div>

    <p class="project-description">
      <?= esc($project['description']) ?>
    </p>

  </div>
</section>

<?= $this->endSection() ?>
