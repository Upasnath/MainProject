<?php 
 include_once 'config/config.php';
//  include_once 'lib/database.php';
//  $db = new Database;
?>
<?php
 if(isset($_SESSION['unique_id'])){
  $id = $_SESSION['unique_id'];
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/animations.css">  
    <link rel="stylesheet" href="../css/main.css">  
    <link rel="stylesheet" href="../css/admin.css">
        
    <title>Dashboard</title>
    <style>
        .dashbord-tables,.trainer-heade{
            animation: transitionIn-Y-over 0.5s;
        }
        .filter-container{
            animation: transitionIn-Y-bottom  0.5s;
        }
        .sub-table,#anim{
            animation: transitionIn-Y-bottom 0.5s;
        }
        .trainer-heade{
            animation: transitionIn-Y-over 0.5s;
        }
    </style>
    
    
</head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-startup-image" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <link rel="icon" type="image/x-icon" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <meta name="description" content="Wepora is a best Graphics, software and Web Development company  and provides all IT solutions to their client. In india.."/>
    <meta name="Keywords" content="website design | website development | website logo  |  website hosting  | logo design| logo design ideas  | SEO | android |  best software company in india | cheapest | graphic design | Shrikant Kushwaha">
    <meta name="author" content="contain by Wepora team">
    <meta name="copyright" content="Copyright © 2020 Wepora" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="assets/css/emoji.css"> 
    <script src="assets/js/jquery.js"></script>
    <title>trainer chat</title>
  </head>
<body>
<div>
  
<a href="http://localhost/petkart_project/petkart_project/trainer/trainer/index.php" type="button" class="btn btn-light">Home</a>
</div>
<?php 
 if(isset($_GET['action']) && $_GET['action'] == "logout"){
  session_destroy();
  $sql = "UPDATE tbl_login SET status='Offline' WHERE id='$id'";
  $db->update($sql);
  echo "<script>window.location='login.php';</script>";
}
?>  