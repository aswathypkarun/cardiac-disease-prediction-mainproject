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
						<h2>Login</h2>
						<p>Login to health lab to continue. </p>
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
                            <h2>Login Now</h2>
                        </div>
                        <form action="log.php" method="POST" enctype="multipart/formdata">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Email</label>
                                        <input  name="email" type="email" placeholder="Email" class="form-control input-md" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Password</label>
                                        <input  name="password" type="password" placeholder="password" class="form-control input-md" required>
                                    </div>
                                </div>
								
								<div class="col-md-12">
                                    <div class="form-group" style="float:right">
                                        <a href="forgot_pswrd.php">Forgot your password ?</a>
                                    </div>
                                </div>
								
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <center><button  name="login" class="new-btn-d br-2">Login</button></center>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                                        <center>Don't have an account ?<a href="register.php"> Sign Up</a><center>
                                    </div>
                                </div>
                            </div>
                        </form>
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