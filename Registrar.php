<?php


    $link = mysqli_connect("mysql.hostinger.es","u461050408_usr","Prueba1","u461050408_quiz");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}



    echo "conexion establecida. <br />";

    $nombre= $_POST ['nombre'];

    $email= $_POST ['email'];

    $password= $_POST ['password'];

    $numero= $_POST ['numero'];

    $especialidad= $_POST ['especialidad'];


    $sql= "INSERT INTO Usuario (Nombre, Email, Password, Telefono , Especialidad) VALUES ('$nombre','$email','$password','$numero','$especialidad')";



if (!mysqli_query($link ,$sql))
    {
        die('Error: ' . mysqli_error($link));
    }

    echo "1 record added";


    mysqli_close ($link);
echo"<br>";


echo "<a href='VerUsuarios.php'>Ver informacion de la BD</a>";


?>