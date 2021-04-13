<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" 
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" 
    crossorigin="anonymous">
    <title>Information</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * from information";
$result = $conn->query($sql);
?>



<div class="container mt-5 bg-light">
<h3 class="display-3"> All Information</h3>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">User name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "<tr>
                    <td>".$row["first_name"]."</td>".
                    "<td>".$row["last_name"]."</td>".
                    "<td>".$row["username"]."</td>".
                    "<td>".$row["email"]."</td>".
                    "<td>"."<a href='delete.php?ID=". $row['id']."'"." class='btn btn-danger'>" ."Delete". "</a>"."</td>".
                "</tr>";
        }
    }
    ?>
  </tbody>
</table>
</div>

</body>
</html>