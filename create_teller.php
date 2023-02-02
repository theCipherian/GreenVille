<?php
session_start();
require("init.php");
?>
<div class='note note_2 ghost' id='show_4'></div>
<div class="form">
              <div class="form-item">          
                  <select class="classic" id='branch_'>
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
              <div class="form-item">          
                  <select class="classic" id='teller_status'>
                    <option disabled selected>Teller status</option>
                    <option value='Active'>Active</option>
                    <option value='Disabled'>Disabled</option>
                    <option value='Maintenance'>Review</option>
                  </select>
              </div>
              <div class="form-item">          
                <input type="text" id="teller_names" autocomplete="off" required>
                <label for="teller_names">Teller names</label>
              </div>
              <div id='sub-37' class="b">
                SUBMIT
              </div>
</div>
