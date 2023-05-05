<?php include('config.php'); 
 error_reporting(E_ALL ^ E_NOTICE);?>


                <?php
if(isset($_POST['r']) && $_POST['r']=='del') {?>
                <form action="" method="post">
                 <div class="modal-footer"  style="margin:0px; border-top:0px; text-align:center;">
                     <input type="hidden" id="stu" name="stu" value="<?php echo $_POST['stu']; ?>" />
                    <button type="submit" name="delete"  class="btn btn-danger" id="delete_link">Delete</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                </div>
                    </form>
                <?php }?>



                   <?php 
if(isset($_POST['r']) && $_POST['r']=='del_account') {

?>
                <form action="" method="post">
                 <div class="modal-footer"  style="margin:0px; border-top:0px; text-align:center; display: flow-root;">
                     <input type="hidden" id="subject_id" name="user_id" value="<?php echo $_POST['user_id']; ?>" />
                    <button type="submit" name="delete_account"  class="btn btn-danger" id="delete_link">Delete</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                </div>
                    </form>
                <?php }?>
                
                
             <?php
if(isset($_POST['r']) && $_POST['r']=='up_acc') {
                $user_id=$_POST['user_id'];
    	 $result=mysqli_query($coon,"SELECT * FROM account where user_id='".$user_id."' ");
                                                   while($un=mysqli_fetch_array($result)){
                ?>    
                  <div role="tabpanel" class="tab-pane" id="profile">
<div class="container-fluid mypad">
 <form action='' method='post'>
  <div class="form-group">
    <label  >اسم المستخدم:</label>
    <input type="text" class="form-control" name="username" value="<?php echo $un['username']; ?>">
      <input type="hidden"  name="user_id" value="<?php echo $un['user_id']; ?>">
  </div>
  <div class="form-group">
    <label  >كلمة المرور:</label>
    <input type="namber" class="form-control" name="password" value="<?php echo $un['password']; ?>">
  </div>
     

   <input type="submit" name="up_account" class="btn btn-info btn-info-full " value="تعديل"/>
 <!-- <button type="submit" class="btn btn-info" name="submit">Submit</button> -->
</form>
</div>
</div>
                <?php }}?>
                
             
    <?php
if(isset($_POST['r']) && $_POST['r']=='type_accu') {
      ?>    
        <div class="panel-body">
                            <div class="table-sorting table-responsive " id="subjectresult">
                                
                                  
                               
                                <table class="table table-striped table-bordered table-hover" id="table22" >

                                    <thead>
                                        <tr>
                                          
                                            <th>رقم</th> 
                                            <th>رقم المستخدم</th>
                                            <th>اسم المستخدم</th>
											<th>نوع المستخدم</th>
                                            <th>تعديل</th>
											<th>حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        
                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
                                        $type_id=$_POST['type_id'];
									 $result=mysqli_query($coon,"SELECT * FROM account a, type_user t where a.type_user=t.type_id and t.type_id='".$type_id."' ");

                                                        $i=1;
                                        $cunt=1;
                                                   while($un=mysqli_fetch_array($result)){
                                                  $i=$un['user_id']; 
                                                     
							                                 ?>		
						                             <tr>          
                                             <td><?php echo $cunt++; ?></td>
                                         <td><?php echo $un['user_id']; ?></td> 
											<td><?php echo $un['username']; ?></td>
                                             <td><?php echo $un['type_name']; ?></td>
   
                                                         
  <td><p title="update">                               
<a href="#" onclick="GetFeeFor(<?php echo $un['user_id'];?>)" 
   data-toggle="modal" data-target="#e" class="btn btn-success btn-sm" >
<span class="glyphicon glyphicon-pencil">
    </span> تعديل </a></p>
      
                                                         </td>        
  <td> <p title="Delete"><a href="#" onclick="Delet(<?php echo $un['user_id']; ?>)" data-placement="top"  data-toggle="modal" data-target="tooltip"    name="del" class="btn btn-danger btn-sm" >
      <span class="glyphicon glyphicon-trash"></span> حذف</a></p> 
  </td> 
                                                         
                       <?php 	}   ?>  
                              </tbody>
                                       
                                </table>

                
                                       
                            </div>
             </div>
            
            
                <?php  }?>
                
 <?php 
if(isset($_POST['r']) && $_POST['r']=='uinv'){ 
                                        ?>
 <option value="">اختر الكلية...</option> 
<?php
              $uf=mysqli_query($coon,"SELECT * FROM `foct` where un_fk='".$_POST['uinv_id']."' ");
              while ($unf=mysqli_fetch_assoc($uf)){
                echo('<option value="'.$unf['foct_id'].'">'.$unf['foct_name'].'</option> ');
                } 
}
if(isset($_POST['r']) && $_POST['r']=='foct'){?>
 <option value=""> اختر القسم...</option> 

<?php

$foct=$_POST['foct_id'];
$uinv_id=$_POST['uinv_id'];

              $specialist_query= "SELECT * FROM `specialist` where foct_id='".$foct."' and uinv_id='".$uinv_id."'    ";
$specialist_result= mysqli_query($coon,$specialist_query);

while ($row1= mysqli_fetch_array($specialist_result)) {
    ?>
    <option value='<?php echo $row1['spe_id'] ?>'>   <?php echo $row1['spe_name'] ?></option>
<?php

} }


?>

<?php
if(isset($_POST['r']) && $_POST['r']=='spe_id_t'){?>
 <option value=""> اختر القسم...</option> 

<?php


$uinv_id=$_POST['uinv_id'];

              $specialist_query= "SELECT * FROM `specialist` where  uinv_id='".$uinv_id."'    ";
$specialist_result= mysqli_query($coon,$specialist_query);

while ($row1= mysqli_fetch_array($specialist_result)) {
    ?>
    <option value='<?php echo $row1['spe_id'] ?>'>   <?php echo $row1['spe_name'] ?></option>
<?php

} }


?>

