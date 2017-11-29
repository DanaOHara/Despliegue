<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moodleMABP";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id FROM mdl_user WHERE username = 'admin'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Usuario: " . $row["username"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

function redirigirVacio()
{
    header("Location: vacio.html");

}

function redirigirSegundaParte($pass)
{
    $_SESSION['pass'] = $pass;
    header("Location: cursosInicio.html");

}


if($_POST['pass'] == '')
{
  redirigirVacio();
}

else
{
  redirigirSegundaParte($_POST['pass'] );
}



?>
