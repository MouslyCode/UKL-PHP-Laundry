<?php
$conn=mysqli_connect('localhost','root','','laundry');
if (mysqli_connect_errno()){
    printf("Connect Failed:%s\n",mysqli_connect_error());
    exit();
}
?>