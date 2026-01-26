<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section style="padding:140px 0 80px;">
  <div class="container" style="max-width:900px;">

    <span style="
      display:inline-block;
      font-size:13px;
      letter-spacing:.08em;
      text-transform:uppercase;
      color:#64748b;
      margin-bottom:16px;
    ">
      <?= esc($project['type']) ?>
    </span>

    <h1 style="
      font-size:56px;
      font-weight:800;
      letter-spacing:-0.03em;
      margin-bottom:40px;
    ">
      <?= esc($project['title']) ?>
    </h1>

    <!-- HERO IMAGE -->
    <div style="
      margin-bottom:80px;
      border-radius:28px;
      overflow:hidden;
      background:#fff;
    ">
      <img 
        src="/uploads/projects/thumbs/<?= esc($project['thumbnail']) ?>"
        style="width:100%;display:block;"
        alt="<?= esc($project['title']) ?>"
      >
    </div>

    <!-- DESCRIPTION -->
    <?php if (!empty($project['description'])): ?>
      <p style="
        font-size:18px;
        color:#475569;
        line-height:1.8;
        margin-bottom:80px;
      ">
        <?= nl2br(esc($project['description'])) ?>
      </p>
    <?php endif; ?>

    <!-- GALLERY -->
    <?php
      $gallery = json_decode($project['gallery'] ?? '[]', true);
      if ($gallery):
    ?>
      <?php foreach ($gallery as $img): ?>
        <div style="
          margin-bottom:60px;
          border-radius:28px;
          overflow:hidden;
          background:#fff;
        ">
          <img 
            src="/uploads/projects/gallery/<?= esc($img) ?>"
            style="width:100%;display:block;"
          >
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

  </div>
</section>

<?= $this->endSection() ?>
