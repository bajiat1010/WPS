<?php

    $con=mysqli_connect("localhost","root","","test");

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];

        $sql=" INSERT INTO form3(name,email,phone,password,gender) values ('$name','$email','$phone','$password','$gender')";

        $result=mysqli_query($con,$sql);
        if($result==True){
          echo "Data is Inserted";
        }else{
            echo "Not inserted";
        }
    }
 
?>