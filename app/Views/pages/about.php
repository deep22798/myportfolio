<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section style="padding:140px 0 120px;">
  <div class="container" style="max-width:900px;">

    <h1 style="
      font-size:56px;
      font-weight:800;
      letter-spacing:-0.03em;
      margin-bottom:32px;
    ">
      About Me
    </h1>

    <p style="
      font-size:18px;
      color:#475569;
      line-height:1.8;
      margin-bottom:80px;
    ">
      I’m a Flutter developer focused on building clean, scalable,
      and high-performance mobile and web applications.
      I help startups and businesses turn ideas into reliable digital products.
    </p>

    <!-- SKILLS -->
    <div style="
      display:grid;
      grid-template-columns:repeat(auto-fit, minmax(260px, 1fr));
      gap:40px;
    ">

      <div>
        <h3 style="font-size:20px;font-weight:600;margin-bottom:12px;">
          Mobile Development
        </h3>
        <p style="color:#475569;">
          Flutter, Dart, Android, iOS, Firebase
        </p>
      </div>

      <div>
        <h3 style="font-size:20px;font-weight:600;margin-bottom:12px;">
          Web Development
        </h3>
        <p style="color:#475569;">
          HTML, CSS, JavaScript, REST APIs
        </p>
      </div>

      <div>
        <h3 style="font-size:20px;font-weight:600;margin-bottom:12px;">
          Backend
        </h3>
        <p style="color:#475569;">
          PHP, CodeIgniter 4, MySQL, Authentication
        </p>
      </div>

      <div>
        <h3 style="font-size:20px;font-weight:600;margin-bottom:12px;">
          Tools
        </h3>
        <p style="color:#475569;">
          Git, VS Code, Postman, CI/CD
        </p>
      </div>

    </div>

  </div>
</section>

<?= $this->endSection() ?>
