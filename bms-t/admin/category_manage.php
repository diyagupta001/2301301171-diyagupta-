
  <!--<br>
<div class="addpage">
    
    <div class="al">
    <div class="line linediv1"></div>
    <div class="one">1</div>
    <div class="line linediv2"></div>
    <div class="two">2</div>
    <div class="line linediv3"></div>
   </div>
    <div class="_2p">
      <div class="p1">Select Category</div>
         <div class="p2">Add Product Details</div>
    </div>
 select region
<div class="select">
   <div class="s1">
      <p>Select Category</p>
            <input type="text" placeholder="">
   </div>
   <div class="s2">
   <p><label for="payment">Payment Allowed</label></p>
      <select class="op" id="payment">
         <option value="Both">Both</option>
     <option value="Cash">cash</option>
     <option value="Paytm">Paytm</option>
     <option value="None">None</option>
     <option value="Card">Card</option>
   </select>
   </div>
</div>
<br>
<div class="section">
<label  class="l1" for="return"> Product Return</label>
<input type="checkbox" id="return" >

<label  class="l2" for="SDF"> Shipped By SDF</label>
<input type="checkbox" id="SDF" >

<label  class="l3" for="self"> Self Ship</label>
<input type="checkbox" id="self" >
</div>

<button class="b1">Next</button>
   </div>
</body>
</html>-->
<?php  
include('../config/config.php');
include('header.php');
//add
$title='';
$description='';
if(isset($_GET['id']) && $_GET['id']>0){
    //edit
    $result =$conn->query("select * from role where id=".$_GET['id']);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        print_r($row);
        $title=$row['name'];
        $description=$row['description'];
    }
}

?>

<h2>Category Manage<h2>
<a href="category_manage.php">Add New Role</a>
<form method="Post" action="callback/role.php" enctype="multipart/form-data"><!--multimedia content dollar underscore files me milta h-->
<input type="text" name="title" value="<?php echo $title; ?>" required>
<textarea name="description" ><?php echo $description; ?></textarea>
<input type="submit">
</form>
<?php  include('footer.php'); ?>