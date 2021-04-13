<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";
$conn = new mysqli($servername, $username, $password, $dbname);
$Id = $_GET['ID'];

$sql = "DELETE FROM information where id=$Id";

$result = $conn->query($sql);
if($result){
    echo "Deleted Succesfully";
}
else{
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
header("Location: index.php");
?>