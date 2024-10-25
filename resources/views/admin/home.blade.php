@extends('layouts.admin')
@section('title', 'Dashboard')
@section('right-btn')
@endsection
@push('style')
<style>
.content-wrapper{
background:white !important;
}
.dash-link, .dash-link:hover, .dash-link:active{
color: white;
text-decoration: none;
}
.inner p{
font-size: 22px;
}
.car-h-warning{
height:113px !important;
/*background: linear-gradient(
60deg
,#ffe426,#f57c00);
box-shadow: 0 5px 20px 0 rgb(0 0 0 / 20%), 0 13px 24px -11px rgb(255 152 0 / 60%);*/
    background: linear-gradient( 60deg ,#005bba,#005bba);
    box-shadow: 0 5px 20px 0 rgb(0 0 0 / 20%), 0 13px 24px -11px rgb(163 163 163);
    height: 100% !important;
}
.small-box>.inner{
  padding-top: 1.5rem;
  text-align: center;
}
.small-box{
      margin-bottom: 40px;
}
.small-box>.small-box-footer  {
      font-weight: 500;
    font-size: 18px;

}
.view_more-wrng{ 
background: linear-gradient( 60deg ,#6AC112,#6AC112) !important;
    bottom: 0;
    position: absolute !important;
    width: 100%;
}
.view_more-wrng .fas{
  padding-left: 10px;
}
.car-h-info{
height:113px !important;
box-shadow: 0 6px 20px 0 rgba(38,198,218,.5)!important;
background: linear-gradient(
45deg
,#0288d1,#26c6da)!important;
}
.view_more-info{
margin-top: -8px;
background: linear-gradient(
45deg
,#0288d1,#26c6da) !important;
}
.car-h-danger{
height:113px !important;
box-shadow: 0 6px 20px 0 rgba(38,198,218,.5)!important;
background: linear-gradient(
45deg
,#ff5252,#f48fb1)!important;
}
.view_more-danger{
margin-top: -8px;
background: linear-gradient(
45deg
,#ff5252,#f48fb1)!important;
}
.car-h-bgn{
height:113px !important;
box-shadow: 0 6px 20px 0 rgba(38,198,218,.5)!important;
background: linear-gradient(
45deg
,#7b1fa2,#7c4dff)!important;
}
.view_more-bgn{
margin-top: -8px;
background: linear-gradient(
45deg
,#7b1fa2,#7c4dff)!important;
}
.car-h-success{
height:113px !important;
box-shadow: 0 6px 20px 0 rgba(38,198,218,.5)!important;
background: linear-gradient(
45deg
,#43a047,#1de9b6)!important;
}
.view_more-success{
margin-top: -8px;
background: linear-gradient(
45deg
,#43a047,#1de9b6)!important;
}
</style>
@endpush
@push('scripts')
@endpush
@section('content')
<div class="col-sm-12">
  <div class="row">
    
    @if(in_array('users',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
    <div class="col-lg-3 col-6" style="margin-top:20px">
      <div class="small-box bg-success car-h-warning">
        <div class="inner">
          <h1><b>{{ ($today_user) }}</b></h1>
          <p><b><a href="{{ url('admin/users?start_date='.date('Y-m-d')) }}" class="dash-link">Today  Users </a></b></p>
        </div>
        <div class="icon">
          <i class="fas fa-users-cog nav-icon"></i>
        </div>
        <a href="{{ url('admin/users?start_date='.date('Y-m-d')) }}" class="small-box-footer view_more-wrng">View All <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    @endif

    @if(in_array('users',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
    <div class="col-lg-3 col-6" style="margin-top:20px">
      <div class="small-box bg-success car-h-warning">
        <div class="inner">
          <h1><b>{{ ($users) }}</b></h1>
          <p><b><a href="{{ url('admin/users') }}" class="dash-link">Total  Users  </a></b></p>
        </div>
        <div class="icon">
          <i class="fas fa-users-cog nav-icon"></i>
        </div>
        <a href="{{ url('admin/users') }}" class="small-box-footer view_more-wrng">View All <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    @endif

     
    @if(in_array('enquery_forms',explode(',',auth()->user()->permissions)) || auth()->user()->permissions == 'ALL')
    <div class="col-lg-3 col-6" style="margin-top:20px">
      <div class="small-box bg-success car-h-warning">
        <div class="inner">
          <h1><b>{{ ($enquery_forms) }}</b></h1>
          <p><b><a href="{{ url('admin/enquiry-forms') }}" class="dash-link">Enquiry Forms </a></b></p>
        </div>
        <div class="icon">
          <i class="fas fa-users-cog nav-icon"></i>
        </div>
        <a href="{{ url('admin/enquiry-forms') }}" class="small-box-footer view_more-wrng">View All <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    @endif
  </div>
</div>
@endsection