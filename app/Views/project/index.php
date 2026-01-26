<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section style="padding:140px 0 120px;">
  <div class="container">

    <div style="max-width:600px;margin-bottom:80px;">
      <h1 style="font-size:56px;font-weight:800;letter-spacing:-0.03em;">
        Projects
      </h1>
      <p style="color:#475569;font-size:18px;">
        A collection of selected projects showcasing
        mobile apps, web platforms and digital products.
      </p>
    </div>

    <div class="ashley-grid">
      <?php foreach ($project as $p): ?>
        <a href="/project/<?= esc($p['slug']) ?>" class="ashley-card">

          <div class="ashley-image">
            <img src="/uploads/projects/thumbs/<?= esc($p['thumbnail']) ?>" alt="<?= esc($p['title']) ?>">
          </div>

          <div class="ashley-info">
            <span class="ashley-type"><?= esc($p['type']) ?></span>
            <h3><?= esc($p['title']) ?></h3>
          </div>

        </a>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?= $this->endSection() ?>
