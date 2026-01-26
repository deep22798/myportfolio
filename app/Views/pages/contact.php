<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section style="padding:140px 0 120px;">
  <div class="container" style="max-width:900px;">

    <h1 style="
      font-size:56px;
      font-weight:800;
      letter-spacing:-0.03em;
      margin-bottom:24px;
    ">
      Let’s work together
    </h1>

    <p style="
      font-size:18px;
      color:#475569;
      max-width:600px;
      margin-bottom:80px;
    ">
      Have a project in mind or want to collaborate?
      Feel free to reach out — I’m always open to discussing new ideas.
    </p>

    <?php if (session()->getFlashdata('success')): ?>
      <p style="color:green;margin-bottom:30px;">
        <?= session()->getFlashdata('success') ?>
      </p>
    <?php endif; ?>

    <form method="post" action="/contact" style="max-width:600px;">
<?= csrf_field() ?>
      <div style="margin-bottom:24px;">
        <input type="text" name="name" placeholder="Your name" required
          style="width:100%;padding:16px 18px;border-radius:14px;border:1px solid #e5e7eb;">
      </div>

      <div style="margin-bottom:24px;">
        <input type="email" name="email" placeholder="Your email" required
          style="width:100%;padding:16px 18px;border-radius:14px;border:1px solid #e5e7eb;">
      </div>

      <div style="margin-bottom:32px;">
        <textarea name="message" rows="5" placeholder="Your message" required
          style="width:100%;padding:16px 18px;border-radius:14px;border:1px solid #e5e7eb;"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">
        Send Message
      </button>

    </form>

    <div style="margin-top:80px;color:#475569;">
      Or email me directly at  
      <strong>admin@stepupstudio.shop</strong>
    </div>

  </div>
</section>

<?= $this->endSection() ?>
