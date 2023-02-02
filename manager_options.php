<?php
session_start();
require("init.php");
?>
<div>
    <h4 style='font-weight:normal !important;padding:10px'>Select task</h4>
</div>
<div class='i034w'>
 <div id='cm'>Create Manager</div>
 <div id='mm'>Manage Managers</div>
</div>
<br>
<div class='sub-1 ghost'>

<div>
    <h4 style='font-weight:normal !important;padding:10px'>Select </h4>
</div>
    <div style='margin:10px'>
    <div class="form">

<div class="form-item">          
                  <select class="classic" id='edit_manager'>
                    <option disabled selected>Select manager</option>
                    <?php
                    $query = mysqli_query($init, "SELECT * FROM managers");
                    $is_it = mysqli_num_rows($query);
                    if($is_it > 0){
                        while($arr = mysqli_fetch_array($query)){
                            $manager_id = $arr['unique_id'];
                            $manager_names = $arr['manager_names'];
                            ?>
                             <option value='<?php echo $manager_id  ?>'><?php echo $manager_names  ?></option>
                            <?php
                        }
                    }
                    ?>
                  </select>
              </div>
<div id='sub-47' class="b">
    SUBMIT
</div>
<br>
<br>
<br>
<div class='note note_2 ghost' style='' id='show_4'>

</div>
</form>
</div>
<br>
</div>