 
<html>
    <head>
          <meta charset="utf-8">

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="css/bootstrap.min.css" rel="stylesheet" >
         <link href="css/bootstrap-rtl.min.css" rel="stylesheet" >
      
        
        <link href="css/Sidebar.css" rel="stylesheet" >
         <link href="css/style.css" rel="stylesheet">
        
        
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
  $localhost="localhost";
  $username_db="root";
  $pass_db="";
  $dbname="db_1";
  $coon=mysqli_connect($localhost,$username_db,$pass_db,$dbname);
        if($_SESSION['type_user']=="admin" || $_SESSION['type_user']=="teacher"){
        
            if(isset($_POST['submit_p'])){
        
        $sql2 = "update  account set username='".$_POST['username']."',password='".$_POST['password']."'  where  user_id='".$_POST['user_id']."' ";
mysqli_query($coon,$sql2);
         echo "  
              <div style='text-align: center;font-size: 25px;color: #000000;background-color: #a0df86;' class='alert alert-success alert-autocloseable-success'>
        			تم التعديل بنجاح 
 
				</div>
                 ";
        
    }
 ?>
        
</head>   
    
    <style>
    body {
     position: relative;
    overflow-x: hidden;

    /* right:30%; */
}
 

/*-------------------------------*/
/*     Sidebar nav styles        */
/*-------------------------------*/

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 220px;
    margin: 0;
    padding: 0;
    list-style: none;
}
 
/*.sidebar-nav li:first-child a {
    color: #fff;
    background-color: #1a1a1a;
}                        */


.sidebar-nav li a {
    display: block;
    color: #ddd;
    text-decoration: none;
    padding: 10px 15px 10px 30px;
}

 
 
.sidebar-nav .dropdown-menu {
    position: relative;
    width: 90%;
    padding: 0;
    margin: 0;
    border-radius: 0;
    border: none;
    background-color: #222;
    box-shadow: none;
    text-align: start;
    float: inherit;
}



 
    
    </style>
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
     <script>
  function GetFeeFor(acc_id)
{

$.ajax({
            type: 'post',
            url: 'getfeeform.php',
            data: {
                acc_id:acc_id,
               
               
                r:'up_pass'},
            success: function (data) {
              $('#formcontent').html(data);
			  $("#e").modal({backdrop: "static"});
            }
          });


}

</script>
    
<body style="font-size:15px" >

    

<nav class="navbar navbar-expand navbar-dark bg-primary" style="position: relative; margin-bottom: 0px; text-align: right "> 
    <a href="#menu-toggle" id="menu-toggle" class="navbar-brand" style="padding-top:10px; font-size:20px">
        <span class="navbar-toggler-icon"></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span> </button>
            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav mr-aut" >
                    <li class="nav-item active"> <a class="nav-link" href="#">المنصة التعليمية الالكترونية<span class="sr-only">(current)</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="sidebar.php?page=home_content">الرئيسية</a> </li>
                </ul>
                  <form class="form-inline my-2 my-md-0"> </form>
            </div>
  
           <div class="modal fade" id="e" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="display: flow-root;">
          <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
          <h4 class="modal-title">تعديل كلمة المرور</h4>
        </div>
        <div class="modal-body" id="formcontent">
        
        </div>
        
      </div>
    </div>
  </div>
        
    
     <ul class="nav navbar-nav" style="margin-right: 750px;">
             
              <li class="dropdown user user-menu" style="">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?php echo '<img  class="img-responsive" class="user-image" alt="User Image" style="float: left;
             width: 59px;
             height: 35px;
    border-radius: 50%;
    margin-right: 10px;
    margin-top: -2px;"alt="" src="img/user_100px.png">' ;
                    
                        $r= mysqli_query($coon,"SELECT * FROM  account   where  user_id='". $_SESSION['admin_id']."'");
                   while ($ro= mysqli_fetch_array($r)) { ?>
                 
                    
                  <span class="hidden-xs" style="color: black;"><?php    echo $ro['username'];  ?></span>
                   <?php }?>
                  </a>
                <ul class="dropdown-menu" style="">
                  
                  <li class="user-header" style="height:175px;
    padding:10px; width: 190px;
    text-align: center;">
                  <?php echo '<img  class="img-circle" alt="User Image"    style="z-index: 5;
    height: 90px;
    width: 90px;
    border: 3px solid;"src="img/user_100px.png">' ;?>
                    <p>
                          <?php
                     if($_SESSION['type_name']=="admin"){
                        $r=mysqli_query($coon,"SELECT * FROM  account   where  user_id='". $_SESSION['admin_id']."'");
                   while ($ro= mysqli_fetch_array($r)) { ?>
                 
                    
                      user : <?php    echo $ro['username']; ; }
                     }elseif($_SESSION['type_name']=="teacher"){
                          $r=mysqli_query($coon,"SELECT * FROM teacher t, account a  where t.user_id=a.user_id and  a.user_id='". $_SESSION['admin_id']."'");
                   while ($ro= mysqli_fetch_array($r)) { ?>
                 
                    
                      user : <?php    echo $ro['t_name']; ; }}?>
                    </p>
                  </li>
                  
                  <li class="user-body col-md-4 " style="    margin-right: 20px; margin-top: -25px;">
                    <div class="col-xs-4  text-center  ">
                                                      
