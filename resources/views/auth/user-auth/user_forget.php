<?php include 'header.php';?>
<section id="car-user-forget">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="car-user-forget-h2">Forget Password </h2>
				<p class="car-user-forget-subheadding">Please type the email address you have used on carwow. We'll send you an email with instructions on how to reset your password. If you don't receive an email make sure to <strong>check your spam folder.</strong></p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-6">
				<form action="/action_page.php" class="car-user-forget-form">
				  <div class="form-group">
				    <label for="email" class="label">Email</label>
				    <img src="images/registration/mail-icon.png" class="mail-icon">
				    <input type="email" class="form-control car-user-forget-form-control" placeholder="Enter Email" id="email" required>
				  </div>

				  <button type="submit" class="btn car-user-forget-submit">Send me reset instructions</button>
				</form>

			</div>
			
		</div>
	</div>
</section>
<?php include 'footer.php';?>
