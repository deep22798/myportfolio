<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<section>
  <div class="container" style="max-width:600px;">
    <h1>Contact</h1>

    <form method="post">
      <?= csrf_field() ?>
      <input name="name" placeholder="Name" required><br><br>
      <input name="email" placeholder="Email" required><br><br>
      <textarea name="message" placeholder="Message"></textarea><br><br>
      <button class="btn btn-primary">Send</button>
    </form>
  </div>
</section>

<?= $this->endSection() ?>
