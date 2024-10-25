@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-success" role="alert">
                            {{session('error')}}
                        </div>
                    @endif
                   <form action="{{url('verify-otp')}}" method="POST">
                      {{csrf_field()}}
                    <label>Enter Otp</label>
                   
                   <input type="text" name="otp" />
                    @if(!session('is_registered'))
                   <label>Enter Name</label>

                   <input type="text" name="name" />
                    @endif
                 <button>Verify</button>
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
