<?php

require('dbconfig.php');
$query = mysqli_query($connection, "Update users set status='".$_POST['val']."'where ID='".$_POST['ID']."'");

if($query){
    $q = mysqli_query($connection, "Select * from users where ID='".$_POST['ID']."' ");
    $data = mysqli_fetch_assoc($query);
    echo $data['$status'];
}

?>