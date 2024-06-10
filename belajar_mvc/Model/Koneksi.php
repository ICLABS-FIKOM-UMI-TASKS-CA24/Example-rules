<?php
    try{
        $con = mysqli_connect("localhost","root","","db_rental");
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>