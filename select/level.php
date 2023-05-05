                <?php
include('config.php');
      error_reporting(E_ALL ^ E_NOTICE);


?><option value='' selected='selected' >Choose...</option> <?php
$spe_id=$_POST['spe_id'];
$specialist_query= "SELECT * FROM `specialist_and_level` where spe_id='".$spe_id."' ";
$specialist_result= mysqli_query($coon,$specialist_query);
while ($row1= mysqli_fetch_array($specialist_result)) {
    ?>
    <option value='<?php echo $row1['level_id'] ?>'>   <?php echo $row1['level_id'] ?></option>
<?php }  ?>