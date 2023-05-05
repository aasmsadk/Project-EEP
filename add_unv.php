<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Hello!</title>
  <?php
 include ('config.php');

 //$un_id=$_POST['id'];
 //$un_name=$_POST['ne'];
 //$s="INSERT INTO `uinv` (`uinv_id`, `uinv_name`) VALUES ('$un_id', '$un_name')";
  $username=$_POST['id'];
 $addres=$_POST['ne'];
 $phon=$_POST['a'];
 $email=$_POST['s'];
 $un=$_POST['d'];
 $foctry=$_POST['f'];
 $dept=$_POST['g'];
 $unv_no_student=$_POST['h'];
 $user_name=$_POST['j'];
 $passwrd=$_POST['k'];

 $sq="INSERT INTO `db_1`.`studen` ( `student_name`, `addres`, `phone`, `emal`, `unv`, `foct`, `dept`, `unv_no_student`, `user_name`, `password`)
         VALUES (

          '$username',
          '$addres',
          '$phon',
          '$email',
          '$un',
          '$foctry',
          '$dept',
          '$unv_no_student',
          '$user_name',
          '$passwrd')";
 if($_POST['submit']){
   mysqli_query($coon,$sq);
 }
?>
</head>

<body>


 <table border="2" bordercolorlight="#000080" bordercolordark="#808000">
 </table>
<form action="" method="post">
 <input type="text" name="id" />
 <input type="text" name="ne" />
 <input type="number" name="a" />
 <input type="text" name="s" />
 <input type="text" name="d" />
 <input type="text" name="f" />
 <input type="text" name="g" />
 <input type="number" name="h" />
 <input type="text" name="j" />
 <input type="text" name="k" />

 <input type="submit" name="submit" />



</form>
</body>

</html>
