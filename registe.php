<?php
 include("include/heeder.php");
?>
<article class="col-md-9 col-lg-9 art_bg">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form">
			<h2>الرجاء تسجيل البيانات <small>للدخول الى المكتبة و الحصول مميزات كثيرة</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="الاسم الاول" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="الاسم الثاني" tabindex="2">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="اسم المستخدم" tabindex="3">
			</div>
   <div class="form-group" id="mm">
          <label for="country" >اختر اسم الجامعة</label>
          <select class="form-control input-lg" id="country" required>
            <option value="">Choose...</option>
            <option> جامعة العطاء</option>
            <option> جامعة الحكمة</option>
            <option> جامعة الوطنية</option>
             <option> جامعة نعز</option>
          </select>

        </div>
        <div class="form-group" id="mm">
          <label for="country">اختر الكلية</label>
          <select class="form-control input-lg" id="country" required>
            <option value="">Choose...</option>
            <option>كلية الهندسة</option>
            <option> كلية الطب</option>
            <option>كلية العلوم الادارية والانسانية </option>
          </select>

        </div>
        <div class="form-group" id="mm">
          <label for="country">اختر القسم--التخصص</label>
          <select class="form-control input-lg" id="country" required>
            <option value="1">Choose...</option>
            <option> قسم تقنية المعلومات</option>
            <option> قسم نظم المعلومات</option>
            <option> قسم المعماري</option>
          </select>
             <br />
             <br />
             	<div class="form-group">
				<input type="number" name="eca_no" id="eca_no" class="form-control input-lg" placeholder="الرقم الأكاديمي" tabindex="4">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="البريد الالكتروني" tabindex="4">
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="كلمة السر" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="اعادة كلمة السر" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						</span>
				</div>

			</div>

			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="انشاء" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">دخول</a></div>
			</div>
		</form>
	</div>
</div>
 </article>


 <?php
include("include/footer.php");

?>