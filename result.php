<?php
require "main.php";
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ancur Choching Center</title>
	<link href="w3.css" rel="stylesheet"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>		
<table id="mytable" class="w3-table-all tcont">
				<thead>
					<tr>
						<th>ID</th>
						<th>Photo</th>
						<th>Roll</th>
						<th>Name</th>
						<th>Class</th>
						<th>Shift</th>
						<th>Guirdian</th>
						<th>Guirdian Relation</th>
						<th>Student Contact</th>
						<th>Guirdian Contact</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$result = mysqli_query($conn,"SELECT * FROM students");
					while($row = mysqli_fetch_array($result))
					{
					?>
					<tr>
						<td><?php echo $row['id'] ?></td>
						<td><img src="<?php if($row['photo']==NULL){echo "images/fahi.png";}else{echo "images/".$row['roll'];}?>" height="50" alt="img"></td>
						<td><?php echo $row['roll'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['class'] ?></td>
						<td><?php echo $row['shift'] ?></td>
						<td><?php echo $row['g_name'] ?></td>
						<td><?php echo $row['g_relation'] ?></td>
						<td><?php echo $row['s_phone'] ?></td>
						<td><?php echo $row['g_phone'] ?></td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
	<script src="js/jquery.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $('#mytable').ddTableFilter();
    </script>
</body>
</html>

