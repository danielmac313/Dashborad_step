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

 $sql = "SELECT Verification_after_scroll, count(Verification_after_scroll) as count
 from BridgeIT2
 where Age_group='20-40'
 group by Verification_after_scroll";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   echo "<table><tr><th>Verification_after_scroll -  20-40</th><th>count</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["Verification_after_scroll"]."</td><td>".$row["count"]."</td></tr>";
   }
   echo "</table>";
 } else {
   echo "0 results";
 }

 $sql = "SELECT Verification_after_scroll, count(Verification_after_scroll) as count
 from BridgeIT2
 where Age_group='40-55'
 group by Verification_after_scroll";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   echo "<table><tr><th>Verification_after_scroll  - 40-55</th><th>count</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["Verification_after_scroll"]."</td><td>".$row["count"]."</td></tr>";
   }
   echo "</table>";
 } else {
   echo "0 results";
 }

 $sql = "SELECT Verification_after_scroll, count(Verification_after_scroll) as count
 from BridgeIT2
 where Age_group='55-70'
 group by Verification_after_scroll";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   echo "<table><tr><th>Verification_after_scroll  - 55-70</th><th>count</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["Verification_after_scroll"]."</td><td>".$row["count"]."</td></tr>";
   }
   echo "</table>";
 } else {
   echo "0 results";
 }
 $sql = "SELECT Verification_after_scroll, count(Verification_after_scroll) as count
 from BridgeIT2
 where Age_group='70 - above'
 group by Verification_after_scroll";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   echo "<table><tr><th>Verification_after_scroll  - 70 - above</th><th>count</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["Verification_after_scroll"]."</td><td>".$row["count"]."</td></tr>";
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