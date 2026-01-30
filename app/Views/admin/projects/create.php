<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<h1>Add Project</h1>

<form action="/admin/projects/store" method="post" enctype="multipart/form-data" class="admin-form">

  <label>Title</label>
  <input type="text" name="title" required>

  <label>Description</label>
  <textarea name="description"></textarea>

  <label>Type</label>
  <input type="text" name="type" placeholder="Web / App / API">

<label>Tech Stack</label>
<select name="tech_stack" required>
  <?php foreach($techStacks as $t): ?>
    <option value="<?= $t['id'] ?>">
      <?= esc($t['name']) ?>
    </option>
  <?php endforeach ?>
</select>

  <label>Thumbnail</label>
  <input type="file" name="thumbnail">

  <label>Gallery Images</label>
  <input type="file" name="gallery[]" multiple>

  <label>Demo URL</label>
  <input type="url" name="demo_url">

  <label>GitHub URL</label>
  <input type="url" name="github_url">

  <label>
    <input type="checkbox" name="is_featured" value="1">
    Featured Project
  </label>

  <label>Status</label>
  <select name="status">
    <option value="active">Active</option>
    <option value="inactive">Inactive</option>
  </select>

  <button type="submit" class="btn btn-primary">Save Project</button>
  <a href="/admin/projects" class="btn">Cancel</a>

</form>

<?= $this->endSection() ?>
