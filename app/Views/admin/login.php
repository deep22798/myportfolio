<!DOCTYPE html>
<html lang="en" data-theme="<?= session()->get('theme') ?? 'light' ?>">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/admin/admin.css') ?>">
</head>

<body class="admin-login-body">

<div class="login-box">

  <h1>Admin Login</h1>

  <?php if (session()->getFlashdata('error')): ?>
    <p style="color:#ef4444"><?= session()->getFlashdata('error') ?></p>
  <?php endif; ?>

  <!-- ✅ SINGLE FORM ONLY -->
  <form method="post" action="<?= base_url('admin/auth') ?>">
    <?= csrf_field() ?>

    <input
      type="email"
      name="email"
      placeholder="Email"
      value="admin@stepupstudio.shop"
      required
    >

    <input
      type="password"
      name="password"
      placeholder="Password"
      required
    >

    <button type="submit">Login</button>
  </form>

</div>

<script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>
</html>
