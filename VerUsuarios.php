<?php
$connect=mysqli_connect("mysql.hostinger.es","u461050408_usr","Prueba1","u461050408_quiz");


if ($connect) {
    $sql = "SELECT * FROM Usuario";
    $link = mysqli_query($connect,$sql);
    echo '<table border=1> <tr> <th> NOMBRE Y APELLIDO </th> <th> EMAIL </th> <th> PASSWORD </th> <th> TELEFONO </th> <th> ESPECIALIDAD </th> </tr>';


    while($info = mysqli_fetch_array($link)) {
       // echo"<br>";
        echo '<tr> 
    		<td><width size="150">' .$info["Nombre"]. '</td> 
    		<td><width size="150">' .$info["Email"]. '</td> 
    		<td><width size="150">' .$info["Password"]. '</td> 
    		<td><width size="150">' .$info["Telefono"]. '</td> 
    		<td><width size="150">' .$info["Especialidad"].'</td> 
    		</tr>';

    }
    echo '</table>';
    $link->close();
}
mysqli_close($connect);
?>

