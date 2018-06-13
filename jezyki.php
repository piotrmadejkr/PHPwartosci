<?php
session_start();

$jezyki=array();
$jezyki = $_SESSION['dodanoJezyk'];

 if(!isset($_SESSION['dodanoJezyk'])) {
    $jezyki[] = ['jezyk'=> 'polska'];
    $jezyki[] = ['jezyk'=> 'deutsch'];
    $jezyki[] = ['jezyk'=> 'english'];
   }

if(isset($_POST['nowyJezyk'])) {
    
    $jezyki[] = ['jezyk'=> $_POST['nowyJezyk']];
    $_SESSION['dodanoJezyk'] =  $jezyki;
}


header('location:index.php');



echo '<pre>';
print_r($jezyki);
echo '</pre>';

?>