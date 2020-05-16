<?php
session_start();
include("header.php");
include("menubar.php");
include("dbconfig.php");
?>


<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-01.jpg);">
	<h2 class="tit6 t-center">
		WAZOBIA CHOPS Menu
	</h2>
</section>

<div class="container">
	<?php
	$conn = mysqli_connect("localhost", "root", "", "restuarant");
	$query = "SELECT * FROM menu";
	$query_run = mysqli_query($conn, $query);

	if (mysqli_num_rows($query_run) > 0) {

	?>
		<div class="row p-t-108 p-b-70">
			<?php
			while ($row = mysqli_fetch_assoc($query_run)) {
			?>
				<div class="col-md-8 col-lg-6 m-l-r-auto">
					<!-- Block3 -->
					<div class="blo3 flex-w flex-col-l-sm m-b-30">
						<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
							<?php echo '<img src="image/' . $row['image'] . '" alt="Image" class="img-fluid">'; ?>
						</div>

						<div class="text-blo3 size21 flex-col-l-m">
							<a href="#" class="txt21 m-b-3">
								<?php echo $row['foodname']; ?>
							</a>

							<span class="txt23">
								<?php echo $row['description']; ?>
							</span>

							<span class="txt22 m-t-20">
								$<?php echo $row['price']; ?>
							</span>
							<td> 
								<br>
                    <form action="ordernow.php" method="post">
                    <input type="hidden" name="order_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="order_btn" class="btn btn-danger" > Order </button>
                    </form>
				</td>
				<td> 
								<br>
                    <form action="review.php" method="post">
                    <input type="hidden" name="review_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="review_btn" class="btn btn-danger" > Review </button>
                    </form>
                </td>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>

</div>
<?php
	} else {
		echo "No Record Found";
	}
?>
</section>
</div>
</div>
</div>
</section>

<?php
include("footer.php");
include("scripts.php");
?>