<?php
//  session_start();
 ?>


<!DOCTYPE html>
<head>
    <title>Log In</title>
    <link href="mystyle.css" rel="stylesheet" type="text/css">
    <style>
#sbutton{
    width: 80%;
    margin-bottom: 10px;
    padding-bottom: 10px;
    position: relative;
    border-radius: 8px;
}
body{
    background-color: rgba(26, 129, 170, 0.316) ;
}
.container img{
    width: 140px;
    margin-left: 90px;
}
.container{
    height: 500px;
    margin-top: 100px;
}
    </style>
</head>
<body>
    <div class="container">
        <form class="form" id="form" action="login.php" method="post">
            <img src="ra.jpg">
        <div class="form-control">
            <label>Email</label>
        <input type="email" name="mail" id="mail" placeholder="Email">    
        </div>
        <div class="form-control">
            <label>password</label>
            <input type="password" name="pword" id="pword" placeholder="*******">    
            </div>
            <div>
                <input type="submit" value="Log in" id="sbutton">
            </div>
            </form>
    </div>
</body>
</html>