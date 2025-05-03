<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel de Administración</title>

  <!-- CSS de AdminLTE -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Encabezado (navbar) -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('inicio') }}" class="nav-link">Inicio</a>
      </li>
    </ul>
  </nav>

  <!-- Menú lateral -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Mi Panel</span>
    </a>

    <div class="sidebar">
      <nav>
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
          <li class="nav-item">
            <a href="{{ route('inicio') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('fotos') }}" class="nav-link {{ request()->is('fotos') ? 'active' : '' }}">
              <i class="nav-icon fas fa-image"></i>
              <p>Fotos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('contacto') }}" class="nav-link {{ request()->is('contacto') ? 'active' : '' }}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Contacto</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Contenido principal -->
  <div class="content-wrapper p-4">
    @yield('content')
  </div>

  <!-- Pie de página -->
  <footer class="main-footer text-center">
    Actividad realizada por Lore Juarez — Desarrollo Web
  </footer>
</div>

<!-- JS de AdminLTE -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
