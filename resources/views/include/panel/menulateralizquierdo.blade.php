<h6 class="navbar-heading text-muted">Gestionar Datos</h6>
<ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./index.html">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-planet text-blue"></i> Especialidad
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/maps.html">
              <i class="ni ni-single-02 text-orange"></i> Médico
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/profile.html">
              <i class="ni ni-satisfied  text-info"></i> Paciente
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="" onclick="event.preventDefault();document.getElementById('formlogout').submit();">
              <i class="ni ni-key-25 text-yellow"></i> Cerrar Sesion
            </a>
            <form action="{{route('logout')}}" method="POST" style="display:none" id="formlogout">
              @csrf
            </form>
          </li>
         <!-- <li class="nav-item">
            <a class="nav-link" href="./examples/register.html">
              <i class="ni ni-circle-08 text-pink"></i> Registro
            </a>
          </li>-->
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Reportes</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
              <i class="ni ni-collection text-red"></i> Frecuencia de Citas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-like-2 text-blue"></i> Mèdicos mas valorados
            </a>
          </li>
          
        </ul>