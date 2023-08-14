<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid black;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: coral;}
</style>
</head>
<body>
<?php
 include "db.php";

 $sql = "SELECT  LoginF as feeling_level, count(LoginF) as count
 from BridgeIT2
 group by LoginF";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   echo "<table><tr><th>feeling_level</th><th>count</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["feeling_level"]."</td><td>".$row["count"]."</td></tr>";
   }
   echo "</table>";
 } else {
   echo "0 results";
 }
 $conn->close();

?>
<button onclick="history.back()">Go Back</button>
</body>
</html>

