<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="admin-header-row">
  <h1>Projects</h1>
  <a href="/admin/projects/create" class="btn btn-primary">+ Add Project</a>
</div>

<?php if(session()->getFlashdata('success')): ?>
<p class="success"><?= session()->getFlashdata('success') ?></p>
<?php endif ?>

<table class="admin-table">
<tr>
  <th>Thumb</th>
  <th>Title</th>
  <th>Type</th>
  <th>Status</th>
  <th>Featured</th>
  <th>Actions</th>
</tr>

<?php foreach($projects as $p): ?>
<tr>
  <td>
    <?php if($p['thumbnail']): ?>
      <img src="/uploads/projects/thumbs/<?= $p['thumbnail'] ?>" width="60">
    <?php endif ?>
  </td>
  <td><?= esc($p['title']) ?></td>
  <td><?= esc($p['type']) ?></td>
  <td><?= ucfirst($p['status']) ?></td>
  <td><?= $p['is_featured'] ? 'Yes' : 'No' ?></td>
  <td>
    <a href="/admin/projects/edit/<?= $p['id'] ?>">Edit</a> |
    <a href="/admin/projects/delete/<?= $p['id'] ?>" onclick="return confirm('Delete project?')">Delete</a>
  </td>
</tr>
<?php endforeach ?>
</table>

<?= $this->endSection() ?>
