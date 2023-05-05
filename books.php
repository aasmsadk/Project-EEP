
    
     
<div class="container">
	<div id="myc" class="row" style="margin-bottom: 20px; margin-right:-10px; margin-left: 20px">
    	<!-- BEGIN PRODUCTS -->


  		 
            <?php
     $rd= mysqli_query($coon,"SELECT * FROM `references` WHERE `subject_id`='".$_GET['su']."'");
                   while ($rod= mysqli_fetch_array($rd)) { ?>
            <div class="col-md-3 col-sm-6" style="margin-bottom: 20px;" id="dd">
            <div class="product border">
		        <div class="product-img">
		            <img src="img/pdf_240px.png">
		        </div>
		        <div class="product-block">
		            <h4>اسم المرجع : <?php echo $rod['ref_name']; ?>  </h4>
		            <h6  style="font-family: inherit;">حجم الملف : 
                                             <?php
                                                       $su= $rod['size']/1024;
                                                       $resu=$su/1024;?>
                                                   <?php $SS="<script> document.write('$resu'.substring(0,5)); </script>"?>
                                                  
                                                     <?php  echo $SS."M"; ?>
                        
                        <?php// echo $rod['size']; ?> </h6>
		            <!--<ul class="list-inline ">
                    <li class="list-inline-item"><i class="fa fa-clock-o"></i> 2010</li>
                    <li class="list-inline-item"><i class="fa fa-car"></i> Private</li>
                    <li class="list-inline-item"><i class="fa fa-tint"></i> Diesel</li>
                </ul>-->
		        </div>
		        <div class="product-footer">
		            <div class="row">
		                <div class="col-md-6">
		                    <a href="file/uploaded_references/<?php echo $rod['file_name']; ?>" class="btn btn-outline-secondary btn-sm">Download</a>
		                </div>
		             <div class="col-md-6">
		                    <a  href="file/uploaded_references/<?php echo $rod['file_name']; ?>" class="btn btn-outline-secondary btn-sm">Open</a>
		                </div>
		            </div>
		        </div>
		    </div>
             </div>
            <?php } ?>
		
    		
       
      


  		<!-- END PRODUCTS -->
	</div>
</div>



   <div class="modal" id="myModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">قيد الانشاء</h4>
        </div>
        <div class="modal-body">
          سيتم اضافة هذه الكتاب في وقت لاحق
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">الغاء</a>

        </div>
      </div>
    </div>
</div>
