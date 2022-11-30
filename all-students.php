<?php
	
	include 'config/db.php';
	include 'layout/header.php';

	$sql = "select * from student";
	$result = $conn->query($sql);

  $name = 'waqas';
  ?>
  <div class="main-container all-students"> 

    <h1>All Students</h1>
   
   <?php 
  if($result->num_rows > 0){
    ?>

  <table>
   <thead>
     <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Gender</th>
       <th>Address</th>
     </tr>
   </thead>


 <?php
        while($row = $result->fetch_assoc()){
          
          ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><a href="edit-student.php?id=<?php echo $row['id']; ?>">Edit</a></td>
          </tr>
          <?php
        }

  ?>
  </table>
  <?php      
        
  }
  else{
    echo "<p>No Records Found</p>";
  }



 ?>

 

		
			

		</div> <!--- ended main container -->

<?php
			include 'layout/footer.php';
?>


