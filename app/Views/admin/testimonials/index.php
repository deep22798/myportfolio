<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="admin-card">
  <h1>Testimonials</h1>

  <form class="admin-form" method="post" action="/admin/testimonials/store">
    <?= csrf_field() ?>
    <textarea name="message" placeholder="Client message" required></textarea>
    <input name="author" placeholder="Author name" required>
    <input name="role" placeholder="Role / Company">
    <button>Add Testimonial</button>
  </form>
</div>

<div class="admin-card">
  <table class="admin-table">
    <tr>
      <th>Author</th>
      <th>Message</th>
    </tr>

    <?php foreach ($testimonials as $t): ?>
    <tr>
      <td><?= esc($t['author']) ?></td>
      <td><?= esc($t['message']) ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>

<?= $this->endSection() ?>
