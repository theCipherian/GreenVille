<?php
session_start();
require("init.php");
?>
<div>
    <h4 style='font-weight:normal !important;padding:10px'>Select task</h4>
</div>
<div class='i034w'>
 <div id='ct'>Create teller</div>
 <div id='mt'>Manage tellers</div>
</div>
<br>
<div class='sub-1 ghost'>
<div>
    <h4 style='font-weight:normal !important;padding:10px'>Select </h4>
</div>
    <div style='margin:10px'>
    <div class="form">

<div class="form-item">          
                  <select class="classic" id='edit_teller'>
                    <option disabled selected>Select teller</option>
                    <?php
                    $query = mysqli_query($init, "SELECT * FROM tellers");
                    $is_it = mysqli_num_rows($query);
                    if($is_it > 0){
                        while($arr = mysqli_fetch_array($query)){
                            $teller_id = $arr['unique_id'];
                            $teller_names = $arr['names'];
                            $teller_status = $arr['teller_status'];
                            $teller_branch = $arr['branch'];
                            $b_name = mysqli_query($init, "SELECT branch_name FROM branches WHERE unique_id = '$teller_branch'");
                            $is_it_2 = mysqli_num_rows($b_name);
                            if($is_it_2 > 0){
                                $arr_ = mysqli_fetch_array($b_name);
                                $b_name_get = $arr_['branch_name'];
                            }else{
                                $b_name_get = "Removed";
                            }
                            ?>
                             <option value='<?php echo $teller_id  ?>'><?php echo "$teller_names of branch $b_name_get"  ?></option>
                            <?php
                        }
                    }
                    ?>
                  </select>
              </div>
<div id='sub-47' class="b">
    SUBMIT
</div>
</form>
</div>
<br>
<br>
<div class='note note_2 ghost' style='' id='show_4'>
</div>

</div>