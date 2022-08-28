
<?php
require_once("conn_cartdb.php"); 
$search_key = "";
if (isset($_POST['search_key'])) {
	  $search_key = $_POST['search_key'];
}
if ($search_key != "") {
      $query = "SELECT * FROM events WHERE (event_name='$search_key')";
}
else
{
	$query = "SELECT * FROM events";
}
$result=mysqli_query($link, $query);
//Display events
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo "<tr><td> ".$row['event_name']."</td>";
		echo "<td>".$row['location']."</td>";
		echo "<td>".$row['event_date']."</td>";
		echo "</tr>";
	}
?>   
