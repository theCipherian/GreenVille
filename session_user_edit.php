<?php
session_start();
require("init.php");

?>
<?php
if(isset($_SESSION['instate_account'])){
  $instate = $_SESSION['instate_account'];

  $query = mysqli_query($init, "SELECT * FROM users WHERE card_number = '$instate'");
  $is_it = mysqli_num_rows($query);
  if($is_it > 0){
    
      $arr = mysqli_fetch_array($query);
      $user_id = $arr['unique_id'];
      $first_name = $arr['first_name'];
      $middle_name = $arr['middle_name'];
      $last_name = $arr['last_name'];
      $card_number = $arr['card_number'];
      $business_name = $arr['business_name'];
      $home_address = $arr['home_address'];
      $tel_number = $arr['tel_number'];
      $dob = $arr['dob'];
      $occupation = $arr['occupation'];
      $commencement_day = $arr['commencement_day'];
      $commencement_month = $arr['commencement_month'];
      $commencement_year = $arr['commencement_year'];
      $user_balance = $arr['user_balance'];

      ?>
       <div>
        
       </div>
       <div class='info_cont'>
         <div class='info'>
         <div class='kl42'>
                <div id='credit'>Credit</div>
                <div id='debit'>Debit</div>
             </div>
            <div class='fgl3'>Account balance <div class='thing'><span class='balance_text'><?php echo $user_balance  ?></span></div></div>
            <div class='fgl3'>Account number <div class='thing2'><?php echo $card_number ?></div></div>
            <div class='fgl3'>First name <div class='thing2'><?php echo $first_name ?></div></div>
            <div class='fgl3'>Middle name <div class='thing2'><?php echo $middle_name ?></div></div>
            <div class='fgl3'>Last name <div class='thing2'><?php echo $last_name ?></div></div>
            <div class='fgl3'>Business name <div class='thing2'><?php echo $business_name ?></div></div>
            <div class='fgl3'>Home address <div class='thing2'><?php echo $home_address ?></div></div>
            <div class='fgl3'>Tel number <div class='thing2'><?php echo $tel_number ?></div></div>
            <div class='fgl3'>D.O.B <div class='thing2'><?php echo $dob ?></div></div>
            <div class='fgl3'>Occupation <div class='thing2'><?php echo $occupation?></div></div>
            <div class='fgl3'>Commencement day <div class='thing2'><?php echo $commencement_day ?></div></div>
            <div class='fgl3'>Commencement month <div class='thing2'><?php echo $commencement_month ?></div></div>
            <div class='fgl3'>Commencement year <div class='thing2'><?php echo $commencement_year ?></div></div>
            
         </div>
       </div>
      <?php
  }
}
?>
