<?php
session_start();

function redirigirVacio()
{
    header("Location: vacio.html");

}

function redirigirCursos($pass)
{
  $_SESSION['pass'] = $pass;
  header("Location: cursosInicio.html");

}

if($_POST['pass'] = '')
{
  redirigirVacio();
}

else
{
redirigirCursos($POST['pass']);
}


?>
