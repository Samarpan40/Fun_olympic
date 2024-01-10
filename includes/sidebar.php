
<?php $path = 'www.steptoinstall.com/folder1/folder2/';
$folders = explode('/', $_SERVER['PHP_SELF']);
$i = 0;
foreach($folders as $folder) {
    if (strpos($folder, '.') !== FALSE || empty($folder)) {
        unset($folders[$i]);
    }
    $i++;
}
$pagename = end($folders)."/".basename($_SERVER['PHP_SELF']);
?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/funolympic/index.php" class="brand-link">
      <img src="http://<?= $_SERVER['HTTP_HOST']; ?>/funolympic/pic.png" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Fun Olympic </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/funolympic/dashboard.php" class="nav-link <?php if (basename($_SERVER['PHP_SELF'])=="dashboard.php") {echo "active"; } ?>">
                  <i class="fas fa-th-large nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/funolympic/index.php" class="nav-link ">
                  
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          <li class="nav-item menu-open"><a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item <?php if ($first_part=="") {echo "active"; }?>">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/funolympic/users/blockunblock.php" class="nav-link <?php if ($pagename=="users/blockunblock.php") {echo "active"; } ?>">
                  
                  <p>Users List</p>
                </a>
              </li>


              
              
              

              <li class="nav-item menu-open"><a href="#" class="nav-link">
                <i class="fas fa-image"></i>              <p>
                Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/funolympic/gallery/index.php" class="nav-link <?php if ($pagename=="gallery/index.php") {echo "active"; } ?>">
                  
                  <p>Gallery List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/funolympic/gallery/create.php" class="nav-link <?php if ($pagename=="gallery/create.php") {echo "active"; } ?>">
                  
                  <p>Add Photo</p>
                </a>
              </li>
            </ul>
          </li>






          <li class="nav-item menu-open"><a href="#" class="nav-link">
                <i class="far fa-calendar-alt"></i>
                <p>
                Shedule
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/funolympic/shedule/create.php" class="nav-link <?php if ($pagename=="shedule/create.php") {echo "active"; } ?>">
                  
                  <p>Update Shedule</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item menu-open"><a href="#" class="nav-link">
                <i class="fas fa-photo-video"></i>            <p>
                Video
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/funolympic/video/index.php" class="nav-link <?php if ($pagename=="video/index.php") {echo "active"; } ?>">
                  
                  <p>Live Video List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://<?= $_SERVER['HTTP_HOST']; ?>/funolympic/video/create.php" class="nav-link <?php if ($pagename=="video/create.php") {echo "active"; } ?>">
                  
                  <p>Add Link</p>
                </a>
              </li>
            </ul>
          </li>




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>