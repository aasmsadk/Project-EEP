
  <?php

if($_POST['submit']){
    
    
    

 $username=$_POST['student_name'];
 $addres=$_POST['addres'];
 $phon=$_POST['phone'];
 $email=$_POST['emal'];
 $uinv_id=$_POST['uinv_id'];
 $foct_id=$_POST['foct_id'];
 $specialist=$_POST['specialist'];
 $unv_no_student=$_POST['unv_number_stu'];
 $user_name=$_POST['user_name'];
 $passwrd=$_POST['password'];
 

 $IdTyp=mysqli_query($coon,"select type_id from type_user where type_name='student'");
              $idt="";
                 while ($uc=mysqli_fetch_assoc($IdTyp)){
                 $idt=$uc['type_id'];
                  }

$sq2="INSERT INTO `account` (`username`,`password`,`type_user`)
                 VALUES ('$user_name','$passwrd','$idt')";
                  $result2= mysqli_query($coon,$sq2);

 $moha=mysqli_query($coon,"SELECT `user_id` FROM `account` WHERE `user_id` = (SELECT MAX( `user_id` ) FROM  `account`)");
    
              while ($unf=mysqli_fetch_assoc($moha)){
                $id=$unf['user_id'];
              

 $sqw="INSERT INTO `student`(`student_name`,`addres`,`phone`,`emal`,`uinv_id`,`foct_id`,`spe_id`,`unv_no_student`,`user_id`)
         VALUES (
          '$username',
          '$addres',
          '$phon',
          '$email',
          '$uinv_id',
          '$foct_id',
          '$specialist',
          '$unv_no_student',
          '$id')";

    $result354=mysqli_query($coon,$sqw);
                  }
  }
?>
<style>
.wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;

}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}
.step1 .row {
    margin-bottom:10px;
}
.step_21 {
    border :1px solid #eee;
    border-radius:5px;
    padding:10px;
}
.step33 {
    border:1px solid #ccc;
    border-radius:5px;
    padding-left:10px;
    margin-bottom:10px;
}
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
.mar_ned {
    margin-bottom:10px;
}
.wdth {
    width:25%;
}
.birthdrop {
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    width: 16%;
    outline: 0;
    font-weight: normal;
}


