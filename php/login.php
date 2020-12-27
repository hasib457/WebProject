<?php
 
 session_start();
 if(isset($_SESSION['id'])){
     
     header("location: contacts.php");
 }
 $wrong="";
 if(isset($_POST['login'])){
     $username=$_POST['username'];
     $password=$_POST['password'];
     $password=sha1($password);
     $quary="SELECT * FROM admin WHERE username='$username' AND password='$password'";
     $connect=mysqli_connect("localhost","root","","webProject");
     $selecttResult=mysqli_query($connect,$quary);
     
     $admin=mysqli_fetch_assoc($selecttResult);
     $count=mysqli_num_rows($selecttResult);
     echo $admin;
     if($count>0){
         $_SESSION['id']=$admin['id'];
         
          header("location: contacts.php");

     }else{
         $wrong="username or password is not correct";
     }
 }


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login-style.css">
    <title>login</title>
</head>
<body>

    <div  id="login">
        <h1 style="text-align: center;">Login Here</h1>
        <form method="post">
            <p >Username</p>
            <input type="text" name="username" placeholder="Enter Username" class="input">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" class="input" id="password">

            <h5 style="margin-top: 0; color:red;"><?php echo $wrong?> <h5>
            <input type="submit" name="login" value="Login" id="submit" >
                                                            
        </form>
    </div>

</body>
</html>
