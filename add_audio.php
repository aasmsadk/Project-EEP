
 

<?php  error_reporting(E_ALL ^ E_NOTICE);
  

 $errormsg='';

    if($_POST['submit'] && !empty($_FILES)){
        $dir_name=dirname(__FILE__)."/file/uploaded_audio/";
        
	$formok=TRUE;
	
	$date=date("d/m/y h:i:s");
    //file vars
	
   $path=$_FILES['upload']['tmp_name'];
   $name=$_FILES['upload']['name'];
   $size=$_FILES['upload']['size'];
   $type=$_FILES['upload']['type'];
   $error=$_FILES['upload']['error'];
        
        $audio_name=$_POST['audio_name'];
        $uinv_id=$_POST['uinv_id_d'];
        $foct_id=$_POST['foct_id_d'];
        $spe_id=$_POST['spe_id'];
        $level_id=$_POST['level_id'];
        $term_id=$_POST['term_id'];
        $subject_id=$_POST['subject_id'];
        
        
       
        
      
	
	
	if(!is_uploaded_file($path)){
		
		$formok=false;
		echo"لا يوجد ملف مرفوع,أعد المحاولة";
        echo $error;
		
		}
		
		//check file extension
		
		if(!in_array($type,array('audio/x-mp3', 'audio/x-m4a', 'audio/x-amr'))){
			$formok=false;
			 
			
			echo $smsg= "	<div class='alert alert-warning alert-dismissible'>     
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>  
					<strong>Sorry!</strong> الملف المرفوع ليس بملف صوتي,أعد المحاولة . 
					</div>    " ;
		   
			}
			

	if($formok){
      	
			//$content=file_get_contents($path);
			//$safeimage=mysqli_real_escape_string($coon,$content);
			
		 
                $su=$size/1024;
            $resu=$su/1024;
              $SS="<script> document.write('$resu'.substring(0,5)); </script>";
                $si=$SS."M"; 
        
$sql2 = "INSERT INTO `audio`( `audio_name`, `uinv_id`, `foct_id`, `spe_id`, `subject_id`, `level_id`, `term_id`, `date`, `type`,`size`,`name`) 
VALUES ('$audio_name','$uinv_id','$foct_id','$spe_id','$subject_id','$level_id','$term_id','$date','$type','$resu','$name')";
mysqli_query($coon,$sql2);
        
        echo "<div class='alert alert-success alert-autocloseable-success'>تم أضافة مرجع بنجاح </div> ";
		 $in=move_uploaded_file($path,$dir_name.$name);
		
    }}






      if(isset($_POST['delete_account'])){
              $D=$_POST['user_id'];
           $delet="DELETE FROM `audio` WHERE `audio_id`='$D'";
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
    
		 $('.alert-dismissible').delay(2000).fadeOut( "slow", function() {
				// Animation complete.
				$('#alert-dismissible').prop("disabled", false);
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
          <h4 class="modal-title">تعديل التسجيل الصوتي</h4>
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
                        <h1 class="page-head-line">رفع تسجيل صوتي 
						
						</h1>

                    </div>
                </div>

<div class="row" >
<div class="col-md-12">
    
<fieldset class="scheduler-border" >
    
<div class="form-inline" style="margin-bottom:0px; margin-top:20px;" >
 
  

  
 </div>
</fieldset>

</div>
</div>


    
		
		<div class="panel panel-default">
            
            <div class="container" >
    
    
            <h2>اضافة تسجيل صوت</h2>
           
               <div class="panel-body">
    <div class="">
    	 
 
           
            <form  action=" " method="post" enctype="multipart/form-data">
                
                       
                 <div class="col-md-12">
                    <div class="col-md-4">
<div class="form-group col-md-12 ">
    <label for="email">اسم التسجيل </label>
    <input type="text" class="form-control" id="audio_name" name="audio_name">
  </div>
                     
                
                      
                          <div class="form-group mar_ned col-md-12">
                                <div class="">
                                    <label for="email">الجامعة</label>
                                </div>
                                <div class="">
                                    <select name="uinv_id_d" id="uinv_id_d" class="form-control">
                                    <option value="">اختر الجامعة...</option>
                                           <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $uf=mysqli_query($coon,"SELECT * FROM `uinv`");
              while ($unf=mysqli_fetch_assoc($uf)){
                ?>
                <option value="<?PHP echo $unf["uinv_id"]; ?>"> <?PHP echo $unf["uinv_name"] ;} ?> </option>
               
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mar_ned col-md-12">
                                <div class="">
                                    <label for="email">الكلية</label>
                                </div>
                                <div class="">
                                    <select name="foct_id_d" id="foct_id_d" class="form-control">
                                    <option value="">اختر الكلية...</option>
                 
                                    </select>
                                </div>
                            </div>
                         
                            <input type="submit" name="submit" class="btn btn-primary btn-info-full " value="حفظ البيانات"/>
                            
                        
                        
                        
                        </div>
                        <div class="col-md-4">
                                <div class="form-group mar_ned col-md-12">
                                <div class="">
                                   <label for="email">القسم--التخصص</label>
                                </div>
                                <div class="">

                              <select name="spe_id"  id="spe_id" class="form-control" >
                                  
                  <option value=""> أخترالقسم(التخصص)...</option>
                                  
                </select>
                   </div>
                     </div>
                            
                          <div class="form-group mar_ned col-md-12">
                                <div class="">
                                   <label for="email">المستوى</label>
                                </div>
                                <div class="">
                                    <select name="level_id" id="level_id" class="form-control">
                                    <option value="">اختر المستوى...</option>
                                           <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $uf=mysqli_query($coon,"SELECT * FROM `level` ");
              while ($unf=mysqli_fetch_assoc($uf)){
                ?>
                <option value="<?PHP echo $unf["level_id"]; ?>"> <?PHP echo $unf["level_name"] ;} ?> </option>
               
                                    </select>
                                </div>
                            </div>
                         
                          <div class="form-group mar_ned col-md-12">
                                <div class="">
                                    <label for="email">الفصل الدراسي</label>
                                </div>
                                <div class="">
                                    <select name="term_id" id="term_id" class="form-control">
                                    <option value="">أخترالفصل...</option>
                                         
                                    </select>
                                </div>
                            </div>
                           <div class="form-group mar_ned col-md-12">
                                <div class="">
                                    <label for="email">اسم المقرر</label>
                                </div>
                                <div class="">
                                    <select name="subject_id" id="subject_id" class="form-control">
                                    <option value="">أختر المقرر...</option>
                                         
                                    </select>
                                </div>
                            </div>
                        
                        </div>
                     
                     <div class="col-md-4 ">                                                
    			<div class=" col-md- ">
    		<span class="thumbnail">
      				<span class="thumbnail ">
                        <audio controls style="width: 100%; height: 30%" >
            <source src="<?php echo $path; ?>" type="audio/mpeg"/>
                             </audio>
    		</span>
      			<h4>اضافة الملف</h4>
      			<hr class="line">
      			<div class="row">

      				<div class="col-md-12">
      					
                        <input type="file" name="upload" >
                        
                        
      				</div>

      			</div>
    		</span>
  		</div>
                         
                     
                     </div>
                     
                     
                    
                        </div>
                    
                    <div class="clearfix"></div>
              
            </form>
        
 
   </div>
               </div>
    
</div>

     
                 </div>
                
                
             </div>
            <!-- /. PAGE INNER  -->
        </div>
 


 <script>
  function GetFeeFor(spe_id,foct_id,uinv_id)
{

$.ajax({
            type: 'post',
            url: 'getfeeform.php',
            data: {
                spe_id:spe_id,
                foct_id:foct_id,
                uinv_id:uinv_id,
               
                r:'up_specialist'},
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
    $("#myTable tr").filter(function() {
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
                  
   $(document).ready(function(){

    $("#dept_id").change(function(){ 
      var dept_id = this.value;
      $.ajax({
      url: "samester.php",
      type: "POST",
      data: {
      	dept_id : dept_id
      },
      cache: false,
      success: function(data){
        $("#classid").html(data);

      }
      });
    });
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
      uinv_id: uinv_id,
      r:'uinv'},
      success: function(data){
        $("#foct_id_d").html(data);
      

      }
      });
    });
   });
</script> 
 <script>
   $(document).ready(function(){

    $("#foct_id_d").change(function(){
    var uinv_id= $("#uinv_id_d").val();
      var foct_id = this.value;
      $.ajax({
      url: "getfeeform.php",
      type: "POST",
      data: {
      foct_id: foct_id,
        uinv_id:uinv_id,  
          r:"foct"
      },
      cache: false,
      success: function(data){
        $("#spe_id").html(data);

      }
      });
    });
     });
</script>
 <script>
   $(document).ready(function(){

    $("#term_id").change(function(){
     var uinv_id= $("#uinv_id_d").val();
     var foct_id = $("#foct_id_d").val();
     var level_id = $("#level_id").val();
        var spe_id = $("#spe_id").val();
     var term_id = this.value;
      $.ajax({
      url: "getfeeform.php",
      type: "POST",
      data: {
      foct_id:foct_id,
        uinv_id:uinv_id,
          level_id:level_id,
          term_id:term_id,
          spe_id:spe_id,
          r:"subject"
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

    $("#level_id").change(function(){
      var level_id = this.value;
      $.ajax({
      url:"getfeeform.php",
 type : "POST",
      data: {
      level_id:level_id,
         r:'level', 
      },
      cache: false,
      success: function(data){
        $("#term_id").html(data);

      }
      });
    });
     });
</script>

 