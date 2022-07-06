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
						<tr><th>Id</th><th>Name</th><th>Email</th><th>Test Result</th></tr>
						<?php
						include ("connection.php");

						$sql="SELECT * FROM reg";
						$res=mysqli_query($con,$sql);

						while($row=mysqli_fetch_array($res))
						{
							echo"<tr><td>$row[id]</td><td>$row[name]</td> <td>$row[email]</td><td><a href='test.php?id=$row[id]'>Add Result</a></td></tr>";
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