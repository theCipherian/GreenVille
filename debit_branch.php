<?php
session_start();
require("init.php");

$instate_branch = $_SESSION['instate_branch'];
$query = mysqli_query($init, "SELECT * FROM branches WHERE unique_id = '$instate_branch'");
$arr = mysqli_fetch_array($query);
$current_balance = $arr['branch_fund'];

?>
<div class='note' id=''> Info - Perform action relative to reserve funds <br>
<br>
<span class='reserve_balance'><?php echo $reserve ?></span>
</div>
<br>
<div>
    Branch funds <br> 
</div>
<br>
<div>
<span style='letter-spacing:5px !important;' class='thing credit_balance'><?php echo $current_balance  ?></span>
</div>
<br>
<div class='note note_2 ghost' id='show_4'></div>
<div class="form">
    <div class="form-item">          
    <input type="number" id="debit_bb" autocomplete="off" required>
    <label for="debit_bb">Enter amount</label>
    </div>
    <div id='sub-50' class="b">
    SUBMIT
</div>    
</div>
