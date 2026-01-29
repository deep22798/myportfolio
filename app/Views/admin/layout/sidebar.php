<aside class="admin-sidebar">
  <h2 class="logo">StepUp Admin</h2>

  <nav>
    <a href="/admin" class="<?= uri_string() == 'admin' ? 'active' : '' ?>">Dashboard</a>
    <a href="/admin/projects" class="<?= str_contains(uri_string(),'projects') ? 'active' : '' ?>">Projects</a>
    <a href="/admin/skills" class="<?= str_contains(uri_string(),'skills') ? 'active' : '' ?>">Skills</a>
    <a href="/admin/experience">Experience</a>
    <a href="/admin/testimonials">Testimonials</a>
    <a href="/admin/settings">Settings</a>
    <a href="/admin/logout" class="logout">Logout</a>
  </nav>
</aside>