/* according menu */
#accordion-container {
    font-size:13px
}
.accordion-header {
    font-size:13px;
	background:#ebebeb;
	margin:5px 0 0;
	padding:7px 20px;
	cursor:pointer;
	color:#fff;
	font-weight:400;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px
}
.unselect_img{
	width:18px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.active-header {
	-moz-border-radius:5px 5px 0 0;
	-webkit-border-radius:5px 5px 0 0;
	border-radius:5px 5px 0 0;
	background:#F53B27;
}
.active-header:after {
	content:"\f068";
	font-family:'FontAwesome';
	float:right;
	margin:5px;
	font-weight:400
}
.inactive-header {
	background:#333;
}
.inactive-header:after {
	content:"\f067";
	font-family:'FontAwesome';
	float:right;
	margin:4px 5px;
	font-weight:400
}
.glyphicon {
    position: relative;
    top: 20px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.accordion-content {
	display:none;
	padding:20px;
	background:#fff;
	border:1px solid #ccc;
	border-top:0;
	-moz-border-radius:0 0 5px 5px;
	-webkit-border-radius:0 0 5px 5px;
	border-radius:0 0 5px 5px
}
.accordion-content a{
	text-decoration:none;
	color:#333;
}
.accordion-content td{
	border-bottom:1px solid #dcdcdc;
}



@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}

</style>

<div class="container"  >
    <div class="row">
    	<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="البيانات الشخصية">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="بيانات الالكاديمية">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="بيانات تسجيل الدخول">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="الانتهاء">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form  action=" " method="post" >
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">

                    <div class="step1">
                            <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">الاسم كامل</label>
                                <input type="text" class="form-control" name="student_name" placeholder="الاسم كامل">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="addres">العنوان</label>
                                <input type="text" class="form-control"  name="addres" placeholder="العنوان">
                            </div>

                        </div>
                              <!--  <div class="row mar_ned">
                                <div class="col-md-12 col-xs-12">
                                    <p align="right"><stong>تاريخ الميلاد</stong></p>
                                </div>

                                <div class="col-md-8 col-xs-9">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4 wdth">
                                            <select name="dateperth" id="dateperth" class="dropselectsec1">
                                                <option value="">Date</option>
                                                <option value="2">1</option>
                                                <option value="1">2</option>
                                                <option value="4">3</option>
                                                <option value="5">4</option>
                                                <option value="6">5</option>
                                                <option value="3">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-xs-4 wdth">
                                            <select name="dateperth" id="dateperth" class="dropselectsec1">
                                                <option value="">الشهر</option>
                                                <option value="2">Jan</option>
                                                <option value="1">Feb</option>
                                                <option value="4">Mar</option>
                                                <option value="5">Apr</option>
                                                <option value="6">May</option>
                                                <option value="3">June</option>
                                                <option value="7">July</option>
                                                <option value="8">Aug</option>
                                                <option value="9">Sept</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-xs-4 wdth">
                                            <select name="dateperth" id="dateperth" class="dropselectsec1">
                                                <option value="">العام</option>
                                                <option value="2">1990</option>
                                                <option value="1">1991</option>
                                                <option value="4">1992</option>
                                                <option value="5">1993</option>
                                                <option value="6">1994</option>
                                                <option value="3">1995</option>
                                                <option value="7">1996</option>
                                                <option value="8">1997</option>
                                                <option value="10">1998</option>
                                                <option value="11">1999</option>
                                                <option value="12">2000</option>
                                                <option value="13">2001</option>
                                                <option value="14">2002</option>
                                                <option value="15">2003</option>
                                                <option value="16">2004</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                          <!--  <div class="row mar_ned">
                                <div class="col-md-12 col-xs-12">
                                    <p align="right"><stong>الحالة الاجتماعية</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> عازب
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> متزوج
                                    </label>
                                </div>
                            </div>
                            <div class="row mar_ned">
                                <div class="col-md-12 col-xs-12">
                                    <p align="right"><stong>الجنس</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <label class="radio-inline">
                                      <input type="radio" name="mal" id="mal" value="option2"> ذكر
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="fmal" id="fmal" value="option3"> انثى
                                    </label>
                                </div>
                            </div>-->
                        <div class="row">
                            <div class="col-md-6 ">
                                <label for="phon_number">رقم الهاتف</label>
                                <input type="number" class="form-control"  name="phone">
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                            <label for="Email">البريد الالكتروني</label>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <input type="text" class="form-control"  name="emal" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">حفظ و متابعة</button></li>
                        </ul>
                    </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="step2">
                        <h3><strong>بيانات التعليم</strong></h3>
                        <hr>
                            <div class="step_21">

                                <div class="row"style="margin-right: 30px">
                                 <div class="row mar_ned">
                                <div class="col-md-12 col-xs-12">
                                    <p align="right"><stong>اسم الجامعة</stong></p>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select name="uinv_id" id="uinv_id" class="dropselectsec">
                                    <option value="">Choose...</option>
                                        <?php  error_reporting(E_ALL ^ E_NOTICE);
              $u=mysqli_query($coon,"SELECT * FROM `uinv` ");
              while ($un=mysqli_fetch_assoc($u)){
                echo('<option value="'.$un['uinv_id'].'">'.$un['uinv_name'].'</option> ');
                }
              ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mar_ned">
                                <div class="col-md-6 col-xs-6">
                                    <p align="right"><stong>اسم الكلية</stong></p>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select name="foct_id"  id="foct_id" class="dropselectsec">
                                    <option value="">Choose...</option>
              
                 
                                    </select>
                                </div>
                            </div>
                            <div class="row mar_ned">
                                <div class="col-md-12 col-xs-12">
                                    <p align="right"><stong>القسم--التخصص</stong></p>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <select name="specialist" id="specialist"  class="dropselectsec">
                                    <option value="">Choose...</option>  
                                                       
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6 ">
                                <label for="unv_number_stu">الرقم الاكاديمي</label>
                                <input type="number" class="form-control"  name="unv_number_stu"/>
                            </div>
                            </div>
                         </div>
                            </div>
                             <br />
                            <div class="step-22">
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary prev-step">عودة</button></li>
                            <li><button type="button" class="btn btn-primary next-step">حفظ و متابعه</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <div class="step33" >
                             <div class="row"style="margin-right: 30px">
                          <div class="col-md-6">
                                <label for="user_name">اسم المستخدم</label>
                                <input type="text" class="form-control"  name="user_name" placeholder="اسم المستخدم"/>
                            </div>
                            </div>
                              <div class="row"style="margin-right: 30px">
                             <div class="col-md-6">
                                <label for="pass">كلمة السر</label>
                                <input type="password" class="form-control"  name="password" placeholder="كلمة السر"/>
                            </div>
                            </div>
                           <!-- <div class="row"style="margin-right: 30px">
                            <div class="col-md-6">
                                <label for="conf_pass">تأكيد كلمة السر</label>
                                <input type="password" class="form-control"  name="conf_pass" placeholder="تأكيد كلمة السر"/>
                            </div>

                        </div>-->

                        <br />
                        </div>
                        <br />

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default next-step">تخطى</button></li>
                            <li><button type="button" class="btn btn-default prev-step">السابق</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">احفظ وتابع</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <div class="step44">

                             <ul class="list-inline pull-right">
                            <li><h1>تم التسجيل بنجاح</h1></li>
                            <li><button type="button" class="btn btn-default prev-step">السابق</button></li>
                            <li><input type="submit" name="submit" class="btn btn-primary btn-info-full " value="حفظ البيانات"/></li>
                        </ul>


                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
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
