<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">


<html>
<head>
    <title>Registro</title>



    <script type="text/javascript" src="JS/FormularioValido.js"></script>



    <style type="text/css">
        #submit {
        }
    </style>

</head>
<body>


<h1>Registro de usuario</h1>
<br>


<form action="registro.php" method="post" id='registro' name='registro'  onsubmit="return verificar()"  >


    <label>Nombre y apellidos*</label>
    <br>

    <input type="text"  id="nombre" name="nombre" />
    <br>

    <label>Email*             </label>
    <br>

    <input type="text" id="email" name="email"  />
    <br>

    <label>Password*         </label>    <br>

    <input type="password" id="password" name="password"  />
    <br>

    <label>Numero de telefono*</label>
    <br>

    <input type="text" id="numero" name="numero"  />
    <br>

    <label>Especialidad     </label>    <br>

    <input type="text" id="especialidad" name="especialidad"  />
    <br>
    <br>


    <button type="submit" name="submit" id="submit" >Submit</button>



</form>



<?php




if (isset($_POST['email'])){

$link = mysqli_connect("mysql.hostinger.es","u461050408_usr","Prueba1","u461050408_quiz");






    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }


    echo "conexion establecida. <br />";

    $nombre = $_POST ['nombre'];

    $email = $_POST ['email'];

    $password = $_POST ['password'];

    $numero = $_POST ['numero'];

    $especialidad = $_POST ['especialidad'];



    $filter_email = "/^[a-zA-Z]+\d{3}\@ikasle.ehu\.(eus|es)/";
    $filtro_num="/^[6-9]/";


    if(!preg_match($filter_email,$email)) {
    echo "Email invalido";

    }else if (strlen($nombre) < 3 ) {
         echo "Error en el nombre";

     }else if (strlen($password) <6) {
         echo "Contraseña demasiado corta";

     }else if(!preg_match($filtro_num, $numero) | strlen($numero) !=9){
         echo "Numero erroneo";


     }else{


        $sql = "INSERT INTO Usuario (Nombre, Email, Password, Telefono , Especialidad) VALUES ('$nombre','$email','$password','$numero','$especialidad')";


        if (!mysqli_query($link, $sql)) {
            die('Error: ' . mysqli_error($link));
        }


        echo "1 record added";


        mysqli_close($link);
        echo "<br>";


        echo "<br>";

        echo "<a href='VerUsuarios.php'>Ver informacion de la BD</a>";

    }
}

?>


</body>




</html>