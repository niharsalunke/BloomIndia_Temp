<?php header("Content-Type: text/html");
$q = strval($_GET['q']);
	

$con = mysqli_connect('localhost','bloom','sygCeY^E?A@J','bloom_india');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT id, lat, lon, bloodgroup FROM location_table WHERE city = '".$q."' or district = '".$q."' ";


$result = mysqli_query($con,$sql);

	
#echo "<script>";

#echo "function getVals() {  return ";

while($row = mysqli_fetch_assoc($result)) {
  echo "<tr >";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['lat'] . "</td>";
  echo "<td>" . $row['lon'] . "</td>";
  echo "<td>" . $row['bloodgroup'] . "</td>";
  echo "</tr>";
}



#echo "</table>";
#	echo "} </script>"

?>

