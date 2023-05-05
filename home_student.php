
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
  $localhost="localhost";
  $username_db="root";
  $pass_db="";
  $dbname="db_1";
  $coon=mysqli_connect($localhost,$username_db,$pass_db,$dbname);

 if($_SESSION['type_user']=="student"){


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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Electronic Educational Platform</title>
       
<link href="bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet">
           <link href="css/bootstrap.min.css" rel="stylesheet" >
       <link href="css/bootstrap-rtl.min.css" rel="stylesheet"id="bootstrap-css">
      <link href="css/style.css" rel="stylesheet">
      
         <script src="js/jquery-3.2.1.js"></script>
         <script src="js/bootstrap.min.js"></script>
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
       <script>
$(document).ready(function(){
  $("#student-Search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable a").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       // Document.write("dsfsd");
    });
         $("#myc #dd").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       // Document.write("dsfsd");
    });
  });
});
</script>
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
        /* stylelint-disable selector-list-comma-newline-after */

.blog-header {
  line-height: 1;
  border-bottom: 1px solid #e5e5e5;
}

.blog-header-logo {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
  font-size: 2.25rem;
}

.blog-header-logo:hover {
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
}

.display-4 {
  font-size: 2.5rem;
}
@media (min-width: 768px) {
  .display-4 {
    font-size: 3rem;
  }
}

.nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  padding-bottom: 1rem;

  overflow-x: auto;
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.nav-scroller .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
}

.card-img-right {
  height: 100%;
  border-radius: 0 3px 3px 0;
}

.flex-auto {
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
}

.h-250 { height: 250px; }
@media (min-width: 768px) {
  .h-md-250 { height: 250px; }
}

/* Pagination */
.blog-pagination {
  margin-bottom: 4rem;
}
.blog-pagination > .btn {
  border-radius: 2rem;
}

/*
 * Blog posts
 */
.blog-post {
  margin-bottom: 4rem;
}
.blog-post-title {
  margin-bottom: .25rem;
  font-size: 2.5rem;
}
.blog-post-meta {
  margin-bottom: 1.25rem;
  color: #999;
}

/*
 * Footer
 */
.blog-footer {
  padding: 2.5rem 0;
  color: #999;
  text-align: center;
  background-color: #f9f9f9;
  border-top: .05rem solid #e5e5e5;
}
.blog-footer p:last-child {
  margin-bottom: 0;
}

    </style>
      <style>


body {
  /*  background: #f2f2f2;
    font-family: 'Poppins', sans-serif;*/
}
.social-box .box {
    background: #ededed4a;
    border-radius: 17px; 
    cursor: pointer;
    margin: 20px 0;
    padding: 40px 20px;
    transition: all 0.5s ease-out;
    width: 250px;
        box-shadow: inset -1px 1px 20px 6px rgb(0 0 0 / 8%);
    
}
.social-box .box:hover {
   box-shadow: 0 0 20px #4183D7;
}
.social-box .box-text {
    font-size: 15px;
    line-height: 30px;
    margin: 20px 0;
}
.social-box .box-btn a {
    color: #4183D7;
    font-size: 16px;
    text-decoration: none;
}
.social-box .fa {
    color: #4183D7;
}
    
    /* MENU-LEFT
-------------------------- */
/* layout */
/* MENU-LEFT
-------------------------- */
/* layout */
#left ul.nav {
    margin-bottom: 2px;
    font-size: 12px; /* to change font-size, please change instead .lbl */
}
  
#left ul.nav ul,
#left ul.nav ul li {
    list-style: none!important;
    list-style-type: none!important;
    margin-top: 1px;
    margin-bottom: 1px;
}
#left ul.nav ul {
    padding-left: 0;
    width: auto;
}
#left ul.nav ul.children {
    padding-left: 12px;
    width: auto;
    background: linear-gradient(45deg, black, transparent);
}
#left ul.nav ul.children li{
    margin-left: 0px;
}
#left ul.nav li a:hover {
    text-decoration: none;
}

#left ul.nav li a:hover .lbl {
    color: #999!important;
}

#left ul.nav li.current>a .lbl {
    background-color: #999;
    color: #fff!important;
}

/* parent item */
#left ul.nav li.parent a {
    padding: 0px;
    color: #ccc;
}
#left ul.nav>li.parent>a {
    border: solid 1px #999;
    text-transform: uppercase;
}    
#left ul.nav li.parent a:hover {
    background-color: #fff;
    -webkit-box-shadow:inset 0 3px 8px rgba(0,0,0,0.125);
    -moz-box-shadow:inset 0 3px 8px rgba(0,0,0,0.125);
    box-shadow:inset 0 3px 8px rgba(0,0,0,0.125);    
}