<?php
 if(isset($_POST['r']) && $_POST['r']=='specialist'){
$uinv_id=$_POST['uinv_id']; 
 $foct_id_d=$_POST['foct_id_d'];

?> 

<div id="aa">
                        <div class="panel-body">
                            <div class="table-sorting table-responsive " id="subjectresult">
                                
                                  
                               
                                <table class="table table-striped table-bordered table-hover" id="table22" >

                                    <thead>
                                        <tr>
                                          
                                            <th>رقم</th> 
                                            <th>رقم التخصص</th>
                                            <th>اسم النخصص</th>
											<th>الجامعة</th>
                                            <th>الكلية</th>
                                            <th>تعديل</th>
											<th>حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        
                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
 $result=mysqli_query($coon,"SELECT * FROM  specialist s, uinv u,foct f where s.uinv_id=u.uinv_id and s.foct_id=f.foct_id and s.uinv_id='".$uinv_id."' and s.foct_id='".$foct_id_d."' ");

                                                        $i=1;
                                        $cunt=1;
                                                   while($un=mysqli_fetch_array($result)){
                                                  $i=$un['spe_id']; 
                                                     
							                                 ?>		
						                             <tr>          
                                             <td><?php echo $cunt++; ?></td>
                                         <td><?php echo $un['spe_id']; ?></td> 
											<td><?php echo $un['spe_name']; ?></td>
                                             <td><?php echo $un['foct_name']; ?></td>
                                            <td><?php echo $un['uinv_name']; ?></td>
   
                                                         
  <td><p title="update">                               
<a href="#" onclick="GetFeeFor(<?php echo $un['spe_id'];?>)" 
   data-toggle="modal" data-target="#e" class="btn btn-success btn-sm" >
<span class="glyphicon glyphicon-pencil">
    </span> تعديل </a></p>
      
                                                         </td>        
  <td>   
      <p title="Delete"><a href="#" onclick="Delet(<?php echo $un['spe_id']; ?>)"    data-toggle="modal" data-target="#tooltip"    name="del" class="btn btn-danger btn-sm" >
      <span class="glyphicon glyphicon-trash"></span> حذف</a></p> 
 
                                                         
                                                         </td> 
                                                         
                       <?php 	}   ?>  
                              </tbody>
                                       
                                </table>

                
                                       
                            </div>
             </div></div>
         

<?php } ?>
                
  <?php
 if(isset($_POST['r']) && $_POST['r']=='up_specialist'){
    $spe_id=$_POST['spe_id'];
    $uinv_id=$_POST['uinv_id'];
    $foct_id=$_POST['foct_id'];
     
     
?>
<div class="container">
                     <div role="tabpanel" class="tab-pane" id="profile">
<div class="container-fluid mypad">

                         <form action='' method='post'>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label for="id_document">القسم(التخصص)</label>
                                  <input type="hidden"  name="spe_id"value="<?php echo $spe_id; ?>"   >
                                <?php 
      $u=mysqli_query($coon,"SELECT spe_name FROM `specialist` where spe_id='".$spe_id."' ");
              while ($un=mysqli_fetch_assoc($u)){
                  ?>
                                 <input type="text" class="form-control"  name="spe_name" placeholder="اسم التخصص" value="<?php echo $un['spe_name']; ?>"   >
                             
                                <?php }?>
                           
                              </div>

                        </div> 
                        <div class="row">
                          <div class=" form-group">
                                <div class="col-md-5">
                                    
                                    <p align="right"><stong><label  >اسم الجامعة</label></stong></p>
                                
                                    <select name="uinv_id" id="uinv_id" class="dropselectsec">
                                    <option value="">اختر الجامعة...</option>
                                           <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $uf=mysqli_query($coon,"SELECT * FROM `uinv`");
              while ($unf=mysqli_fetch_assoc($uf)){
                   echo('<option value="'.$unf['uinv_id'].'"'.($uinv_id==$unf['uinv_id']?'selected':'').'>'.$unf['uinv_name'].'</option> ');
              }
                ?>
                                     </select>
                                </div>
                            </div>
                        
                             <div class=" mar_ned form-group">
                                <div class="col-md-5">
                                    
                                    <p align="right"><stong><label  >اسم الكلية</label></stong></p>
                                
                                    <select name="foct_id" id="foct_id" class="dropselectsec">
                                    <option value="">اختر الكلية...</option>
    <?php $specialist_query= "SELECT * FROM `foct` where un_fk='".$uinv_id."'  ";
    $specialist_result= mysqli_query($coon,$specialist_query);

while ($row1= mysqli_fetch_array($specialist_result)) {
      echo('<option value="'.$row1['foct_id'].'"'.($foct_id==$row1['foct_id']?'selected':'').'>'.$row1['foct_name'].'</option> ');
              }
    ?>
                
                                    </select>
                                </div>
                            </div>
                        </div>
                           
     <div class=" form-group ">
                   <input type="submit" name="update_specialist" class="btn btn-primary btn-info-full " value="حفظ البيانات"/> 
                             </div>
    </form>
                             </div></div>   
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
</script>
<?php }?>


                   <?php 
if(isset($_POST['r']) && $_POST['r']=='del_subject') {?>
                <form action="" method="post">
                 <div class="modal-footer"  style="margin:0px; border-top:0px; text-align:center;">
                     <input type="hidden" id="subject_id" name="subject_id" value="<?php echo $_POST['subject_id']; ?>" />
                    <button type="submit" name="delete_subject"  class="btn btn-danger" id="delete_link">Delete</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                </div>
                    </form>
                <?php }?>


 <?php
   if(isset($_POST['r']) && $_POST['r']=='up_sub') {
                $subject_id=$_POST['subject_id'];
    	 $result=mysqli_query($coon,"SELECT * FROM subject where subject_id='".$subject_id."' ");
                                                   while($un=mysqli_fetch_array($result)){
                ?>    
                  <div role="tabpanel" class="tab-pane" id="profile">
<div class="container-fluid mypad">
 <form action='' method='post'>
  <div class="form-group">
    <label  >SubjectName:</label>
    <input type="text" class="form-control" name="SubjectName" value="<?php echo $un['SubjectName']; ?>">
      <input type="hidden"  name="subject_id" value="<?php echo $un['subject_id']; ?>">
  </div>
  <div class="form-group">
    <label  >namber_hors:</label>
    <input type="namber" class="form-control" name="type_subject" value="<?php echo $un['type_subject']; ?>">
  </div>
     

   <input type="submit" name="up_subject" class="btn btn-info btn-info-full " value="تعديل"/>
 <!-- <button type="submit" class="btn btn-info" name="submit">Submit</button> -->
</form>
</div>
</div>
                <?php }}?>

<?php
    if(isset($_POST['r']) && $_POST['r']=='level') {?>
 <option value=""> اختر الفصل ...</option> 

<?php

$level_id=$_POST['level_id'];
 

              $specialist_query= "SELECT * FROM `term` where  laval_id='".$level_id."'";
$specialist_result= mysqli_query($coon,$specialist_query);

while ($row1= mysqli_fetch_array($specialist_result)) {
    ?>
    <option value='<?php echo $row1['term_id'] ?>'>   <?php echo $row1['term_name'] ?></option>
<?php } }?>

