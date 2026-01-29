<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="admin-card">
  <h1>Tech Stack</h1>

  <form class="admin-form" method="post" action="/admin/tech-stack/store">
    <?= csrf_field() ?>
    <input name="name" placeholder="Technology name" required>
    <input name="sort_order" type="number" placeholder="Sort order">
    <button>Add Tech</button>
  </form>
</div>

<div class="admin-card">
  <table class="admin-table">
    <tr>
      <th>Name</th>
      <th>Order</th>
    </tr>

    <?php foreach ($stack as $t): ?>
    <tr>
      <td><?= esc($t['name']) ?></td>
      <td><?= esc($t['sort_order']) ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>

<?= $this->endSection() ?>
