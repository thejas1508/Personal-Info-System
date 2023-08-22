/* Output table by fetching data from database*/
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "suvetha";
$conn = mysqli_connect($servername,$username,$password,$db);
$sql= "select * from id";
$result= mysqli_query($conn,$sql);
echo "<table border = 5 bordercolor = #800080>";
echo "<tr>";
echo "<th>NAME</th>";
echo  "<th>DEPARTMENT</th>";
echo "<th>DOB</th>";
echo "<th>PHONE NUMBER</th>";
echo "<th>BLOOD GROUP</th>";
echo "<th>ADDRESS</th>";

echo "</tr>";

while($row = mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>";
	echo $row['name'];
	echo "</td>";
	echo "<td>";
	echo $row ['department'];
	echo "</td>";
	echo "<td>";
	echo $row['DOB'];
	echo "</td>";
	echo "<td>";
	echo $row['phone_number'];
	echo "</td>";
	echo "<td>";
	echo $row['blood_group'];
	echo "</td>";
	echo "<td>";
	echo $row['address'];
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
?>

