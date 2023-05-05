
<html >
  <head>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
       <script src="js/bootstrap.min.js" type="text/javascript"></script>
      <script src="js/jquery.min.js" type="text/javascript"></script>
  
    <meta charset="utf-8">
      
      <link href="signin.css" rel="stylesheet">
       <?php include('config.php');
      error_reporting(E_ALL ^ E_NOTICE);
      ?>
           

 
    </head>
  <body>
 <!-- main-->



      <form action="Subject_viwe.php" align="center" class="form-signin" method="post"  >
       
      <!--<label for="country" >اختر اسم الجامعة</label>
          <select class="form-control" id="uinvrsty" required name="uinvrsty" >
            <option value="">Choose...</option>
              <?php/*  error_reporting(E_ALL ^ E_NOTICE);
              $u=mysqli_query($coon,"SELECT * FROM `uinv` ");
              while ($un=mysqli_fetch_assoc($u)){
                echo('<option value="'.$un['uinv_id'].'">'.$un['uinv_name'].'</option> ');
                }*/
              ?>
          </select>-->

       
          <label for="country">اختر الكلية</label>
          <select class="form-control" id="foct" name="foct" >

            <option value="">Choose...</option>
 <?php
  
$query= "select * from foct ";
$result= mysqli_query($coon,$query);

while ($row= mysqli_fetch_array($result)) {
    ?>
    <option value='<?php echo $row['foct_id'] ?>'>   <?php echo $row['foct_name'] ?></option>
<?php }  ?>
             

          </select>


       
          <label for="specialist" >اختر القسم--التخصص</label>
          <select class="form-control"  id="specialist" name="specialist" >
            <option value='' selected='selected' >Choose...</option> 
             


       </select>
          <label for="level">اختر المستوى الدراسي</label>
         
          <select class="form-control" id="level" name="level">
              <option value='' selected='selected' >Choose...</option> 


          </select>
       
              <br>
              <br>
          <button type="submit" class="btn btn-lg btn-block btn-primary">دخول</button>
       
   </form>
              <script>
   $(document).ready(function()
   {
    $("#foct").change(function(){
      var foct_id = $(this).val();
    
      $.ajax({
      url: "specialist.php",
      type: "POST",
      data: {
      foct_id: foct_id},
      success: function(data){
        $("#specialist").html(data);
      

      }
      });
    });
       
       $("#specialist").change(function(){
      var spe_id = $(this).val();
      $.ajax({
      url: "level.php",
      type: "POST",
      data: {
      spe_id: spe_id},
      success: function(data){
        $("#level").html(data);
      

      }
      });
    });

     });
</script>




      


  </body>
</html>
