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

 $sql = "SELECT  Age_group, avg(Total_time_sec) as 'avg Total time'
 from BridgeIT2
 group by Age_group";

 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
   echo "<table><tr><th>Age_group</th><th>count(avg_Total_time)</th></tr>";
   // output data of each row
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>".$row["Age_group"]."</td><td>".$row["avg Total time"]."</td></tr>";
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















