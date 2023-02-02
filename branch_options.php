<?php
session_start();
require("init.php");
?>
<div>
    <h4 style='font-weight:normal !important;padding:10px'>Select task</h4>
</div>

<div class='i034w'>
 <div id='cb'>Create Branch</div>
 <div id='mb'>Manage Branches</div>
</div>
<br>

<div class='sub-1 ghost'>

<div>
    <h4 style='font-weight:normal !important;padding:10px'>Select </h4>
</div>

    <div style='margin:10px'>
    <div class="form">
    <div class='note note_2 ghost' style='' id='show_4'>

</div>
<div class="form-item">          
                  <select class="classic" id='edit_branch'>
                    <option disabled selected>Select branch</option>
                    <?php
                    $query = mysqli_query($init, "SELECT * FROM branches");
                    $is_it = mysqli_num_rows($query);
                    if($is_it > 0){
                        while($arr = mysqli_fetch_array($query)){
                            $branch_id = $arr['unique_id'];
                            $branch_show = $arr['show_id'];
                            $branch_name = $arr['branch_name'];
                            ?>
                             <option value='<?php echo $branch_id  ?>'><?php echo $branch_name  ?></option>
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
<div class='i034w' style='margin-top:2rem;justify-content:space-between !important'>
 <div id='cb2'>Credit</div>
 <div id='db2'>Debit</div>
</div>
</div>