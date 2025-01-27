<?php
$register_username = $_POST['register_username'];
$register_email = $_POST['register_email'];
$register_password =$_POST['register_password'];
$conn = new mysqli('localhost','root','','mitra mart');
if($conn->connect_error)
{
    die("Connection Failed :".$conn->connect_error);
} else{
 $stmt =$conn->prepare("INSERT INTO registration(username,email,password)
    VALUES(?,?,?)");
    
    $stmt->bind_param("sss",$register_username,$register_email,$register_password);
    $stmt->execute();
    echo"Your Registration was successful";

    $stmt->close();
    $conn->close();
}
?>

