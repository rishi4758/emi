
<footer>
 
    <div class="footer" id="footer">
 
        <div class="container">
 
            <div class="row">
 
                <div class="col-lg-2  col-md-2 col-sm-4 col-6">
 
                    <h3> Specials</h3>
					<ul>
 <?php    $get_var= "select * from variety";



$run_var=mysqli_query($con,$get_var);

while($row_var=mysqli_fetch_array($run_var))
{
	$var_id=$row_var['var_id'];
	$var_name=$row_var['var_name'];

		
		
echo "		

                    
 
                        <li> <a href='buy.php?var_id=$var_id' style='color:#F9FAF6'>All offers csn be taken </a> </li>
 
                        
 
                  ";}


 ?>


  </ul>
 
</div>
 <div class="col-lg-2  col-md-2 col-sm-4 col-6">
 
                    <h3> Services </h3>
 
                    <ul>
 
                        <li> <a href="index.php" style="text-decoration:none;"> all kind of emi scheme are available here </a> </li>
 
                        
                    </ul>
 
                </div>
 
                <div class="col-lg-2  col-md-2 col-sm-4 col-6">
 
                    <h3> About </h3>
 
                    <ul>
 
                        <li> <a href="#"> ujjwal emi product  </a> </li>
 
                        <li> <a href="#"> ujjwal rapta </a> </li>
 
                        <li> <a href="#"> kurag,shimla,himachal pradesh </a> </li>
 
                        
 
                    </ul>
 
                </div>
 
                <div class="col-lg-2  col-md-2 col-sm-4 col-6">
 
                    <h3> Contact </h3>
 
                    <ul>
 
                        <li> <a href="#">ujjwalrapta320@gmail.com</a> </li>
 
                        <li> <a href="#"> mobile:9418190167 </a> </li>
 
                        
 
                        <li> <a href="#"> Contact Admin:9418190167 </a> </li>
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-6 col-12 ">
 
                    <h3> Subscribe Us </h3>
 
                    <ul>
 
                        <li>
 
                            <div class="input-append subscribe-btn text-center">
 
                                <input type="text" class="full text-center" placeholder="Email ">
 
                                <button style="color:#233004;" type="button"> Subscribe <i class="fa fa-save"> </i> </button>
 
                            </div>
 
                        </li>
 
                    </ul>
 
                    <ul class="social">
 
                        <li> <a href="#"> <i class=" fab fa-facebook">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fab fa-twitter">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fab fa-google-plus">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fab fa-pinterest">   </i> </a> </li>
 
                        <li> <a href="#"> <i class="fab fa-youtube">   </i> </a> </li>
 
                    </ul>
 
                </div>
 
            </div>
 
            <!--/.row-->
 
        </div>
 
        <!--/.container-->
 
    </div>
 
    <!--/.footer-->
 
   
 
   
</footer>