<?php
   if(isset($_POST['r']) && $_POST['r']=='up_stu') {

  $student_id=$_POST['student_id'];
    
    
     error_reporting(E_ALL ^ E_NOTICE);

              $SQL=mysqli_query($coon,"SELECT * FROM `student` where `student_id`='".$student_id."' ");
               //echo "$u";
              $i=0;
              while ($S=mysqli_fetch_array($SQL)){

                ?>
               
<form action="" method="post" >
	<div class="row" style="margin-bottom: 20px; margin-right:-10px; margin-left: 20px ; margin-top: 30px " >
   <div class="form-group" >
   <label >الاسم</label>
       <input  name="student_id" type="text" id="student_id"  value="<?php echo $S['student_id']?>" >
       
       <input class="form-control " name="student_name" id="student_name" type="text" placeholder="الاسم" value="<?php echo $S['student_name']?>" >
        </div>
        <div class="form-group">
        <label >العنوان</label>
        <input  type="text" class="form-control" name="addres" placeholder="العنوان" value="<?php echo $S['addres'];?>"/>
        </div>
        <div class="form-group"  >
          <label for="country" > الجامعة</label>
            
          <select class="form-control" id="uinv_id" name="uinv_id"  >
            <option value="">Choose...</option>
            <?php  error_reporting(E_ALL ^ E_NOTICE);
              $u=mysqli_query($coon,"SELECT * FROM `uinv`  ");
              while ($un=mysqli_fetch_assoc($u)){
                echo('<option value="'.$un['uinv_id'].'"'.($S['uinv_id']==$un['uinv_id']?'selected':'').'>'.$un['uinv_name'].'</option> ');
                }
              ?>
          </select>

        </div>
        <div class="form-group" >
          <label for="country"> الكلية</label>
            
          <select class="form-control" id="foct_id" name="foct_id">
              <option value="">Choose...</option>
              <?php 
               $uf=mysqli_query($coon,"SELECT * FROM `foct` where un_fk='".$S['uinv_id']."' ");
              while ($unf=mysqli_fetch_assoc($uf)){
                echo('<option value="'.$unf['foct_id'].'"'.($S['foct_id']==$unf['foct_id']?'selected':'').'>'.$unf['foct_name'].'</option> ');
                } 
              ?>
            
          </select>

        </div>
        <div class="form-group"  >
          <label for="country"> القسم--التخصص</label>
          <select class="form-control" id="specialist" name="specialist">
         <?php  error_reporting(E_ALL ^ E_NOTICE);
              $ud=mysqli_query($coon,"SELECT * FROM `specialist` where foct_id='".$S['foct_id']."' and uinv_id='".$S['uinv_id']."'   ");
              while ($und=mysqli_fetch_assoc($ud)){
                echo('<option value="'.$und['spe_id'].'"'.($S['spe_id']==$und['spe_id']?'selected':'').'>'.$und['spe_name'].'</option> ');
                }
              ?>
          </select>

        </div>
          <div class="form-group">
          <label>الرقم الجامعي</label>
        <input class="form-control " name="unv_no_student" type="text" placeholder="الرقم الجامعي" value="<?php echo $S['unv_no_student'];?> ">
        </div>
        <div class="form-group">
        <label>البريد الالكتروني</label>
        <input class="form-control " name="emal" type="text" placeholder="البريد االكترلوني" value="<?php echo $S['emal']?> ">
        </div>
        <div class="form-group">
        <label>رقم الجوال</label>
        <input class="form-control " name="phone" type="text" placeholder="رقم الجوال" value="<?php echo $S['phone']?> ">
        </div>
        

          <div class="modal-footer ">
        <input type="submit" class="btn btn-warning btn-lg " style="width: 100%;" name="upd_student" value="تعديل "><!--<span class="glyphicon glyphicon-ok-sign"></span>-->
      </div>
      </div>
       </form>
       
<?php } ?>
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

<?php } ?>
<?php
   if(isset($_POST['r']) && $_POST['r']=='subject') {?>
 <option value=""> اختر المقرر ...</option> 

<?php
                                                     

$level_id=$_POST['level_id']; 
$term_id=$_POST['term_id'];
 $foct_id=$_POST['foct_id'];                                                  
$uinv_id=$_POST['uinv_id'];
$spe_id=$_POST['spe_id'];
 

              $specialist_query= "SELECT * FROM `subject_distroibution` sd , subject sj where sd.uinv_id='".$uinv_id."' and sd.foct_id='".$foct_id."' 
              and sd.spe_id='".$spe_id."' and sd.level_id='".$level_id."' and sd.term_id='".$term_id."' and sd.subject_id=sj.subject_id ";
$specialist_result= mysqli_query($coon,$specialist_query);

while ($row1= mysqli_fetch_array($specialist_result)) {
    ?>
    <option value='<?php echo $row1['subject_id'] ?>'>   <?php echo $row1['SubjectName'] ?></option>
<?php } }?>

<?php
   if(isset($_POST['r']) && $_POST['r']=='subject_t') {?>
 <option value=""> اختر المقرر ...</option> 

<?php
                                                 
$uinv_id=$_POST['uinv_id'];
$spe_id=$_POST['spe_id'];
 

              $specialist_query= "SELECT * FROM `subject_distroibution` sd , subject sj where sd.uinv_id='".$uinv_id."' 
              and sd.spe_id='".$spe_id."'  and sd.subject_id=sj.subject_id ";
$specialist_result= mysqli_query($coon,$specialist_query);

while ($row1= mysqli_fetch_array($specialist_result)) {
    ?>
    <option value='<?php echo $row1['subject_id'] ?>'>   <?php echo $row1['SubjectName'] ?></option>
<?php } }?>

