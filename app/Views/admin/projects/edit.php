<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<h1>Edit Project</h1>

<form action="/admin/projects/update/<?= $project['id'] ?>" method="post" enctype="multipart/form-data" class="admin-form">

  <label>Title</label>
  <input type="text" name="title" value="<?= esc($project['title']) ?>" required>

  <label>Description</label>
  <textarea name="description"><?= esc($project['description']) ?></textarea>

  <label>Type</label>
  <input type="text" name="type" value="<?= esc($project['type']) ?>">

  <label>Tech Stack</label>
  <input type="text" name="tech_stack" value="<?= esc($project['tech_stack']) ?>">

  <label>Current Thumbnail</label><br>
  <?php if($project['thumbnail']): ?>
    <img src="/uploads/projects/thumbs/<?= $project['thumbnail'] ?>" width="120"><br><br>
  <?php endif ?>

  <label>Change Thumbnail</label>
  <input type="file" name="thumbnail">

  <label>Demo URL</label>
  <input type="url" name="demo_url" value="<?= esc($project['demo_url']) ?>">

  <label>GitHub URL</label>
  <input type="url" name="github_url" value="<?= esc($project['github_url']) ?>">

  <label>
    <input type="checkbox" name="is_featured" value="1" <?= $project['is_featured'] ? 'checked' : '' ?>>
    Featured Project
  </label>

  <label>Status</label>
  <select name="status">
    <option value="active" <?= $project['status']=='active'?'selected':'' ?>>Active</option>
    <option value="inactive" <?= $project['status']=='inactive'?'selected':'' ?>>Inactive</option>
  </select>

  <button type="submit" class="btn btn-primary">Update Project</button>
  <a href="/admin/projects" class="btn">Cancel</a>

</form>

<?= $this->endSection() ?>
