<?php (include 'inc/header.php' ) ;?>
<?php (include 'inc/validate.php') /* calling */ ;?>   

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){ 

    foreach($_POST as $key => $value) :
        $$key = ($value)  ; // now we have all the keys in variable cleane  code
    endforeach ;
// echo $_POST['name'] ;  
// key => name value => che 
// $name = $_POST['name'] ; 
// die; 
// $name = $value 
   // validate 
  //name               
            // validation 
if(requiree($name) or requiree($email) or requiree($password) ){ 
    $errors  = " Please Fill Your Falieds " ;
    
}

// crud 
// create  delete read update edit



// $_POST['name'] ; 
  // error 
if(empty($errors)) { 
   // first query => create
   
    $hasshed_password = password_hash($password,PASSWORD_DEFAULT) ; // it return str w btakhod 2 parameters el var we el pass_def
    $sql = "INSERT INTO `users` (`name`,`email`,`password`) 
    VALUES ('$name ', '$email' , '$hasshed_password')  " ;
    $result = mysqli_query($conn,$sql) ; // go button

    if($result) {
        $success = "Added Successfully" ;
    }


}


}


?>

<h1 class="text-center col-12 bg-info py-3 text-white my-2">Add New User</h1>
    <div class="col-md-6 offset-md-3">
         <?php
                    // array method to show the error
                    if($errors) :
            ?>
            <div class="alert alert-danger text-center"> <?php echo $errors ; ?></div>
            <?php
                    endif;
            ?>
            <?php if($success): // lw success mawgoda 
                 // str method to show the success ?>
                <div class="alert alert-success"> <?php echo $success; ?></div>
            <?php endif; ?>

                        <!-- $_POST['name'] -->
        <form class="my-2 p-3 border" method ='POST' action ='add.php' >
            <div class="form-group">
                <label for="exampleInputName1">Full Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder = 'Enter Your Name' >
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder = 'Enter Your E-mail '>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder = 'Enter Your Password'>
            </div>
         
            <button type="submit" class="btn btn-primary" name = 'Submit'>Add</button>
        </form>
    </div>

<?php (include 'inc/footer.php' ); ?> 
