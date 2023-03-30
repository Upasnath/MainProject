<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "pet";
$conn=mysqli_connect($servername,$username,$password,$database);
     session_start();
     $seller_id=$_GET['seller_id'];



$sq = "SELECT * FROM review_table WHERE seller_id='$seller_id'";
$resul = $conn->query($sq);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    
                    
                   
                </button>
                <a class="navbar-brand" href="http://localhost/petkart_project/petkart_project/admin/sellertable.php"><Button>Admin panl</a>  </button>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>PERFORMANCE ANALAYSIS </h2>   
                        <!-- <h5>Welcome  Admin, Love to see you back. </h5>
                    </div>
                    <p style="color:white ;">Welcome</p>
                    
                    <?php
                    echo '<center>welecome to admin page ';

                        ?> -->

              </ul>
            </div><br><br>
<?php
if ($resul->num_rows > 0) {
    $texts = array();
    while ($row = $resul->fetch_assoc()) {
        $texts[] = $row["review"];
    }
    $url = 'http://127.0.0.1:5000/sentiment';
    $data = json_encode(array('texts' => $texts));
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => $data,
        ),
    );
    $context  = stream_context_create($options);
    $resul = file_get_contents($url, false, $context);
    $resul = json_decode($resul, true);
  
    $positive = $resul['positive'];
    $negative = $resul['negative'];
    $neutral = $resul['neutral'];
    $total = $positive + $negative + $neutral;
  
    $pos_percent = ($positive / $total) * 100;
    $neg_percent = ($negative / $total) * 100;
    $neu_percent = ($neutral / $total) * 100;
    $pos_accuracy = ($pos_percent >( $neu_percent+$neg_percent)) ? $pos_percent : (100 -( $neu_percent+$neg_percent));
      $neg_accuracy = ($neg_percent > ($neu_percent+$pos_percent)) ? $neg_percent : (100 - ($neu_percent+$pos_percent));
    $neutral_accuracy = ($neu_percent > ($pos_percent + $neg_percent)) ? $neu_percent : (100 - ($pos_percent + $neg_percent));
  
   } else {
    echo "No comments.";
    $pos_percent = 0;
    $neg_percent = 0;
    $neu_percent=0;
    $neu_percent = 0;
    $pos_accuracy = 0;
    $neg_accuracy = 0;
    $neu_accuracy = 0;
    $neutral_accuracy=0;
  }
  ?>
  <div class="container-fluid">        
      <!-- <h1>Sentiment Analysis </h1> -->
      <div class="chart-container" style="margin-left:10%; width: 50%;
    height: 50%;">
          <canvas id="sentiment-chart"></canvas>
      </div>
      <div>
      <p>Positive: <?php echo $pos_accuracy ; ?></p>
      <p>Negative: <?php echo $neg_accuracy; ?></p>
      <p>Neutral: <?php echo $neutral_accuracy; ?></p>
  </div>
  </div>
  
      <script>
          var ctx = document.getElementById('sentiment-chart').getContext('2d');
          var chart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: ['Positive: <?php echo $positive ."/".$total ?>', 'Negative: <?php echo $negative ."/".$total;?>', '<?php echo $neutral ."/".$total; ?>'],
                  datasets: [{
                      label: 'Performance Analysis percentage',
                      data: [<?php echo $pos_percent; ?>, <?php echo $neg_percent; ?>, <?php echo $neu_percent; ?>],
                      backgroundColor: [
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)'
                      ],
                      borderColor: [
                          'rgba(75, 192, 192, 1)',
                          'rgba(255, 99, 132, 1)',
                          'rgba(54, 162, 235, 1)'
                      ],
                      borderWidth: 1,
                    
                  }]
              },
              
              options: {
                  scales: {
                      y: {
                          beginAtZero: true,
                          ticks: {
                              stepSize: 10,
                              max: 100
                          }
                      }
                  }
              }
          });
      </script>






            
        
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>