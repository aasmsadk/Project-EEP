 <?php


    if(isset($_POST['up_t'])){
        
        $sql2 = "update  teacher set t_name='".$_POST['t_name']."'  where  tea_id='".$_POST['tea_id']."' ";
         $sql3 = "update   account set username='".$_POST['username']."',password='".$_POST['password']."'  where  user_id='".$_POST['user_id']."' ";
mysqli_query($coon,$sql2);
        mysqli_query($coon,$sql3);
         echo "  
              <div class='alert alert-success alert-autocloseable-success'>
        			تم التعديل بنجاح 
				</div>
                 ";
        
    }
      if(isset($_POST['delete_subject'])){
              $D=$_POST['subject_id'];
           $delet="DELETE FROM `teacher` WHERE `tea_id`='$D'";
           mysqli_query($coon,$delet);
              echo "  
              <div class='alert alert-success alert-autocloseable-success'>
        			تم الحذف  بنجاح 
				</div>
                 ";
          }
     if(isset($_POST['add_teacher'])){
              $name=$_POST['name'];
          $username=$_POST['username'];
         $pass=$_POST['pass'];
         
          $IdTyp=mysqli_query($coon,"select type_id from type_user where type_name='teacher'");
              $idt="";
                 while ($uc=mysqli_fetch_assoc($IdTyp)){
                 $idt=$uc['type_id'];
                  }

$sq2="INSERT INTO `account` (`username`,`password`,`type_user`)
                 VALUES ('$username','$pass','$idt')";
                  $result2= mysqli_query($coon,$sq2);

 $moha=mysqli_query($coon,"SELECT `user_id` FROM `account` WHERE `user_id` = (SELECT MAX( `user_id` ) FROM  `account`)");
    
              while ($unf=mysqli_fetch_assoc($moha)){
                $id=$unf['user_id'];
              

  $add="INSERT INTO `teacher` (`t_name`,user_id) VALUES ('$name','$id')";

    $result354=mysqli_query($coon,$add);
                  }
         
         
           
              echo "  
              <div class='alert alert-success alert-autocloseable-success'>
        			تم الاضافة بنجاح
				</div>
                 ";
          }
    
   
 ?>
 
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
  function Delet(subject_id)
{

$.ajax({
            type: 'post',
            url: 'getfeeform.php',
            data: {
               subject_id:subject_id, 
                r:'del_subject'},
            success: function (data) {
              $('#formconten').html(data);
			  $("#tooltip").modal({backdrop: "static"});
            }
          });


}

</script>  
 <style>
.mypad{
padding-top : 5px;
padding-right : 80px;
padding-left : 80px;
}
.mypad1{
padding-top : 10px;
padding-right : 80px;
padding-left : 120px;
}

</style> 
   
     
          
             <div class="modal fade" id="tooltip" role="dialog">
    <div class="modal-dialog modal-lg">
   <div class="modal-content" style="margin-top:100px;">
                
                <div class="modal-header">
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
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
          <h4 class="modal-title">تعديل المدرس</h4>
        </div>
        <div class="modal-body" id="formcontent">
        
        </div>
        
      </div>
    </div>
  </div>
  <div class="modal fade" id="add" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" style="color:red;">&times;</button>
          <h4 class="modal-title">اضافة المدرس</h4>
        </div>
        <div class="modal-body" id="f">
               <div role="tabpanel" class="tab-pane" id="profile">
<div class="container-fluid mypad">
    
 <form action='' method='post'>
  <div class="form-group">
    <label  >اسم المدرس:</label>
    <input type="text" class="form-control" name="name" >
     
  </div>
  <div class="form-group">
    <label  >اسم المستخدم:</label>
    <input type="text" class="form-control" name="username" >
  </div>
     <div class="form-group">
    <label  >كلمة المرور:</label>
    <input type="text" class="form-control" name="pass" >
  </div>
     

   <input type="submit" name="add_teacher" class="btn btn-info btn-info-full " value="اضافة"/>
 <!-- <button type="submit" class="btn btn-info" name="submit">Submit</button> -->
</form>
</div>
</div>
        
        </div>
        
      </div>
    </div>
  </div>

  
  <h1 class="text mypad1"  style="margin-top:0px;">ادارة المدرسين</h1>
    <div class="container">
   <div class="row">
    <div class="col-md-4">
        
 </div>
 </div>
</div>
 
       
   <div id="page-wrapper"  >
   
  
       
       <button   type="button" class="btn btn-primary "  data-toggle="modal" data-target="#add" name="submit">  
    	<i class="entypo-plus-circled"></i>
        اضافــة مدرس جديد &nbsp;  +</button>  
           
            <div id="page-inner">
               
				 
                <?php echo $errormsg; ?>
                
                

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

  <div class="form-group">
    <label for="email">اسم المدرس</label>
    <input type="text" class="form-control" id="student-Search" name="student-Search">
  </div>
 
                        
  
 </div>   
                        </div>
            
                        <div class="panel-body">
                            <div class="table-sorting table-responsive " id="subjectresult">
                                
                                  
                               
                                <table class="table table-striped table-bordered table-hover" id="table22" >

                                    <thead>
                                        <tr>
                                          
                                            <th>رقم</th> 
                                       
                                            <th>اسم المدرس</th>
											<th>اسم المستخدم</th>
                                            <th>تعديل</th>
											<th>حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        
                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
									 $result=mysqli_query($coon,"SELECT * FROM teacher t, account a where t.user_id=a.user_id ");

                                                        $i=1;
                                        $cunt=1;
                                                   while($un=mysqli_fetch_array($result)){
                                                  $i=1; 
                                                     
							                                 ?>		
						                             <tr>          
                                             <td><?php echo $cunt++; ?></td>
                                         <td><?php echo $un['t_name']; ?></td> 
											<td><?php echo $un['username']; ?></td>
                                           
   
                                                         
  <td><p title="update">                               
<a href="#" onclick="GetFeeFor(<?php echo $un['tea_id'];?>)" 
   data-toggle="modal" data-target="#e" class="btn btn-success btn-sm" >
<span class="glyphicon glyphicon-pencil">
    </span> تعديل </a></p>
      
                                                         </td>        
  <td> <p title="Delete"><a href="#" onclick="Delet(<?php echo $un['tea_id']; ?>)"    data-toggle="modal" data-target="#tooltip"    name="del" class="btn btn-danger btn-sm" >
      <span class="glyphicon glyphicon-trash"></span> حذف</a></p> 
  </td> 
                                                         
                       <?php 	}   ?>  
                              </tbody>
                                       
                                </table>

                
                                       
                            </div>
             </div>
                 </div>
             </div>
            <!-- /. PAGE INNER  -->
        </div>
 


 <script>
  function GetFeeFor(tea_id)
{

$.ajax({
            type: 'post',
            url: 'getfeeform.php',
            data: {
                tea_id:tea_id,
               
           
                r:'up_techer'},
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
  
	<script src="js/jquery.dataTables.min.js"></script>

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
    
