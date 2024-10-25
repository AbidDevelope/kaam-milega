@extends('layouts.login')

@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Car Lelo</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
  
        <form method="POST" action="{{ url('login-with-otp') }}">
            @csrf
         
          <div class="input-group mb-3">
            <input id="phone" placeholder="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="current-password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          @error('phone')
            <div class="input-group mb-3">
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
            </div>
          @enderror
          <div class="row">
            
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sent Otp</button>
            </div>
            
            
            
            
          </div>
        </form>
 
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>                            
@endsection
