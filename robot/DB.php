<?php
$user = 'root';
$password = '';
$database = 'db_db';
$servername='localhost:8888';
$mysqli = new mysqli($servername, $user,
                $password, $database);


if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 

$sql = " SELECT * FROM db ORDER BY ID DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
	<meta charset="UTF-8">
	<title>Control panel </title>
	
<body>
	<section>
		<h1>Control panel</h1>
		<table>
			<tr>
				<th>ID</th>
				<th>Value</th>
				
			</tr>
			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['ID'];?></td>
				<td><?php echo $rows['value'];?></td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>