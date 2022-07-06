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
			<div class="row">
				<div class="col-lg-12">
					<div class="well-block">
                        <table class='table'>
						<tr><th>Id</th><th>Test Result</th><th>Date</th></tr>
						<?php
						session_start();

						include ("connection.php");

						$sql="SELECT * FROM result where user_id='$_SESSION[user]'";

						//echo $sql;
						$res=mysqli_query($con,$sql);

						while($row=mysqli_fetch_array($res))
						{
							echo"<tr><td>$row[id]</td><td>$row[result]</td><td>$row[date]</td></tr>";
						}


						?>

						</table>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Appointment -->
	
<?php 
include('footer.php'); 
?>