<?php
session_start();
require("init.php");
header('Content-type: application/json');
date_default_timezone_set('Africa/Lagos');
$date = date('m/d/Y h:i:s a', time());
function generateRandomString($length = 35) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
if(isset($_GET["d_1"]) && isset($_GET["d_2"]) && isset($_GET["d_3"]) && isset($_GET["d_4"]) && isset($_GET["d_5"])) {
    $d_1 = htmlspecialchars($_GET["d_1"]);
    $d_2 = htmlspecialchars($_GET['d_2']);
    $d_3 = htmlspecialchars($_GET['d_3']);
    $d_4 = htmlspecialchars($_GET['d_4']);
    $d_5 = htmlspecialchars($_GET['d_5']);
    $UID = generateRandomString();
    $show_id =  "".generateRandomString(2)."".mt_rand(00000,99999)."";
    if(strlen($d_1) < 1 || strlen($d_2) < 1 || strlen($d_3) < 1 || strlen($d_4) < 1 || strlen($d_5) < 1){
        echo "Can't leave fields empty";
    }else{
        $query = mysqli_query($init, "SELECT branch_name FROM branches WHERE branch_name = '$d_1'");
        $is_it = mysqli_num_rows($query);
        if($is_it < 1){
            $query_1 = mysqli_query($init, "INSERT INTO branches VALUES ('$UID','$show_id','$d_1','$d_2','$d_3','$d_4','$d_5')");
            if($query_1){
                echo "Branch added successfully";
            }
        }else{
            echo "Branch already exists";
        }
    }
}else if(isset($_GET['b_1'], $_GET['b_2'], $_GET['b_3'])){
    $b_1 = htmlspecialchars($_GET["b_1"]);
    $b_2 = htmlspecialchars($_GET['b_2']);
    $b_3 = htmlspecialchars($_GET['b_3']);
    $UID = generateRandomString();
    $pass = generateRandomString(8);
    if(strlen($b_1) < 1 || strlen($b_2) < 1 || strlen($b_3) < 1 ){
        echo "Can't leave fields empty";
    }else{
        $query = mysqli_query($init, "SELECT manager_names FROM managers WHERE manager_names = '$b_3'");
        $is_it = mysqli_num_rows($query);
        if($is_it < 1){
            $query_1 = mysqli_query($init, "INSERT INTO managers VALUES ('$UID','$b_1','$b_2','$b_3','$pass')");
            if($query_1){
                echo "Manager added successfully";
            }
        }else{
            echo "Manager already exists";
        }
    }


}elseif (isset($_GET['signin_type'], $_GET['signin_email'], $_GET['signin_password'])) {
    
    $response = array();
    $data_1 = htmlspecialchars($_GET["signin_type"]);
    $data_2 = htmlspecialchars($_GET['signin_email']);
    $data_3 = htmlspecialchars($_GET['signin_password']);
    if(strlen($data_1) < 1 || strlen($data_2) < 1){
        $response[0] = array(
            'message' => 'Cannot leave fields empty'
        );
      echo json_encode($response); 
    }
    if($data_1 == 'Administrator'){  
        $query  = mysqli_query($init, "SELECT * FROM administrators WHERE email_address  = '$data_2' AND account_key = '$data_3'");
        $num = mysqli_num_rows($query);
        if($num > 0){
        $response[0] = array(
            'message' => 'Setting admin session'
        );
        $_SESSION['pulse'] = "elixir";
      echo json_encode($response); 
    }else{
        $response[0] = array(
            'message' => 'Account does not exist'
        );
      echo json_encode($response); 
    }
     }else if($data_1 == 'Manager'){
        $query  = mysqli_query($init, "SELECT * FROM managers WHERE email_address  = '$data_2' AND account_key = '$data_3'");
        $num = mysqli_num_rows($query);
        if($num > 0){
        $arr = mysqli_fetch_array($query);
        $session_  = $arr['unique_id'];
        $response[0] = array(
            'message' => 'Setting manager session'
        );  
        $_SESSION['pulse'] = $session_;
      echo json_encode($response); 
    } else{
        $response[0] = array(
            'message' => 'Account does not exist'
        );  
      echo json_encode($response);  
    }
     }else{
    
    }



}
else if(isset($_GET['mm_1'], $_GET['mm_2'], $_GET['mm_3'])){
    $instate_manager = $_SESSION['instate_manager'];
    $mm_1 = htmlspecialchars($_GET["mm_1"]);
    $mm_2 = htmlspecialchars($_GET['mm_2']);
    $mm_3 = htmlspecialchars($_GET['mm_3']);
    $UID = generateRandomString();
    if(strlen($mm_1) < 1 || strlen($mm_2) < 1 || strlen($mm_3) < 1 ){
        echo "Can't leave fields empty";
    }else{
       $query = mysqli_query($init, "UPDATE managers SET branch_name = '$mm_2', manager_status = '$mm_3', manager_names = '$mm_1'");
       if($query){
        echo "Manager record updated";
       }
    }


}else if(isset($_GET['tt_1'], $_GET['tt_2'], $_GET['tt_3'])){
    $instate_teller = $_SESSION['instate_teller'];
    $tt_1 = htmlspecialchars($_GET["tt_1"]);
    $tt_2 = htmlspecialchars($_GET['tt_2']);
    $tt_3 = htmlspecialchars($_GET['tt_3']);
    $UID = generateRandomString();
    if(strlen($tt_1) < 1 || strlen($tt_2) < 1 || strlen($tt_3) < 1 ){
        echo "Can't leave fields empty";
    }else{
       $query = mysqli_query($init, "UPDATE tellers SET names = '$tt_1', branch = '$tt_2', teller_status = '$tt_3' WHERE unique_id = '$instate_teller'");
       if($query){
        echo "Teller record updated";
       }else{
        echo "Some error occurred";
       }
    }
}else if(isset($_GET['bb_1'], $_GET['bb_2'], $_GET['bb_3'], $_GET['bb_4'])){
    $instate_branch = $_SESSION['instate_branch'];
    $bb_1 = htmlspecialchars($_GET["bb_1"]);
    $bb_2 = htmlspecialchars($_GET['bb_2']);
    $bb_3 = htmlspecialchars($_GET['bb_3']);
    $bb_4 = htmlspecialchars($_GET['bb_4']);
    $UID = generateRandomString();
    if(strlen($bb_1) < 1 || strlen($bb_2) < 1 || strlen($bb_3) < 1 || strlen($bb_4) < 1){
        echo "Can't leave fields empty";
    }else{
        $query = mysqli_query($init, "UPDATE branches SET branch_name = '$bb_1', branch_manager = '$bb_2', branch_status = '$bb_3', location = '$bb_4' WHERE unique_id = '$instate_branch'");
        if($query){
            echo "Updated";
        }
    }
}else if(isset($_GET['search_1'])){
    $search_1 = htmlspecialchars($_GET["search_1"]);
    $UID = generateRandomString();
    if(strlen($search_1) < 1 ){
        echo "Can't leave fields empty";
    }else{
        $query = mysqli_query($init, "SELECT card_number FROM users WHERE card_number = '$search_1'");
        $is_it = mysqli_num_rows($query);
        if($is_it < 1){
            echo "Account does not exist!";
        }else{
            $_SESSION['instate_account'] = $search_1;
            echo "Wait...";
        }
    }
}else if(isset($_GET['edit_branch'])){
    $branch_1 = htmlspecialchars($_GET["edit_branch"]);
    $UID = generateRandomString();
    if(strlen($branch_1) < 1 ){
        echo "Can't leave fields empty";
    }else{
         
          $_SESSION['instate_branch'] = $branch_1;
          echo "Wait...";
        
    }
}else if(isset($_GET['edit_manager'])){
    $manager_1 = htmlspecialchars($_GET["edit_manager"]);
    $UID = generateRandomString();
    if(strlen($manager_1) < 1 ){
        echo "Can't leave fields empty";
    }else{
          $_SESSION['instate_manager'] = $manager_1;
          echo "Wait...";
    }
}else if(isset($_GET['edit_teller'])){
    $teller_1 = htmlspecialchars($_GET["edit_teller"]);
    $UID = generateRandomString();
    if(strlen($teller_1) < 1 ){
        echo "Can't leave fields empty";
    }else{
         
          $_SESSION['instate_teller'] = $teller_1;
          echo "Wait...";
        
    }
}else if(isset($_GET['credit_cc'])){
    $instate = $_SESSION['instate_account'];
    $credit_cc = htmlspecialchars($_GET["credit_cc"]);
    $UID = generateRandomString();
    if(strlen($credit_cc) < 1 ){
        $response = array();
        $response[0] = array(
            'message' => 'Cannot leave fields empty',
        );

    echo json_encode($response); 
    }else{
        $query = mysqli_query($init, "SELECT user_balance FROM users WHERE card_number = '$instate'");
        $arr = mysqli_fetch_array($query);
        $user_balance = $arr['user_balance'];
        $new_balance = $user_balance + $credit_cc;
        $query_2 = mysqli_query($init, "UPDATE users SET user_balance = '$new_balance' WHERE card_number = '$instate'");
        if($query_2){
            $response = array();
            $response[0] = array(
                'message' => 'Account funds updated',
                'number' => $new_balance
            );

        echo json_encode($response); 
        }else{
            $response = array();
            $response[0] = array(
                'message' => 'Could not update account',
            );
    
        echo json_encode($response); 
        }
    }
}else if(isset($_GET['debit_cc'])){
    $instate = $_SESSION['instate_account'];
    $debit_cc = htmlspecialchars($_GET["debit_cc"]);
    $UID = generateRandomString();
    if(strlen($debit_cc) < 1 ){
        $response = array();
        $response[0] = array(
            'message' => 'Cannot leave fields empty',
        );

    echo json_encode($response); 
    }else{
        $query = mysqli_query($init, "SELECT user_balance FROM users WHERE card_number = '$instate'");
        $arr = mysqli_fetch_array($query);
        $user_balance = $arr['user_balance'];
        $new_balance = $user_balance - $debit_cc;
        $query_2 = mysqli_query($init, "UPDATE users SET user_balance = '$new_balance' WHERE card_number = '$instate'");
        if($query_2){
            $response = array();
            $response[0] = array(
                'message' => 'Account funds updated',
                'number' => $new_balance
            );

        echo json_encode($response); 
        }else{
            $response = array();
            $response[0] = array(
                'message' => 'Could not update account balance',
            );
    
        echo json_encode($response); 
        }
    }
}else if(isset($_GET['credit_rr'])){
    $credit_rr = htmlspecialchars($_GET["credit_rr"]);
    $UID = generateRandomString();
    if(strlen($credit_rr) < 1 ){
        $response = array();
        $response[0] = array(
            'message' => 'Cannot leave fields empty',
        );

    echo json_encode($response); 
    }else{
        $query = mysqli_query($init, "SELECT reserve_sum FROM reserve");
        $is_it  = mysqli_num_rows($query);
        if($is_it < 1){
            $new_balance = $credit_rr;
            $query_2 = mysqli_query($init, "INSERT INTO reserve VALUES ('$new_balance')");
            $query_3 = mysqli_query($init, "INSERT INTO reserve_log VALUES ('$UID','credit','$credit_rr','$date')");
        }else{
        $arr = mysqli_fetch_array($query);
        $reserve_balance = $arr['reserve_sum'];
        $new_balance = $reserve_balance + $credit_rr;
        $query_2 = mysqli_query($init, "UPDATE reserve SET reserve_sum = '$new_balance'");
        $query_3 = mysqli_query($init, "INSERT INTO reserve_log VALUES ('$UID','credit','$credit_rr','$date')");
        }
        if($query_2){
            $response = array();
            $response[0] = array(
                'message' => 'Reserve updated',
                'number' => $new_balance
            );

        echo json_encode($response); 
        }else{
            $response = array();
            $response[0] = array(
                'message' => 'Could not update reserve',
            );
    
        echo json_encode($response); 
        }
    }
}else if(isset($_GET['run_1'])) {
    $UID = generateRandomString();
    $response = array();
    $run_1 = $_GET['run_1'];
    $run_2 = $_GET['run_2'];
    $run_3 = $_GET['run_3'];
    $run_4 = $_GET['run_4'];
    $run_5 = $_GET['run_5'];
    $run_6 = $_GET['run_6'];
    if(strlen($run_1) < 1 || strlen($run_2) < 1 || strlen($run_3) < 1 || strlen($run_4) < 1 || strlen($run_5) < 1 || strlen($run_6) < 1){
        $response[0] = array(
            'message' => 'Cannot leave fields empty',
        );
    echo json_encode($response); 
    }else{
        $query = mysqli_query($init, "INSERT INTO transactions VALUES ('','$UID','$b_ranch','$admin','$run_2','credit','$run_3','$run_1','$run_4','$run_6','$run_5')");
        if($query){
        $response[0] = array(
            'message' => 'Transaction made',
        );
    echo json_encode($response); 
    }
    }
}else if(isset($_GET['deb_1'])) {
    $UID = generateRandomString();
    $response = array();
    $run_1 = $_GET['deb_1'];
    $run_2 = $_GET['deb_2'];
    $run_3 = $_GET['deb_3'];
    $run_4 = $_GET['deb_4'];
    $run_5 = $_GET['deb_5'];
    $run_6 = $_GET['deb_6'];
    if(strlen($run_1) < 1 || strlen($run_2) < 1 || strlen($run_3) < 1 || strlen($run_4) < 1 || strlen($run_5) < 1 || strlen($run_6) < 1){
        $response[0] = array(
            'message' => 'Cannot leave fields empty',
        );
    echo json_encode($response); 
    }else{
        $query = mysqli_query($init, "INSERT INTO transactions VALUES ('','$UID','$b_ranch','$admin','$run_2','debit','$run_3','$run_1','$run_4','$run_6','$run_5')");
        if($query){
        $response[0] = array(
            'message' => 'Transaction made',
        );
    echo json_encode($response); 
    }
    }
}else if(isset($_GET['credit_bb'])){
    $credit_bb = htmlspecialchars($_GET["credit_bb"]);
    $instate = $_SESSION['instate_branch'];
    $UID = generateRandomString();
    if(strlen($credit_bb) < 1 ){
        $response = array();
        $response[0] = array(
            'message' => 'Cannot leave field empty',
        );
    echo json_encode($response); 
    }else{
        $query = mysqli_query($init, "SELECT branch_fund FROM branches WHERE unique_id = '$instate'");
        $res = mysqli_query($init, "SELECT reserve_sum FROM reserve");
        $arr_1 = mysqli_fetch_array($res);
        $reserve_data = $arr_1['reserve_sum'];
        $new_reserve = $reserve_data - $credit_bb;
        $res_update = mysqli_query($init, "UPDATE reserve SET reserve_sum  = '$new_reserve'");
        $arr = mysqli_fetch_array($query);
        $reserve_balance = $arr['branch_fund'];
        $new_balance = $reserve_balance + $credit_bb;
        $query_2 = mysqli_query($init, "UPDATE branches SET branch_fund = '$new_balance' WHERE unique_id = '$instate'");
        $query_3 = mysqli_query($init, "INSERT INTO branch_reserve_transaction_log VALUES ('$UID','credit','$credit_bb','$date')");

        if($query_2){
            $response = array();
            $response[0] = array(
                'message' => 'Funds sent',
                'number' => $new_balance,
                'reserve' => $new_reserve
            );

        echo json_encode($response); 
        }else{
            $response = array();
            $response[0] = array(
                'message' => 'Could not send funds',
            );
    
        echo json_encode($response); 
        }
    }
}else if(isset($_GET['debit_bb'])){
    $credit_bb = htmlspecialchars($_GET["debit_bb"]);
    $instate = $_SESSION['instate_branch'];
    $UID = generateRandomString();
    if(strlen($credit_bb) < 1 ){
        $response = array();
        $response[0] = array(
            'message' => 'Cannot leave field empty',
        );
    echo json_encode($response); 
    }else{
        $query = mysqli_query($init, "SELECT branch_fund FROM branches WHERE unique_id = '$instate'");
        $res = mysqli_query($init, "SELECT reserve_sum FROM reserve");
        $arr_1 = mysqli_fetch_array($res);
        $reserve_data = $arr_1['reserve_sum'];
        $new_reserve = $reserve_data + $credit_bb;
        $res_update = mysqli_query($init, "UPDATE reserve SET reserve_sum  = '$new_reserve'");
        $arr = mysqli_fetch_array($query);
        $reserve_balance = $arr['branch_fund'];
        $new_balance = $reserve_balance - $credit_bb;
        $query_2 = mysqli_query($init, "UPDATE branches SET branch_fund = '$new_balance' WHERE unique_id = '$instate'");
        $query_3 = mysqli_query($init, "INSERT INTO branch_reserve_transaction_log VALUES ('$UID','debit','$credit_bb','$date')");

        if($query_2){
            $response = array();
            $response[0] = array(
                'message' => 'Funds removed',
                'number' => $new_balance,
                'reserve' => $new_reserve
            );

        echo json_encode($response); 
        }else{
            $response = array();
            $response[0] = array(
                'message' => 'Could not remove funds',
            );
    
        echo json_encode($response); 
        }
    }
}else if(isset($_GET['debit_rr'])){
    $debit_rr = htmlspecialchars($_GET["debit_rr"]);
    $UID = generateRandomString();
    if(strlen($debit_rr) < 1 ){
        $response = array();
        $response[0] = array(
            'message' => 'Cannot leave fields empty',
        );

    echo json_encode($response); 
    }else{
        $query = mysqli_query($init, "SELECT reserve_sum FROM reserve");
        $is_it  = mysqli_num_rows($query);
        if($is_it < 1){
            $new_balance = $debit_rr;
            $query_2 = mysqli_query($init, "INSERT INTO reserve VALUES ('$new_balance')");
            $query_3 = mysqli_query($init, "INSERT INTO reserve_log VALUES ('$UID','debit','$debit_rr','$date')");
        }else{
        $arr = mysqli_fetch_array($query);
        $reserve_balance = $arr['reserve_sum'];
        $new_balance = $reserve_balance - $debit_rr;
        $query_2 = mysqli_query($init, "UPDATE reserve SET reserve_sum = '$new_balance'");
        $query_3 = mysqli_query($init, "INSERT INTO reserve_log VALUES ('$UID','debit','$debit_rr','$date')");
        }
        if($query_2){
            $response = array();
            $response[0] = array(
                'message' => 'Reserve updated',
                'number' => $new_balance
            );
        echo json_encode($response); 
        }else{
            $response = array();
            $response[0] = array(
                'message' => 'Could not update reserve',
            );
        echo json_encode($response); 
        }
    }
}else if(isset($_GET['t_1'], $_GET['t_2'], $_GET['t_3'])){
    $t_1 = htmlspecialchars($_GET["t_1"]);
    $t_2 = htmlspecialchars($_GET['t_2']);
    $t_3 = htmlspecialchars($_GET['t_3']);
    $UID = generateRandomString();
    if(strlen($t_1) < 1 || strlen($t_2) < 1 || strlen($t_3) < 1 ){
        echo "Can't leave fields empty";
    }else{
        $query = mysqli_query($init, "SELECT names FROM tellers WHERE names = '$t_3'");
        $is_it = mysqli_num_rows($query);
        if($is_it < 1){
            $query_1 = mysqli_query($init, "INSERT INTO tellers VALUES ('$UID','$t_3','$t_1','$t_2')");
            if($query_1){
                echo "Teller added successfully";
            }
        }else{
            echo "Teller already exists";
        }
    }
}else if(isset($_GET['h_1'], $_GET['h_2'], $_GET['h_3'], $_GET['h_4'], $_GET['h_5'], $_GET['h_6'], $_GET['h_7'], $_GET['h_8'], $_GET['h_9'], $_GET['h_10'], $_GET['h_11'], $_GET['h_12'])){
    $h_1 = htmlspecialchars($_GET["h_1"]);
    $h_2 = htmlspecialchars($_GET['h_2']);
    $h_3 = htmlspecialchars($_GET['h_3']);
    $h_4 = htmlspecialchars($_GET["h_4"]);
    $h_5 = htmlspecialchars($_GET['h_5']);
    $h_6 = htmlspecialchars($_GET['h_6']);
    $h_7 = htmlspecialchars($_GET["h_7"]);
    $h_8 = htmlspecialchars($_GET['h_8']);
    $h_9 = htmlspecialchars($_GET['h_9']);
    $h_10 = htmlspecialchars($_GET["h_10"]);
    $h_11 = htmlspecialchars($_GET['h_11']);
    $h_12 = htmlspecialchars($_GET['h_12']);
    $UID = generateRandomString();
    if(strlen($h_1) < 1 || strlen($h_2) < 1 || strlen($h_3) < 1 || strlen($h_4) < 1 || strlen($h_5) < 1 || strlen($h_6) < 1 || strlen($h_7) < 1 || strlen($h_8) < 1 || strlen($h_9) < 1 || strlen($h_10) < 1 || strlen($h_11) < 1 || strlen($h_12) < 1 ){
        echo "Can't leave fields empty";
    }else{
        $query = mysqli_query($init, "SELECT card_number FROM users WHERE card_number = '$h_4'");
        $is_it = mysqli_num_rows($query);
        if($is_it < 1){
            $query_1 = mysqli_query($init, "INSERT INTO users VALUES ('$UID','$h_1','$h_2','$h_3','$h_4','$h_5','$h_6','$h_7','$h_8','$h_9','$h_10','$h_11','$h_12','0')");
            if($query_1){
                echo "User created successfully";
            }
        }else{
            echo "Account number already exists";
        }
    }
}else {
    $response = array();
            $response[0] = array(
                'message' => 'Some error occurred',
            );
    echo json_encode($response); 
        
}

?>