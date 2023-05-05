<?php  error_reporting(E_ALL ^ E_NOTICE);
 $errormsg='';
if($_POST['submit'] && !empty($_FILES)){
        $dir_name=dirname(__FILE__)."/file/uploaded_videos/";
	$formok=TRUE;
	$date=date("d/m/y h:i:s");
    //file vars
   $path=$_FILES['upload']['tmp_name'];
   $name=$_FILES['upload']['name'];
   $size=$_FILES['upload']['size'];
   $type=$_FILES['upload']['type'];
   $error=$_FILES['upload']['error'];
        
      $vid_name=$_POST['vid_name'];
    $vid_id=$_POST['vid_id']; 
  
        $uinv_id=$_POST['uinv_id_d'];
        $foct_id=$_POST['foct_id_d'];
        $spe_id=$_POST['spe_id'];
        $level_id=$_POST['level_id'];
        $term_id=$_POST['term_id'];
        $subject_id=$_POST['subject_id'];
        
	if(!is_uploaded_file($path)){
		$name=$_POST['file_name'];
        $size=$_POST['size'];
        $type=$_POST['type'];
        
        echo "<div class='alert alert-danger alert-autocloseable-danger'>لا يوجد ملف مرفوع,أعد المحاولة</div> ";
	$a=false;
		//$formok=false;
		}
		//check file extension
	 	if(!in_array($type,array('video/mp4','video/wmv','video/3gpp'))){
			 
            $name=$_POST['file_name'];
        $size=$_POST['size'];
        $type=$_POST['type'];
			echo "";
             echo "<div class='alert alert-danger alert-autocloseable-danger'>الملف المرفوع ليس فيديو ,أعد المحاولة</div> ";
			
			}
			
			/*if(filesize($path) > 800000){
				
				$formok=false;
				echo "الملف المرفوع حجمه كبير";
				
				
				}*/

	if($formok){
        
        $sql2 = "UPDATE `videos` SET `vid_name`='$vid_name',
        `name`='$name',
        `uinv_id`='$uinv_id',
        `foct_id`='$foct_id',
        `spe_id`='$spe_id',
        `level_id`='$level_id',
        `term_id`='$term_id',
        `subject_id`='$subject_id',
        `size`='$size',
        `type`='$type',
        `date`='$date' 
        WHERE vid_id='$vid_id'";
       
mysqli_query($coon,$sql2);
        $in=move_uploaded_file($path,$dir_name.$name);
        if(!$a){
        
        echo "<div class='alert alert-success alert-autocloseable-success'>تم التعديل بنجاح </div> ";}
		}}

   if(isset($_POST['delete_account'])){
              $D=$_POST['user_id'];
           $delet="DELETE FROM `videos` WHERE `vid_id`='$D'";
           mysqli_query($coon,$delet);
              echo "  
              <div class='alert alert-success alert-autocloseable-success'>
        			تم الحذف  بنجاح 
				</div>
                 ";
          }

    
 ?>
<style>
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
    
hr {
    border-top: 1px solid #007bff;
    width:70%;
}

a {color: #000;}


.card{
    background-color: #FFFFFF;
    padding:0;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius:4px;
    box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.3);
}


.card:hover{
    box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 6px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
    color:black;
}

address{
  margin-bottom: 0px;
}




#author a{
  color: #fff;
  text-decoration: none;
    
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
  function Delet(user_id)
{

$.ajax({
            type: 'post',
            url: 'getfeeform.php',
            data: {
               user_id:user_id, 
                r:'del_account'},
            success: function (data) {
              $('#formconten').html(data);
			  $("#tooltip").modal({backdrop: "static"});
            }
          });


}

</script>  
 
 
   
    <link href="css/datatable.css" rel="stylesheet" />
          
             <div class="modal fade" id="tooltip" role="dialog">
    <div class="modal-dialog modal-lg">
   <div class="modal-content" style="margin-top:100px;">
                
                <div class="modal-header" style="display: flow-root;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" style="text-align:center;">هل تريد الحذف بالتاكيد ؟</h4>
                </div>
                <div id="formconten">
               
                 </div>
            </div>
    </div>
  </div>


  <div class="modal fade" id="e" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="display: flow-root;">
          <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
          <h4 class="modal-title">تعديل الفيديو</h4>
        </div>
        <div class="modal-body" id="formcontent">
        
        </div>
        
      </div>
    </div>
  </div>


 
  
   <div id="page-wrapper" >
       
        
   
  
       
           
            <div id="page-inner">
               
				 
               
                
                   <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ادارة الفيديوهات  
						
						</h1>

                    </div>
                </div>

<div class="row" >
<div class="col-md-12 ">
    
<fieldset class="scheduler-border" >
    
<div class="form-inline" style="margin-bottom:0px; margin-top:20px;" >
 
  

  
 </div>
</fieldset>

