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

          <div class="project-image">
            <img src="/uploads/projects/thumbs/<?= esc($p['thumbnail']) ?>" alt="">
          </div>

          <div class="project-info">
            <span class="project-type"><?= esc($p['type']) ?></span>
            <h3><?= esc($p['title']) ?></h3>
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

      <div class="skill-card" data-animate="scale-up">
        <div class="skill-icon">
          <img src="<?= base_url('assets/icons/flutter.png') ?>">
        </div>
        <h4>Flutter Development</h4>
        <p>High-performance cross-platform apps with clean UI & architecture.</p>
      </div>

      <div class="skill-card" data-animate="scale-up" data-delay="100">
        <div class="skill-icon">
          <img src="<?= base_url('assets/icons/dart.png') ?>">
        </div>
        <h4>Dart & State Management</h4>
        <p>Bloc, Provider, async workflows, performance optimization.</p>
      </div>

      <div class="skill-card" data-animate="scale-up" data-delay="200">
        <div class="skill-icon">
          <img src="<?= base_url('assets/icons/firebase.png') ?>">
        </div>
        <h4>Firebase</h4>
        <p>Auth, Firestore, FCM, real-time apps & analytics.</p>
      </div>

      <div class="skill-card" data-animate="scale-up" data-delay="300">
        <div class="skill-icon">
          <img src="<?= base_url('assets/icons/server.png') ?>">
        </div>
        <h4>Backend Development</h4>
        <p>CodeIgniter 4, REST APIs, secure authentication.</p>
      </div>

    </div>
  </div>
</section>
<!-- EXPERIENCE -->
<section class="section-soft experience-section">
  <div class="container">

    <div class="experience-grid">

      <div class="experience-box" data-animate="fade-up">
       <h3 class="count" data-count="3">0</h3>
        <p>Development Experience</p>
      </div>

      <div class="experience-box" data-animate="fade-up" data-delay="100">
        <h3 class="count" data-count="20">0</h3>

        <p>Projects Delivered</p>
      </div>

      <div class="experience-box" data-animate="fade-up" data-delay="200">
       <h3 class="count" data-count="20">0</h3>

        <p>Happy Clients</p>
      </div>

      <div class="experience-box" data-animate="fade-up" data-delay="300">
        <h3 class="count" data-count="20">0</h3>

        <p>Live Apps</p>
      </div>

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

      <span class="stack-badge">Flutter</span>
      <span class="stack-badge">Dart</span>
      <span class="stack-badge">Firebase</span>
      <span class="stack-badge">PHP</span>
      <span class="stack-badge">CodeIgniter 4</span>
      <span class="stack-badge">MySQL</span>
      <span class="stack-badge">REST APIs</span>
      <span class="stack-badge">Git</span>
      <span class="stack-badge">VPS</span>
      <span class="stack-badge">CI/CD</span>

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

      <div class="testimonial-card" data-animate="scale-up">
        <p>
          “Kuldeep delivered our app on time with excellent quality.
          Communication and performance were outstanding.”
        </p>
        <h4>— Startup Founder</h4>
      </div>

      <div class="testimonial-card" data-animate="scale-up" data-delay="120">
        <p>
          “Very professional Flutter developer.
          Clean code, scalable architecture and great UI sense.”
        </p>
        <h4>— Product Manager</h4>
      </div>

      <div class="testimonial-card" data-animate="scale-up" data-delay="240">
        <p>
          “Highly recommended for mobile and backend development.”
        </p>
        <h4>— Agency Client</h4>
      </div>

    </div>

  </div>
</section>


</div>
<?= $this->endSection() ?>
