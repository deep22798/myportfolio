<!DOCTYPE html>
<html lang="en" data-theme="<?= session()->get('theme') ?? 'light' ?>">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>

  <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/admin/admin.css') ?>">
</head>

<body class="admin-body">

<div class="admin-wrapper">

  <?= $this->include('admin/layout/sidebar') ?>

  <div class="admin-main">
    <?= $this->include('admin/layout/header') ?>

    <main class="admin-content">
      <?= $this->renderSection('content') ?>
    </main>
  </div>

</div>

<button id="themeToggle" class="theme-toggle">🌓</button>

<script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>
</html>
