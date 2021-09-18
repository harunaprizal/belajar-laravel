<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="{{ request()->is('/') ? 'active' : ''}}">
            <a href="/" class="nav-link">
              <i class="fa fa-home"></i>
              <p>Home</p>
            </a>
            </li> 
            <li class="{{ request()->is('guru') ? 'active' : ''}}">
            <a href="/guru" class="nav-link">
              <i class="fa fa-book"></i>
              <p>Guru</p>
            </a>
            </li>    
            <li class="{{ request()->is('siswa') ? 'active' : ''}}">
            <a href="/siswa" class="nav-link">
              <i class="fa fa-book"></i>
              <p>Siswa</p>
            </a>
            </li>    
            <li class="{{ request()->is('user') ? 'active' : ''}}">
            <a href="/user" class="nav-link">
              <i class="fa fa-book"></i>
              <p>User</p>
            </a>
            </li>  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-share"></i>
              <p>
                MultiLevel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle "></i>
                  <p>level1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle "></i>
                  <p>level2</p>
                </a>
              </li>
            </ul>
          </li>
          
</ul>