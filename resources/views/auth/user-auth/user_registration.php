<?php include 'header.php';?>

<section id="car-user-registration">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<h2 class="car-user-registration-h2">Get the best deal on your new car</h2>
				<p class="car-user-registration-subheadding">Top deals from local and national dealers are only a click away.</p>
				<form action="/action_page.php" class="car-user-registration-form">
				 <div class="form-group car-user-registration-group">
				    <label for="email" class="label">Name</label>
				    <img src="images/registration/user-icon.png" class="mail-icon">
				    <input type="text" class="form-control car-user-registration-form-control" placeholder="Enter Name" required>
				  </div>

				  <div class="form-group car-user-registration-group">
				    <label for="email" class="label">Email</label>
				    <img src="images/registration/mail-icon.png" class="mail-icon">
				    <input type="email" class="form-control car-user-registration-form-control" placeholder="Enter Email" id="email" required>
				    <small><p class="car-user-registration-small">(We won't share it with dealers)</p></small>
				  </div>
				  <div class="form-group car-user-registration-group">
				    <label for="pwd" class="label">Password</label>
				    <img src="images/registration/password-icon.png" class="mail-icon">
				    <div class="car-user-registration-input-border">
				    	 <input id="password-field" type="password" class="form-control car-user-registration-form-control" name="password" required placeholder="Enter Password">
		                 <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password car-user-registration-eyes "></span>
				    </div>
				    
				  </div>
				  <div class="form-group car-user-registration-group">
				    <label for="pwd" class="label">Confirm  Password</label>
				    <img src="images/registration/confirm-password-icon.png" class="mail-icon">
				    <div class="car-user-registration-input-border">
				    	 <input id="password-field" type="password" class="form-control car-user-registration-form-control" name="password" required placeholder="Enter Confirm Password">
				    </div>
				    
				  </div>

				  <div class="form-group form-check">
				    <label class="form-check-label">
				      <input class="form-check-input" type="checkbox"> Remember me
				    </label>
				  </div>
				  <button type="submit" class="btn car-user-registration-submit">Create an account</button>
				  <div class="car-user-registration-privacy">
				  	<p class="car-user-registration-privacy-p">By clicking the button you agree to our <a href="#">T&Cs</a>  and <a href="#">Privacy policy</a></p>
				  </div>
				</form>
			</div>
			<div class="col-md-6">
				<div class="car-user-registration-image">
					<img src="images/registration/registration.png" class="car-user-registration-banner-img">
				</div>
				<div class="car-user-registration-how-can-we-help">
					<h4>How can we help?</h4>
					<ul class="car-user-registration-ul">
						<li class="car-user-registration-li">
					     <img src="images/registration/right.png" class="car-user-registration-icon"> Get offers on a new car built to your specification
						</li>
						<li class="car-user-registration-li" class="car-user-registration-icon">
						  <img src="images/registration/right.png" class="car-user-registration-icon"> Beat the queues with readily available cars in stock
						</li>
						<li class="car-user-registration-li" class="car-user-registration-icon">
						  <img src="images/registration/right.png" class="car-user-registration-icon"> Free part-exchange valuation of your current car
						</li>
						</ul>
				</div>
			</div>
		</div>
		<!-- <div class="row text-center justify-content-center">
			<div class="col-lg-5 col-md-7">
				<div class="car-user-registration-forget-password">
					<a href="#" >Forgot password?</a>
				</div>
			</div>
		</div>
		<div class="row text-center justify-content-center">
			<div class="col-lg-5 col-md-7">
				<div class="car-user-registration-Dont">
					Don't have an account? <a href="#">Sign up</a> 
				</div>
			</div>
		</div> -->
	</div>
</section>
<?php include 'footer.php';?>
<script type="text/javascript">
	$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>