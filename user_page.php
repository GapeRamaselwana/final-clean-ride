<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

</head>
<style>
   *{
   font-family: 'Exo', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}

.container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
}

.container .content{
   text-align: center;
}

.container .content h3{
   font-size: 30px;
   color:#026FBA;
}

.container .content h3 span{
   background: rgb(2,111,186,0.2);
   color:#003D78;
   border-radius: 5px;
   padding:0 15px;
}

.container .content h1{
   font-size: 100px;
   color:#E82C19;
}

.container .content h1 span{
   color:#003D78;
}

.container .content p{
   font-size: 25px;
   margin-bottom: 20px;
   color: #003D78;
}

.container .content .btn{
   display: inline-block;
   padding:10px 30px;
   font-size: 20px;
   background: gray;
   color:#fff;
   margin:0 5px;
   text-transform: capitalize;
}

.container .content .btn:hover{
   background: #003D78;
}
</style>
<body style="background-color: #EBEBEB;">
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is a user page</p>
      <a href="homee.html" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="index.html" class="btn">logout</a>
   </div>

</div>

</body>
</html>