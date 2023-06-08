<?php (include 'inc/header.php' ) ;?>

<?php
// firist validate 
// second validate 
$id = $_GET['id'] ; // get['id'] da feh el value bta3t el id el mawgod fe el db bta3ty 
$sql = "SELECT * FROM `users` WHERE `id` = '$id'  LIMIT 1 " ;
$result = mysqli_query($conn,$sql) ; // go 
$check = mysqli_num_rows($result) ; // ensurign that result ccontains info bta3t el db bta3ty
if(!$check) 
{
    header("Location:index.php");
}

$row = mysqli_fetch_assoc($result) ; // row 1 


?>









<h1 class="text-center col-12 bg-primary py-3 text-white my-2">Edit Info About User</h1>
   
          
    <div class="col-md-6 offset-md-3">


        <form class="my-2 p-3 border" method= 'POST' action ="update.php" >
            <div class="form-group">
                <label for="exampleInputName1">Full Name</label>
                <input type="text" name="name" value = "<?php echo $row['name'] ;?> "class="form-control" id="exampleInputName1" >
                <input type="hidden" value ='<?php echo $id ; ?>' name ='id'>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Email address</label>
                <input type="email" name="email"  value = "<?php echo $row['email'] ;?> " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
         
            <button type="submit" class="btn btn-primary" name ='submit'>Submit</button>
        </form>
    </div>

<?php (include 'inc/footer.php' ); ?>