<?php

$usuario=$_POST('Usuario');
$clave=$_POST('Contraseña');
session_start();

$_SESSION['Usuario']=$usuario;

$conn-mysqli_connect("localhost", "root", "", "connection");
$consulta="SELECT * FROM login  WHERE Usuario='$usuario and contraseña ='$contraseña'";
$resultado=mysqli_query($conn,$consulta);
$filas=mysqli_num_rows($resultado);

if ($filas) 
{
    header("location:home.php");
}
else
{

    ?>

    <?php
    include("signIn.html")
    ?>

    <h2 class="bad">ERROR DE AUTENTICACION</h2>


<?php

}

mysqli_free_result($resultado);
mysqli_close($conn)

?>
