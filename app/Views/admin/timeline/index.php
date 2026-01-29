<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="admin-card">
  <h1>Timeline</h1>

  <form class="admin-form" method="post" action="/admin/timeline/store">
    <?= csrf_field() ?>
    <input name="year" placeholder="Year (2024)" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <input name="sort_order" type="number" placeholder="Sort order">
    <button>Add Timeline</button>
  </form>
</div>

<div class="admin-card">
  <table class="admin-table">
    <tr>
      <th>Year</th>
      <th>Description</th>
    </tr>

    <?php foreach ($timeline as $t): ?>
    <tr>
      <td><?= esc($t['year']) ?></td>
      <td><?= esc($t['description']) ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>

<?= $this->endSection() ?>
