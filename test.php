<?php
 include('header.php');
 ?>
 <style>
	a {
    color: #00cb86;
    font-weight: bold;
    text-decoration: none;
    outline: none;
	}
 </style>
 
 
 
<!-- Start Appointment -->
	<div id="appointment" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Heart Disease Prediction</h2>
					</div>
				</div>
			</div>
			<form method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="form-group pb-1">
							<input type="text" name="age" class="form-control" id="exampleFormControlInput1" placeholder="Age (29 - 77 )">  
							<input type="hidden" name="uid" value="<?php echo $_REQUEST['id']; ?>">  							
                        </div>
                        <div class="form-group pb-1">
                            <select  name="sex" class="form-control">
							  <option disabled selected value>Gender</option>
							  <option value="1">Male</option>
							  <option value="0">Female</option>
						    </select>            
                        </div>
                        <div class="form-group ">
                            <select name="cp" class="form-control">
							  <option disabled selected value>Chest Pain</option>
							  <option value="0" >Typical Angina</option>
							  <option value="1" >Atypical Angina</option>
							  <option value="2" >Non-anginal pain</option>
							  <option value="3" >Asymptomatic</option>
						    </select> 
                        </div>
						<div class="form-group pb-1">
                            <input type="text" name="trestbps" class="form-control" id="exampleFormControlInput1" placeholder="Resting blood pressure (in mm Hg)">       
                                 
                        </div>
                        <div class="form-group pb-1">
                            <input type="text" name="chol" class="form-control" id="exampleFormControlInput1" placeholder="Cholestoral in mg/dl ">       
                        </div>
                        <div class="form-group ">
                            <select name="fbs" class="form-control">
							  <option disabled selected value>Fasting blood sugar > 120 mg/dl</option>
							  <option value="1">True</option>
							  <option value="0">False</option>
						    </select> 
                        </div>
						<div class="form-group ">
                            <select name="restecg" class="form-control">
							  <option disabled selected value>Resting electrocardiographic results</option>
							  <option value="0">Normal</option>
							  <option value="1">ST-T wave normality</option>
						    </select> 
                        </div>
						
						
                    </div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        
						<div class="form-group pb-1">   
                            <input type="text" name="thalach" class="form-control" id="exampleFormControlInput1" placeholder="Maximum heart rate achieved ">          
                                   
                        </div>
                        <div class="form-group pb-1">
							<select name="exang" class="form-control">
							  <option disabled selected value>Angina induced by exercise</option>
							  <option value="1">Yes</option>
							  <option value="0">No</option>
						    </select>         
                        </div>
                        <div class="form-group ">
                            <input type="text" name="oldpeak" class="form-control" id="exampleFormControlInput1" placeholder="Old Peak ">   
                        </div>
						<div class="form-group pb-1">
                            <input type="text" name="slope" class="form-control" id="exampleFormControlInput1" placeholder="Slope">
                        </div>
                        <div class="form-group pb-1">
                            <input type="text" name="ca" class="form-control" id="exampleFormControlInput1" placeholder="Number of major vessels"> 
                        </div>
                        <div class="form-group ">     
                            <input type="text" name="thal" class="form-control" id="exampleFormControlInput1" placeholder="Thalium Stress Test result"> 
                        </div>
						
                        <!-- form end -->
                    </div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<center><button  name="Submit" class="btn btn-primary btn-block">Submit</button></center>
					</div>
				</div>
			</div>
			</form>
			
			<?php
			   if(isset($_POST['Submit']))
			   {
				    
					$age=$_POST['age'];
					$sex=$_POST['sex'];
					$cp=$_POST['cp'];
					$trestbps=$_POST['trestbps'];
					$chol=$_POST['chol'];
					$fbs=$_POST['fbs'];
					$restecg=$_POST['restecg'];
					$thalach=$_POST['thalach'];
					$exang=$_POST['exang'];
					$oldpeak=$_POST['oldpeak'];
					$slope=$_POST['slope'];
					$ca=$_POST['ca'];
					$thal=$_POST['thal'];
					
					
					$head="age,sex,cp,trestbps,chol,fbs,restecg,thalach,exang,oldpeak,slope,ca,thal";
					$data="$age,$sex,$cp,$trestbps,$chol,$fbs,$restecg,$thalach,$exang,$oldpeak,$slope,$ca,$thal";
					//echo $data;
					
				$myfile="test.csv";
				$fh=fopen($myfile,'w') or die('canot open file');
				$str="$head\n$data";
				fwrite($fh,$str);
				fclose($fh);

				set_time_limit(0);
				include('connection.php');

				echo "<br>";
				//$python = `python test.py`;
				//echo "<pre>".$python."</pre>";
				
				$python1 = "C:\\ProgramData\\Anaconda3\\python.exe";
				$file = "C:\\xampp\\htdocs\\health-lab\\test.py";
				$python=exec($python1 . " " . $file);
				
				echo "<div class='col-lg-12 col-md-12 well' style='background-color:#aad6ff' >
				      <center><h1>OUTPUT</h1><hr>
					  <pre><h3>".$python."</h3></pre></center>";
			$date=date('Y-m-d');
			mysqli_query($con,"insert into result(user_id,result,date) Values ('$_POST[uid]','$python','$date')");
				
//echo"insert into result(user_id,result,date) Values ('$_POST[uid]','$python','$date')";				
				}
				   
			   
			?>
		</div>
	</div>
	
		</div>
	</div>
	<!-- End Appointment -->
	
<?php 
include('footer.php'); 
?>