<a href="#" onclick="GetFeeFor(<?php echo  $_SESSION['admin_id'];?>)" 
   data-toggle="modal" data-target="#e" class="btn btn-success btn-sm" >
<span class="glyphicon glyphicon-pencil">
    </span> تعديل كلمة المرور </a> 
                      
                    </div>
                    <div class="col-xs-4 text-center   " style=" margin-right: 20px; margin-top: 19px;">
                       
                         <a class="btn btn-sm btn-outline-secondary" href="logout.php">Logout</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
               
        </nav>
    
    
        <div id="wrapper" class="" >
            <!-- Sidebar -->
            <div id="sidebar-wrapper"style="position: absolute">
                
                <?php if($_SESSION['type_name']=="admin"){?>
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a href="#"> ادارة الموقع </a> </li>
                    <li> <a href="sidebar.php?page=home_content">الرئيسية</a> </li>
                  
                    
                <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">ادارة الطلاب</a>
                     <ul class="dropdown-menu" role="menu">
                    <li> <a href="sidebar.php?page=MangamenrUser">عرض الطلاب</a> </li>
                    <li> <a href="sidebar.php?page=register">تسجيل طالب جديد</a> </li>
                    </ul>
                </li>
                    
                
                      
                    <li> <a href="sidebar.php?page=teacher">ادارة المدرسين</a> </li>
                    
                     
                
                    
                <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">ادارة المحتوى</a>
                     <ul class="dropdown-menu" role="menu">
                    
                    
                    <li> <a href="sidebar.php?page=mang_videos">اضافة فيديو</a> </li>
                    <li> <a href="sidebar.php?page=add_youtube">شروحات يوتيوب</a> </li>
                    <li> <a href="sidebar.php?page=add_summaries">اضافة ملخص</a> </li>
                    <li> <a href="sidebar.php?page=add_audio">اضافة تسجيل صوتي</a> </li>
                    <li> <a href="sidebar.php?page=add_references">اضافة مرجع</a> </li>
                    <li> <a href="sidebar.php?page=graduation_project">اضافة مشروع تخرج</a> </li>
                    <li> <a href="#">بحوثات</a> </li>
                    <li> <a href="#">مقالات</a> </li>
                    </ul>
                </li>
                    
                      <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">الاقسام (التخصصات )</a>
                     <ul class="dropdown-menu" role="menu">
                    <li> <a href="sidebar.php?page=Add_department"> أضافه  التخصصات  </a> </li>
                    
                     <li> <a href="sidebar.php?page=mang_specialist">ادارة التخصصات </a> </li>
                     <li> <a href="sidebar.php?page=add_term">اضافة مستوى دراسي و الفصول </a> </li>
                      </ul>
                </li>
 
                    
                    
                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">ادارة المقررات</a>
                     <ul class="dropdown-menu" role="menu">
                    
                    <li> <a href="sidebar.php?page=mang_subject">أضافة وعرض المقررات</a> </li>
                    <li> <a href="sidebar.php?page=subject_distroibution">توزيع المقررات</a> </li>
                           </ul>
                </li>
                   
                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"> ادراة المستخدمين </a>
                     <ul class="dropdown-menu" role="menu">
                     <li> <a href="sidebar.php?page=mang_accuont"> ادارة الحسابات</a> </li>
                     </ul>
                </li>
                    <li> <a href="#">Contact</a> </li>
                </ul>
               <?php }elseif($_SESSION['type_name']=="teacher"){?> 
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a href="#"> ادارة المحتويات </a> </li>
                    <li> <a href="sidebar.php?page=home_content">الرئيسية</a> </li>
                  
                 
                    
                    <li> <a href="sidebar.php?page=mang_videos">اضافة فيديو</a> </li>
                    <li> <a href="sidebar.php?page=add_youtube">شروحات يوتيوب</a> </li>
                    <li> <a href="sidebar.php?page=add_summaries">اضافة ملخص</a> </li>
                    <li> <a href="sidebar.php?page=add_audio">اضافة تسجيل صوتي</a> </li>
                    <li> <a href="sidebar.php?page=add_references">اضافة مرجع</a> </li>
                    <li> <a href="sidebar.php?page=graduation_project">اضافة مشروع تخرج</a> </li>
                   
                        
             
                    <li> <a href="#">Contact</a> </li>
                </ul>
               
                <?php }?>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div>
            
            <div id="page-content-wrapper"  style="    overflow-y: scroll;
    height: 100%;">
                <div class="container-fluid">
      
                    
                         
         
            <?php 
           
                //  include $page.'.php';

              
            ?>
                    
                     <?php 
                    if(isset($_GET['page'])){
                    $page = $_GET['page'];  
                    include($page.'.php');
                    }else{
                        
                        include('home_content.php');
                    }
                    
                    ?>
    
                </div>
            </div> <!-- /#page-content-wrapper -->
                
        </div> <!-- /#wrapper -->
        <!-- Bootstrap core JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
        <script>
          $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

          
            $(window).resize(function(e) {
              if($(window).width()<=768){
                $("#wrapper").removeClass("toggled");
              }else{
                $("#wrapper").addClass("toggled");
              }
            });
          });
           
        </script>
        <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="g.js"></script> 
</body>
  </html>
    <?php }else {
    header("Location:index.php ");
	exit();
  
}
?>