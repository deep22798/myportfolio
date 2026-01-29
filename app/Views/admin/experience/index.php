<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="admin-card">
  <h1>Experience Stats</h1>

  <form class="admin-form" method="post" action="/admin/experience/store">
    <?= csrf_field() ?>
    <input name="label" placeholder="Label (Projects Delivered)" required>
    <input name="value" type="number" placeholder="Value" required>
    <input name="sort_order" type="number" placeholder="Sort order">
    <button>Add Stat</button>
  </form>
</div>

<div class="admin-card">
  <table class="admin-table">
    <tr>
      <th>Label</th>
      <th>Value</th>
      <th>Order</th>
    </tr>

    <?php foreach ($stats as $s): ?>
    <tr>
      <td><?= esc($s['label']) ?></td>
      <td><?= esc($s['value']) ?>+</td>
      <td><?= esc($s['sort_order']) ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>

<?= $this->endSection() ?>
