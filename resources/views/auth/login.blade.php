@section('content')
@section('meta_tag')
<meta name="robots" content="noindex">
@endsection
<link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
<style media="screen">
.background .shape{
height: 160px;
width: 160px;
position: absolute;
border-radius: 50%;
}
.shape:first-child{
background: linear-gradient(
#1845ad,
#23a2f6
);
left: -70px;
top: -70px;
}
.shape:last-child{
background: linear-gradient(
to right,
#ff512f,
#f09819
);
right: -70px;
bottom: -70px;
}
.form-main{
position: relative;
/*width: 36%;*/
margin:6rem 0;
}
.form-inner{
background-color: rgba(255,255,255,0.13);
border-radius: 10px;
backdrop-filter: blur(10px);
border: 2px solid rgba(255,255,255,0.1);
box-shadow: 0 0 40px rgba(8,7,16,0.6);
padding: 50px 35px;
}
.form-inner h3{
color:var(--color-dark-green);
font-weight:600;
font-size:16px;
text-transform:uppercase;
}
.form-inner h3 span{
display:block;
font-size:28px;
color:var(--color-dark-green);
}
form *{
color: #ffffff;
letter-spacing: 0.5px;
outline: none;
border: none;
}
form h3{
font-size: 32px;
font-weight: 500;
line-height: 42px;
text-align: center;
line-height:1.2;
}
label{
display: block;
margin-top: 30px;
font-size: 16px;
font-weight: 500;
color:#000;
}
input{
display: block;
height: 50px;
width: 100%;
background-color: rgba(255,255,255,0.07);
border-radius: 3px;
padding: 0 10px;
margin-top: 8px;
font-size: 16px;
font-weight: 300;
}
::placeholder{
color: #e5e5e5;
font-size:16px;
}
button{
margin-top: 50px;
width: 100%;
background-color: var(--color-dark-green);
color: #fff;
padding: 15px 0;
font-size: 18px;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
}
.form-control{
font-size:16px;
box-shadow: none !important;
}
.btn-info{
        padding: 13px 25px;
    border-radius: 8px;
    
    background: #005bba;
    color: #fff!important;
    border-color: #005bba;
    font-size: 1.6rem;
    box-shadow: none !important;
    padding-top: 7px;
    font-size: 22px;
}
.btn-info:hover,.btn-info:focus{
        background-color: #0b5ed7;
    border-color: #0a58ca;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-8">
            <div class="form-main">
                <form method="POST" action="{{ route('login') }}">
                    <div class="background">
                        <div class="shape"></div>
                        <div class="shape"></div>
                    </div>
                    <div class="form-inner">
                        <h3 style="color: #505050;font-weight: 700;">Login to <span>Admin</span></h3>
                        @csrf
                        <input type="hidden" name="refrer" value="{{ (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] :''}}"/>
                        <div class="form-group ">
                            <label for="email" class="label">Email</label>
                            <input type="email" class="form-control car-user-login-form-control @error('email') is-invalid @enderror" placeholder="Enter Email" id="email" name="email" value="{{ old('email') }}" />
                        </div>
                        @error('email')
                        <div class="input-group mb-3">
                            <span class="text-danger" role="alert">
                                {{ $message }}
                            </span>
                        </div>
                        @enderror
                        <div class="form-group">
                            <label for="pwd" class="label">Password</label>
                            <div class="car-user-login-input-border">
                                <input id="password-field" type="password" placeholder="Enter Password" class="form-control car-user-login-form-control @error('password') is-invalid @enderror" name="password" >
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password car-user-login-eyes "></span>
                            </div>
                        </div>
                        @error('password')
                        <div class="input-group mb-3">
                            <span class="text-danger" role="alert">
                                {{ $message }}
                            </span>
                        </div>
                        @enderror
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} > Remember me
                            </label for="remember">
                        </div>
                        <button type="submit" class="btn-info">Log in</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
</div>

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