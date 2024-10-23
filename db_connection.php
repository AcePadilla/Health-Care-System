<?php
$bind = mysqli_connect("localhost","root","","hcs_db");

if($bind === false){
    die("ERROR: Could not connect.." . mysqli_connect_error());

}else{
    echo "";
}
?>