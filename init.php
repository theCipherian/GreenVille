<?php
// Author - Okpala kenneth C. - thecipheriansvault@gmail.com, Kace214@gmail.com
?>
<?php
$url = "localhost";
$username9 = "root";
$password = "";
$database = "anchor";
$init = mysqli_connect($url, $username9, $password, $database);

if(!$init){
    "Please exit!";
}

if($init){
    if(isset($_SESSION['pulse'])){
  if($_SESSION['pulse'] == 'elixir'){
    $query = mysqli_query($init, "SELECT reserve_sum FROM reserve");
    $is_it = mysqli_num_rows($query);
    if($is_it < 1){
        $reserve = "0";
    }else{
        $arr = mysqli_fetch_array($query);
        $reserve = $arr['reserve_sum'];
    }
}else{
    $admin = $_SESSION['pulse'];
    $manage = mysqli_query($init, "SELECT * FROM managers WHERE unique_id = '$admin'");
    $arr = mysqli_fetch_array($manage);
    $manager_name = $arr['manager_names'];
    $query = mysqli_query($init, "SELECT * FROM branches WHERE branch_manager = '$admin'");
    $is_it = mysqli_num_rows($query);
    if($is_it < 1){
        $reserve = "0";
    }else{
        $arr = mysqli_fetch_array($query);
        $b_ranch = $arr['unique_id'];
        $reserve = $arr['branch_fund'];
        $show_name = $arr['show_id'];
    }
}
}
}

?>