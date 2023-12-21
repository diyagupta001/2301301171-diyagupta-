<?php 
include('header.php');
include('../config/config.php');
if($conn->connect_error){
    echo'failed';
}
else{
    echo'pass';
}

//select
 ?>
<h2>Employe Manage</h2>
<form method="post" action="callback/employee.php" enctpye="multipart/form-data">
<input type="text" name="tittle" required>
<input type="text" name="description">
<input type="submit">
</form>

<?php include('footer.php'); ?>