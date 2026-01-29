<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<h1>Edit Skill</h1>

<form method="post" enctype="multipart/form-data" action="/admin/skills/update/<?= $skill['id'] ?>">
<?= csrf_field() ?>

<input name="title" value="<?= esc($skill['title']) ?>" required>
<textarea name="description"><?= esc($skill['description']) ?></textarea>

<?php if($skill['icon']): ?>
<img src="/uploads/skills/<?= $skill['icon'] ?>" width="40">
<?php endif ?>

<input type="file" name="icon">
<input name="sort_order" type="number" value="<?= $skill['sort_order'] ?>">

<select name="status">
  <option value="1" <?= $skill['status']?'selected':'' ?>>Active</option>
  <option value="0" <?= !$skill['status']?'selected':'' ?>>Inactive</option>
</select>

<button class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>
