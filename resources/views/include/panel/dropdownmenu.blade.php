<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Bienvenido!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Mis Datos</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Configuración</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Mis citas</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Ayuda</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#"  onclick="event.preventDefault();document.getElementById('formlogout').submit();" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <form action="{{route('logout')}}" method="POST" style="display:none" id="formlogout">
              @csrf
               </form>
                <span>Cerrar Sesión</span>
              </a>
            </div>