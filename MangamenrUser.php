
  <?php

  if($_POST['upd_student']){
      
        $student_name=$_POST['student_name'];
         $addres=$_POST['addres'];
         $phone=$_POST['phone'];
         $emal=$_POST['emal'];
         $uinv_id=$_POST['uinv_id'];
         $foct_id=$_POST['foct_id'];
         $specialist=$_POST['specialist'];
         $unv_no_student=$_POST['unv_no_student'];
 
       $student_id=$_POST['student_id'];
      
   
    $up= "UPDATE student SET student_name='".$_POST['student_name']."',addres='".$_POST['addres']."',phone='".$_POST['phone']."',emal='".$_POST['emal']."',uinv_id='".$_POST['uinv_id']."',foct_id='".$_POST['foct_id']."',spe_id='".$_POST['spe_id']."'  WHERE  student_id='".$_POST['student_id']."'; ";
     
 
   $up1="UPDATE `student` SET 
                           `student_name`='".$student_name."',
                            `addres`='".$addres."',
                            `phone`='".$phone."',
                            `emal`='".$emal."',
                            `uinv_id`='".$uinv_id."',
                            `foct_id`='".$foct_id."',
                            `spe_id`='".$specialist."',
                            `unv_no_student`='".$unv_no_student."'
                            WHERE  `student_id`='".$student_id."'";
  
  $dv=mysqli_query($coon,$up1); 
  }

   ?>
 
        

        <?php
          if(isset($_POST['delete_account'])){
              $D=$_POST['stu'];
           $delet="DELETE FROM `student` WHERE `student_id`='$D'";
           mysqli_query($coon,$delet);
          }


        
        ?>
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
          <h4 class="modal-title">تعديل المستخدم</h4>
        </div>
        <div class="modal-body" id="formcontent">
        
        </div>
        
      </div>
    </div>
  </div>


   <div id="page-wrapper" >
            <div id="page-inner">
               
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
              
           
                    
                 
         </tr>
          </tbody>
             
             </table> 
 </div>   </div>
      
            
        <div class="panel-body">
                            <div class="table-sorting table-responsive " id="subjectresult">
                                
                              

              <table class="table table-striped table-bordered table-hover" id="table22" >

                   <thead>
               <tr>
                   <th>الرقم</th>
                   <th>الاسم</th>
                    <th>العنوان</th>
                   <th>الجوال</th>
                     <th>البريد الالكتروني</th>
                    <th>الجامعه</th>
                    <th>الكلية</th>
                    <th>القسم</th>
                    <th>الرقم الجامعي</th>
                   
                      <th>تعديل</th>

                       <th>حذف</th>
                       </tr>
                   </thead>
    <tbody id="myTable">
       <?php  error_reporting(E_ALL ^ E_NOTICE);
              $u=mysqli_query($coon,"SELECT * FROM `student`s,specialist p,uinv u,foct f where s.uinv_id=u.uinv_id and s.foct_id=f.foct_id and s.spe_id=p.spe_id  ");
              $i=0;
              while ($un=mysqli_fetch_array($u)){
               
                 ?>
    <tr>

    <td><?php echo ++$i ; ?></td>
    <td><?php echo $un['student_name'];?></td>
    <td><?php echo $un['addres'];?></td>
    <td><?php echo $un['phone'];?></td>
    <td><?php echo $un['emal'];?></td>
    <td><?php echo $un['uinv_name'];?></td>
    <td><?php echo $un['foct_name'];?></td>
    <td><?php echo $un['spe_name'];?></td>
    <td><?php echo $un['unv_no_student'];?></td>
 
       
            <td><p title="update">                               
<a href="#" onclick="GetFeeFor(<?php echo $un['student_id'];?>)" 
   data-toggle="modal" data-target="#e" class="btn btn-success btn-sm" >
<span class="glyphicon glyphicon-pencil">
    </span> تعديل </a></p>
      
                                                         </td>        
  <td>   
      <p title="Delete"><a href="#" onclick="Delet(<?php echo $un['student_id']; ?>)"    data-toggle="modal" data-target="#tooltip"    name="del" class="btn btn-danger btn-sm" >
      <span class="glyphicon glyphicon-trash"></span> حذف</a></p> 
 
                                                         
                                                         </td> 
            
            </tr>

      <?php } ?>
   </tbody>

</table>


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
   $(document).ready(function()
   {
    $("#uinv_id").change(function(){
      var uinv_id = $(this).val();
    
      $.ajax({
      url: "getfeeform.php",
      type: "POST",
      data: {
      uinv_id: uinv_id,
      r:'uinv'},
      success: function(data){
        $("#foct_id").html(data);
      

      }
      });
    });
   });
       
       $(document).ready(function()
   {
    $("#foct_id").change(function(){
      var foct_id = $(this).val();
      var uinv_id= $("#uinv_id").val();
      $.ajax({
      url: "getfeeform.php",
      type: "POST",
      data: {
      foct_id: foct_id,
          uinv_id:uinv_id,
      r:'foct'},
      success: function(data){
        $("#specialist").html(data);
      

      }
      });
    });
   });
      
    
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
  function GetFeeFor(student_id)
{

$.ajax({
            type: 'post',
            url: 'getfeeform.php',
            data: {
                student_id:student_id,
                r:'up_stu'},
            success: function (data) {
              $('#formcontent').html(data);
			  $("#e").modal({backdrop: "static"});
            }
          });


}

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

            <script>
  function Delet(student_id)
{

$.ajax({
            type: 'post',
            url: 'getfeeform.php',
            data: {
               student_id:student_id, 
                r:'del_account'},
            success: function (data) {
              $('#formconten').html(data);
			  $("#tooltip").modal({backdrop: "static"});
            }
          });


}

</script>  
 
 
