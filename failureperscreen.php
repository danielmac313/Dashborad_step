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

 $sql = "SELECT   Login, sum(Login) as count
 from BridgeIT2
 where Login=1";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   echo "<table><tr><th>Login</th><th>sum(Login)</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["Login"]."</td><td>".$row["count"]."</td></tr>";
   }
   echo "</table>";
 } else {
   echo "0 results";
 }

 $sql = "SELECT  RenewPass, sum(RenewPass) as count
 from BridgeIT2
 where RenewPass=1";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   echo "<table><tr><th>RenewPass</th><th>sum(RenewPass)</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["RenewPass"]."</td><td>".$row["count"]."</td></tr>";
   }
   echo "</table>";
 } else {
   echo "0 results";
 }

 $sql = "SELECT  calendar, sum(calendar) as count
 from BridgeIT2
 where calendar=1";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   echo "<table><tr><th>calendar</th><th>sum(calendar)</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["calendar"]."</td><td>".$row["count"]."</td></tr>";
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






