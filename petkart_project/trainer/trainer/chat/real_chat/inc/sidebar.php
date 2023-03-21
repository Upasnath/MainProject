<div class="sidebar-wrapper mb-4">
    <?php
    session_start();
    $user = $_SESSION['user'];
    ?>
      <div class="card">
       <div class="card-header">
       <div class="message-to d-flex">
          <?php 

             $sql = "SELECT * FROM trainer WHERE docemail='$user'";
             $res = mysqli_query($conn,$sql);
             if($res){
             foreach($res as $user){ ?>
             <img src="../Dummy Images/8ec24a6934.jpg"> 
             <i class="fa fa-circle"></i>
             <h6><?php echo $user['docname']; ?></h6>
             <p>
                <?php
                 if($user['status'] == "Active"){
                     echo "Active Now";
                 }else{
                     echo "Offline";
                 } 
                ?> 
             </p>
          <?php } } ?>
       </div>
       

       </div>
       <div class="card-body">
       <div class="user-list-box">
            <ul>
              <?php
              $user = $_SESSION['user'];
               $query  = "SELECT * FROM `users`";
               $result =mysqli_query($conn, $query);
               if($result){
               foreach($result as $list){ ?>
                <li>
                    <a href="chat.php?sender=<?php echo $user; ?>&receiver=<?php echo $list['pemail']; ?>" class="d-flex align-items-center">
                        <!-- <img src="<?php echo $list['img']; ?>"> -->
                        <?php 
                         if($list['status'] == "Active"){
                            echo "<i class='fa fa-circle'></i>";
                         }else{
                             echo "<i class='fa fa-circle offline'></i>";
                         }
                        ?>
                        <h6><?php echo $list['pemail']; ?></h6>
                    </a>
                </li>
                <?php } } ?>
                
                

                
            </ul>   
            
        </div>
       </div>
                        </div>
    </div>