<?php
    session_start();
    $connection=mysqli_connect("localhost","root","","Alumny");

    $email= $_POST['mail'];
    $pword = $_POST['pword'];

    $sql = "SELECT * FROM Participants WHERE Email='$email' AND Pasword='$pword'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['mail'] = $row['Email'];
        header('Location: finalall.php');
		
   }
    } else {
     echo"vbbnnnnbbbnnnnbb" ;
    }