<?php require_once"dbconfig.php";
if(isset($_SESSION['login']))
{
	
}
else
{
	header("location:login.php");
}

?>
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.php" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<?php include"nav_top.php";?>

</header>
<!--header end-->
<!--sidebar start-->
<?php include"sidebar.php";?>


<!--header end-->
<!--sidebar start-->

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     VIEW EXPENSE
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">S.no.</th>
            <th>Category Name</th>
            <th data-breakpoints="xs">Expense Description</th>
            <th data-breakpoints="xs">Expense Amount</th>
            <th data-breakpoints="xs">Date</th>
            <th data-breakpoints="xs">Image</th>
            <th data-breakpoints="xs">Status</th>
            <th>Edit</th>
            <th>delete</th>
             </tr>
        </thead>
        <tbody>
		<?php
		$n=1;
		$p=$_REQUEST['searchexpense'] ;
		echo $q="SELECT * FROM `expence` INNER JOIN category on expence.catid=category.catid WHERE category.name LIKE '%$p%' or expence.discription LIKE '%$p%' and category.userid='".$_SESSION['userid']."'";
		$result=select($q);
		while($r=mysqli_fetch_array($result))
		{
			extract($r);
		
		
		?>
          <tr data-expanded="true">
            <td><?=$n;?>.</td>
            <td><?=ucwords($name)?></td>
            <td><?=ucwords($discription)?></td>
            <td><?=$amount?>/-</td>
            <td><?=$date?></td>
            <td><img src="images/<?=$image?>" style="height:40px"></td>
            <td><?=ucwords($status)?></td>
            <td><a href="expence_edit.php?id=<?=$r[0]?>" style="color:white"><button class="btn btn-success">Edit</a></button></td>
            <td><a href="expence_delete.php?id=<?=$r[0]?>" style="color:white"><button class="btn btn-danger">Delete</a></button></td>
            
          </tr>
          <?php
		$n++;
		}
		  ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
