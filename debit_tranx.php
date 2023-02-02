<?php
session_start();
require("init.php");
?>
<div class='note note_2 ghost' id='show_4'></div>
<div class="form">
              <div class="form-item">          
                <input type="text" id="card_number" autocomplete="off" required>
                <label for="card_number">Enter acccount number</label>
              </div>
             <div class="form-item">
             <select class="classic" id='select_teller'>
                    <option disabled selected>Select teller</option>
                    <?php
                    $query = mysqli_query($init, "SELECT * FROM tellers WHERE branch = '$b_ranch'");
                    $is_it = mysqli_num_rows($query);
                    if($is_it > 0){
                        while($arr = mysqli_fetch_array($query)){
                            $teller_id = $arr['unique_id'];
                            $teller_names = $arr['names'];
                            $teller_status = $arr['teller_status'];
                            $teller_branch = $arr['branch'];
                            ?>
                             <option value='<?php echo $teller_id  ?>'><?php echo "$teller_names"  ?></option>
                            <?php
                        }
                    }
                    ?>
                  </select>
             </div>
              <div class="form-item">          
                <input type="number" id="debit_ac" autocomplete="off" required>
                <label for="credit_cc">Enter amount</label>
              </div>
              <div class="form-item">          
                <input type="time" id="rec_time" autocomplete="off" required>
                <label for="rec_time">Record time</label>
              </div>
              <div class="form-item">          
              <select class="classic" id='select_mer'>
                    <option disabled selected>Select meridiem</option>
                    <option value='AM'>AM</option>
                    <option VALUE='PM'>PM</option>
                  </select>
              </div>
              <div class="form-item">          
                <input type="date" id="rec_date" autocomplete="off" required>
            
              </div>
              <div id='sub-90' class="b">
                SUBMIT
              </div>
</div>
