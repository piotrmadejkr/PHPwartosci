<?php

if(isset($_GET['jezyk'])){
    
    echo 'dsvsdvsvd';
    $_SESSION['jezyk'] = $_GET['jezyk'];
}

echo 'wdwdwd'.$_SESSION['jezyk'];

?>