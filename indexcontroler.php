
<?php
session_start();

function redirigirVacio()
{
    header("Location: vacio.html");

}

function redirigirSegundaParte($userName)
{
    $_SESSION['userName'] = $userName;
    header("Location: indexp2.html");

}


if($_POST['userName'] == '')
{
  redirigirVacio();
}

else
{
  redirigirSegundaParte($_POST['userName'] );
}


?>
