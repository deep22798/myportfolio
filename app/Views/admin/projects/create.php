<?= view('admin/layout/header') ?>
<?= view('admin/layout/sidebar') ?>

<h3>Add Project</h3>

<form method="post" action="/admin/projects/store" enctype="multipart/form-data">

<input name="title" class="form-control mb-2" placeholder="Project Title" required>

<textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>

<select name="type" class="form-control mb-2">
  <option value="mobile">Mobile App</option>
  <option value="web">Web App</option>
  <option value="website">Website</option>
</select>

<label class="mt-2">Thumbnail</label>
<input type="file" name="thumbnail" class="form-control mb-2" accept="image/*">

<label>Gallery (multiple)</label>
<input type="file" name="gallery[]" class="form-control mb-2" accept="image/*" multiple>

<input name="demo_url" class="form-control mb-2" placeholder="Demo URL">
<input name="github_url" class="form-control mb-2" placeholder="GitHub URL">

<label class="mt-2">
  <input type="checkbox" name="is_featured"> Featured
</label>

<select name="status" class="form-control mt-2">
  <option value="draft">Draft</option>
  <option value="published">Published</option>
</select>

<button class="btn btn-dark mt-3">Save Project</button>
</form>

<?= view('admin/layout/footer') ?>
