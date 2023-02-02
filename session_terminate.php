<?php
    session_start();
    if(isset($_GET['unset'])){
    unset($_SESSION['pulse']);
    }
?>