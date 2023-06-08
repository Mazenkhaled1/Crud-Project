<?php (include 'inc/header.php' ) ;?>

<h1 class="text-center col-12 bg-danger py-3 text-white my-2">User Have Benn Deleted </h1>

<?php
// firist validate 
if(!isset($_GET['id']) or !is_numeric($_GET['id']))
{ 
    header("Location:index.php");
}
// second validate 
$id = $_GET['id']  ; // get['id'] da feh el value bta3t el id el mawgod fe el db bta3ty 
$sql = "SELECT * FROM `users` WHERE `id` = '$id'  LIMIT 1 " ; // youssef 
$result = mysqli_query($conn,$sql) ; // go 
$check = mysqli_num_rows($result) ; // ensurign that result ccontains info bta3t el db bta3ty
if(!$check) 
{
    header("Location:index.php");
}

$sql2 = "DELETE FROM `users` WHERE `id` = '$id' " ; // third query 
mysqli_query($conn,$sql2) ; // go 

// order 
header("refresh:1;url=index.php");


?>

  
<?php (include 'inc/footer.php' ); ?> 