<!-- المراجع -->
<?php
 if(isset($_POST['r']) && $_POST['r']=='references'){
$uinv_id=$_POST['uinv_id']; 
$subject_id=$_POST['subject_id'];
$spe_id=$_POST['spe_id'];

?> 

<div id="aa">
                        <div class="panel-body">
                            <div class="table-sorting table-responsive " id="subjectresult">
                                
                                  
                               
                                <table class="table table-striped table-bordered table-hover" id="table22" >

                                    <thead>
                                        <tr>
                                          
                                            <th>رقم</th> 
                                            <th>رقم المرجع</th>
                                            <th>اسم المرجع</th>
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
									 $result=mysqli_query($coon,"SELECT * FROM `references` r,uinv u,foct f,specialist s,level le,term t,subject su 
                                     where r.uinv_id=u.uinv_id and r.foct_id=f.foct_id  and r.spe_id=s.spe_id and r.level_id=le.level_id 
                                     and r.term_id=t.term_id and r.subject_id=su.subject_id and r.uinv_id='".$uinv_id."'  and r.spe_id='".$spe_id."' and r.subject_id ='".$subject_id."'");

                                                        $i=1;
                                        $cunt=1;
                                                   while($un=mysqli_fetch_array($result)){
                                                  $i=$un['spe_id']; 
                                                     
							                                 ?>		
						                             <tr>          
                                            <td><?php echo $cunt++; ?></td>
                                            <td><?php echo $un['ref_id']; ?></td> 
								        	<td><?php echo $un['ref_name']; ?></td>
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
                                                   <?php $SS="<script>'$resu'.substring(0,5); </script>";?>
                                                  
                                                     <?php  echo $SS."M"; ?>
                                                         </td>
                                             <td><?php echo $un['type']; ?></td>
   
                                                         
  <td><p title="update">                               
<a href="#" onclick="GetFeeFor(<?php echo $un['ref_id'];?>)" 
   data-toggle="modal" data-target="#e" class="btn btn-success btn-sm" >
<span class="glyphicon glyphicon-pencil">
    </span> تعديل </a></p>
      
                                                         </td>        
  <td>   
      <p title="Delete"><a href="#" onclick="Delet(<?php echo $un['ref_id']; ?>)"    data-toggle="modal" data-target="#tooltip"    name="del" class="btn btn-danger btn-sm" >
      <span class="glyphicon glyphicon-trash"></span> حذف</a></p> 
 
                                                         
                                                         </td> 
                                                         
                       <?php 	}   ?>  
                              </tbody>
                                       
                                </table>

                
                                       
                            </div>
             </div></div>
         
         

<?php } ?>

 <?php
 if(isset($_POST['r']) && $_POST['r']=='up_reference'){
$ref_id=$_POST['ref_id'];

?>


   <div id="page-wrapper" >
        <div id="page-inner">
           

<div class="row" >
<div class="col-md-12">
    
<fieldset class="scheduler-border" >
    
<div class="form-inline"  >
 

  
 </div>
</fieldset>

</div>
</div>


    
		
		<div class="panel panel-default">
            
            <div class="container" >
    
    
            <h2>تعديل مرجع</h2>
           
               <div class="panel-body">
    <div class="">
    	 
 
           
            <form  action=" " method="post" enctype="multipart/form-data">
                
                    <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $er=mysqli_query($coon,"SELECT * FROM `references` r,uinv u,foct f,specialist s,level le,term t,subject su 
                                     where r.uinv_id=u.uinv_id and r.foct_id=f.foct_id  and r.spe_id=s.spe_id and r.level_id=le.level_id 
                                     and r.term_id=t.term_id and r.subject_id=su.subject_id and r.ref_id='$ref_id'");
              while ($unfw=mysqli_fetch_assoc($er)){
                ?>   
                 <div class="col-md-12">
                    <div class="col-md-4">
<div class="form-group col-md-12 ">
    <label for="email">اسم المقرر </label>
    <input type="text" class="form-control" id="ref_name" name="ref_name" value="<?php echo $unfw['ref_name']; ?> ">
    <input type="hidden" name="ref_id" value="<?php echo $unfw['ref_id']; ?>">
    
    <input type="hidden" name="file_name" value="<?php echo $unfw['file_name']; ?>">
    <input type="hidden" name="size" value="<?php echo $unfw['size']; ?>">
    <input type="hidden" name="type" value="<?php echo $unfw['type']; ?>">
    
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
                   echo('<option value="'.$unf['uinv_id'].'"'.($unfw['uinv_id']==$unf['uinv_id']?'selected':'').'>'.$unf['uinv_name'].'</option> ');
               
                ?>
                <?php } ?>
               
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
                  <?php 
               $uf=mysqli_query($coon,"SELECT * FROM `foct` where un_fk='".$unfw['uinv_id']."' ");
              while ($unf=mysqli_fetch_assoc($uf)){
                echo('<option value="'.$unf['foct_id'].'"'.($unfw['foct_id']==$unf['foct_id']?'selected':'').'>'.$unf['foct_name'].'</option> ');
                } 
              ?>
                                    </select>
                                </div>
                            </div>
                         
                              <div class="form-group mar_ned col-md-12">
                                <div class="">
                                   <label for="email">القسم--التخصص</label>
                                </div>
                                <div class="">

                              <select name="spe_id"  id="spe_id" class="form-control" >
       
                  <option value=""> أخترالقسم(التخصص)...</option>
                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
              $ud=mysqli_query($coon,"SELECT * FROM `specialist` where foct_id='".$unfw['foct_id']."' and uinv_id='".$unfw['uinv_id']."'   ");
              while ($und=mysqli_fetch_assoc($ud)){
                echo('<option value="'.$und['spe_id'].'"'.($unfw['spe_id']==$und['spe_id']?'selected':'').'>'.$und['spe_name'].'</option> ');
                }
              ?>
                                  
                </select>
                   </div>
                     </div>
                        
                         <input type="submit" name="submit" class="btn btn-primary btn-info-full " value="حفظ البيانات"/>
                             </div>
                        <div class="col-md-4">
                            
                            
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
                   echo('<option value="'.$unf['level_id'].'"'.($unfw['level_id']==$unf['level_id']?'selected':'').'>'.$unf['level_name'].'</option> ');
               
              }
                  
                ?>
               
               
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
                                                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $uf=mysqli_query($coon,"SELECT * FROM `term` where laval_id='".$unfw['level_id']."' ");
              while ($unf=mysqli_fetch_assoc($uf)){
                   echo('<option value="'.$unf['term_id'].'"'.($unfw['term_id']==$unf['term_id']?'selected':'').'>'.$unf['term_name'].'</option> ');
               
              }
                  
                ?>
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
                                                                 <?php  error_reporting(E_ALL ^ E_NOTICE);
               
              $uf=mysqli_query($coon,"SELECT * FROM `subject_distroibution` sd , subject sj where sd.uinv_id='".$unfw['uinv_id']."' and sd.foct_id='".$unfw['foct_id']."' 
              and sd.spe_id='".$unfw['spe_id']."' and sd.level_id='".$unfw['level_id']."' and sd.term_id='".$unfw['term_id']."' and sd.subject_id=sj.subject_id ");
              while ($unf=mysqli_fetch_assoc($uf)){
                   echo('<option value="'.$unf['subject_id'].'"'.($unfw['subject_id']==$unf['subject_id']?'selected':'').'>'.$unf['SubjectName'].'</option> ');
               
              }
                  
                ?>  
                                    </select>
                                </div>
                            </div>
                            <hr class="line">
                            	<h4>اضافة مرجع</h4>
      			<hr class="line">
      			<div class="row">

      				<div class="col-md-12">
      					
                        <input type="file" name="upload" >
                        
                        
      				</div>

      			</div>
                        
                        </div>
                     
                     
                    
                        </div>
                    
                    
              <?php }?>
            </form>
        
 
   </div>
               </div>
    
</div>

                   
                 </div>
                
                
             </div>
            <!-- /. PAGE INNER  -->
        </div>
    
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

 

<?php } ?>

<!--  الملخصات -->
<?php
 if(isset($_POST['r']) && $_POST['r']=='up_summaries'){
$sum_id=$_POST['sum_id'];

?>


   <div id="page-wrapper" >
        <div id="page-inner">
           

<div class="row" >
<div class="col-md-12">
    
<fieldset class="scheduler-border" >
    
<div class="form-inline"  >
 

  
 </div>
</fieldset>

</div>
</div>


    
		
		<div class="panel panel-default">
            
            <div class="container" >
    
    
            <h2>تعديل مرجع</h2>
           
               <div class="panel-body">
    <div class="">
    	 
 
           
            <form  action=" " method="post" enctype="multipart/form-data">
                
                    <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $er=mysqli_query($coon,"SELECT * FROM `summaries` r,uinv u,foct f,specialist s,level le,term t,subject su 
                                     where r.uinv_id=u.uinv_id and r.foct_id=f.foct_id  and r.spe_id=s.spe_id and r.level_id=le.level_id 
                                     and r.term_id=t.term_id and r.subject_id=su.subject_id and r.sum_id='$sum_id'");
              while ($unfw=mysqli_fetch_assoc($er)){
                ?>   
                 <div class="col-md-12">
                    <div class="col-md-4">
<div class="form-group col-md-12 ">
    <label for="email">اسم الملخص </label>
    <input type="text" class="form-control" id="sum_name" name="sum_name" value="<?php echo $unfw['sum_name']; ?> ">
    <input type="hidden" name="sum_id" value="<?php echo $unfw['sum_id']; ?>"> 
    <input type="hidden" name="file_name" value="<?php echo $unfw['file_name']; ?>">
    <input type="hidden" name="size" value="<?php echo $unfw['size']; ?>">
    <input type="hidden" name="type" value="<?php echo $unfw['type']; ?>">
    
  </div>
<div class="form-group col-md-12 ">
    <label for="email">اسم الطالب </label>
     <input type="text" class="form-control" id="student_name" name="student_name" value="<?php echo $unfw['student_name']; ?> ">
   </div>
                        
  <div class="form-group col-md-12 ">
    <label for="email">اسم المدرس </label>
     <input type="text" class="form-control" id="teacher_name" name="teacher_name" value="<?php echo $unfw['teacher_name']; ?> ">
    
    
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
                   echo('<option value="'.$unf['uinv_id'].'"'.($unfw['uinv_id']==$unf['uinv_id']?'selected':'').'>'.$unf['uinv_name'].'</option> ');
               
                ?>
                <?php } ?>
               
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
                  <?php 
               $uf=mysqli_query($coon,"SELECT * FROM `foct` where un_fk='".$unfw['uinv_id']."' ");
              while ($unf=mysqli_fetch_assoc($uf)){
                echo('<option value="'.$unf['foct_id'].'"'.($unfw['foct_id']==$unf['foct_id']?'selected':'').'>'.$unf['foct_name'].'</option> ');
                } 
              ?>
                                    </select>
                                </div>
                            </div>
                         
                              <div class="form-group mar_ned col-md-12">
                                <div class="">
                                   <label for="email">القسم--التخصص</label>
                                </div>
                                <div class="">

                              <select name="spe_id"  id="spe_id" class="form-control" >
       
                  <option value=""> أخترالقسم(التخصص)...</option>
                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
              $ud=mysqli_query($coon,"SELECT * FROM `specialist` where foct_id='".$unfw['foct_id']."' and uinv_id='".$unfw['uinv_id']."'   ");
              while ($und=mysqli_fetch_assoc($ud)){
                echo('<option value="'.$und['spe_id'].'"'.($unfw['spe_id']==$und['spe_id']?'selected':'').'>'.$und['spe_name'].'</option> ');
                }
              ?>
                                  
                </select>
                   </div>
                     </div>
                        
                         <input type="submit" name="submit" class="btn btn-primary btn-info-full " value="حفظ البيانات"/>
                             </div>
                        <div class="col-md-4">
                            
                            
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
                   echo('<option value="'.$unf['level_id'].'"'.($unfw['level_id']==$unf['level_id']?'selected':'').'>'.$unf['level_name'].'</option> ');
               
              }
                  
                ?>
               
               
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
                                                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $uf=mysqli_query($coon,"SELECT * FROM `term` where laval_id='".$unfw['level_id']."' ");
              while ($unf=mysqli_fetch_assoc($uf)){
                   echo('<option value="'.$unf['term_id'].'"'.($unfw['term_id']==$unf['term_id']?'selected':'').'>'.$unf['term_name'].'</option> ');
               
              }
                  
                ?>
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
                                                                 <?php  error_reporting(E_ALL ^ E_NOTICE);
               
              $uf=mysqli_query($coon,"SELECT * FROM `subject_distroibution` sd , subject sj where sd.uinv_id='".$unfw['uinv_id']."' and sd.foct_id='".$unfw['foct_id']."' 
              and sd.spe_id='".$unfw['spe_id']."' and sd.level_id='".$unfw['level_id']."' and sd.term_id='".$unfw['term_id']."' and sd.subject_id=sj.subject_id ");
              while ($unf=mysqli_fetch_assoc($uf)){
                   echo('<option value="'.$unf['subject_id'].'"'.($unfw['subject_id']==$unf['subject_id']?'selected':'').'>'.$unf['SubjectName'].'</option> ');
               
              }
                  
                ?>  
                                    </select>
                                </div>
                            </div>
                            <hr class="line">
                            	<h4>اضافة مرجع</h4>
      			<hr class="line">
      			<div class="row">

      				<div class="col-md-12">
      					
                        <input type="file" name="upload" >
                        
                        
      				</div>

      			</div>
                        
                        </div>
                     
                     
                    
                        </div>
                    
                    
              <?php }?>
            </form>
        
 
   </div>
               </div>
    
</div>

                   
                 </div>
                
                
             </div>
            <!-- /. PAGE INNER  -->
        </div>
    
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

 

<?php } ?>

<?php
 if(isset($_POST['r']) && $_POST['r']=='summaries'){
$uinv_id=$_POST['uinv_id']; 
$subject_id=$_POST['subject_id'];
$spe_id=$_POST['spe_id'];

?> 

  <div id="aa">
                        <div class="panel-body">
                            <div class="table-sorting table-responsive " id="subjectresult">
                                
                                  
                               
                                <table class="table table-striped table-bordered table-hover" id="table22" >

                                    <thead>
                                        <tr>
                                          
                                            <th>رقم</th> 
                                            <th>رقم المرجع</th>
                                            <th>اسم المرجع</th>
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
                                     and r.term_id=t.term_id and r.subject_id=su.subject_id and r.uinv_id='$uinv_id'    and r.spe_id='".$spe_id."' and r.subject_id ='".$subject_id."'");

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
                                                   <?php $SS="<script> '$resu'.substring(0,5); </script>"?>
                                                  
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
                  
         

<?php } ?>

<!-- بحوثات التخرج -->
<?php
 if(isset($_POST['r']) && $_POST['r']=='up_graduation_project'){
$gre_id=$_POST['gre_id'];

?>


   <div id="page-wrapper" >
        <div id="page-inner">
           

<div class="row" >
<div class="col-md-12">
    
<fieldset class="scheduler-border" >
    
<div class="form-inline"  >
 

  
 </div>
</fieldset>

</div>
</div>


    
		
		<div class="panel panel-default">
            
            <div class="container" >
    
    
            <h2>تعديل مرجع</h2>
           
               <div class="panel-body">
    <div class="">
    	 
 
           
            <form  action=" " method="post" enctype="multipart/form-data">
                
                    <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $er=mysqli_query($coon,"SELECT * FROM `graduation_project` r,uinv u,foct f,specialist s
                                     where r.uinv_id=u.uinv_id and r.foct_id=f.foct_id  and r.spe_id=s.spe_id  and r.gre_id='$gre_id'");
              while ($unfw=mysqli_fetch_assoc($er)){
                ?>   
                 <div class="col-md-12">
                    <div class="col-md-4">
<div class="form-group col-md-12 ">
    <label for="email">اسم البحث </label>
    <input type="text" class="form-control" id="ger_name" name="ger_name" value="<?php echo $unfw['ger_name']; ?> ">
    <input type="hidden" name="gre_id" value="<?php echo $unfw['gre_id']; ?>"> 
    <input type="hidden" name="file_name" value="<?php echo $unfw['file_name']; ?>">
    <input type="hidden" name="size" value="<?php echo $unfw['size']; ?>">
    <input type="hidden" name="type" value="<?php echo $unfw['type']; ?>">
    
  </div>

                        
  <div class="form-group col-md-12 ">
    <label for="email">مشرف المشروع </label>
     <input type="text" class="form-control" id="supervisor_name" name="supervisor_name" value="<?php echo $unfw['supervisor_name']; ?> ">
    
    
  </div>
                        <div class="form-group col-md-12 ">
    <label for="email">تاريخ المشروع  </label>
     <input type="date" class="form-control" id="date_gra" name="date_gra"  value="<?php echo $unfw['date_gra']; ?> ">
    
    
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
                   echo('<option value="'.$unf['uinv_id'].'"'.($unfw['uinv_id']==$unf['uinv_id']?'selected':'').'>'.$unf['uinv_name'].'</option> ');
               
                ?>
                <?php } ?>
               
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
                  <?php 
               $uf=mysqli_query($coon,"SELECT * FROM `foct` where un_fk='".$unfw['uinv_id']."' ");
              while ($unf=mysqli_fetch_assoc($uf)){
                echo('<option value="'.$unf['foct_id'].'"'.($unfw['foct_id']==$unf['foct_id']?'selected':'').'>'.$unf['foct_name'].'</option> ');
                } 
              ?>
                                    </select>
                                </div>
                            </div>
                         
                              <div class="form-group mar_ned col-md-12">
                                <div class="">
                                   <label for="email">القسم--التخصص</label>
                                </div>
                                <div class="">

                              <select name="spe_id"  id="spe_id" class="form-control" >
       
                  <option value=""> أخترالقسم(التخصص)...</option>
                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
              $ud=mysqli_query($coon,"SELECT * FROM `specialist` where foct_id='".$unfw['foct_id']."' and uinv_id='".$unfw['uinv_id']."'   ");
              while ($und=mysqli_fetch_assoc($ud)){
                echo('<option value="'.$und['spe_id'].'"'.($unfw['spe_id']==$und['spe_id']?'selected':'').'>'.$und['spe_name'].'</option> ');
                }
              ?>
                                  
                </select>
                   </div>
                     </div>
                        
                         <input type="submit" name="submit" class="btn btn-primary btn-info-full " value="حفظ البيانات"/>
                             </div>
                        <div class="col-md-4">
                            
                            
                         
                         
                     
                            
                            
                            
                            <hr class="line">
                            	<h4>اضافة مرجع</h4>
      			<hr class="line">
      			<div class="row">

      				<div class="col-md-12">
      					
                        <input type="file" name="upload" >
                        
                        
      				</div>

      			</div>
                        
                        </div>
                     
                     
                    
                        </div>
                    
                    
              <?php }?>
            </form>
        
 
   </div>
               </div>
    
</div>

                   
                 </div>
                
                
             </div>
            <!-- /. PAGE INNER  -->
        </div>
    
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

 

<?php } ?>
<?php
 if(isset($_POST['r']) && $_POST['r']=='graduation_project'){
$uinv_id=$_POST['uinv_id']; 
$spe_id=$_POST['spe_id'];

?> 

   <div id="aa">
                        <div class="panel-body">
                            <div class="table-sorting table-responsive " id="subjectresult">
                                
                                  
                               
                                <table class="table table-striped table-bordered table-hover" id="table22" >

                                    <thead>
                                        <tr>
                                          
                                            <th>رقم</th> 
                                            <th>رقم لبحث</th>
                                            <th>اسم البحث</th>
                                            <th>مشرف المشروع</th>
                                            <th>تاريخ المشروع</th>
											<th>الجامعة</th>
                                            <th>الكلية</th>
                                            <th>التخصص</th>
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
                                         
									 $result=mysqli_query($coon,"SELECT * FROM `graduation_project` r,uinv u,foct f,specialist s
                                     where r.uinv_id=u.uinv_id and r.foct_id=f.foct_id  and r.spe_id=s.spe_id and r.uinv_id='".$uinv_id."'  and r.spe_id='".$spe_id."'  ");

                                                        $i=1;
                                        $cunt=1;
                                                   while($un=mysqli_fetch_array($result)){
                                                  $i=$un['gre_id']; 
                                                     
							                                 ?>		
						                             <tr>          
                                            <td><?php echo $cunt++; ?></td>
                                            <td><?php echo $un['gre_id']; ?></td> 
								        	<td><?php echo $un['ger_name']; ?></td>
                                            <td><?php echo $un['supervisor_name']; ?></td>
                                            <td><?php echo $un['date_gra']; ?></td>
                                            <td><?php echo $un['uinv_name']; ?></td>
                                            <td><?php echo $un['foct_name']; ?></td>
                                            <td><?php echo $un['spe_name']; ?></td>
                                            <td><?php echo $un['date']; ?></td>
                                             <td><?php echo $un['file_name']; ?></td>
                                             <td><?php
                                                       $su=$un['size']/1024;
                                                       $resu=$su/1024;?>
                                                   <?php $SS="<script> '$resu'.substring(0,5); </script>"?>
                                                  
                                                     <?php  echo $SS."M"; ?>
                                                         </td>
                                             <td><?php echo $un['type']; ?></td>
   
                                                         
  <td><p title="update">                               
<a href="#" onclick="GetFeeFor(<?php echo $un['gre_id'];?>)" 
   data-toggle="modal" data-target="#e" class="btn btn-success btn-sm" >
<span class="glyphicon glyphicon-pencil">
    </span> تعديل </a></p>
      
                                                         </td>        
  <td>   
      <p title="Delete"><a href="#" onclick="Delet(<?php echo $un['gre_id']; ?>)"    data-toggle="modal" data-target="#tooltip"    name="del" class="btn btn-danger btn-sm" >
      <span class="glyphicon glyphicon-trash"></span> حذف</a></p> 
 
                                                         
                                                         </td> 
                                                         
                       <?php 	}   ?>  
                              </tbody>
                                       
                                </table>

                
                                       
                            </div>
             </div></div>
             

<?php } ?>

<?php
 if(isset($_POST['r']) && $_POST['r']=='video_i'){
$uinv_id=$_POST['uinv_id']; 
$subject_id=$_POST['subject_id'];
$spe_id=$_POST['spe_id'];
?>
 <div id="aa">
            <div class="panel panel-default   ">
                       
 <div class="panel-body">
                            <div   style="overflow-x: clip;" id="subjectresult">
                              
 <div class="container-fluid">
  <div class="row">
    	<!-- BEGIN PRODUCTS -->

         <?php
  
$query= "select * from  videos where uinv_id='".$uinv_id."' and subject_id='".$subject_id."' and spe_id='".$spe_id."' ";
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
                <h6>  <?php echo "الاسم : ".$row['vid_name']; ?></h6>
                <h6>  <?php echo "الحجم : ".$row['size']; ?></h6>
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
  
<?php }?>


 <?php
 if(isset($_POST['r']) && $_POST['r']=='up_pass'){
$acc_id=$_POST['acc_id'];

?>


   <div id="page-wrapper" >
        <div id="page-inner">
           

<div class="row" >
<div class="col-md-12">
    
<fieldset class="scheduler-border" >
    
<div class="form-inline"  >
 

  
 </div>
</fieldset>

</div>
</div>


    
		
		<div class="panel panel-default">
            
            <div class="container" >
    
    
           
           
               <div class="panel-body">
    <div class="">
    	 
 
           
            <form  action=" " method="post" enctype="multipart/form-data">
                
                    <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $er=mysqli_query($coon,"SELECT * FROM `account` where user_id='$acc_id'");
              while ($unfw=mysqli_fetch_assoc($er)){
                ?>   
                 <div class="col-md-12">
                    <div class="col-md-4">
<div class="form-group col-md-12 ">
    <label for="email">اسم المستخدم </label>
    <input type="text" class="form-control" id="username" name="username" value="<?php echo $unfw['username']; ?> ">
    <input type="hidden" name="user_id" value="<?php echo $unfw['user_id']; ?>">
     
  </div>
            <div class="form-group col-md-12 ">
    <label for="email">كلمة المرور</label>
    <input type="text" class="form-control" id="password" name="password" value="<?php echo $unfw['password']; ?> ">
     
     
  </div>       
                      
                        
                         <input type="submit" name="submit_p" class="btn btn-primary btn-info-full " value="تعديل"/>
                             </div>
                       
                     
                    
                        </div>
                    
                    
              <?php }?>
            </form>
        
 
   </div>
               </div>
    
</div>

                   
                 </div>
                
                
             </div>
            <!-- /. PAGE INNER  -->
        </div>
    
         
 
 

<?php } ?>

 <?php
   if(isset($_POST['r']) && $_POST['r']=='up_techer') {
                $tea_id=$_POST['tea_id'];
    	 $result=mysqli_query($coon,"SELECT * FROM teacher t, account a where t.user_id=a.user_id and t.tea_id='".$tea_id."' ");
                                                   while($un=mysqli_fetch_array($result)){
                ?>    
                  <div role="tabpanel" class="tab-pane" id="profile">
<div class="container-fluid mypad">
 <form action='' method='post'>
  <div class="form-group">
    <label  >اسم المدرس:</label>
    <input type="text" class="form-control" name="t_name" value="<?php echo $un['t_name']; ?>">
      <input type="hidden"  name="tea_id" value="<?php echo $un['tea_id']; ?>">
      <input type="hidden"  name="user_id" value="<?php echo $un['user_id']; ?>">
  </div>
  <div class="form-group">
    <label  >اسم المستخدم</label>
    <input type="namber" class="form-control" name="username" value="<?php echo $un['username']; ?>">
  </div>
      <div class="form-group">
    <label  >كلمة المرور</label>
    <input type="password" class="form-control" name="password" value="<?php echo $un['password']; ?>">
  </div>

   <input type="submit" name="up_t" class="btn btn-info btn-info-full " value="تعديل"/>
 <!-- <button type="submit" class="btn btn-info" name="submit">Submit</button> -->
</form>
</div>
</div>
                <?php }}?>
<?php
 if(isset($_POST['r']) && $_POST['r']=='audio_i'){
$uinv_id=$_POST['uinv_id']; 
$subject_id=$_POST['subject_id'];
$spe_id=$_POST['spe_id'];
?>
 <div id="aa">
            <div class="panel panel-default   ">
                       
 <div class="panel-body">
                            <div   style="overflow-x: clip;" id="subjectresult">
                              
 <div class="container-fluid">
  <div class="row">
    	<!-- BEGIN PRODUCTS -->

         <?php
  
$query= "select * from  audio where uinv_id='".$uinv_id."' and subject_id='".$subject_id."' and spe_id='".$spe_id."' ";
$result= mysqli_query($coon,$query);

while ($row= mysqli_fetch_array($result)) {
    ?>

  	  <div class=" col-md-3  col-xs-12 " style="padding-bottom: 20px;"  id="myTable">
      <div class="card ">
         <audio controls style="height: 60px;
    width:100%; " >
           <source src="file/uploaded_audio/<?php echo $row['name']; ?>" type="<?php echo $row['type'];  ?>"/>


            </audio>
       
        <div class="card-footer text-muted">
          <div class="row">
            <div class="col">
                <h6>  <?php echo "الاسم : ".$row['audio_name']; ?></h6>
                <h6>  <?php echo "الحجم : ".$row['size']; ?></h6>
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

   <p title="Delete" style="background: dimgray;"><a href="#" onclick="Delet(<?php echo $row['audio_id']; ?>)"    data-toggle="modal" data-target="#tooltip"    name="del" class="btn " >
      <span class="glyphicon glyphicon-trash"></span> حذف</a></p> 
        <p title="update" style="background: dimgray;">                               
<a href="#" onclick="GetFeeFor(<?php echo $row['audio_id'];?>)" 
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

<?php }?>
<?php
 if(isset($_POST['r']) && $_POST['r']=='up_video'){
$vid_id=$_POST['vid_id'];

?>


   <div id="page-wrapper" >
        <div id="page-inner">
           

<div class="row" >
<div class="col-md-12">
    
<fieldset class="scheduler-border" >
    
<div class="form-inline"  >
 

  
 </div>
</fieldset>

</div>
</div>


    
		
		<div class="panel panel-default">
            
            <div class="container" >
    
    
            <h2>تعديل الفيديو</h2>
           
               <div class="panel-body">
    <div class="">
    	 
 
           
            <form  action=" " method="post" enctype="multipart/form-data">
                
                    <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $er=mysqli_query($coon,"SELECT * FROM `videos` r,uinv u,foct f,specialist s,level le,term t,subject su 
                                     where r.uinv_id=u.uinv_id and r.foct_id=f.foct_id  and r.spe_id=s.spe_id and r.level_id=le.level_id 
                                     and r.term_id=t.term_id and r.subject_id=su.subject_id and r.vid_id='$vid_id'");
              while ($unfw=mysqli_fetch_assoc($er)){
                ?>   
                 <div class="col-md-12">
                    <div class="col-md-4">
<div class="form-group col-md-12 ">
    <label for="email">اسم الفيديو </label>
    <input type="text" class="form-control" id="vid_name" name="vid_name" value="<?php echo $unfw['vid_name']; ?> ">
    <input type="hidden" name="vid_id" value="<?php echo $unfw['vid_id']; ?>"> 
    <input type="hidden" name="file_name" value="<?php echo $unfw['file_name']; ?>">
    <input type="hidden" name="size" value="<?php echo $unfw['size']; ?>">
    <input type="hidden" name="type" value="<?php echo $unfw['type']; ?>">
    
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
                   echo('<option value="'.$unf['uinv_id'].'"'.($unfw['uinv_id']==$unf['uinv_id']?'selected':'').'>'.$unf['uinv_name'].'</option> ');
               
                ?>
                <?php } ?>
               
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
                  <?php 
               $uf=mysqli_query($coon,"SELECT * FROM `foct` where un_fk='".$unfw['uinv_id']."' ");
              while ($unf=mysqli_fetch_assoc($uf)){
                echo('<option value="'.$unf['foct_id'].'"'.($unfw['foct_id']==$unf['foct_id']?'selected':'').'>'.$unf['foct_name'].'</option> ');
                } 
              ?>
                                    </select>
                                </div>
                            </div>
                         
                              <div class="form-group mar_ned col-md-12">
                                <div class="">
                                   <label for="email">القسم--التخصص</label>
                                </div>
                                <div class="">

                              <select name="spe_id"  id="spe_id" class="form-control" >
       
                  <option value=""> أخترالقسم(التخصص)...</option>
                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
              $ud=mysqli_query($coon,"SELECT * FROM `specialist` where foct_id='".$unfw['foct_id']."' and uinv_id='".$unfw['uinv_id']."'   ");
              while ($und=mysqli_fetch_assoc($ud)){
                echo('<option value="'.$und['spe_id'].'"'.($unfw['spe_id']==$und['spe_id']?'selected':'').'>'.$und['spe_name'].'</option> ');
                }
              ?>
                                  
                </select>
                   </div>
                     </div>
                        
                         <input type="submit" name="submit" class="btn btn-primary btn-info-full " value="حفظ البيانات"/>
                             </div>
                        <div class="col-md-4">
                            
                            
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
                   echo('<option value="'.$unf['level_id'].'"'.($unfw['level_id']==$unf['level_id']?'selected':'').'>'.$unf['level_name'].'</option> ');
               
              }
                  
                ?>
               
               
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
                                                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $uf=mysqli_query($coon,"SELECT * FROM `term` where laval_id='".$unfw['level_id']."' ");
              while ($unf=mysqli_fetch_assoc($uf)){
                   echo('<option value="'.$unf['term_id'].'"'.($unfw['term_id']==$unf['term_id']?'selected':'').'>'.$unf['term_name'].'</option> ');
               
              }
                  
                ?>
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
                                                                 <?php  error_reporting(E_ALL ^ E_NOTICE);
               
              $uf=mysqli_query($coon,"SELECT * FROM `subject_distroibution` sd , subject sj where sd.uinv_id='".$unfw['uinv_id']."' and sd.foct_id='".$unfw['foct_id']."' 
              and sd.spe_id='".$unfw['spe_id']."' and sd.level_id='".$unfw['level_id']."' and sd.term_id='".$unfw['term_id']."' and sd.subject_id=sj.subject_id ");
              while ($unf=mysqli_fetch_assoc($uf)){
                   echo('<option value="'.$unf['subject_id'].'"'.($unfw['subject_id']==$unf['subject_id']?'selected':'').'>'.$unf['SubjectName'].'</option> ');
               
              }
                  
                ?>  
                                    </select>
                                </div>
                            </div>
                            <hr class="line">
                            	<h4>اضافة فيديو</h4>
      			<hr class="line">
      			<div class="row">

      				<div class="col-md-12">
      					
                        <input type="file" name="upload" >
                        
                        
      				</div>

      			</div>
                        
                        </div>
                     
                     
                    
                        </div>
                    
                    
              <?php }?>
            </form>
        
 
   </div>
               </div>
    
</div>

                   
                 </div>
                
                
             </div>
            <!-- /. PAGE INNER  -->
        </div>
    
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

 

<?php } ?>
<?php
 if(isset($_POST['r']) && $_POST['r']=='up_audio'){
$audio_id=$_POST['audio_id'];

?>


   <div id="page-wrapper" >
        <div id="page-inner">
           

<div class="row" >
<div class="col-md-12">
    
<fieldset class="scheduler-border" >
    
<div class="form-inline"  >
 

  
 </div>
</fieldset>

</div>
</div>


    
		
		<div class="panel panel-default">
            
            <div class="container" >
    
    
            <h2>تعديل الفيديو</h2>
           
               <div class="panel-body">
    <div class="">
    	 
 
           
            <form  action=" " method="post" enctype="multipart/form-data">
                
                    <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $er=mysqli_query($coon,"SELECT * FROM `audio` r,uinv u,foct f,specialist s,level le,term t,subject su 
                                     where r.uinv_id=u.uinv_id and r.foct_id=f.foct_id  and r.spe_id=s.spe_id and r.level_id=le.level_id 
                                     and r.term_id=t.term_id and r.subject_id=su.subject_id and r.audio_id='$audio_id'");
              while ($unfw=mysqli_fetch_assoc($er)){
                ?>   
                 <div class="col-md-12">
                    <div class="col-md-4">
<div class="form-group col-md-12 ">
    <label for="email">اسم التسجيل الصوتي </label>
    <input type="text" class="form-control" id="audio_name" name="audio_name" value="<?php echo $unfw['audio_name']; ?> ">
    <input type="hidden" name="audio_id" value="<?php echo $unfw['audio_id']; ?>"> 
    <input type="hidden" name="file_name" value="<?php echo $unfw['file_name']; ?>">
    <input type="hidden" name="size" value="<?php echo $unfw['size']; ?>">
    <input type="hidden" name="type" value="<?php echo $unfw['type']; ?>">
    
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
                   echo('<option value="'.$unf['uinv_id'].'"'.($unfw['uinv_id']==$unf['uinv_id']?'selected':'').'>'.$unf['uinv_name'].'</option> ');
               
                ?>
                <?php } ?>
               
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
                  <?php 
               $uf=mysqli_query($coon,"SELECT * FROM `foct` where un_fk='".$unfw['uinv_id']."' ");
              while ($unf=mysqli_fetch_assoc($uf)){
                echo('<option value="'.$unf['foct_id'].'"'.($unfw['foct_id']==$unf['foct_id']?'selected':'').'>'.$unf['foct_name'].'</option> ');
                } 
              ?>
                                    </select>
                                </div>
                            </div>
                         
                              <div class="form-group mar_ned col-md-12">
                                <div class="">
                                   <label for="email">القسم--التخصص</label>
                                </div>
                                <div class="">

                              <select name="spe_id"  id="spe_id" class="form-control" >
       
                  <option value=""> أخترالقسم(التخصص)...</option>
                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
              $ud=mysqli_query($coon,"SELECT * FROM `specialist` where foct_id='".$unfw['foct_id']."' and uinv_id='".$unfw['uinv_id']."'   ");
              while ($und=mysqli_fetch_assoc($ud)){
                echo('<option value="'.$und['spe_id'].'"'.($unfw['spe_id']==$und['spe_id']?'selected':'').'>'.$und['spe_name'].'</option> ');
                }
              ?>
                                  
                </select>
                   </div>
                     </div>
                        
                         <input type="submit" name="submit" class="btn btn-primary btn-info-full " value="حفظ البيانات"/>
                             </div>
                        <div class="col-md-4">
                            
                            
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
                   echo('<option value="'.$unf['level_id'].'"'.($unfw['level_id']==$unf['level_id']?'selected':'').'>'.$unf['level_name'].'</option> ');
               
              }
                  
                ?>
               
               
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
                                                                   <?php  error_reporting(E_ALL ^ E_NOTICE);
 
              $uf=mysqli_query($coon,"SELECT * FROM `term` where laval_id='".$unfw['level_id']."' ");
              while ($unf=mysqli_fetch_assoc($uf)){
                   echo('<option value="'.$unf['term_id'].'"'.($unfw['term_id']==$unf['term_id']?'selected':'').'>'.$unf['term_name'].'</option> ');
               
              }
                  
                ?>
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
                                                                 <?php  error_reporting(E_ALL ^ E_NOTICE);
               
              $uf=mysqli_query($coon,"SELECT * FROM `subject_distroibution` sd , subject sj where sd.uinv_id='".$unfw['uinv_id']."' and sd.foct_id='".$unfw['foct_id']."' 
              and sd.spe_id='".$unfw['spe_id']."' and sd.level_id='".$unfw['level_id']."' and sd.term_id='".$unfw['term_id']."' and sd.subject_id=sj.subject_id ");
              while ($unf=mysqli_fetch_assoc($uf)){
                   echo('<option value="'.$unf['subject_id'].'"'.($unfw['subject_id']==$unf['subject_id']?'selected':'').'>'.$unf['SubjectName'].'</option> ');
               
              }
                  
                ?>  
                                    </select>
                                </div>
                            </div>
                            <hr class="line">
                            	<h4>اضافة ملف صوتي</h4>
      			<hr class="line">
      			<div class="row">

      				<div class="col-md-12">
      					
                        <input type="file" name="upload" >
                        
                        
      				</div>

      			</div>
                        
                        </div>
                     
                     
                    
                        </div>
                    
                    
              <?php }?>
            </form>
        
 
   </div>
               </div>
    
</div>

                   
                 </div>
                
                
             </div>
            <!-- /. PAGE INNER  -->
        </div>
    
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

 

<?php } ?>
