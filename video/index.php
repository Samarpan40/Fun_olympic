<?php
	// session_start();

	// //check if the user is already logged in, if not then redirect him to login page
	// if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] != true) {
	// 	header("location: login.php");
	// 	exit();
	// }

	require '../includes/header.php';
  	require '../includes/sidebar.php';
?>

	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header clearfix">
					<h2 class="pull-left">Video Details</h2>
					
				</div>
				<hr>
			</div>
			<div class="col-md-12">
				<?php

					require '../config.php';

					$sql = "SELECT * FROM video";

					$result = $conn->query($sql);

					if($result->num_rows > 0) {
						echo "<table class='table table-bordered table-striped'>";
						echo "<tr>";
						echo "<th> Title</th>";
						echo "<th> Link</th>";
						echo "<th>Actions</th>";
						echo "</tr>";
						while ($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>" . $row['title'] . "</td>";
							echo "<td>" . $row['link'] . "</td>";
							echo "<td>";
							
							
							
							echo "<a href='delete.php?id=" . $row['id'] . "'><i class='fa fa-trash'></i></a>";
							echo "</td>";
							echo "</tr>";
						}
						echo "</table>";
						$result->free();
					} else {
						echo "<p>No records found.</p>";
					}

					$conn->close();

				?>
			</div>
		</div>
	</div>
</div>
</div>

