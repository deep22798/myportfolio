<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section class="hero">
  <div class="container">
    <h1>
      Hi, I’m a Flutter Developer<br>
      Building modern digital products
    </h1>

    <p>
      I design and develop high-quality mobile applications,
      web apps, and scalable solutions for startups and businesses.
    </p>

    <div class="hero-actions">
      <a href="/projects" class="btn btn-primary">View Projects</a>
      <a href="/contact" class="btn btn-outline">Contact Me</a>
    </div>
  </div>
</section>
<section style="padding:120px 0 100px;">
  <div class="container">

    <div style="max-width:600px;margin-bottom:80px;">
      <h2 style="font-size:42px;font-weight:700;letter-spacing:-0.02em;">
        Selected Projects
      </h2>
      <p style="color:#475569;font-size:17px;">
        A selection of projects I’ve worked on,
        focusing on mobile apps, web platforms and digital products.
      </p>
    </div>

    <div class="ashley-grid">
      <?php foreach ($projects as $p): ?>
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
