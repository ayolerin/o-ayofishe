<?php
session_start();
include("header.php");
include("menubar.php");
include("dbconfig.php");
?>

	<!-- <div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add admin data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div> -->
	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<div class="table-responsive">
			<h2 class="tit6 t-center">
				Reservation Details
			</h2>
	</section>

	<?php
	        $connection = mysqli_connect("sql9.freemysqlhosting.net", "sql9341135", "T3F21fG1Vu", "sql9341135");
					$query = "SELECT * FROM reserved ORDER BY id DESC LIMIT 1"; 
					$mysqli_result = mysqli_query($connection, $query);
					?>

<table class="table table-bordered" id="dataTable" width="100%" cellspace="0">
        <thread>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time</th>
                <th>People</th>
            <tr>
        </thread>
        <tbody>
            <?php
            if(mysqli_num_rows($mysqli_result) > 0){
                while($row = mysqli_fetch_assoc($mysqli_result)){
                    ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['time']; ?></td>
				<td><?php echo $row['people']; ?></td>
            </tr>
            <?php
                }
            }
            else {
                echo "No Record Found";
            }
            ?>
        </tbody>
    </table>

	<?php
	include("footer.php");
	include("scripts.php");
	?>
	

