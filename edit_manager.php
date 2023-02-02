<?php
session_start();
require("init.php");

if(isset($_SESSION['instate_manager'])){
$instate_manager = $_SESSION['instate_manager'];
$query = mysqli_query($init, "SELECT  * FROM managers WHERE unique_id = '$instate_manager'");
$arr = mysqli_fetch_array($query);
$branch_name = $arr['branch_name'];
$manager_names = $arr['manager_names'];
$manager_status = $arr['manager_status'];


?>
<div class='note note_2 ghost' id='show_4'>

</div>
<div class="form">       
              <div class="form-item">
                <input type="text" id="manager_name" value='<?php echo $manager_names ?>' autocomplete="off" required>
                <label for="manager_name">Manager name</label>
              </div>
              <div class="form-item">          
                  <select class="classic" id='branch'>
                    <?php
                    $query = mysqli_query($init, "SELECT * FROM branches");
                    $is_it = mysqli_num_rows($query);
                    if($is_it > 0){   
                        while($arr = mysqli_fetch_array($query)){
                            $branch_id = $arr['unique_id'];
                            $b_name = $arr['branch_name'];
                            ?>
                             <option
                              <?php
                                if($branch_id == $branch_name){
                                    echo "selected";
                                }
                               ?>
                             
                             value='<?php echo $branch_id  ?>'><?php echo $b_name  ?></option>
                            <?php
                        } 
                    }
                 ?>
                  </select>
              </div>
              <div class="form-item">          
                  <select class="classic" id='manager_status'>
                    <option <?php 
                    if($manager_status == 'Active'){
                        echo "selected";
                    }
                    ?> value='Active'>Active</option>
                    <option
                    <?php 
                    if($manager_status == 'Disabled'){
                        echo "selected";
                    }
                    ?> value='Disabled'>Disabled</option>
                    <option 
                    <?php 
                    if($manager_status == 'Maintenance'){
                        echo "selected";
                    }
                    ?> value='Maintenance'>Maintenance</option>
                  </select>
              </div>
              <div id='sub-45' class="b">
                SUBMIT
              </div>
</div>
<script>
</script>
<?php
    }
?>