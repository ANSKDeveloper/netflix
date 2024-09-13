<?php
     $server = "localhost";
     $username = "root";
     $password = "";
     $database = "netflix";

     session_start();

    $sabjee =  mysqli_connect($server,$username,$password,$database);

    if($sabjee == true){
        echo "Ha bola ";
    }else{
        echo "Nahi bola !";
    }

if(isset($_POST["save"])){

   $a =  $_POST["user"];
   $b =  $_POST["pass"];

   $mysq =  "select * from user_login where name = '$a' and chabhi = '$b'";


   $result =  mysqli_query($sabjee,$mysq);
   
   $check = mysqli_num_rows($result);
   
   if($check == 1){

    $_SESSION["bodyguard"] = "Salmankhan";  
    
    echo "<script>alert('Login success !')</script>";
    header("Refresh:0;url=home.php");

   }else{
    echo "<script>alert('Login failed !')</script>";
    header("Refresh:0;url=login.html");
   }




}




?>

