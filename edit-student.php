<?php

include 'config/db.php';
include 'layout/header.php';

if(!empty($_GET['id'])){
  $student_id = $_GET['id'];

  $sql = "Select * from student where id = ".$student_id;

  $result = $conn->query($sql);
  $row = $result->fetch_assoc();



  
}

?>

<div class="main-container all-students"> 


  <form>
    <div class="form-group">
      <label>ID</label>
      <input type="text" name="" value="<?php echo $row['id']; ?>">
    </div>

    <div class="form-group">
      <label>NAME</label>
      <input type="text" value="<?php echo $row['name']; ?>">
    </div>

    <div class="form-group">
      <label>GENDER</label>
      <input type="text" value="<?php echo $row['gender']; ?>">
    </div>


    <div class="form-group">
      <label>ADDRESS</label>
      <input type="text" value="<?php echo $row['address']; ?>">
    </div>
  </form>




</div>  



<?php
include 'layout/footer.php';



 ?>