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
						<h2>Register</h2>
						<p>Register to health lab. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Why Health Lab</h2>
                        </div>
                        <div class="feature-block">
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">24/7 Hours Available</h4>
                                <div class="feature-content">
                                    <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Experienced Staff Available</h4>
                                <div class="feature-content">
                                    <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                                </div>
                            </div>
                            <div class="feature feature-blurb-text">
                                <h4 class="feature-title">Low Price & Fees</h4>
                                <div class="feature-content">
                                    <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Register Now</h2>
                        </div>
                        <form method="POST" enctype="multipart/form-data">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" autocomplete="off" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="email" placeholder="password" class="form-control input-md" autocomplete="off" required>
                                    </div>
                                </div>
								
								<div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Password</label>
                                        <input  name="password" type="password" placeholder="password"  class="form-control input-md" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                    </div>
                                </div>
								
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <center><button id="singlebutton" name="submit" class="new-btn-d br-2">Register</button></center>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                                        <center>Already have an account ?<a href="login.php"> Login</a><center>
                                    </div>
                                </div>
                            </div>
                        </form>
						
						<?php
						//session_start();
						include ("connection.php");
						if(isset($_POST['submit']))
						{
							$name=$_POST['name'];
							$email=$_POST['email'];
							$pwd=$_POST['password'];
							
							$ins="insert into reg(name,email,password) values('$name','$email','$pwd')";
							mysqli_query($con,$ins);
							echo '<script>alert("Succesfully Registered!")
							      window.location="login.php";
								  </script>'; 
						}
					?>
						
                        <!-- form end -->
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Appointment -->
	
<?php 
include('footer.php'); 
?>