<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="admin-card">
  <h1>Site Settings</h1>

  <?php if (session()->getFlashdata('success')): ?>
    <p class="success"><?= session()->getFlashdata('success') ?></p>
  <?php endif; ?>

  <form class="admin-form" method="post" action="/admin/settings/update">
    <?= csrf_field() ?>

    <input
      name="hero_name"
      value="<?= esc($site['hero_name'] ?? '') ?>"
      placeholder="Hero Name"
    >

    <input
      name="hero_title"
      value="<?= esc($site['hero_title'] ?? '') ?>"
      placeholder="Hero Title"
    >

    <textarea
      name="hero_subtitle"
      placeholder="Hero Subtitle"
    ><?= esc($site['hero_subtitle'] ?? '') ?></textarea>

    <button type="submit">Save Settings</button>
  </form>
</div>

<?= $this->endSection() ?>
