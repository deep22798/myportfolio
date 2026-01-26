<?= view('admin/layout/header') ?>
<?= view('admin/layout/sidebar') ?>

<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>Projects</h3>
  <a href="/admin/projects/create" class="btn btn-dark">+ Add Project</a>
</div>

<?php if (empty($projects)): ?>
  <p>No projects found.</p>
<?php else: ?>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Type</th>
      <th>Status</th>
      <th>Featured</th>
      <th>Created</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($projects as $i => $project): ?>
      <tr>
        <td><?= $i + 1 ?></td>
        <td><?= esc($project['title']) ?></td>
        <td><?= esc($project['type']) ?></td>
        <td><?= esc($project['status']) ?></td>
        <td><?= $project['is_featured'] ? '⭐' : '-' ?></td>
        <td><?= date('d M Y', strtotime($project['created_at'])) ?></td>
        <td>
          <!-- View (public / 3D later) -->
          <a 
            href="/project/<?= $project['slug'] ?>" 
            target="_blank"
            class="btn btn-sm btn-secondary">
            View
          </a>

          <!-- Edit -->
          <a 
            href="/admin/projects/edit/<?= $project['id'] ?>" 
            class="btn btn-sm btn-primary">
            Edit
          </a>

          <!-- Delete -->
          <a 
            href="/admin/projects/delete/<?= $project['id'] ?>" 
            class="btn btn-sm btn-danger"
            onclick="return confirm('Delete this project?')">
            Delete
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php endif; ?>

<?= view('admin/layout/footer') ?>
