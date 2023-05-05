 
<style>
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
    
hr {
    border-top: 1px solid #007bff;
    width:70%;
}

a {color: #000;}


.card{
    background-color: #FFFFFF;
    padding:0;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius:4px;
    box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.3);
}


.card:hover{
    box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 6px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
    color:black;
}

address{
  margin-bottom: 0px;
}




#author a{
  color: #fff;
  text-decoration: none;
    
}
</style>
 
    <link href="css/datatable.css" rel="stylesheet" />

   <div id="page-wrapper" >
   <div id="page-inner">
    

<div class="row" >
<div class="col-md-12 ">
    
<fieldset class="scheduler-border" >
    
<div class="form-inline" style="margin-bottom:0px; margin-top:20px;" >
 
  

  
 </div>
</fieldset>

</div>
</div>


    
		
		<div class="panel panel-default ">
                   
            
  
            
            <div class="panel panel-default   ">
                       
 <div class="panel-body">
                            <div   style="overflow-x: clip;" id="subjectresult">
       <div id="myc">                      
 <div class="container-fluid">
  <div class="row">
    	<!-- BEGIN PRODUCTS -->

         <?php
  
$query= "select * from  videos WHERE `subject_id`='".$_GET['su']."' ";
$result= mysqli_query($coon,$query);

while ($row= mysqli_fetch_array($result)) {
    ?>

  		         
    <div class=" col-md-4  col-xs-12 " style="padding-bottom: 20px; margin-left: -25px;"  id="dd">
      <div class="card ">
         <video controls style="height: 150px;
    width: px; " >
           <source src="file/uploaded_vidoes/<?php echo $row['name']; ?>" type="<?php echo $row['type'];  ?>"/>


            </video>
       
        <div class="card-footer text-muted">
          <div class="row">
            <div class="col">
                <h4>  <?php echo "الاسم : ".$row['vid_name']; ?></h4>
                <h6>  <?php echo "الحجم : ".$row['size']; ?></h6>
            </div>
               
 
                
            <div class="col-md-3">
		                    <a  href="file/uploaded_vidoes/<?php echo $row['name']; ?>" class="btn btn-outline-secondary btn-sm">Open</a>
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

            
           
                 </div>
                
                
             </div>
            <!-- /. PAGE INNER  -->
        </div>
 


 
<script>
$(document).ready(function(){
  $("#student-Search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       // Document.write("dsfsd");
    });
  });
});
</script>


 