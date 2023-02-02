<?php
session_start();
require("init.php");

?>
         <?php

$query = mysqli_query($init, "SELECT * FROM users");
$is_it = mysqli_num_rows($query);
if($is_it > 0){
  
    while($arr = mysqli_fetch_array($query)){
    $user_id = $arr['unique_id'];
    $first_name = $arr['first_name'];
    $middle_name = $arr['middle_name'];
    $last_name = $arr['last_name'];
    $card_number = $arr['card_number'];
    $user_balance = $arr['user_balance'];

    ?>
  
     <div class='info_cont '>
       <div class='info nbh'>
       <div class='kl42'>
              <div class='view_info' data-value='<?php echo $card_number ?>'>View info</div>
           </div>
          <div class='fgl4'>Account number<div class='thing2'><?php echo $card_number ?></div> |&nbsp Account names <div class='thing2'><?php echo "$first_name $middle_name $last_name"; ?></div></div>
          
       </div>
     </div>
 
    <?php
}
}
?>
