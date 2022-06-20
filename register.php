<?php
$connection = new mysqli("localhost","root","","Register");
if($connection==false){
    die("error.could not connect to the server".mysqli_connect_error());
}

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$sname = $_POST['sname'];
$uname = $_POST['uname'];
$mnumber = $_POST['mnumber'];
$dob = $_POST['dob'];
$password = $_POST['password'];
$email = $_POST['email'];
$fa = $_POST['fa'];
$insta = $_POST['insta'];
$twit = $_POST['twit'];
$file = $_POST['file'];

$sql="INSERT INTO  rtable(Fname,Mname,Sname,Uname,Mnumber,Dob,Pasword,Email,Facebook,Instagram,Twitter,Fle)
VALUES('$fname','$mname','$sname','$uname','$mnumber','$dob','$password',
'$email','$fa','$insta','$twit','$file')";

if(mysqli_query($connection,$sql)){
    echo "records added";
}else{
    echo "error".$sql.mysqli_error($connection);
}