              <?php
include('config.php');
      error_reporting(E_ALL ^ E_NOTICE);
$foct=$_POST['foct_id'];

              $specialist_query= "SELECT * FROM `specialist` where foct_id='".$foct."'    ";
$specialist_result= mysqli_query($coon,$specialist_query);
 ?><select class="form-control"  id="specialist" name="specialist" >
            <option value='' selected='selected' >Choose...</option><?php 
             
while ($row1= mysqli_fetch_array($specialist_result)) {
    ?>
    <option value='<?php echo $row1['spe_id'] ?>'>   <?php echo $row1['spe_name'] ?></option>
<?php } ?>
 </select>
                   
          