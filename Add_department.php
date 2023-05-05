



<style>
.wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;

}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}
.step1 .row {
    margin-bottom:10px;
}
.step_21 {
    border :1px solid #eee;
    border-radius:5px;
    padding:10px;
}
.step33 {
    border:1px solid #ccc;
    border-radius:5px;
    padding-left:10px;
    margin-bottom:10px;
}
.dropselectsec {
    width: 68%;
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    outline: none;
    font-weight: normal;
}
.dropselectsec1 {
    width: 74%;
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    outline: none;
    font-weight: normal;
}
.mar_ned {
    margin-bottom:10px;
}
.wdth {
    width:25%;
}
.birthdrop {
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    width: 16%;
    outline: 0;
    font-weight: normal;
}


/* according menu */
#accordion-container {
    font-size:13px
}
.accordion-header {
    font-size:13px;
	background:#ebebeb;
	margin:5px 0 0;
	padding:7px 20px;
	cursor:pointer;
	color:#fff;
	font-weight:400;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px
}
.unselect_img{
	width:18px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.active-header {
	-moz-border-radius:5px 5px 0 0;
	-webkit-border-radius:5px 5px 0 0;
	border-radius:5px 5px 0 0;
	background:#F53B27;
}
.active-header:after {
	content:"\f068";
	font-family:'FontAwesome';
	float:right;
	margin:5px;
	font-weight:400
}
.inactive-header {
	background:#333;
}
.inactive-header:after {
	content:"\f067";
	font-family:'FontAwesome';
	float:right;
	margin:4px 5px;
	font-weight:400
}
.glyphicon {
    position: relative;
    top: 0px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.accordion-content {
	display:none;
	padding:20px;
	background:#fff;
	border:1px solid #ccc;
	border-top:0;
	-moz-border-radius:0 0 5px 5px;
	-webkit-border-radius:0 0 5px 5px;
	border-radius:0 0 5px 5px
}
.accordion-content a{
	text-decoration:none;
	color:#333;
}
.accordion-content td{
	border-bottom:1px solid #dcdcdc;
}



@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
 
</style>


<!--
اضافة كلية      -->
<?php
  if($_POST['uinvr']){

  
    $uinv_name=$_POST['uinv_name'];
  
 $sq1="INSERT INTO `uinv` (`uinv_name`)
         VALUES (
           '$uinv_name'
            
              )";
             	$result1= mysqli_query($coon,$sq1);
                      }
 
?>

 

<?php
  if($_POST['foct']){


  
      
  $foct_name=$_POST['foct_name'];
    $uinv_id=$_POST['uinv_id'];
  
 $sq="INSERT INTO `foct` (`foct_name` ,`un_fk`)
         VALUES (
          
           '$foct_name',
           '$uinv_id'
            
              )";
             	$result= mysqli_query($coon,$sq);
                      }
 
?>
<?php
  if($_POST['specialist']){


  $spe_name=$_POST['spe_name'];
  $foct_id=$_POST['foct_id_d'];
    $uinv_id=$_POST['uinv_id_d'];
  
 $sq="INSERT INTO `specialist` (`spe_name`,uinv_id,foct_id)
         VALUES (
          
           '$spe_name',
           '$uinv_id',
           '$foct_id'
            
              )";
             	$result33= mysqli_query($coon,$sq);
                      }
 
?>


   <div id="page-wrapper" > 
       <div id="page-inner">
<div class="panel panel-default" style="background-color: #f5f5f5;">
 
  <div class="container-fluid mypad">
   <div class="masthead">
 
      <div class="panel-heading" style="padding-right: inherit;">
          <div class="form-inline" style="margin-bottom:0px; margin-top:20px;" >
   <ul class="nav nav-tabs" role="tablist">   
   
    <li role="presentation" class="  active "><a href="#unv" aria-controls="unv" role="tab" data-toggle="tab">اضافة جامعة</a></li>
     <li role="presentation" ><a href="#foct" aria-controls="foct" role="tab" data-toggle="tab">اضافة كلية</a></li>
     <li role="presentation"><a href="#dept" aria-controls="dept" role="tab" data-toggle="tab">اضافة اقسام</a></li>
     
  </ul>
          </div>
     </div>
  <!-- Tab panes -->
         <div class="tab-content"  >
  
  
       
    <div role="tabpanel" class="tab-pane  active " id="unv">
      <div class="panel panel-default"> 
<div class="container" >
    <div class="row">
    	<section>
           <form  action=" " method="post">
                    <div class="tab-pane active" role="tabpanel" id="step1">

                    <div class="step1">

                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="id_document">اسم الجامعة</label>
                                <input type="text" class="form-control"  name="uinv_name" placeholder="اسم الجامعة"required   >
                            </div>

                        </div> 
  
                   <input type="submit" name="uinvr" class="btn btn-primary btn-info-full " value="حفظ البيانات"/> 
                          </div>
                    </div>
                    
               
            </form>    
             
    </section>
   </div>
</div>
        </div>
    
      </div> 
             
     <div role="tabpanel" class="tab-pane" id="foct">
      <div class="panel panel-default"> 
<div class="container" >
    <div class="row">    
    	<section>
           <form  action=" " method="post">
             
                    <div class="tab-pane " role="tabpanel" id="step1">

                    <div class="step1">

                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label  >الكلية</label>
                                <input type="text" class="form-control"  name="foct_name" placeholder="اسم الكلية"required   >
                            </div>

                        </div> 
                           <div class="row mar_ned">
                                <div class="col-md-5">
                                    
                                    <p align="right"><stong><label  >اسم الجامعة</label></stong></p>
                                
                                    <select name="uinv_id" id="uinv_id" class="dropselectsec">
                                    <option value="">اختر الجامعة...</option>
                                           <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $uf=mysqli_query($coon,"SELECT * FROM `uinv`");
              while ($unf=mysqli_fetch_assoc($uf)){
                ?>
                <option value="<?PHP echo $unf["uinv_id"]; ?>"> <?PHP echo $unf["uinv_name"] ;} ?> </option>
               
                                    </select>
                                </div>
                            </div>
  
                   <input type="submit" name="foct" class="btn btn-primary btn-info-full " value="حفظ البيانات"/> 
                          </div>
                    </div>      
            </form>     
    </section>
   </div>
</div>
        </div>
    
      </div> 
             
     <div role="tabpanel" class="tab-pane " id="dept">
      <div class="panel panel-default"> 
<div class="container" >
    <div class="row">
          
    	<section>
             
 
 
           <form  action=" " method="post">
             
                    <div class="tab-pane active" role="tabpanel" id="step1">

                    <div class="step1">

                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="id_document">القسم(التخصص)</label>
                                <input type="text" class="form-control"  name="spe_name" placeholder="اسم التخصص"required   >
                            </div>

                        </div> 
                        
                          <div class="row mar_ned">
                                <div class="col-md-5">
                                    
                                    <p align="right"><stong><label  >اسم الجامعة</label></stong></p>
                                
                                    <select name="uinv_id_d" id="uinv_id_d" class="dropselectsec">
                                    <option value="">اختر الجامعة...</option>
                                           <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $uf=mysqli_query($coon,"SELECT * FROM `uinv`");
              while ($unf=mysqli_fetch_assoc($uf)){
                ?>
                <option value="<?PHP echo $unf["uinv_id"]; ?>"> <?PHP echo $unf["uinv_name"] ;} ?> </option>
               
                                    </select>
                                </div>
                            </div>
                        
                             <div class="row mar_ned">
                                <div class="col-md-5">
                                    
                                    <p align="right"><stong><label  >اسم الكلية</label></stong></p>
                                
                                    <select name="foct_id_d" id="foct_id_d" class="dropselectsec">
                                    <option value="">اختر الكلية...</option>
                 
                                    </select>
                                </div>
                            </div>
                        
                           
  
                   <input type="submit" name="specialist" class="btn btn-primary btn-info-full " value="حفظ البيانات"/> 
                          </div>
                        
                    </div>
                    <div class="clearfix"></div>
                
               
            </form>    
             
    </section>
   </div>
</div>
        </div>
    
      </div> 
       
       
        
       
   
       </div>
       
 
      </div>
      </div>
                
       </div>
</div>
</div>

<script>
   $(document).ready(function()
   {
    $("#uinv_id_d").change(function(){
      var uinv_id = $(this).val();
    
      $.ajax({
      url: "getfeeform.php",
      type: "POST",
      data: {
      uinv_id: uinv_id,
      r:'uinv'},
      success: function(data){
        $("#foct_id_d").html(data);
      

      }
      });
    });
   });
</script>

