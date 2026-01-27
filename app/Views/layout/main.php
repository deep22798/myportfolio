<!DOCTYPE html>
<html lang="en" data-theme="<?= session()->get('theme') ?? 'light' ?>">
<head>
  <meta charset="UTF-8">
  <title>StepUp Studio</title>

  <!-- GLOBAL CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>

<body>

<?= $this->include('layout/header') ?>

<!-- GLOBAL THEME TOGGLE -->
<button id="themeToggle"
  style="position:fixed;bottom:24px;right:24px;z-index:1000;">
  🌓
</button>

<?= $this->renderSection('content') ?>

<?= $this->include('layout/footer') ?>

<!-- GLOBAL JS (ABSOLUTE PATH) -->
<script src="<?= base_url('assets/js/app.js') ?>"></script>

</body>
</html>
