<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="dashboard-header">
  <h1>Welcome, <?= esc($adminName) ?> 👋</h1>
  <p>Here’s what’s happening with your website.</p>
</div>

<div class="dashboard-grid">

  <div class="dashboard-card">
    <h3><?= esc($totalProjects) ?></h3>
    <p>Total Projects</p>
  </div>

  <div class="dashboard-card">
    <h3><?= esc($totalSkills) ?></h3>
    <p>Total Skills</p>
  </div>

  <div class="dashboard-card">
    <h3>🌗</h3>
    <p>Dark / Light Mode Active</p>
  </div>

  <div class="dashboard-card">
    <h3>🔐</h3>
    <p>Admin Login Secured</p>
  </div>

</div>

<div class="admin-card">
  <h2>Quick Actions</h2>

  <div class="quick-actions">
    <a href="/admin/projects">Manage Projects</a>
    <a href="/admin/skills">Manage Skills</a>
    <a href="/admin/experience">Experience</a>
    <a href="/admin/testimonials">Testimonials</a>
    <a href="/admin/settings">Site Settings</a>
  </div>
</div>

<?= $this->endSection() ?>
