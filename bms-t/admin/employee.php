<?php include('header.php'); 
 include('../config/config.php');

 
 if(isset($_SESSION['status'])&& $_SESSION['status']!=''){
    $message= $_SESSION['status'];
    unset($_SESSION['status']);
 }
 ?>

<h2>Employe</h2>
    <a href="employee_manage.php">Add New Role</a>
<table border="1" style="width:100%; ">
<thead>
    <tr>
        <th>S.No.</th>
        <th>Nmae</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>xyz</td>
        <td>Tqgdhg@</td>
        <td> <button>Edit</button>  <button>Delete</button> </td>
    </tr>
</tbody>
</table>
<?php include('footer.php'); ?>