
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CRM <sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

     
      <hr class="sidebar-divider">

     
	 <?php
if($_SESSION)
{
	?>
	 
	   <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tickets</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="solved_tickets.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Solved Tickets</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="register.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Team Mamber Register</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="mamber.php">
          <i class="fas fa-fw fa-table"></i>
          <span>our Members</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Logout</span></a>
      </li>
	  <?php
}
else
{
	?>
	
	  <li class="nav-item">
        <a class="nav-link" href="login.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Head Login</span></a>
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