<!DOCTYPE html>
 <html>
	<head>
		<title>Project One</title>
		<meta charset = "UTF-8">
		<link rel="stylesheet" href="style.css">
		<style>
		
		</style>
	</head>
	<body>
		<div>
			<h2 class = "title"> Latest articles </h2>
			<h3 style = "background-color: rgb(30, 70, 2)"> Next articles </h3>
		</div>
	<article>
		<p title = "This is some website content" style = "color:red"> Project title</p>
 
	</article>
	
	<link rel="stylesheet" href = "includes/jquery.datetimepicker.min">
	<script src="includes/jquery.js"></script>
	<script src="includes/jquery.datetimepicker.full.js"></script>
	<form action = "includes/redirect.php" method="POST" > 

<button type = "submit" name =  submit> Booking Page </button>
</form>
 
 
<form action = "loginPage.php" method="POST" > 

<button type = "submit" name =  submit> Hello World </button>
</form>

	<!--<form action = "includes/add_booking.php" method="POST" > 
	<input type = "text" name = "room" placeholder = "Room ID">
	<br>
	<input type = datetime id = "datetime" name = "time" placeholder = "D&T: 08:00"> 
	<br>
	<input type = "text" name = "userID" placeholder = "User ID">
	<br>
	<button type = "submit" name =  submit> Add booking </button>
	</form>
	
	<script>
		$("#datetime").datetimepicker();
	</script>
     -->
<?php
    include_once 'includes/dbh.php';
	$sql = "SELECT * FROM `roombookings`.`rooms`;";
	$result = mysqli_query($conn, $sql);
	#first line is the query you want to use in SQL 
	#secong line is the result you want to get from it, so first you have 
    #to connect to mysql using $conn before passing the $sql statement 
    $resultCheck = mysqli_num_rows($result);
	#using resultcheck incase no results come back 
	

?>

<!--Shows all rooms  -->
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
 

 

 </body>
 
</html>
