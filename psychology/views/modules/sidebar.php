<?php ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);?>
<aside class="main-sidebar sidebar-dark-lime elevation-4"><!--  -->
    <!-- Brand Logo -->
    <a href="/SkylAb-159/PSYCOLOGY/psychology/" class="brand-link navbar-lime">
      <img src="views/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PSYCHOLOGY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/img/angie.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Angie Suárez</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
            <a href="/SkylAb-159/PSYCOLOGY/psychology/" class="nav-link <?php if($routesArray[4]==""):?> active <?php endif?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Home
              </p>
            </a>
          </li>



            <li class="nav-item">
            <a href="/SkylAb-159/PSYCOLOGY/psychology/users" class="nav-link <?php if($routesArray[4]=="users"):?> active <?php endif?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Users
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="/SkylAb-159/PSYCOLOGY/psychology/clinicHistory" class="nav-link <?php if($routesArray[4]=="clinicHistory"):?> active <?php endif?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Clinic History
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="/SkylAb-159/PSYCOLOGY/psychology/interviews" class="nav-link <?php if($routesArray[4]=="interviews"):?> active <?php endif?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Interviews
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="/SkylAb-159/PSYCOLOGY/psychology/psychologists" class="nav-link <?php if($routesArray[4]=="psychologists"):?> active <?php endif?>">  
              <i class="nav-icon far fa-user"></i>
              <p>
                Psychologists
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/SkylAb-159/PSYCOLOGY/psychology/treatmen" class="nav-link <?php if($routesArray[4]=="treatmen"):?> active <?php endif?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Treatmen
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>