/* link tag (a)*/
#left ul.nav li.parent ul li a {
    color: #222;
    border: none;
    display:block;
    padding-left: 5px;    
}

#left ul.nav li.parent ul li a:hover {
    background-color: #fff;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    box-shadow:none;  
}

/* sign for parent item */
#left ul.nav li .sign {
    display: inline-block;
    width: 14px;
    padding: 5px 8px;
    background-color: transparent;
    color: #fff;
}
#left ul.nav li.parent>a>.sign{
    margin-left: 0px;
    background-color: #999;
}

/* label */
#left ul.nav li .lbl {
    padding: 5px 12px;
    display: inline-block;
}
#left ul.nav li.current>a>.lbl {
    color: #fff;
}
#left ul.nav  li a .lbl{
    font-size: 12px;
}

/* THEMATIQUE
------------------------- */
/* theme 1 */
#left ul.nav>li.item-1.parent>a {
    border: solid 1px #ff6307;
    
}
#left ul.nav>li.item-1.parent>a>.sign,
#left ul.nav>li.item-1 li.parent>a>.sign{
    margin-left: 0px;
    background-color: #ff6307;
}
#left ul.nav>li.item-1 .lbl {
    color: #ff6307;
}
#left ul.nav>li.item-1 li.current>a .lbl {
    background-color: #ff6307;
    color: #fff!important;
}

/* theme 2 */
#left ul.nav>li.item-8.parent>a {
    border: solid 1px #51c3eb;
}
#left ul.nav>li.item-8.parent>a>.sign,
#left ul.nav>li.item-8 li.parent>a>.sign{
    margin-left: 0px;
    background-color: #51c3eb;
}
#left ul.nav>li.item-8 .lbl {
    color: #51c3eb;
}
#left ul.nav>li.item-8 li.current>a .lbl {
    background-color: #51c3eb;
    color: #fff!important;
}








</style>
      
      <style>
