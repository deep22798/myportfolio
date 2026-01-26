<?= view('admin/layout/header') ?>
<?= view('admin/layout/sidebar') ?>

<h2>Welcome, <?= session('admin_name') ?> 👋</h2>
<p>Admin dashboard ready.</p>

<div class="row mt-4">
  <div class="col-md-3">
    <div class="card shadow">
      <div class="card-body">
        <h6>Total Projects</h6>
        <h3>0</h3>
      </div>
    </div>
  </div>
</div>

<?= view('admin/layout/footer') ?>
