<?php
    session_start();
        if(isset($_SESSION['id'])){
            session_unset();
            header("location: ../index.php");
        }
        
?>

