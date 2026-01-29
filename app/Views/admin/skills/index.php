<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="admin-header-row">
  <h1>Skills</h1>
  <a href="/admin/skills/create" class="btn btn-primary">+ Add Skill</a>
</div>

<?php if(session()->getFlashdata('success')): ?>
<p class="success"><?= session()->getFlashdata('success') ?></p>
<?php endif ?>

<table class="admin-table">
  <tr>
    <th>Icon</th>
    <th>Title</th>
    <th>Status</th>
    <th>Order</th>
    <th>Actions</th>
  </tr>

  <?php foreach($skills as $s): ?>
  <tr>
    <td>
      <?php if($s['icon']): ?>
        <img src="/uploads/skills/<?= $s['icon'] ?>" width="32">
      <?php endif ?>
    </td>
    <td><?= esc($s['title']) ?></td>
    <td><?= $s['status'] ? 'Active' : 'Inactive' ?></td>
    <td><?= $s['sort_order'] ?></td>
    <td>
      <a href="/admin/skills/edit/<?= $s['id'] ?>">Edit</a> |
      <a href="/admin/skills/delete/<?= $s['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
    </td>
  </tr>
  <?php endforeach ?>
</table>

<?= $this->endSection() ?>
