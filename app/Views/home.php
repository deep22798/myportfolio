<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<!-- INTRO (HOME ONLY) -->
<div id="intro">
  <div id="introText">Hi…</div>
</div>

<div class="home-page">

<!-- HERO -->
<section class="hero">
  <div class="container hero-grid">

    <!-- LEFT -->
    <div class="hero-content">
      <h1 data-animate="fade-up">
  Hi, I’m <span class="accent">Kuldeep Singh</span><br>
  <span id="typingText" class="typing"></span>
  </h1>


      <p data-animate="fade-up" data-delay="150">
        I build scalable, high-performance mobile & web products
        with clean architecture and modern UI.
      </p>

      <div class="hero-actions" data-animate="fade-up" data-delay="300">
        <a href="/projects" class="btn btn-primary">View Projects</a>
        <a href="/contact" class="btn btn-outline">Contact Me</a>
      </div>
    </div>

    <!-- RIGHT : IMAGE + EFFECTS -->
    <div class="hero-visual" data-animate="scale-up" data-delay="200">

      <!-- animated glow -->
      <div class="hero-glow"></div>

      <!-- floating icons -->
<div class="tech-orbit">

  <span class="tech-icon flutter" data-tooltip="Flutter">
    <img src="<?= base_url('assets/icons/flutter.png') ?>" alt="Flutter">
  </span>

  <span class="tech-icon dart" data-tooltip="Dart">
    <img src="<?= base_url('assets/icons/dart.png') ?>" alt="Dart">
  </span>

  <span class="tech-icon firebase" data-tooltip="Firebase">
    <img src="<?= base_url('assets/icons/firebase.png') ?>" alt="Firebase">
  </span>

  <span class="tech-icon sql" data-tooltip="SQL">
    <img src="<?= base_url('assets/icons/sql.png') ?>" alt="SQL">
  </span>

  <span class="tech-icon ios" data-tooltip="iOS">
    <img src="<?= base_url('assets/icons/ios.png') ?>" alt="iOS">
  </span>

  <span class="tech-icon php" data-tooltip="SERVER">
    <img src="<?= base_url('assets/icons/server.png') ?>" alt="SERVER">
  </span>

</div>

      <!-- image -->
      <img
        src="<?= base_url('assets/images/profile.png') ?>"
        alt="Kuldeep Singh"
        class="hero-image"
        id="heroImage"
      >

    </div>

  </div>
</section>



<!-- PROJECTS -->
<section class="section-soft">
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <h2>Selected Projects</h2>
      <p>Some products I’ve designed & developed recently.</p>
    </div>

    <div class="projects-grid">
      <?php foreach ($projects as $index => $p): ?>
        <a href="/project/<?= esc($p['slug']) ?>"
   class="project-card"
   data-animate="scale-up"
   data-delay="<?= $index * 120 ?>">

  <div class="project-media">
    <img src="/uploads/projects/thumbs/<?= esc($p['thumbnail']) ?>" alt="<?= esc($p['title']) ?>">
    <div class="project-overlay"></div>
  </div>

  <div class="project-content">
    <span class="project-type"><?= esc($p['type']) ?></span>
    <h3><?= esc($p['title']) ?></h3>
    <span class="project-link">View Case Study →</span>
  </div>

</a>

      <?php endforeach; ?>
    </div>

  </div>
</section>



<!-- SKILLS -->
<section class="section-soft skills-section">
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <h2>Skills & Expertise</h2>
      <p>What I do best while building scalable digital products.</p>
    </div>

    <div class="skills-grid">

      <?php foreach($skills as $s): ?>
<div class="skill-card" data-animate="scale-up">
  <div class="skill-icon">
    <img src="<?= base_url('assets/icons/'.$s['icon']) ?>">
  </div>
  <h4><?= esc($s['title']) ?></h4>
  <p><?= esc($s['description']) ?></p>
</div>
<?php endforeach; ?>
    </div>
  </div>
</section>
<!-- EXPERIENCE -->
<section class="section-soft experience-section">
  <div class="container">

    <div class="experience-grid">

      <?php foreach($experience as $e): ?>
<div class="experience-box">
  <h3 class="count" data-count="<?= esc($e['value']) ?>">0</h3>
  <p><?= esc($e['label']) ?></p>
</div>
<?php endforeach; ?>

    </div>
  </div>
</section>


<!-- TECH STACK -->
<section class="section-soft tech-stack-section">
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <h2>Tech Stack</h2>
      <p>Technologies & tools I work with daily.</p>
    </div>

    <div class="tech-stack">

      <?php foreach($techStack as $t): ?>
      <span class="stack-badge"><?= esc($t['name']) ?></span>
      <?php endforeach; ?>


    </div>

  </div>
</section>


<!-- TESTIMONIALS -->
<section class="section-soft testimonials-section">
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <h2>What Clients Say</h2>
      <p>Feedback from people I’ve worked with.</p>
    </div>

    <div class="testimonials-grid">

      <?php foreach($testimonials as $t): ?>
      <div class="testimonial-card">
        <p>“<?= esc($t['message']) ?>”</p>
        <h4>— <?= esc($t['author']) ?></h4>
      </div>
      <?php endforeach; ?>


    </div>

  </div>
</section>


</div>
<?= $this->endSection() ?>
