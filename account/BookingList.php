<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>
  
</head>
<body>

<div class="container-fluid">
  	<div class="row content">
	    <div class="col-sm-2 sidenav">
	    	<h4>Admin Actions</h4>
	      	<ul class="nav nav-pills nav-stacked">
	        	<li class="active"><a href="BookingList.php">All Booking</a></li>
	        	<li><a href="CurrentBooking.php">Current Booking</a></li>
	        	<li><a href="#section3">Past Booking</a></li>
	        	<li><a href="#section3">Photos</a></li>
	      	</ul><br>
	      	<div class="input-group">
	        	<input type="text" class="form-control" placeholder="Search Booking">
	        	<span class="input-group-btn">
	          		<button class="btn btn-default" type="button">
	            		<span class="glyphicon glyphicon-search"></span>
	          		</button>
	        	</span>
	       	</div>
	    </div>

	    <div class="col-sm-10" id="book-list">
	    	<table border="5" align="center" bgcolor="skyblue">
				<tr>
					<td align="center" colspan="20" bgcolor="pink"><h2>Booking Details</h2></td>
				</tr>
				<tr align="center" bgcolor="#FFFFCC">
					<td align="center"><b>Booking Id</b></td>
				    <td align="center"><b>Name</b></td>
				    <td align="center"><b>Address</b></td>
				    <td align="center"><b>Mobile</b></td>
				    <td align="center"><b>Booking Date</b></td>
				    <td align="center"><b>Action</b></td>
				    <!-- <td align="center"><b>Tent Service</b></td>
				    <td align="center"><b>Ceterine Service</b></td>
				    <td align="center"><b>DJ Service</b></td> -->
				</tr>

				<?php
					include('connection.php');

					$query = "select *from booking order by 1 ASC";
					$run = mysqli_query($conn,$query);
					$i = 1;
					while($row = mysqli_fetch_array($run))
					{
						$id = $row[0];
						$name = $row[1];
						$address = $row[2];
						$mobile = $row[3];
						$booking_date = $row[4];
						$tent_service = $row[5];
						$caterine_service = $row[6];
						$dj_service = $row[7];
						?>
						<tr>
							<td align="center"><?php echo $id; ?></td>
							<td align="center"><?php echo $name; ?></td>
							<td align="center"><i><?php echo $address; ?></i></td>
							<td align="center"><?php echo $mobile; ?></td>
							<td align="center"><?php echo $booking_date; ?></td>
							<!--<td align="center"><?php echo $tent_service == 0 ? "Yes" : "No"; ?></td>
							<td align="center"><?php echo $caterine_service == 0 ? "Yes" : "No"; ?></td>
							<td align="center"><?php echo $dj_service == 0 ? "Yes" : "No"; ?></td> -->
							<td>
								<button>Confirm</button><br>
								<button>Details</button><br>
								<button>Delete</button><br>
							</td>
						</tr>
						<?php
					}
				?>
			</table>
    	</div>
	</div>
</div>
</body>
</html>