</div>
</div>


    
		
		<div class="panel panel-default ">
                        <div class="panel-heading">
                            
         <div class="form-inline" style="margin-bottom:0px; margin-top:20px;" >

      <table class="table table-striped " >
             <tbody >
          <tr>
              <td> <div class="form-group">
    <label for="email">بحث </label>
    <input type="text" class="form-control" id="student-Search" name="student-Search">
  </div> </td>
              
              <td>   
                                <div class="col-md-12 col-xs-12">
                                    
                                    <label  >اسم الجامعة</label> 
                                
                                    <select name="uinv_id_d" id="uinv_id_d" class="dropselectsec">
                                    <option value="">اختر الجامعة...</option>
                                           <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $uf=mysqli_query($coon,"SELECT * FROM `uinv`");
              while ($unf=mysqli_fetch_assoc($uf)){
                ?>
                <option value="<?PHP echo $unf["uinv_id"]; ?>"> <?PHP echo $unf["uinv_name"] ;} ?> </option>
               
                                    </select>
                                </div>
                             
                        
                            </td>
              
              
              <td>
                  <div class="col-md-12 col-xs-12">
                      <label >القسم</label>
                      <select name="spe_id"  id="spe_id" class="dropselectsec" >
                          <option value=""> أخترالقسم(التخصص)...</option>
                      </select>
                  </div>
              </td>
              <td>
               <div class="col-md-12 col-xs-12">
                     <label>اسم المقرر</label>
                   <select name="subject_id" id="subject_id" class="dropselectsec">
                       <option value="">أختر المقرر...</option>
                   </select>
                  </div>
              </td>
             
        
                 
         </tr>
          </tbody>
             
             </table> 
 </div>   </div>
            
  
            
            <div class="panel panel-default   ">
                       
 <div class="panel-body">
                            <div   style="overflow-x: clip;" id="subjectresult">
       <div id="aa">                      
 <div class="container-fluid">
  <div class="row">
    	<!-- BEGIN PRODUCTS -->

         <?php
  
$query= "select * from  videos v, subject s, specialist p where v.subject_id=s.subject_id and v.spe_id=p.spe_id ";
$result= mysqli_query($coon,$query);

while ($row= mysqli_fetch_array($result)) {
    ?>

  		         
    <div class=" col-md-3  col-xs-12 " style="padding-bottom: 20px;"  id="myTable">
      <div class="card ">
         <video controls style="height: 150px;
    width: px; " >
           <source src="file/uploaded_vidoes/<?php echo $row['name']; ?>" type="<?php echo $row['type'];  ?>"/>


            </video>
       
        <div class="card-footer text-muted">
          <div class="row">
            <div class="col">
                <h4>  <?php echo  $row['vid_name']; ?></h4>
                
                <h6>  <?php echo "التخصص : ".$row['spe_name']; ?></h6>
                <h6>  <?php echo "المقرر : ".$row['SubjectName']; ?></h6>
            
                <td><?php
                                                       $su=$row['size']/1024;
                                                       $resu=$su/1024;?>
                                                   <?php $SS="<script> document.write('$resu'.substring(0,5)); </script>"?>
                                                  
                                         <?php  echo "الحجم : ".$SS."M"; ?>
                                                         </td>
            </div>
               
              
            <div class="col">
                
 <a  data-toggle="dropdown" style="float: left;">
 <img  src="img/icons8_menu_vertical.ico"></a>
<ul class="dropdown-menu " role="menu" style="right: auto !important;
    left: 25px;
    float: left;
    text-align: center;
    top: auto;
     ">
                                        
<li>
<a href="#" onclick="" data-toggle="modal" data-target="#e">

   <p title="Delete" style="background: dimgray;"><a href="#" onclick="Delet(<?php echo $row['vid_id']; ?>)"    data-toggle="modal" data-target="#tooltip"    name="del" class="btn " >
      <span class="glyphicon glyphicon-trash"></span> حذف</a></p> 
        <p title="update" style="background: dimgray;">                               
<a href="#" onclick="GetFeeFor(<?php echo $row['vid_id'];?>)" 
   data-toggle="modal" data-target="#e" class=" btn  " >
<span class="glyphicon glyphicon-pencil">
    </span> تعديل </a></p>     
</li>
<li class="divider"></li>
   
  
                                    </ul>
                                                 
            
               </div>
                
          </div>
      </div>
      </div>
    </div>
   

        
         
        <?php }?>
    




  		<!-- END PRODUCTS -->
	</div>
</div>
</div> 
    </div>
</div>
    </div>

            
           
                 </div>
                
                
             </div>
            <!-- /. PAGE INNER  -->
        </div>
 


 <script>
  function GetFeeFor(vid_id)
{

$.ajax({
            type: 'post',
            url: 'getfeeform.php',
            data: {
                vid_id:vid_id,
               
               
                r:'up_video'},
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
    $("#myTable div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       // Document.write("dsfsd");
    });
  });
});
</script>


 
            
	 
     <script>
         $(document).ready(function () {
             $('#table22').dataTable({
    "bPaginate": true,
    "bLengthChange": true,
    "bFilter": false,
    "bInfo": true,
    "bAutoWidth": true });
	
         });
		 
	
    </script>
    


 
 
    <script>
   $(document).ready(function()
   {
    $("#uinv_id_d").change(function(){
      var uinv_id = $(this).val();
    
      $.ajax({
      url: "getfeeform.php",
      type: "POST",
      data: {
      uinv_id:uinv_id,
      r:'spe_id_t'},
      success: function(data){
        $("#spe_id").html(data);
      

      }
      });
    });
   });
</script> 


 <script>
   $(document).ready(function(){

    $("#spe_id").change(function(){
     var uinv_id= $("#uinv_id_d").val();
     var spe_id = this.value;
      $.ajax({
      url: "getfeeform.php",
      type: "POST",
      data: {

        uinv_id:uinv_id,
        
          spe_id:spe_id,
          r:"subject_t"
      },
      cache: false,
      success: function(data){
        $("#subject_id").html(data);

      }
      });
    });
     });
</script>
 <script>
   $(document).ready(function(){

    $("#subject_id").change(function(){
    var uinv_id= $("#uinv_id_d").val();
    var spe_id= $("#spe_id").val();
      var subject_id = this.value;
      $.ajax({
      url: "getfeeform.php",
      type: "POST",
      data: {
      spe_id: spe_id,
        uinv_id:uinv_id,
          subject_id:subject_id,
          r:"video_i"
      },
      cache: false,
      success: function(data){
        $("#aa").html(data);

      }
      });
    });
     });
</script>
 