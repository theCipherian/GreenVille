<?php
session_start();
require("init.php");

$query = mysqli_query($init, "SELECT * FROM reserve_log ORDER BY date DESC");
$is_it = mysqli_num_rows($query);
if($is_it > 0){
    while($arr = mysqli_fetch_array($query)){
        $r_action = $arr['action'];
        $r_amount = $arr['amount'];
        $r_date = $arr['date'];

        ?>
        <div class='r_cont'>
           <div class='hj'><?php echo $r_action ?>
            <?php  
             if($r_action == 'credit'){
                ?>
                 <div class='ghl'><i class="uil uil-arrow-up"></i></div>
                <?php
             }else{
                ?>
              <div class='ghl2'><i class="uil uil-arrow-down"></i></div>
                <?php
             }
            ?>
          
           </div>
           <div class='hj'><?php echo $r_amount ?>  </div>
           <div class='hj'><?php echo $r_date ?></div>
        </div>
       <?php
    }
}
