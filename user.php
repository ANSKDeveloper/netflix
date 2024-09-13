<?php
     $server = "localhost";
     $username = "root";
     $password = "";
     $database = "netflix";

    $sabjee =  mysqli_connect($server,$username,$password,$database);

    if($sabjee == true){
        echo "Ha bola ";
    }else{
        echo "Nahi bola !";
    }

if(isset($_POST["save"])){

   $a =  $_POST["user"];
   $b =  $_POST["pass"];

   $mysq =  "insert into user_login(name,chabhi) values('$a','$b')";


   mysqli_query($sabjee,$mysq);

   echo "<script>alert('Registor success !')</script>";
   header("Refresh:0;url=login.html");


}




?>

