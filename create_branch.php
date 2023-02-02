<?php
session_start();
require("init.php");
?>
<div class='note note_2 ghost' id='show_4'>

</div>
<div class="form">       
              <div class="form-item">
                <input type="text" id="branch_name" autocomplete="off" required>
                <label for="branch_name">Branch name</label>
              </div>
              <div class="form-item">          
                  <select class="classic" id='branch_manager'>
                    <option disabled selected>Select branch manager</option>
                    <option  value='unset'>UNSET</option>
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
              <div class="form-item">          
                  <select class="classic" id='branch_status'>
                    <option disabled selected>Select branch status</option>
                    <option value='Active'>Active</option>
                    <option value='Disabled'>Disabled</option>
                    <option value='Maintenance'>Maintenance</option>
                  </select>
              </div>
              <div class="form-item">          
                <input type="number" id="branch_funds" autocomplete="off" required>
                <label for="branch_funds">Branch fund</label>
              </div>
              <div class="form-item">          
                <input type="text" id="branch_location" autocomplete="off" required>
                <label for="branch_location">Location</label>
              </div>
              <div id='sub-34' class="b">
                SUBMIT
              </div>
</div>
<script>


 



</script>