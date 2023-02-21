
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN <sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      

      <!-- Divider -->
      <hr class="sidebar-divider">

    
	 <?php
if($_SESSION)
{
	?>
	 
	  <li class="nav-item">
        <a class="nav-link" href="add_cat.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span style="font-wight:bold">ADD PET CATEGORY</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="add_sub_cat.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span style="font-wight:bold">ADD SUB-CATEGORY</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span style="font-wight:bold">VIEW PET CATEGORY</span></a>
      </li>
	    <li class="nav-item">
        <a class="nav-link" href="tables_sub.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span style="font-wight:bold">VIEW SUB-CATEGORY</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cartview.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span style="font-wight:bold">CART</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sellertable.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span style="font-wight:bold">VIEW SEllERS</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewusers.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span style="font-wight:bold">VIEW USERS</span></a>
      </li>
	   
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span style="font-wight:bold">LOGOUT</span></a>
      </li>
	  <?php
}
else
{
	?>
	  <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>ADMIN LOGIN</span></a>
      </li>
	  <?php
}

?>
	   
	 

      <!-- Nav Item - Tables -->
     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>