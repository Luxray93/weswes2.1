<?php
$dbc_form = mysqli_connect("localhost","root","","wes_uppgift");
if(isset($_GET['id']) && isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['username']) && isset($_GET['password'])){
    
    $name = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $username = $_GET['username'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $query = "INSERT INTO register (name,lastname,mail,username,phone,gender) VALUES ('$name',$age,'$mail','$username','$phone','$gender')";
    mysqli_query($dbc_form,$query);
    
    echo "Tack $name! Du är nu registrerad!";
}
else{
    // Fel information, Skickas tillbaka till index.php
    header("location: index.php");
}
    
    
    
    
    
?>
