<?php 
   
   session_start();
   
   
   ?>
   
<!DOCTYPE html>
 <html>
 
 
 <?php
 

// adds the booked room to the booking datadase and heads back to main page

  include_once 'dbh.php';
  

  $roomId = $_POST['roomId'];
  $time = $_SESSION['times'];
  $userID = $_POST['userID'];
  $sql = "Select `Name` FROM `roombookings`.`rooms` WHERE `Room ID` = '$roomId';";
 
 
   $result1 = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($result1);
   

	echo "Room: "; 
	echo $row['Name'];
 	echo " ";
	echo "Booked for: ";
	echo $time;
  
  $name = $row['Name'];
  
  
  $sql = "INSERT INTO `roombookings`.`booking` (`Room ID`, `Name`, `Time`, `User booking ID`) VALUES 
  ('$roomId','$name', '$time', '$userID')";
  
  $result = mysqli_query($conn, $sql);
  ?>
<?php
  
  //header("Location: ../projectOne.php?add_room=success");

  //function goHome(){
//	  header("Location: ../projectOne.php?add_room=success");
  //}
  
?>

  

</html>


