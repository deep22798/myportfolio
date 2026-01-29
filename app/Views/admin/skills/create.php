<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<h1>Add Skill</h1>

<form method="post" enctype="multipart/form-data" action="/admin/skills/store">
<?= csrf_field() ?>

<input name="title" placeholder="Skill title" required>
<textarea name="description" placeholder="Description"></textarea>
<input type="file" name="icon">
<input name="sort_order" type="number" placeholder="Order">
<select name="status">
  <option value="1">Active</option>
  <option value="0">Inactive</option>
</select>

<button class="btn btn-primary">Save</button>
</form>

<?= $this->endSection() ?>
