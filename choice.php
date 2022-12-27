<?php
    session_start();
    $_SESSION['no_of_ppl']=$_POST['no_of_ppl'];
    switch($_SESSION['no_of_ppl'])
    {
        case 3:header("Location:method_3.php");
               break;
        case 4:header("Location:method_4.php");
               break;
        case 5:header("Location:method_5.php");
               break;        
    }
?>

