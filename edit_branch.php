<?php
session_start();
require("init.php");

if(isset($_SESSION['instate_branch'])){
$instate_branch = $_SESSION['instate_branch'];
$query = mysqli_query($init, "SELECT  * FROM branches WHERE unique_id = '$instate_branch'");
$arr = mysqli_fetch_array($query);

$branch_name = $arr['branch_name'];
$branch_manager = $arr['branch_manager'];
$branch_status = $arr['branch_status'];
$branch_fund = $arr['branch_fund'];
$location = $arr['location'];

?>
<div class='note note_2 ghost' id='show_4'>

</div>
<div class="form">       
              <div class="form-item">
                <input type="text" id="branch_name" value='<?php echo $branch_name ?>' autocomplete="off" required>
                <label for="branch_name">Branch name</label>
              </div>
              <div class="form-item">          
                  <select class="classic" id='branch_manager'>
                    <?php
                    $query = mysqli_query($init, "SELECT * FROM managers");
                    $is_it = mysqli_num_rows($query);
                    if($is_it > 0){   
                        while($arr = mysqli_fetch_array($query)){
                            $manager_id = $arr['unique_id'];
                            $manager_names = $arr['manager_names'];
                            ?>
                             <option
                              <?php
                                if($manager_id == $branch_manager){
                                    echo "selected";
                                }
                               ?>
                             
                             value='<?php echo $manager_id  ?>'><?php echo $manager_names  ?></option>
                            <?php
                        } 
                    }
                 ?>
                  </select>
              </div>
              <div class="form-item">          
                  <select class="classic" id='branch_status'>
                    <option <?php 
                    if($branch_status == 'Active'){
                        echo "selected";
                    }
                    ?> value='Active'>Active</option>
                    <option
                    <?php 
                    if($branch_status == 'Disabled'){
                        echo "selected";
                    }
                    ?> value='Disabled'>Disabled</option>
                    <option 
                    <?php 
                    if($branch_status == 'Maintenance'){
                        echo "selected";
                    }
                    ?> value='Maintenance'>Maintenance</option>
                  </select>
              </div>
              <div class="form-item">          
                <input type="text" id="branch_location" value='<?php echo $location ?>' autocomplete="off" required>
                <label for="branch_location">Location</label>
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