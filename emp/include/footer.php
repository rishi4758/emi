
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

                    
 
                        <li> <a href='buy.php?var_id=$var_id'>$var_name </a> </li>
 
                        
 
                  ";}


 ?>


  </ul>
 
</div>
 <div class="col-lg-2  col-md-2 col-sm-4 col-6">
 
                    <h3> Services </h3>
 
                    <ul>
 
                        <li> <a href="index.php" style="text-decoration:none;"> any apple commission agent will conect to us we will provide special  fasicilities to them. </a> </li>
 
                        
                    </ul>
 
                </div>
 
                <div class="col-lg-2  col-md-2 col-sm-4 col-6">
 
                    <h3> About </h3>
 
                    <ul>
 
                        <li> <a href="#"> Zaraaka private limited </a> </li>
 
                        <li> <a href="#"> rishav rapta </a> </li>
 
                        <li> <a href="#"> Sanjaulli,shimla,himachal pradesh </a> </li>
 
                        
 
                    </ul>
 
                </div>
 
                <div class="col-lg-2  col-md-2 col-sm-4 col-6">
 
                    <h3> Contact </h3>
 
                    <ul>
 
                        <li> <a href="#">rishavrapta79@gmail.com</a> </li>
 
                        <li> <a href="#"> mobile:8054467631 </a> </li>
 
                        
 
                        <li> <a href="#"> Contact Admin:9418190167 </a> </li>
 
                    </ul>
 
                </div>
 
                <div class="col-lg-3  col-md-3 col-sm-6 col-12 ">
 
                    <h3> Subscribe Us </h3>
 
                    <ul>
 
                        <li>
 
                            <div class="input-append subscribe-btn text-center">
 
                                <input type="text" class="full text-center" placeholder="Email ">
 
                                <button class="btn  btn-success" type="button"> Subscribe <i class="fa fa-save"> </i> </button>
 
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
 
   
 
    <div class="footer-bottom">
 
        <div class="container">
 
            <p class="pull-left"> Copyright © 2004-2018. All rights reserved. </p>
 
            <div class="pull-right">
 
                <ul class="nav nav-pills payments">
 
                    <li>We Accept:  </li>
 
                    <li><i class="fab fa-cc-paytm"></i></li>
 
                    <li><i class="fab fa-cc-mastercard"></i></li>
 
                    <li><i class="fab fa-cc-amex"></i></li>
 
                    <li><i class="fab fa-cc-visa"></i></li>                   
 
                </ul>
 
            </div>
 
        </div>
 
    </div>
 
    <!--/.footer-bottom-->
 
</footer>