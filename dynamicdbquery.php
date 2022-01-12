<html>
	<body>
		<p> "Dynamic Insert, Update, Delete" </p>
		<form action=" " method="POST">
			<hr>
			<h3><u>Insert into Table:</u></h3>
			Id:<input type="number" name="id">
			Name:<input type="text" name="name">
			Contact:<input type="number" name="contact">
			<input type="submit" name = "insert" value="Insert"><br><br>
			<hr>

			<!-- <h3><u>Update to Table:</u></h3>
			Update where id: <input type="number" name="u_id">
			<input type="submit" name = "update" value="Update"><br><br>
			<hr> -->

			<h3><u>Delete from Table:</u><h3>
			Row(id number) to be deleted:<input type="number" name="d_id">
			<input type="submit" name = "delete" value="Delete"><br><br>
			<hr>
		</form>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "test";
			$conn = new mysqli($servername, $username, $password, $db);	
			if ($conn->connect_error) 
			{
  				die("Connection failed: <br>" . $conn->connect_error);
			}
			else
			{
				echo "Connected successfully<br>";
			
			// $create = "CREATE TABLE employee (id int(5), name varchar(20), contact int(10))";
			// if ($conn -> query($create) === TRUE)
			// {
			// 	echo "Table created Succesfully";
			// }
			// else
			// {
			// 	echo "Error in Creating table";
			// }

			// $id = $_POST['id'];
			// $name = $_POST['name'];
			// $contact = $_POST['contact'];
			// $insert = "INSERT INTO employee (id, name, contact) VALUES ($id, '$name', $contact)";
			// if ($conn -> query($insert) === TRUE) 
			// {
			// 	echo "Data inserted Succesfully";
			// }
			// else
			// {
			// 	echo "Error in inserting data in table";
			// }
			
			// $u_id = $_POST['u_id'];
			// $update = "UPDATE employee SET $id, $name, $contact WHERE $id= $u_id";
			// if ($conn -> query($update) === TRUE) 
			// {
			// 	echo "Data updated Succesfully";
			// }
			// else
			// {
			// 	echo "Error in updating data in table";
			// }

			$d_id = $_POST['d_id'];
			$delete = "DELETE FROM employee WHERE id = $d_id";
			if ($conn -> query($delete) === TRUE) 
			{
				echo "Data deleted Succesfully";
			}
			else
			{
				echo "Error in delete data from table";
			}

			$select = "SELECT * FROM employee"; 
				$result =mysqli_query($conn, $select);  
  				if(mysqli_num_rows($result) > 0)
  				{  
 					while($row = mysqli_fetch_assoc($result))
 					{  
	    				echo "ID :{$row['id']}  <br> ".  
	         				"NAME : {$row['name']} <br> ".  
	         				"CONTACT: {$row['contact']} <br> ".  
	         				"--------------------------------<br>";
	         		}  
	         	}
				else 
				{
	  				echo "no matchin record found.";
				}
		}
		?>
	</body>
</html>