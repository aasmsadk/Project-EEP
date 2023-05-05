
 

<?php  error_reporting(E_ALL ^ E_NOTICE);
  

 $errormsg='';

if($_POST['submit'] && !empty($_FILES)){
        $dir_name=dirname(__FILE__)."/file/uploaded_summaries/";
	$formok=TRUE;
	
	$date=date("d/m/y h:i:s");
    //file vars
	
   $path=$_FILES['upload']['tmp_name'];
   $name=$_FILES['upload']['name'];
   $size=$_FILES['upload']['size'];
   $type=$_FILES['upload']['type'];
   $error=$_FILES['upload']['error'];
        
      $sum_name=$_POST['sum_name'];
    $sum_id=$_POST['sum_id']; 
    $student_name=$_POST['student_name'];
    $teacher_name=$_POST['teacher_name'];
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
		
		if(!in_array($type,array('application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 
                                 'text/plain', 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                                 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'))){
			$formok=false;
            $name=$_POST['file_name'];
        $size=$_POST['size'];
        $type=$_POST['type'];
			echo "";
             echo "<div class='alert alert-danger alert-autocloseable-danger'>الملف المرفوع ليس بملف نصي ,أعد المحاولة</div> ";
			
			}
			
			/*if(filesize($path) > 800000){
				
				$formok=false;
				echo "الملف المرفوع حجمه كبير";
				
				
				}*/

	if($formok){
        
        $sql2 = "UPDATE `summaries` SET `sum_name`='$sum_name',
        `file_name`='$name',
        `student_name`='$student_name',
        `teacher_name`='$teacher_name',
        `uinv_id`='$uinv_id',
        `foct_id`='$foct_id',
        `spe_id`='$spe_id',
        `level_id`='$level_id',
        `term_id`='$term_id',
        `subject_id`='$subject_id',
        `size`='$size',
        `type`='$type',
        `date`='$date' 
        WHERE sum_id='$sum_id'";
       
mysqli_query($coon,$sql2);
        $in=move_uploaded_file($path,$dir_name.$name);
        if(!$a){
        
        echo "<div class='alert alert-success alert-autocloseable-success'>تم التعديل بنجاح </div> ";}
		}}

   if(isset($_POST['delete_account'])){
              $D=$_POST['user_id'];
           $delet="DELETE FROM `summaries` WHERE `sum_id`='$D'";
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
          <h4 class="modal-title">تعديل الملخص</h4>
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
                        <h1 class="page-head-line">ادارة الملخصات  
						
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
                        <div class="panel-heading">
                            
         <div class="form-inline" style="margin-bottom:0px; margin-top:20px;" >

      <table class="table table-striped" >
             <tbody>
          <tr>
              <td> <div class="form-group">
    <label for="email">بحث </label>
    <input type="text" class="form-control" id="student-Search" name="student-Search">
  </div> </td>
              
              <td>   
                                <div class="col-md-12">
                                    
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
                  <div class="col-md-12">
                      <label >القسم--التخصص</label>
                      <select name="spe_id"  id="spe_id" class="dropselectsec" >
                          <option value=""> أخترالقسم(التخصص)...</option>
                      </select>
                  </div>
              </td>
              <td>
               <div class="col-md-12">
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
            
            
            
            <div id="aa">
                        <div class="panel-body">
                            <div class="table-sorting table-responsive " id="subjectresult">
                                
                                  
                               
                                <table class="table table-striped table-bordered table-hover" id="table22" >

                                    <thead>
                                        <tr>
                                          
                                            <th>رقم</th> 
                                            <th>رقم الملخص</th>
                                            <th>اسم الملخص</th>
                                            <th>اسم الطالب</th>
                                            <th>اسم المدرس</th>
											<th>الجامعة</th>
                                            <th>الكلية</th>
                                            <th>التخصص</th>
                                            <th>المستوى</th>
                                            <th>الفصل</th>
                                            <th>المقرر</th>
                                            <th>تاريخ الاضافة</th>
                                            <th>اسم الملف</th>
                                            <th>الحجم</th>
                                            <th>النوع</th>
                                         
                                            
                                            <th>تعديل</th>
											<th>حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                     
                                        
                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
                                      $result=mysqli_query($coon,"SELECT * FROM `summaries` r,uinv u,foct f,specialist s,level le,term t,subject su 
                                     where r.uinv_id=u.uinv_id and r.foct_id=f.foct_id  and r.spe_id=s.spe_id and r.level_id=le.level_id 
                                     and r.term_id=t.term_id and r.subject_id=su.subject_id");

                                                        $i=1;
                                        $cunt=1;
                                                   while($un=mysqli_fetch_array($result)){
                                                  $i=$un['sum_id']; 
                                                     
							                                 ?>		
						                             <tr>          
                                            <td><?php echo $cunt++; ?></td>
                                            <td><?php echo $un['sum_id']; ?></td> 
								        	<td><?php echo $un['sum_name']; ?></td>
                                            <td><?php echo $un['student_name']; ?></td>
                                            <td><?php echo $un['teacher_name']; ?></td>
                                            <td><?php echo $un['uinv_name']; ?></td>
                                            <td><?php echo $un['foct_name']; ?></td>
                                            <td><?php echo $un['spe_name']; ?></td>
                                            <td><?php echo $un['level_name']; ?></td>
                                            <td><?php echo $un['term_name']; ?></td>
                                            <td><?php echo $un['SubjectName']; ?></td>
                                            <td><?php echo $un['date']; ?></td>
                                             <td><?php echo $un['file_name']; ?></td>
                                             <td><?php
                                                       $su=$un['size']/1024;
                                                       $resu=$su/1024;?>
                                                   <?php $SS="<script> document.write('$resu'.substring(0,5)); </script>"?>
                                                  
                                                     <?php  echo $SS."M"; ?>
                                                         </td>
                                             <td><?php echo $un['type']; ?></td>
   
                                                         
  <td><p title="update">                               
<a href="#" onclick="GetFeeFor(<?php echo $un['sum_id'];?>)" 
   data-toggle="modal" data-target="#e" class="btn btn-success btn-sm" >
<span class="glyphicon glyphicon-pencil">
    </span> تعديل </a></p>
      
                                                         </td>        
  <td>   
      <p title="Delete"><a href="#" onclick="Delet(<?php echo $un['sum_id']; ?>)"    data-toggle="modal" data-target="#tooltip"    name="del" class="btn btn-danger btn-sm" >
      <span class="glyphicon glyphicon-trash"></span> حذف</a></p> 
 
                                                         
                                                         </td> 
                                                         
                       <?php 	}   ?>  
                              </tbody>
                                       
                                </table>

                
                                       
                            </div>
             </div></div>
         
                 </div>
                
                
             </div>
            <!-- /. PAGE INNER  -->
        </div>
 


 <script>
  function GetFeeFor(sum_id)
{

$.ajax({
            type: 'post',
            url: 'getfeeform.php',
            data: {
                sum_id:sum_id,
               
               
                r:'up_summaries'},
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
   $(document).ready(function()
   {
    $("#uinv_id_d").change(function(){
      var uinv_id = $(this).val();
    
      $.ajax({
      url: "getfeeform.php",
      type: "POST",
      data: {
      uinv_id: uinv_id,
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
          r:"summaries"
      },
      cache: false,
      success: function(data){
        $("#aa").html(data);

      }
      });
    });
     });
</script>
 