<?php
session_start();
include("header.php");
include("menubar.php");
include("dbconfig.php");
?>


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-02.jpg);">
		<h2 class="tit6 t-center">
			Reservation
		</h2>
	</section>


	<!-- Reservation -->
	<section class="section-reservation bg1-pattern p-t-100 p-b-113">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 p-b-30">
					<div class="t-center">
						<span class="tit2 t-center">
							Order
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-2">
							Book table
						</h3>
					</div>

					<form class="wrap-form-reservation size22 m-l-r-auto" action="functions.php" method="POST">
						<div class="row">
							<div class="col-md-4">
								<!-- Date -->
								<span class="txt9">
									Date
								</span>

								<div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="date" name="date">
								</div>
							</div>

							<div class="col-md-4">
								<!-- Time -->
								<span class="txt9">
									Time
								</span>
								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="time">
										<option value="9: 00">9:00</option>
										<option value="9: 30">9:30</option>
										<option value="10: 00">10:00</option>
										<option value="10: 30">10:30</option>
										<option value="11: 00">11:00</option>
										<option value="11: 30">11:30</option>
										<option value="12: 00">12:00</option>
										<option value="12: 30">12:30</option>
										<option value="13: 00">13:00</option>
										<option value="13: 30">13:30</option>
										<option value="14: 00">14:00</option>
										<option value="14: 30">14:30</option>
										<option value="15: 00">15:00</option>
										<option value="15: 30">15:30</option>
										<option value="16: 00">16:00</option>
										<option value="16: 30">16:30</option>
										<option value="17: 00">17:00</option>
										<option value="17: 30">17:30</option>
										<option value="18: 00">18:00</option>
									</select>
								</div>
							</div>

							<div class="col-md-4">
								<!-- People -->
								<span class="txt9">
									People
								</span>

								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<!-- Select2 -->
									<select class="selection-1" name="people">
										<option value="1 person">1 person</option>
										<option value="2 person">2 people</option>
										<option value="3 person">3 people</option>
										<option value="4 person">4 people</option>
										<option value="5 person">5 people</option>
										<option value="6 person">6 people</option>
										<option value="7 person">7 people</option>
										<option value="8 person">8 people</option>
										<option value="9 person">9 people</option>
										<option value="10 person">10 people</option>
										<option value="11 person">11 people</option>
										<option value="12 person">12 people</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<!-- Name -->
								<span class="txt9">
									Name
								</span>

								<div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name">
								</div>
							</div>

							<div class="col-md-4">
								<!-- Phone -->
								<span class="txt9">
									Phone
								</span>

								<div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone" placeholder="Phone">
								</div>
							</div>

							<div class="col-md-4">
								<!-- Email -->
								<span class="txt9">
									Email
								</span>

								<div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
									<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
								</div>
							</div>

						</div>

						<div class="wrap-btn-booking flex-c-m m-t-6">
							<!-- Button3 -->
							<button type="submit" name="reserve" class="btn3 flex-c-m size13 txt11 trans-0-4">
								Book Table
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="info-reservation flex-w p-t-80">
				<div class="size23 w-full-md p-t-40 p-r-30 p-r-0-md">
					<h4 class="txt5 m-b-18">
						Reserve by Phone
					</h4>

					<p class="size25">
					To reserve a table call this number 
						<span class="txt24">(+250) 787 691 743</span>
					</p>
				</div>

				<div class="size24 w-full-md p-t-40">
					<h4 class="txt5 m-b-18">
						For Event Booking
					</h4>

					<p class="size26">
						Call this number to book for your event:
						<span class="txt24">(+250) 787 691 743</span>
					</p>
				</div>

			</div>
		</div>
	</section>


	<?php
	include("footer.php");
	include("scripts.php");
	?>
	

