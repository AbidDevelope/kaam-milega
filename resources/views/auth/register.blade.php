@extends('layouts.app')

@section('content')
@section('meta_tag')
	<meta name="robots" content="noindex">
	@endsection
<style>
      .social-media-fb{
        background: #3b5998;
        padding: 10px 20px;
        font-size: 17px !important;
        color: #fff !important;
        font-weight: bold;
        margin-bottom:13px;
        width: 240px;
        text-align: left;
       border-radius: 25px;
    }
       .login-social-fb-icon {
        font-size: 17px;
        padding-right: 5px;
    }
    .social-media-g{
          /*background-color: #4285f4;*/
          background-color: #fff;
    border: 1px solid #6f6f6f;
    color: #6f6f6f;
       
    }
    .flex-css{
       display: flex;align-items: center;justify-content: center; 
    }
    
    /* .car-user-login-after-befor:before {*/
    /*    right: 0.5em;*/
    /*    margin-left: -50%;*/
    /*}*/
    /*.car-user-login-after-befor:after {*/
    /*    left: 0.5em;*/
    /*    margin-right: -50%;*/
    /*}*/
    .car-user-login-after-befor::before,
        .car-user-login-after-befor::after {
           display: inline-block;
            content: "";
            border-top: 1px solid black;
            width: 4rem;
            margin: -15px 1rem;
            transform: translateY(-1rem);
        }

    @media (max-width: 767px) {
     .flex-css{
       margin-top:50px;
       text-align:center;
    }
     
      
    }
    #car-user-registration .mail-icon {
        top: 36px;
    }
 .help-block-others, .required {
    color: #e21a2d !important;
    margin-top: 10px;
}   	 
    

