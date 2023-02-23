<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
       
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
			<?php
			
	?>
<i class="fa fa-bell-o"></i>
                <span class="badge bg-warning"></span>
            </a>
			<ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <?php
//}
?>
                <?php
			/* $p1="SELECT * FROM expence 
WHERE ramain > '0' and userid='".$_SESSION['userid']."'";
//$p="select * from expence";
 $result1=select($p1);
 while($r1=mysqli_fetch_array($result1))
 
	
{*/
	?>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                      



					  <div class="noti-info">
                            <a href="#"> Your remaining Amount is /- <a>
							<a>And Due date is </a>
                        </div>
                    </div>
                </li>
<?php
//}
?>
            </ul>
	 


	
                
            
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start--><form method="post" action="search_result.php">
    
    <ul class="nav pull-right top-menu">
	    <li>
            <input type="text" name="searchexpense" class="form-control search" placeholder=" Search">
        </li>
		</form>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/a.jpg">
				<?php
				//print_r($_SESSION);
				 $ty="select name from registration where seller_id='".$_SESSION['name']."' ";
				$t=select($ty);
				while($r=mysqli_fetch_array($t))
				{
				?>
                <span class="username"><?=ucwords($r[0])?></span><?php
				}
				?>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>