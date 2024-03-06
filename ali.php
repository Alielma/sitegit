<?php 

$nom = $_POST['name'];
$email = $_POST['email'];

//echo 'hello :' . $nom . 'how are you </br>' . 'your Email :' . $email;
if($nom == "ali"){
    session_start();
$_SESSION['name'] = "ali4";
header("location:ali2.php");

}



?>
<h1> hello world
</h1>