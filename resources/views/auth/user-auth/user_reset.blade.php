@extends('layouts.app')
@section('content')
@section('meta_tag')
	<meta name="robots" content="noindex">
	@endsection
<section id="car-user-reset">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="car-user-reset-h2">Reset Password </h2>
				<p class="car-user-reset-subheadding">Please type the email address you have used on carwow. We'll send you an email with instructions on how to reset your password. If you don't receive an email make sure to <strong>check your spam folder.</strong></p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-5">
			@if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
			<form method="POST" action="{{ route('password.email') }}">
                  @csrf
				  <div class="form-group car-user-registration-group">
				    <label for="email" class="label">Email</label>
				    <img src="{{asset('website/images/registration/mail-icon.png')}}" class="mail-icon">
				    <input type="email" class="form-control car-user-reset-form-control @error('email') is-invalid @enderror" placeholder="Enter email" id="email" name="email" value="{{ old('email') }}" required>
				  </div>

				  @error('email')
          <div class="input-group mb-3">
            <span class="text-danger" role="alert">
                {{ $message }}
            </span>
          </div>
		  @enderror
<!-- 		  
				  <div class="form-group car-user-registration-group">
				    <label for="pwd" class="label">Password</label>
				    <img src="images/registration/password-icon.png" class="mail-icon">
				    <div class="car-user-reset-input-border">
				    	 <input id="password-field" type="password" class="form-control car-user-reset-form-control" name="password" required>
		                 <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password car-user-reset-eyes "></span>
				    </div>
				    
				  </div> -->
				  <!-- <div class="form-group car-user-registration-group">
				    <label for="pwd" class="label">confirm  Password</label>
				    <img src="images/registration/confirm-password-icon.png" class="mail-icon">
				    <div class="car-user-reset-input-border">
				    	 <input id="password-field" type="password" class="form-control car-user-reset-form-control" name="password" required>
				    </div>
				    
				  </div> -->
				  <button type="submit" class="btn car-user-reset-submit">Request new password</button>
				</form>

			</div>
			
		</div>
	</div>
</section>

@section('script')
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
@endsection

@endsection