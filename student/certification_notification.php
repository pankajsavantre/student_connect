	<!DOCTYPE html>
<html>
<head>
	<title>Certification Notification</title>
</head>
<body>
	<?php include "navbar.php"; ?>

	<div class="container m-5">
		<h2 class="text-danger text-center ">Certification Notification</h2>
		<?php
			
				$qry="select * from notification n,departments d,faculty_details f
						where n.dept_id=d.dept_id
						and n.faculty_id=f.id
						and n.sem='$sem'
						and n.dept_id='$dept_id'
						
						and n.notification_type='Certification'
				";

				
				$exc=mysqli_query($conn,$qry);
				echo mysqli_error($conn);
				while ($row=mysqli_fetch_array($exc)) {
					$day=$row['day'];
					$date=explode("-",$day);
					$year=$date[0];
					$month=$date[1];

					$time=$date[2];
					$time=explode(" ", $time);
					$day=$time[0];

					$time2=$time[1];
					
					// print_r($date);
					?>
		<div class="row m-2">
			
					
						
					
					<div class="col-lg-8 offset-2">
						
						<div class="card border border-dark" style="border-radius: 25px;">
							<div class="card-header h3"><?php echo $row['name'] ?>
								<p style="font-size: 12px;" class="offset-1 text-dark"><?php echo $day."-".$month."-".$year." ".$time2 ?></p>
							</div>
							<div class="card-body">
								<p></p>
								<p class="" style="font-size: 15px;"><?php echo $row['notification_content']; ?></p>
							</div>
						</div>
						
					</div>
				
			
		</div>

					<?php
				}
			 ?>
	</div>
</body>
</html>