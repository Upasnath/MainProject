<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
			<?php
			if(isset($_SESSION['login']))
{
?>
	<li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- <li>
                    <a class="active" href="search_result.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Income</span>
                    </a>
                </li> -->
				
				<li>
                    <a class="active" href="add_item.php">
                        <i class="fa fa-th"></i>
                        <span>ADD PETS</span>
                    </a>
                </li><li>
                    <a class="active" href="view.php">
                        <i class="fa fa-book"></i>
                        <span>VIEW PETS</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="view_placed.php">
                        <i class="fa fa-book"></i>
                        <span> PLACED  ENQUIRY</span>
                    </a>
                </li>
                <li>
                    <a class="active" href="http://localhost/petkart_project/petkart_project/seller/petkart_project/seller/cart.php">
                        <i class="fa fa-book"></i>
                        <span> view order</span>
                    </a>
                </li>
				<li>
                    <a class="active" href="logout.php">
                        <i class="fa fa-book"></i>
                        <span>Logout</span>
                    </a>
                </li>

	
<?php
}
else
{
?>

<li>
                    <a href="registration.php">
                        <i class="fa fa-user"></i>
                        <span>Signup</span>
                    </a>
                </li>
<li>
                    <a href="login.php">
                        <i class="fa fa-user"></i>
                        <span>Login </span>
                    </a>
                </li>



<?php	
}
?>
                
				
                
               
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>