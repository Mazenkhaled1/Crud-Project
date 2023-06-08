<?php (include 'inc/header.php' ) ;?>
<?php (include 'inc/validate.php') /* calling */ ;?>  

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' ) 
{
 foreach($_POST as $key => $value):
    $$key = $value ;
 endforeach;

  // validation 

  if(requiree($name) or requiree($password)) 
{

    $errors = "please fill fields" ;

}



  if(empty($errors)) 
{
        $sql = " SELECT * FROM `admin` " ;
        $result = mysqli_query($conn,$sql) ; // go 
        // $check = mysqli_num_rows($result) ;
        if(mysqli_num_rows($result) > 0) {
                // id     name     pass 
            while($row = mysqli_fetch_assoc($result))
             {
               
                 if($row['name'] == $name && $row['password'] == $password) {
                   $_SESSION['auth'] = $row ; // store
                   header('location:index.php') ;
                   

               }
              
     
            }
             

        
            }
      
     
}

}

?>




<h1 class="text-center col-12 bg-info py-3 text-white my-2">LogIn</h1>
    <div class="col-md-6 offset-md-3">


                        <!-- $_POST['name'] -->
                        <?php
                                if($errors) :
                        ?>
                                <div class="alert alert-danger text-center" ><?= $errors ;?></div>
                        <?php endif; ?>
        <form class="my-2 p-3 border" method ='POST' action ='logIn.php' >
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" name="name" class="form-control" placeholder = ' Your Name' >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control"   placeholder = ' Your Password'>
            </div>
         
            <button type="submit" class="btn btn-primary" name = 'Submit'>LogIn</button>
        </form>
    </div>



<?php (include 'inc/footer.php' ); ?>