<?php

session_start();
?>

<!DOCTYPE html>
 <html>
	<body>
	<?php
	
	//start_session();
	
	$time = $_POST['time'];
	$_SESSION['times'] = $time;
	
	echo "Booking time: " ;
    echo $_SESSION['times'];
	
	?>
	
	
	
	
	
	<link rel="stylesheet" href = "jquery.datetimepicker.min">
	<script src="jquery.js"></script>
	<script src="jquery.datetimepicker.full.js"></script>
	

	<form action = "add_booking.php" method="POST" > 
	
	
	<input type = "text" name = "roomId" placeholder = "Room ID">
	<br>
	<!--<input type = datetime id = "time" name = "time" placeholder = "D&T"> 
	<br>-->
	<input type = "text" name = "userID" placeholder = "User ID">
	<br>
	<button type = "submit" name =  submit> Add booking </button>
	</form>
	
	<script>
		$("#datetime").datetimepicker();
	</script>
	



<?php
    include_once 'dbh.php';
	
	$time = $_POST['time'];
	
	$sql = "SELECT * FROM `roombookings`.`rooms`
	WHERE `Room ID` NOT IN (SELECT `ROOM ID` FROM `roombookings`.`booking`
	WHERE `Time` = '$time');";
	
	$result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
?>

 <h4 align = "center"> Rooms Details </h4>
 <style>
 table,
  th,
      td {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
      }
	  </style>
 <table border="5" align = "center" style = "line-height:5px;">
 <thead>
	<tr>
		<th>Room ID &nbsp </th>
		<th>Name &nbsp </th>
		<th>Pens &nbsp </th>
		<th>Computers &nbsp </th>
		<th>Building &nbsp </th>
	</tr>
 </thead>
 <tbody>
 <?php
 if($resultCheck > 0){
	 while($row = mysqli_fetch_assoc($result)){
		 ?>
		 <tr>
		 <td><?php echo $row['Room ID']; ?> </td>
		 <td><?php echo $row['Name']; ?> </td>
		 <td><?php echo $row['Pens']; ?> </td>
		 <td><?php echo $row['Computers']; ?> </td>
		 <td><?php echo $row['Building']; ?> </td>
		 </tr>
		 <?php
		 
	 }
	 
 }
 else{
	 ?>
	 <tr>
	 <th colspan = "2">There's No Data Found </th>
	 </tr>
	 <?php
 }
 ?>
 </tbody>
 </table>
 
 <form>
 <input type="button" value="Go back!" onclick="history.back()">
</form>


</body>
 </html>
 

 
 