document.querySelector("#navbar").innerHTML = `
<aside class="left-sidebar" id="aside" data-sidebarbg="skin5">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="pt-4">

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="area_adm.php" 
                aria-expanded="false"><i class="mdi mdi-border-inside"></i><span 
                  class="hide-menu">Página inicial</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="ongs.php" 
                aria-expanded="false"><i class="mdi mdi-border-inside"></i><span 
                  class="hide-menu">ONG's</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="administradores.php"
                aria-expanded="false"><i class="mdi mdi-blur-linear"></i><span
                  class="hide-menu">Administradores</span></a>
            </li>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="categorias.php"
                aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span
                  class="hide-menu">Categorias</span></a>
            </li>


          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    `