<?php session_start(); 
error_reporting(E_ALL ^ E_NOTICE);
      include_once('config.php');
include_once('functions.php');


    $errormsg= '';
if (isset($_POST["submit"])) {
           
           $username =  $_POST["username"] ;
	       $pass =  $_POST["password"];

          $sql1 = mysqli_query($coon,"SELECT * FROM  account WHERE   username='$username' AND password='$pass' ");
          $num = mysqli_num_rows($sql1);
    if($num<1){
         $errormsg="  
              <div class='alert alert-danger alert-autocloseable-danger '>
        			<h4 style='text-align: center;'>اسم المستخدم او كلمة المرور غير صحيح </h4>
				</div>
                
                 ";
        
    }
    $sql = mysqli_query($coon,"SELECT * FROM  account a,type_user tu WHERE  a.type_user=tu.type_id  AND a.username='$username' AND a.password='$pass' ");
          
       while ($login_check= mysqli_fetch_array($sql)){
  
		     $ids = $login_check['user_id'];
             
          if($login_check['type_name']=="student"){

         $_SESSION['studint_id'] = $login_check['user_id'];
		 $_SESSION['studint_username'] = $login_check['username'];
         $_SESSION['studint_password'] = $login_check['password'];
         $_SESSION['type_user'] = $login_check['type_name'];        
          header ("location:home_student.php");
          
          } 
           elseif($login_check['type_name']=="admin" || $login_check['type_name']=="teacher"){

            	$_SESSION['admin_id'] = $login_check['user_id'];
		$_SESSION['admin_username'] = $login_check['username'];
        $_SESSION['type_name'] = $login_check['type_name'];
        $_SESSION['msg']=login_success_msg();
        $_SESSION['type_user'] = $login_check['type_name'];
                header ("location:sidebar.php");
          }else{ 
                header ("location:index.php");
               
           
              
                }
          }
  
  }



?>
 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signin</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
      
           <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>

$(document).ready(function () {
			$('.alert-autocloseable-success').delay(1500).fadeOut( "slow", function() {
				// Animation complete.
				$('#autoclosable-btn-success').prop("disabled", false);
			});
    
    $('.alert-autocloseable-danger').delay(2000).fadeOut( "slow", function() {
				// Animation complete.
				$('#alert-autocloseable-danger').prop("disabled", false);
			});
		
});


</script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
      

     
  </head>
    

  <body class="text-center  ">
      <div class="container">
        <div class="row">
    <form class="form-signin   " action=" " method="post">
        <?php echo $errormsg;?>
  <img class="mb-4 col-xs-12" src="img/logo.png" alt="" width="150" height="150">
  <h1 class="h3 mb-3 font-weight-normal " style="  font-family: 'Glyphicons Halflings';">Electronic Educational Platform</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="text" style="margin-bottom: 10px;" id="username" name="username" class="form-control" placeholder="Account Name" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
     
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Sign in</button>
     
       
        
        
</form>
      
        <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021-2022 By: Eng_Asem Sadaq.</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#"> aasmsadq11@gmail.com</a></li>
    
    </ul>
  </footer> 
           
      </div>
                </div>

</body>
</html>
