<?php (include 'inc/header.php' ) ;?>

<h1 class="text-center col-12 bg-info py-3 text-white my-2">Update  User</h1>

<?php (include 'inc/validate.php') ;?> 

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){ 

    foreach($_POST as $key => $value) :
        $$key =($value)  ; // now we have all the keys in vartiable cleane  code
    endforeach ;

   // validate 

   if(requiree($name) or requiree($email)){ 
    $errors  = " Please Fill Your Falieds " ;
    
}

  // error 
if(empty($errors)) { 
   // create
   if($password) { // if password exsits 
    $password = $_POST['password'];
    $hasshed_password = password_hash($password,PASSWORD_DEFAULT) ;// it return str w btakhod 2 parameters el var we el pass_def
   
   $sql= "UPDATE `users` SET `name`= '$name' ,`email`='$email',`password`='$hasshed_password'
    WHERE `id` ='$id' ";
   }
   else
   {

    $sql= "UPDATE `users` SET `name`='$name' ,`email`='$email'
    WHERE `id` ='$id'";

   }

$result = mysqli_query($conn,$sql); // go 

if($result) {
        $success = "Updated Successfully" ;
        header("refresh:1;url=index.php");

    }


}else {
    header("refresh:1;url=index.php");

}


}



?>
            <?php  if($errors) :?>
                    <div class="alert alert-danger"> <?php echo $errors ; ?></div>
            <?php endif ; ?>
            <?php if($success): // str method to show the success ?>
                <div class="alert alert-success"> <?php echo $success; ?></div>
            <?php endif; ?>

  
<?php (include 'inc/footer.php' ); ?> 