img{width:100%;}
.product{background:#fff;}
.product:hover {background:#f2f2f2;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);}
.product-img {border-radius: 0px 0px 0 0;max-height:180px;overflow: hidden;}
.product-block{padding:15px;}
.product-footer {background:#f4f4f4;border-top:1px solid #ccc;padding:10px 15px 15px 10px}
.divider {border: 1px solid #ccc;}
.title-links ul {margin-bottom:10px; margin-top:10px;}


    /***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
</style>
   

  </head>
  <body style="text-align: right;">
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
      <div class=" ">
          
    <div class="container  ">
  <header class="blog-header py-3    navbar-expand " style="position: relative; ">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        
          <div class="form-group">
    
    <input type="text" class="form-control" id="student-Search" name="student-Search" placeholder="Search">
  </div>
      </div>
      <div class="col-4 text-center">
       
          <img src="img/logo.png"  style="width: 150px;height: 60px;" />
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
       
       
           <ul class="nav navbar-nav" style="margin-right:  0px;">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu" style="">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?php echo '<img  class="img-responsive" class="user-image" alt="User Image" style="float: left;
             width: 59px;
             height: 35px;
    border-radius: 50%;
    margin-right: 10px;
    margin-top: -2px;"alt="" src="img/user_100px.png">' ;
                    
                         $r= mysqli_query($coon,"SELECT * FROM specialist j,student s, account a  where j.spe_id=s.spe_id and s.user_id=a.user_id and a.user_id='". $_SESSION['studint_id']."'");
                   while ($ro= mysqli_fetch_array($r)) { ?>
                 
                    
                  <span class="hidden-xs" style="color: black;"><?php    echo $ro['username'];  ?></span>
                   
                </a>
                <ul class="dropdown-menu" style="">
                  <!-- User image -->
                  <li class="user-header" style="height:175px;
    padding:10px; width: 190px;
    text-align: center;">
                  <?php echo '<img  class="img-circle" alt="User Image"    style="z-index: 5;
    height: 90px;
    width: 90px;
    border: 3px solid;"src="img/user_100px.png">' ;?>
                    <p style="margin-top: 10px;">
                      اسم الطالب  : <?php    echo $ro['student_name'];  ?>
                    </p>
                      <p style="margin-top: 10px;">
                     قسم  : <?php    echo $ro['spe_name'];  ?>
                    </p>
                  </li>
                     <?php } ?>
                  <!-- Menu Body -->
                  <li class="user-body col-md-4 " style="    margin-right: 20px; margin-top: -25px;">
                    <div class="col-xs-4  text-center  ">
                                                      
<a href="#" onclick="GetFeeFor(<?php echo  $_SESSION['studint_id'];?>)" 
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
     
      </div>
    
      </div>
  </header>

  <div class="nav-scroller py-1 mb-2 container-fluid mypad" style=" height: auto;">
        <nav class="nav d-flex justify-content-between" style="margin-top: 5px;">
           
   
    </nav>
  </div>
        </div>
      <div class=" container ">
     <div class="panel panel-default   " style="border-color: #ddd;margin-bottom: 20px;
    background-color: #fff;
    border:1px solid #00000030;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
    box-shadow: 0 1px 1px rgb(0 0 0 / 5%);">
                 <div class="panel-body">
                     
                     <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     
    <li class="breadcrumb-item"><a href="home_student.php">الرئيسية</a></li>
        <?php
   if(isset($_GET['sub']) || isset($_GET['su']) ) 
   {
     $r= mysqli_query($coon,"SELECT * FROM subject  where subject_id='".$_GET['sub']."' or subject_id='".$_GET['su']."'");
                   while ($ro= mysqli_fetch_array($r)) { ?> 
    <li class="breadcrumb-item"><a href="#"><?php echo $ro['SubjectName']; ?></a></li>
       <?php }} ?>
      <?php if(isset($_GET['page'] )){
       ?>
    <li class="breadcrumb-item active" aria-current="page"><?php
    if($_GET['page']=='references'){
        echo "مراجع";
    }elseif($_GET['page']=='summaries'){
        echo "ملخصات";
    }elseif($_GET['page']=='show_audio_stu'){
        echo "تسجيلات صوتية";
    }elseif($_GET['page']=='show_video_stu'){
        echo "فيديوهات";
    }
    
   ?></li>
       <?php } ?>
  </ol>
    </nav>
                     <?php
   if(isset($_GET['sub']) ) 
   {?>
 

         <div class="containr col-md-12 "  id="pc" style="visibility: visible" >         
	<div class="row " >
	<ul>
        
	    <a href="home_student.php?page=references&su=<?php echo $_GET['sub']; ?>" class="col-md-4" onkeydown="link" >
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Services-tab item">
			<div class="folded-corner service_tab_1">
				<div class="text">
				    <i class="fa fa-lightbulb-o fa-5x fa-icon-image" ><img src="img/icons8_book_and_pencil_48.png" /> </i>
						<p class="item-title" style="font-size: 25px;">
							 المراجع  

						</p>
						
				</div>
			</div>
            </div>
        </a>
             
	   <a href="home_student.php?page=summaries&su=<?php echo $_GET['sub']; ?>" class="col-md-4">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Services-tab item">
			<div class="folded-corner service_tab_1">
				<div class="text">
				    <i class="fa fa-lightbulb-o fa-5x fa-icon-image" ><img src="img/icons8_book_and_pencil_48.png" /> </i>
						<p class="item-title" style="font-size: 25px;">
							  الملخصات  
						</p>
						
				</div>
			</div>
		</div>
        </a>

         <a href="home_student.php?page=show_audio_stu&su=<?php echo $_GET['sub']; ?>"  class="col-md-4">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Services-tab item">
			<div class="folded-corner service_tab_1">
				<div class="text">
					<i class="fa fa-truck fa-5x fa-icon-image"><img src="img/icons8_audio_wave2_48.png" /> </i>
						<p class="item-title" style="font-size: 25px;">
							  تسجيلات صوتية 
						</p> 
					 
				</div>
			</div>
		</div>
        </a>
        <a href="home_student.php?page=show_video_stu&su=<?php echo $_GET['sub']; ?>" class="col-md-4" >
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Services-tab item">
			<div class="folded-corner service_tab_1">
				<div class="text">
					<i class="fa fa-diamond fa-5x fa-icon-image"><img src="img/icons8_video_camera_48.png" /> </i>
						<p class="item-title" style="font-size: 25px;">
							  فيديوهات 
						</p><!-- /.item-title -->
					
				</div>
			</div>
		</div>
        </a>
     <a href="home_student.php?page=you_stu&su=<?php echo $_GET['sub']; ?>" class="col-md-4" >
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Services-tab item">
			<div class="folded-corner service_tab_1">
			<div class="text">
				<i class="fa fa-line-chart fa-5x fa-icon-image"><img src="img/icons8_youtube_48.png" /> </i>
					<p class="item-title" style="font-size: 25px;">
						 شروحات يوتيوب 
					</p>
					 
				</div>
			</div>
		</div>
      </a>

  <!-- <a href="home_student.php?page=mang_graduation_project&su=<?php echo $_GET['sub']; ?>" class="col-md-4" >
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Services-tab item">
				<div class="folded-corner service_tab_1">
					<div class="text">
						<i class="fa fa-money fa-5x fa-icon-image"><img src="img/icons8_documents_48.png" /> </i>
							<p class="item-title" style="font-size: 25px;">
								  بحوثات  تخرج 
							</p>
                             
				</div>
			</div>
		</div>
  </a>-->
        </ul>
	</div>
</div>
<?php }elseif(isset($_GET['page'] ) && $_GET['page']=="references" ){
       ?>
              
                     <?php 
                     include('books.php'); 
   }elseif(isset($_GET['page'] ) && $_GET['page']=="summaries" ){
       ?>
                 
                     <?php 
                     include('summaries_stu.php'); 
   }elseif(isset($_GET['page'] ) && $_GET['page']=="show_video_stu" ){
       ?>
                   
                     <?php 
                     include('videos_stu.php');
   }elseif(isset($_GET['page'] ) && $_GET['page']=="show_audio_stu" ){
       ?>
                    
                     <?php 
                     include('audio_stu.php');
   }elseif(isset($_GET['page'] ) && $_GET['page']=="you_stu" ){
       ?>
                    
                     <?php 
                     include('you_stu.php');}else
   {?>

                     
       
               
<div class="container-fluid mypad" id="myTable">
     <div class="masthead">
     <div>
         
   <ul class="nav nav-tabs     " role="tablist">   
    
                     <?php
     $tabt= mysqli_query($coon,"SELECT * FROM  student s, account a,specialist_and_level l, term t 
     where  l.spe_id=s.spe_id and t.laval_id=l.level_id  and s.user_id=a.user_id and a.user_id='".$_SESSION['studint_id']."'");
                   while ($rowtabt= mysqli_fetch_array($tabt)) { ?>
       <li role="presentation" class="<?php if($rowtabt['term_id']==3){?> active <?php }?>"> <a href="#term<?php echo $rowtabt['term_id'];?>" class="p-12 text-muted" aria-controls="term<?php echo $rowtabt['term_id'];?>" role="tab" data-toggle="tab"><?php echo $rowtabt['term_name'];  ?></a></li>
        <?php }?>
  
      
  </ul>
  <!-- Tab panes -->
      
  <div class="tab-content " style="" id="">
            <?php
     $tab= mysqli_query($coon,"SELECT * FROM student s, account a, specialist_and_level l, term t 
     where  l.spe_id=s.spe_id and t.laval_id=l.level_id  and s.user_id=a.user_id and a.user_id='". $_SESSION['studint_id']."'");
                   while ($rowtab= mysqli_fetch_array($tab)) { ?>
      <div role="tabpanel" class="tab-pane <?php if($rowtab['term_id']==3){?> active <?php }?>" id="term<?php echo $rowtab['term_id'];  ?>">
    
          <div class="social-box " >
                      <div class="col-md-12">
           <?php
     $result1= mysqli_query($coon,"SELECT * FROM subject_distroibution d,subject s,student st 
                                   where s.subject_id=d.subject_id and d.spe_id=st.spe_id and d.term_id='".$rowtab['term_id']."' and st.student_id='".$rowtab['student_id']."'");
                   while ($row= mysqli_fetch_array($result1)) { ?>
                 
         <a href="home_student.php?sub=<?php echo $row['subject_id']; ?>" style="color: #333"class="col-md-4">      
		    <div class="  col-xs-12 text-center">
                
				<div class="box"
                      <?php
     $result133= mysqli_query($coon,"SELECT * FROM `references` WHERE `subject_id`='".$row['subject_id']."'");
                   $num = mysqli_num_rows($result133);
                  if($num>0){ ?>
                          style="background: #8fd76af7;" 
                        <?php }?> 
                     >
                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
					<div class="box-text">
						<h3 style="color: #000000;"><span><?php echo $row['SubjectName']; ?>   </span></h3>
					</div>
					<div class="box-btn">
					    <b><span> </span></b>
					</div>
				 </div>
			</div>
         </a>
                          
          <?php }?>
               </div>
          </div>               


  </div>
      <?php }?>
      
      
      
  
</div>

      </div>
      </div>            
         </div>
           <?php }?>          
                     
          </div> 
          </div>
          </div>
      
<div class=" ">
    <div style="height: 330px;">
    
    </div>
<footer class="blog-footer ">
  <p>Electronic Educational Platform </p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
    </div>
          </div>
</body>
</html>

    <?php }else{
    header("Location:index.php");
	exit();
  
}
?>