</style>
<section id="car-user-registration">
	<div class="container">
		<div class="row justify-content-center">
		    <div class="col-lg-10">
		        <div class="row">
			<div class="col-lg-6 col-md-6">
				<h2 class="car-user-registration-h2">Get the best deal on your new car</h2>
				<p class="car-user-registration-subheadding">Top deals from local and national dealers are only a click away.</p>
				<form method="POST" id="regs-form" action="{{ route('register') }}">
                        @csrf
				 <div class="form-group car-user-registration-group">
				    <label for="email" class="label">Name</label>
				    <img src="{{asset('website/images/registration/user-icon.png')}}" class="mail-icon">
				    <input type="text" class="form-control car-user-registration-form-control @error('name') is-invalid @enderror" placeholder="Enter Name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror  
                </div>

				  <div class="form-group car-user-registration-group">
				    <label for="email" class="label">Email</label>
				    <img src="{{asset('website/images/registration/mail-icon.png')}}" class="mail-icon">
				    <input type="email" class="form-control car-user-registration-form-control @error('email') is-invalid @enderror" placeholder="Enter Email" id="email" name="email" value="{{ old('email') }}" required>
				    <small><p class="car-user-registration-small">(We won't share it with dealers)</p></small>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror 
                </div>

                <div class="form-group car-user-registration-group">
				    <label for="address" class="label">Address</label>
				    <img src="{{asset('website/images/registration/Address-01.png')}}" class="mail-icon">
				    <input type="text" class="form-control car-user-registration-form-control @error('address') is-invalid @enderror" placeholder="Enter Address" id="address" name="address" value="{{ old('address') }}" required>
				    <small><p class="car-user-registration-small">(We won't share it with dealers)</p></small>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror 
                </div>

                <div class="form-group car-user-registration-group">
				    <label for="phone" class="label">Phone</label>
				    <img src="{{asset('website/images/registration/phone1-01.png')}}" class="mail-icon">
				    <input type="text" class="form-control car-user-registration-form-control @error('phone') is-invalid @enderror" placeholder="Enter Phone" id="phone" name="phone" value="{{ old('phone') }}" required>
				    <small><p class="car-user-registration-small">(We won't share it with dealers)</p></small>
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror 
                </div>
				  <div class="form-group car-user-registration-group">
				    <label for="password" class="label">Password</label>
				    <img src="{{asset('website/images/registration/password-icon.png')}}" class="mail-icon">
				    <div class="car-user-registration-input-border">
				    	 <input id="password" type="password" class="form-control car-user-registration-form-control @error('password') is-invalid @enderror" name="password" required placeholder="Enter Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                         <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password car-user-registration-eyes "></span>
				    </div>
        
                </div>
				  <div class="form-group car-user-registration-group">
				    <label for="pwd" class="label">Confirm  Password</label>
				    <img src="{{asset('website/images/registration/confirm-password-icon.png')}}" class="mail-icon">
				    <div class="car-user-registration-input-border">
				    	 <input id="password-field" type="password" class="form-control car-user-registration-form-control" name="password_confirmation" required placeholder="Enter Confirm Password">
				    </div>
                  
				  </div>
<!-- 
				  <div class="form-group form-check">
				    <label class="form-check-label">
				      <input class="form-check-input" type="checkbox"> Remember me
				    </label>
				  </div> -->
				  <button type="submit" class="btn car-user-registration-submit">Create an account</button>
				  OR
				  <div class="col-md-12 text-center">
                    <a href="{{ url('/login/facebook') }}" class="btn btn-facebook social-media-fb shadow"><i  class="fa fa-facebook login-social-fb-icon"></i> Register with Facebook</a>
                    <p class="car-user-login-after-befor">or</p>
				 </div>
				 <div class="col-md-12 text-center">
                    	<a href="{{ url('/login/google') }}" class="btn btn-facebook social-media-fb social-media-g shadow" style="color: #6f6f6f !important;"><img src="{{url('website/images/registration/google-icon-logo-png-transparent.png')}}" style="width: 11%;text-align: center;
    margin-top: -3px;
    padding-right: 5px;"/> Register with Google</a>
				 </div>
				  <div class="car-user-registration-privacy">
				  	<p class="car-user-registration-privacy-p">By clicking the button you agree to our <a href="{{url('terms')}}">T&Cs</a>  and <a href="{{url('privacy-legal')}}">Privacy policy</a></p>
				  </div>
				</form>
			</div>
			<div class="col-md-6">
				<div class="car-user-registration-image">
					<img src="{{asset('website/images/registration/registration.png')}}" class="car-user-registration-banner-img">
				</div>
				<div class="car-user-registration-how-can-we-help">
					<h4>How can we help?</h4>
					<ul class="car-user-registration-ul">
						<li class="car-user-registration-li">
					     <img src="{{asset('website/images/registration/right.png')}}" class="car-user-registration-icon"> Get offers on a new car built to your specification
						</li>
						<li class="car-user-registration-li" class="car-user-registration-icon">
						  <img src="{{asset('website/images/registration/right.png')}}" class="car-user-registration-icon"> Beat the queues with readily available cars in stock
						</li>
						<li class="car-user-registration-li" class="car-user-registration-icon">
						  <img src="{{asset('website/images/registration/right.png')}}" class="car-user-registration-icon"> Free part-exchange valuation of your current car
						</li>
						</ul>
				</div>
			</div>
		</div>
		    </div>
		</div>
	</div>
</section>


@section('script')
<script src="{{asset('website/js/jquery.validate.js')}}"></script>
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

jQuery(function () {var addMaintenanceSchedule = jQuery("#regs-form").submit(function (e) { }).validate({focusInvalid: false,ignore: "",rules:{
    "name": {
        "required": true,
        "minlength": 2,
        "maxlength": 100
    },
    "email": {
        "required": true,
        "email": true,
        "minlength": 2,
        "maxlength": 50
    },
    "phone": {
        "required": true,
        "minlength": 10,
        "maxlength": 10,
        "phonein": true
    },
},errorElement:"div",errorClass:"help-block-others",errorPlacement: function (error, element) { element.parent().after(error);},highlight: function (element) { jQuery(element).parent().addClass("has-error");},unhighlight: function (element) { jQuery(element).parent().removeClass("has-error");},invalidHandler: function (form, validator) { if(!validator.numberOfInvalids()) return; jQuery("html, body").animate({ scrollTop:  jQuery(validator.errorList[0].element).offset().top - 150 }, "fast"); },submitHandler: function (form) { $("#submit_btn").attr("disabled", "disabled");form.submit();}});});

jQuery(function () {var addMaintenanceSchedule = jQuery("#wishlist-form").submit(function (e) { }).validate({focusInvalid: false,ignore: "",rules:{
    
    "phone": {
        "required": true,
        "minlength": 10,
        "maxlength": 10,
        "phonein": true
    }
},errorElement:"div",errorClass:"help-block-others",errorPlacement: function (error, element) { element.parent().after(error);},highlight: function (element) { jQuery(element).parent().addClass("has-error");},unhighlight: function (element) { jQuery(element).parent().removeClass("has-error");},invalidHandler: function (form, validator) { if(!validator.numberOfInvalids()) return; jQuery("html, body").animate({ scrollTop:  jQuery(validator.errorList[0].element).offset().top - 150 }, "fast"); },submitHandler: function (form) { $("#submit_btn2").attr("disabled", "disabled");form.submit();}});});
</script>
@endsection
@endsection
