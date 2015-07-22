<!DOCTYPE html>
<html>
<body>

<?php
$servername = "www.instru-online.com";
$username = "isotronica";
$password = "1s0tr0n1c4";
$dbname = "Amarey";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT idUsuarios, firstname, lastname FROM MyGuests";
$sql = "SELECT idUsuarios, nombre, login FROM usuarios";
		
// $sql = "SELECT * FROM usuarios WHERE login='".$usuarios->usuario."'and pass='".$usuarios->contrasena."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["idUsuarios"]. " - Name: ". $row["nombre"]. "-login" . $row["login"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?> 

</body>
</html>