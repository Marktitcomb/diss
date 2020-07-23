<!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>
<!-- downloading library -->
<link rel="stylesheet" href = "jquery.datetimepicker.min">
<script src="jquery.js"></script>
<script src="jquery.datetimepicker.full.js"></script>

<h2> hello </h2>
<!-- Date Field -->


<form action = "free_rooms.php" method="POST" >
	<input id = "datetime" name = "time" placeholder = "Please input date">
	<button type = "submit" name =  submit> Find Rooms </button>
</form>


 
 <!--initialising -->

<script>
   $("#datetime").datetimepicker();
   </script>
   
<!--?php
   #header('Location: free_rooms.php')

?>-->

<form>
 <input type="button" value="Go back!" onclick="history.back()">
</form>
   

</body>
</html>









