<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section>
  <div class="container">
    <h1>Projects</h1>
    <div class="projects-grid">
      <?php foreach ($project as $p): ?>
        <a href="/project/<?= esc($p['slug']) ?>" class="project-card">
          <img src="/uploads/projects/thumbs/<?= esc($p['thumbnail']) ?>">
          <div class="project-info">
            <span class="project-type"><?= esc($p['type']) ?></span>
            <h3><?= esc($p['title']) ?></h3>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
