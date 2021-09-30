   <!-- Nav items -->
   <h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">Gestionar datos</span>
  </h6>
   <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="/">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="examples/icons.html">
        <i class="ni ni-planet text-orange"></i>
        <span class="nav-link-text">Especialidades</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="examples/map.html">
        <i class="ni ni-single-02 text-red"></i>
        <span class="nav-link-text">Médicos</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="examples/profile.html">
        <i class="ni ni-satisfied text-info"></i>
        <span class="nav-link-text text-info">Pacientes</span>
      </a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('formLogout').submit()">
        <i class="ni ni-key-25 "></i>
        <span class="nav-link-text">Cerrar sesión</span>
      </a>
      <form action="{{route('logout')}}" method="post" style="display: none" id="formLogout">
          @csrf
      </form>
    </li>

  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading p-0 text-muted">
    <span class="docs-normal">Reportes</span>
  </h6>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
        <i class="ni ni-collection text-red"></i>
        <span class="nav-link-text ">Frecuencia de citas</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
        <i class="ni ni-sound-wave text-orange"></i>
        <span class="nav-link-text">Medicos mas activos</span>
      </a>
    </li>
 
   
    
  </ul>