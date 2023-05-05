<?php 

   include('config.php');

$foct=$_POST['foct'];
$specialist=$_POST['specialist'];
$level=$_POST['level'];
?>


<script>

!function ($) {   
    $(document).on("click","#left ul.nav li.parent > a > span.sign", function(){          
        $(this).find('i:first').toggleClass("icon-minus");      
    }); 
    
    // Open Le current menu
    $("#left ul.nav li.parent.active > a > span.sign").find('i:first').addClass("icon-minus");
    $("#left ul.nav li.current").parents('ul.children').addClass("in");

}(window.jQuery);


</script>
        <link href="css/bootstrap.min.css" rel="stylesheet" >
       

<script src="js/jquery.min.js"></script>
  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="g.js"></script> 

<style>


body {
  /*  background: #f2f2f2;
    font-family: 'Poppins', sans-serif;*/
}
.social-box .box {
    background: #FFF;
    border-radius: 10px; 
    cursor: pointer;
    margin: 20px 0;
    padding: 40px 20px;
    transition: all 0.5s ease-out;
    width: 250px;
    height: 250px;
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



<div class="container" style="direction: rtl">
    <div>
    <?php
    $levelname=$level;
        $foct_q= "SELECT * FROM foct where foct_id='".$foct."' ";
$foct_r= mysqli_query($coon,$foct_q);
        $foct_name="";
while ($row1= mysqli_fetch_array($foct_r)) {
   
   $foct_name=$row1['foct_name'] ;
}  
                $specialist_query= "SELECT * FROM specialist where spe_id='".$specialist."' ";
$specialist_result= mysqli_query($coon,$specialist_query);
        $specialist_name="";
while ($row2= mysqli_fetch_array($specialist_result)) {
   $specialist_name=$row2['spe_name'] ;
}  ?>

         <h2><span> كلية </span><span> <?php echo " : ".$foct_name?></span></h2>
      <h2>  <span> تخصص</span><span> <?php echo" : ".$specialist_name ?></span></h2>
    <?php
    if($levelname==1){ ?>
       <h3> <span> المستوى الاول</span></h3>
   <?php }else{?>
        <h3><span> المستوى الثاني</span></h3>
   <?php }
    
    ?>

</div>
	<div class="row">
		<div id="left" class="span3">
            <ul id="menu-group-1" class="nav menu">  
                <li class="item-1 deeper parent active">
                    <a class="" href="#">
                        <span data-toggle="collapse" data-parent="#menu-group-1" href="#sub-item-1" class="sign"><i>+</i></span>
                        <span class="lbl">الترم الاول</span>                      
                    </a>
                    <ul class="children nav-child unstyled small collapse" id="sub-item-1">
                     <div class="social-box">
                                <div class="container">
                                 	<div class="row">
                                       
            
					    <a href="inde.php?SUP=<?php echo $subcol['name'];?>" style="color: #333">
		    <div class="col-lg-4 col-xs-12 text-center">
				<div class="box">
                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
					<div class="box-text">
						<h4><span> name  </span></h4>
					</div>
					<div class="box-btn">
					    <b><span> tetchar </span></b>
					</div>
				 </div>
			</div>
                            </a>
					
			
                         
			

            
		                             </div>		
                                </div>
                    </div>
                    </ul>
                </li>

                <li class="item-8 deeper parent">
                    <a class="" href="#">
                        <span data-toggle="collapse" data-parent="#menu-group-1" href="#sub-item-8" class="sign"><i class="icon-plus icon-white">+</i></span>
                        <span class="lbl">الترم الثاني</span>                      
                    </a>
                    <ul class="children nav-child unstyled small collapse" id="sub-item-8">
                     <div class="social-box">
                                <div class="container">
                                 	<div class="row">
               <?php  error_reporting(E_ALL ^ E_NOTICE);
                                        
                                       
    
                 $sub=mysqli_query($coon,"SELECT * FROM subject s,term t  where s.term_id=t.term_id and t.laval_id='$levelname' and t.term_name='term 2' ");
                                        $SUP_ID="";
                                               while ($subcol=mysqli_fetch_array($sub)){
                                        $SUP_ID=$subcol['sub_id'];
                                        ?>
            <a href="inde.php?SUP=<?php echo $subcol['name'];?>" style="color: #333">
		    <div class="col-lg-4 col-xs-12 text-center">
				<div class="box">
                    <i class="fa fa-behance fa-3x" aria-hidden="true"></i>
					<div class="box-text">
						<h4><span><?php echo $subcol['name'] ?> </span></h4>
					</div>
					<div class="box-btn">
					    <b><span><?php echo "Tetchar Name : ".$subcol['tetchar'] ?></span></b>
					</div>
				 </div>
			</div></a>	 
			
                           <?php } ?>
                          </div>		
                     </div>
                    </div>
                    </ul>
                </li>    			
            </ul>          
		</div>
	</div>
</div>







