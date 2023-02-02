<?php
session_start();
require("init.php");

if(isset($_SESSION['instate_teller'])){
$instate_teller = $_SESSION['instate_teller'];
$query = mysqli_query($init, "SELECT  * FROM tellers WHERE unique_id = '$instate_teller'");
$arr = mysqli_fetch_array($query);
$teller_name = $arr['names'];
$branch = $arr['branch'];
$teller_status = $arr['teller_status'];
?>
<div class='note note_2 ghost' id='show_4'> </div>

<div class="form">       
              <div class="form-item">
                <input type="text" id="teller_name" value='<?php echo $teller_name ?>' autocomplete="off" required>
                <label for="teller_name">Teller name</label>
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
                                if($branch_id == $branch){
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
                  <select class="classic" id='teller_status'>
                    <option <?php 
                    if($teller_status == 'Active'){
                        echo "selected";
                    }
                    ?> value='Active'>Active</option>
                    <option
                    <?php 
                    if($teller_status == 'Disabled'){
                        echo "selected";
                    }
                    ?> value='Disabled'>Disabled</option>
                    <option 
                    <?php 
                    if($teller_status == 'Maintenance'){
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