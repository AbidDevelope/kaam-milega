@extends('layouts.app')
@section('content')
<?php
function secondsToHumanReadable($seconds) {
$hours = floor($seconds / 3600);
$minutes = floor(($seconds % 3600) / 60);
$remainingSeconds = $seconds % 60;
$result = '';

if ($hours > 0) {
$result .= "{$hours} hours ";
}
if ($minutes > 0) {
$result .= "{$minutes} min ";
}
if ($remainingSeconds > 0 || empty($result)) {
$result .= "{$remainingSeconds} sec";
}
return $result;
}
?>
<!-- -----------After Navbar Banner Start Here------------ -->
<section class="after-nav-banner-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="banner-images-dv">
					<img src="{{ asset('public/uploads/'.$banner->image) }}" class="img-fluid home-banner" />
					<div class="banner-content">
						<h2>Find <span> local jobs</span> </h2>
						<h2>with better salary!</h2>
						<p>Call HR directly to fix interview for FREE</p>
						<div class="banner-button">
							<a href="#" class="chat mx-2"><img
								src="{{ asset('public/assets-new/images/banner/chat.png')}}" alt=""
							class="img-fluid me-1">Chat With HR</a>
							<a href="/login" class="get-job mx-2">Get A Job Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- -----------After Navbar Banner End Here------------ -->
<!-- -----------After Banner slider section Start Here------------ -->
<section class="after-banner-slider-section">
	<div class="container-fluid">
		<div class="carousel-after-slider">
			<div class="fixed-interview-dv">
				<img src="{{ asset('public/assets-new/images/home-con/cir-img.png')}}" class="img-fluid">
				<div class="fixed-heading-name">
					<p>Has Fixed An Interview</p>
					<h5>Dharmender</h5>
				</div>
			</div>
			<div class="fixed-interview-dv">
				<img src="{{ asset('public/assets-new/images/home-con/cir-img.png')}}" class="img-fluid">
				<div class="fixed-heading-name">
					<p>Has Fixed An Interview</p>
					<h5>Dharmender</h5>
				</div>
			</div>
			<div class="fixed-interview-dv">
				<img src="{{ asset('public/assets-new/images/home-con/cir-img.png')}}" class="img-fluid">
				<div class="fixed-heading-name">
					<p>Has Fixed An Interview</p>
					<h5>Dharmender</h5>
				</div>
			</div>
			<div class="fixed-interview-dv">
				<img src="{{ asset('public/assets-new/images/home-con/cir-img.png')}}" class="img-fluid">
				<div class="fixed-heading-name">
					<p>Has Fixed An Interview</p>
					<h5>Dharmender</h5>
				</div>
			</div>
			<div class="fixed-interview-dv">
				<img src="{{ asset('public/assets-new/images/home-con/cir-img.png')}}" class="img-fluid">
				<div class="fixed-heading-name">
					<p>Has Fixed An Interview</p>
					<h5>Dharmender</h5>
				</div>
			</div>
			<div class="fixed-interview-dv">
				<img src="{{ asset('public/assets-new/images/home-con/cir-img.png')}}" class="img-fluid">
				<div class="fixed-heading-name">
					<p>Has Fixed An Interview</p>
					<h5>Dharmender</h5>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- -----------After Banner slider section End Here------------ -->
<!-- ----------- Where do you want to work section Start Here------------ -->
<section class="where-do-you-work-section">
	<div class="container">
		<div class="want-to-work-dv">
			<h3>Where do you want to <span>work?</span></h3>
		</div>
		<div class="want-to-work-slider">
			@foreach($states as $key => $value)
			<a href="{{ url('jobs-in-' . Str::slug($value->name) . '-city') }}" style="text-decoration: none;">
				<div class="slider-item">
					<h4>{{$value->name}}</h4>
					<p>600,000+ Vacancies</p>
				</div>
			</a>
			@endforeach
		</div>
	</div>
</section>
<!-- ----------- Where do you want to work section End Here------------ -->
<!-- ----------- More than lakh indian section Start Here------------ -->
<section class="more-than-lakh-indian-sec">
	<div class="more-than-card-parent">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-12">
					<div class="more-than-card">
						<h3>More than <span>10 Lakh Indians</span> trust Job Hai 🤝</h3>
						<div class="card-button">
							<a href="/login" class="register-now">Register Now</a>
							<a href="#" class="chat-with-bth">Chat With HR & Similar Profile</a>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-8 col-md-8 col-12">
					<div class="more-than-indian-icon-atag">
						<div class="icon-atag">
							<img src="{{ asset('public/assets-new/images/home-con/free-verified.png')}}" alt="">
							<p><a href="#">100 % FREE & Verified Jobs</a></p>
						</div>
						<div class="icon-atag">
							<img src="{{ asset('public/assets-new/images/home-con/best-jobs.png')}}" alt="">
							<p><a href="#">Best jobs in your locality</a></p>
						</div>
						<div class="icon-atag">
							<img src="{{ asset('public/assets-new/images/home-con/direct-call-hr.png')}}" alt="">
							<p><a href="#">Direct calls with HR for interview</a></p>
						</div>
						<div class="icon-atag">
							<img src="{{ asset('public/assets-new/images/home-con/chat-with-hr.png')}}" alt="">
							<p><a href="#">Chat with HR</a></p>
						</div>
						<div class="icon-atag">
							<img src="{{ asset('public/assets-new/images/home-con/chat-with-like.png')}}" alt="">
							<p><a href="#">Chat With like you</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ----------- More than lakh indian section End Here------------ -->
<!-- ----------- What kind of a role do you want section Start Here------------ -->
<section class="what-kind-of-role-want-sec">
	<div class="container-fluid">
		<div class="what-kind-of-card">
			<h3>What Kind Of A <span>Role</span> Do You Want?</h3>
			<div class="what-kind-role-img">
				@foreach($JobCategory as $key => $value)
				<div class="kind-card-img-content-item">
					<a href="{{ url(Str::slug($value->name) . '-jobs') }}">
						<img src="{{ asset('public/uploads/'.$value->image) }}" class="img-fluid" />
						<div class="what-kind-role-content">
							<h5>{{$value->name}}</h5>
							<p>View 5,50,000+ Vacancies</p>
						</div>
					</a>
				</div>
				@endforeach
				<!-- <div class="kind-card-img-content-item">
						<a href="job-listing-page-before-login">
								<img src="{{ asset('public/assets-new/images/home-con/driver.png')}}" class="img-fluid" />
								<div class="what-kind-role-content">
										<h5>Driver</h5>
										<p>View 5,50,000+ Vacancies</p>
								</div>
						</a>
				</div>
				<div class="kind-card-img-content-item">
						<a href="job-listing-page-before-login">
								<img src="{{ asset('public/assets-new/images/home-con/warehouse-logistics.png')}}" class="img-fluid" />
								<div class="what-kind-role-content">
										<h5>Warehouse / Logistics</h5>
										<p>View 5,50,000+ Vacancies</p>
								</div>
						</a>
				</div>
				<div class="kind-card-img-content-item">
						<a href="job-listing-page-before-login">
								<img src="{{ asset('public/assets-new/images/home-con/manufacturer.png')}}" class="img-fluid" />
								<div class="what-kind-role-content">
										<h5>Manufacturer</h5>
										<p>View 5,50,000+ Vacancies</p>
								</div>
						</a>
				</div>
				<div class="kind-card-img-content-item">
						<a href="job-listing-page-before-login">
								<img src="{{ asset('public/assets-new/images/home-con/housekeeping-peon.png')}}" class="img-fluid" />
								<div class="what-kind-role-content">
										<h5>Housekeeping / Peon</h5>
										<p>View 5,50,000+ Vacancies</p>
								</div>
						</a>
				</div>
				<div class="kind-card-img-content-item">
						<a href="job-listing-page-before-login">
								<img src="{{ asset('public/assets-new/images/home-con/security-guard.png')}}" class="img-fluid" />
								<div class="what-kind-role-content">
										<h5>Security Guard</h5>
										<p>View 5,50,000+ Vacancies</p>
								</div>
						</a>
				</div>
				<div class="kind-card-img-content-item">
						<a href="job-listing-page-before-login">
								<img src="{{ asset('public/assets-new/images/home-con/painter.png')}}" class="img-fluid" />
								<div class="what-kind-role-content">
										<h5>Painter</h5>
										<p>View 5,50,000+ Vacancies</p>
								</div>
						</a>
				</div>
				<div class="kind-card-img-content-item">
						<a href="job-listing-page-before-login">
								<img src="{{ asset('public/assets-new/images/home-con/labour-helper.png')}}" class="img-fluid" />
								<div class="what-kind-role-content">
										<h5>Labour / Helper</h5>
										<p>View 5,50,000+ Vacancies</p>
								</div>
						</a>
				</div>
				<div class="kind-card-img-content-item">
						<a href="job-listing-page-before-login">
								<img src="{{ asset('public/assets-new/images/home-con/technician.png')}}" class="img-fluid" />
								<div class="what-kind-role-content">
										<h5>Technician</h5>
										<p>View 5,50,000+ Vacancies</p>
								</div>
						</a>
				</div>
				<div class="kind-card-img-content-item">
						<a href="job-listing-page-before-login">
								<img src="{{ asset('public/assets-new/images/home-con/refrgerator-ac-technician.png')}}" class="img-fluid" />
								<div class="what-kind-role-content">
										<h5>Refrigerator & AC Technician</h5>
										<p>View 5,50,000+ Vacancies</p>
								</div>
						</a>
				</div> -->
				
			</div>
			<div class="kind-card-item-button">
				<a href="#">See All Job Roles</a>
			</div>
		</div>
	</div>
</section>
<!-- ----------- What kind of a role do you want section End Here------------ -->
<!-- ----------- Companies Hiring with us Start Here------------ -->
<section class="companies-hiring-sec">
	<div class="container-fluid">
		<div class="companies-hiring">
			<div class="com-heading">
				<h3> <span>Companies</span> Hiring with us</h3>
			</div>
			<div class="slider-parent">
				<div class="companies-slider-dv">
					<div class="companies-slider-item">
						<h5><a href="#">Fintech</a></h5>
						<p>1.4K+ Are Actively Hiring</p>
						<div class="com-pro-img">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
						</div>
						<div class="green-dot"></div>
					</div>
					<div class="companies-slider-item">
						<h5><a href="#">Internet</a></h5>
						<p>1.4K+ Are Actively Hiring</p>
						<div class="com-pro-img">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
						</div>
						<div class="green-dot"></div>
					</div>
					<div class="companies-slider-item">
						<h5><a href="#">Fortune 500</a></h5>
						<p>1.4K+ Are Actively Hiring</p>
						<div class="com-pro-img">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
						</div>
						<div class="green-dot"></div>
					</div>
					<div class="companies-slider-item">
						<h5><a href="#">Startups</a></h5>
						<p>1.4K+ Are Actively Hiring</p>
						<div class="com-pro-img">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
						</div>
						<div class="green-dot"></div>
					</div>
					<div class="companies-slider-item">
						<h5><a href="#">MNC</a></h5>
						<p>1.4K+ Are Actively Hiring</p>
						<div class="com-pro-img">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
							<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
							class="img-fluid">
						</div>
						<div class="green-dot"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ----------- Companies Hiring with us End Here------------ -->
<!-- ----------- Connect just like you Start Here------------ -->
<section class="connect-just-like-you-sec">
	<div class="container-fluid">
		<div class="connect-just-heading">
			<h3><span>Connect</span> Just Like You</h3>
		</div>
		<div class="connect-just-like-you-slider">
			@foreach ($connect as $key => $value)
			<div class="connect-just-slider-item">
				<div class="connect-card">
					<div class="connect-card-img">
						<img src="{{ asset('public/assets-new/images/home-con/connect-just.png')}}" alt=""
						class="img-fluid">
						<div class="green-dot"></div>
					</div>
					<h4>{{$value->name}}</h4>
					<p class="person-desi">Person Designation</p>
					<div class="location-para-icon">
						<img src="{{ asset('public/assets-new/images/home-con/mappin.png')}}" alt="">
						<p>Location</p>
					</div>
					<p class="person-desi1">10 mutual connects</p>
					<a href="/login" class="chat-btn"> <img src="{{ asset('public/assets-new/images/home-con/chat-btn.png')}}"
						alt="" class="img-fluid">
					Chat</a>
					<a href="/login"  class="follow-btn" >Follow</a>
				</div>
			</div>
			@endforeach
			 
		</div>
	</div>
</section>
<!-- ----------- Connect just like you End Here------------ -->
<!-- ----------- Featured companies actively hiring Start Here---------- -->
<section class="featured-companies-actively-hiring-sec">
	<div class="container-fluid">
		<div class="featured-companies-heading">
			<h3>Featured Companies <span>Actively Hiring</span></h3>
		</div>
		<div class="feature-companies-slider-parent">
			<div class="feature-companies-slider-dv">
				<div class="feature-companies-slider-item">
					<div class="feature-com-card">
						<div class="feature-img">
							<img src="{{ asset('public/assets-new/images/home-con/feature-com.png')}}" class="img-fluid"
							alt="">
						</div>
						<div class="com-name-grey-card">
							<h5>Company Name</h5>
							<p class="com-img-rating"><img
								src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt=""
								class="img-fluid">
								<span>4.2 | 4.4K+ reviews</span>
							</p>
						</div>
						<p class="after-com-para">Lorem ipsum dolor sit amet consectetur. sapien ipsum proin quisque
						blandit.</p>
						<div class="com-view-job-dv">
							<a href="#" class="com-view-jobs">View Jobs</a>
						</div>
					</div>
				</div>
				<div class="feature-companies-slider-item">
					<div class="feature-com-card">
						<div class="feature-img">
							<img src="{{ asset('public/assets-new/images/home-con/feature-com.png')}}" class="img-fluid"
							alt="">
						</div>
						<div class="com-name-grey-card">
							<h5>Company Name</h5>
							<p class="com-img-rating"><img
								src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt=""
								class="img-fluid">
								<span>4.2 | 4.4K+ reviews</span>
							</p>
						</div>
						<p class="after-com-para">Lorem ipsum dolor sit amet consectetur. sapien ipsum proin quisque
						blandit.</p>
						<div class="com-view-job-dv">
							<a href="#" class="com-view-jobs">View Jobs</a>
						</div>
					</div>
				</div>
				<div class="feature-companies-slider-item">
					<div class="feature-com-card">
						<div class="feature-img">
							<img src="{{ asset('public/assets-new/images/home-con/feature-com.png')}}" class="img-fluid"
							alt="">
						</div>
						<div class="com-name-grey-card">
							<h5>Company Name</h5>
							<p class="com-img-rating"><img
								src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt=""
								class="img-fluid">
								<span>4.2 | 4.4K+ reviews</span>
							</p>
						</div>
						<p class="after-com-para">Lorem ipsum dolor sit amet consectetur. sapien ipsum proin quisque
						blandit.</p>
						<div class="com-view-job-dv">
							<a href="#" class="com-view-jobs">View Jobs</a>
						</div>
					</div>
				</div>
				<div class="feature-companies-slider-item">
					<div class="feature-com-card">
						<div class="feature-img">
							<img src="{{ asset('public/assets-new/images/home-con/feature-com.png')}}" class="img-fluid"
							alt="">
						</div>
						<div class="com-name-grey-card">
							<h5>Company Name</h5>
							<p class="com-img-rating"><img
								src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt=""
								class="img-fluid">
								<span>4.2 | 4.4K+ reviews</span>
							</p>
						</div>
						<p class="after-com-para">Lorem ipsum dolor sit amet consectetur. sapien ipsum proin quisque
						blandit.</p>
						<div class="com-view-job-dv">
							<a href="#" class="com-view-jobs">View Jobs</a>
						</div>
					</div>
				</div>
				<div class="feature-companies-slider-item">
					<div class="feature-com-card">
						<div class="feature-img">
							<img src="{{ asset('public/assets-new/images/home-con/feature-com.png')}}" class="img-fluid"
							alt="">
						</div>
						<div class="com-name-grey-card">
							<h5>Company Name</h5>
							<p class="com-img-rating"><img
								src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt=""
								class="img-fluid">
								<span>4.2 | 4.4K+ reviews</span>
							</p>
						</div>
						<p class="after-com-para">Lorem ipsum dolor sit amet consectetur. sapien ipsum proin quisque
						blandit.</p>
						<div class="com-view-job-dv">
							<a href="#" class="com-view-jobs">View Jobs</a>
						</div>
					</div>
				</div>
				<div class="feature-companies-slider-item">
					<div class="feature-com-card">
						<div class="feature-img">
							<img src="{{ asset('public/assets-new/images/home-con/feature-com.png')}}" class="img-fluid"
							alt="">
						</div>
						<div class="com-name-grey-card">
							<h5>Company Name</h5>
							<p class="com-img-rating"><img
								src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt=""
								class="img-fluid">
								<span>4.2 | 4.4K+ reviews</span>
							</p>
						</div>
						<p class="after-com-para">Lorem ipsum dolor sit amet consectetur. sapien ipsum proin quisque
						blandit.</p>
						<div class="com-view-job-dv">
							<a href="#" class="com-view-jobs">View Jobs</a>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-all-btn">
				<a href="#">View All Companies</a>
			</div>
		</div>
	</div>
</section>
<!-- ----------- Featured companies actively hiring End Here------------ -->
<!-- ----------- Search job based on your Qualification Start Here------------ -->
<section class="search-job-your-qualification-sec">
	<div class="container-fluid">
		<div class="search-job-heading">
			<h3>Search Job Based on Your <span>Qualification</span></h3>
		</div>
		<div class="search-job-pills-tabs-parent">
			<nav>
				<div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
					<div class="nav-custom-border">
						<button class="nav-link active" id="nav-qualification-tab" data-bs-toggle="tab"
						data-bs-target="#nav-qualification" type="button" role="tab"
						aria-controls="nav-qualification" aria-selected="true">Qualification</button>
						<button class="nav-link" id="nav-skill-tab" data-bs-toggle="tab" data-bs-target="#nav-skill"
						type="button" role="tab" aria-controls="nav-skill" aria-selected="false">Skill</button>
					</div>
				</div>
			</nav>
			<div class="tab-content p-3 bg-light" id="nav-tabContent">
				<div class="tab-pane fade active show" id="nav-qualification" role="tabpanel"
					aria-labelledby="nav-qualification-tab">
					<div class="search-job-card-parent">
						<div class="container-fluid">
							<div class="row">
								@foreach ($education_level as $key => $value)
								<div class="col-xl-2 col-lg-2 col-md-2 col-6">
									<div class="search-content-card-item ">
										<img src="{{ asset('public/uploads/'.$value->image) }}" alt=""
										class="img-fluid">
										<h6><a
										href="{{ url('jobs-for-' . Str::slug($value->name)) }}">{{$value->name}}</a>
										</h6>
										<p>View 9,30,000+ Vacancies</p>
									</div>
								</div>
								@endforeach
								<!-- <div class="col-xl-2 col-lg-2 col-md-2 col-6">
										<div class="search-content-card-item">
												<img src="{{ asset('public/assets-new/images/home-con/10th-pass.png')}}" alt="" class="img-fluid">
												<h6><a href="#">10th Pass</a></h6>
												<p>View 4,00,000+ Vacancies</p>
										</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-6">
										<div class="search-content-card-item">
												<img src="{{ asset('public/assets-new/images/home-con/12th-pass.png')}}" alt="" class="img-fluid">
												<h6><a href="#">12th Pass</a></h6>
												<p>View 9,00,000+ Vacancies</p>
										</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-6">
										<div class="search-content-card-item">
												<img src="{{ asset('public/assets-new/images/home-con/diploma.png')}}" alt="" class="img-fluid">
												<h6><a href="#">Diploma</a></h6>
												<p>View 50,000+ Vacancies</p>
										</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-6">
										<div class="search-content-card-item">
												<img src="{{ asset('public/assets-new/images/home-con/graduate.png')}}" alt="" class="img-fluid">
												<h6><a href="#">Graduate</a></h6>
												<p>View 7,30,000+ Vacancies</p>
										</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-6">
										<div class="search-content-card-item">
												<img src="{{ asset('public/assets-new/images/home-con/post-graduate.png')}}" alt="" class="img-fluid">
												<h6><a href="#">Post Graduate</a></h6>
												<p>View 25,000+ Vacancies</p>
										</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="nav-skill" role="tabpanel" aria-labelledby="nav-skill-tab">
					<div class="search-job-card-parent">
						<div class="container-fluid">
							<div class="row">
								@foreach ($skills as $key => $value)
								<div class="col-xl-2 col-lg-2 col-md-2 col-6">
									<div class="search-content-card-item search-content-card-item-qualification">
										<img src="{{ asset('public/uploads/'.$value->image) }}" alt=""
										class="img-fluid">
										<h6><a
										href="{{ url('jobs-in-' . Str::slug($value->skill_name)) }}">{{$value->skill_name}}</a>
										</h6>
										<p>View 9,30,000+ Vacancies</p>
									</div>
								</div>
								@endforeach
								<!-- <div class="col-xl-2 col-lg-2 col-md-2 col-6">
										<div class="search-content-card-item">
												<img src="{{ asset('public/assets-new/images/home-con/10th-pass.png')}}" alt="" class="img-fluid">
												<h6><a href="#">Skill</a></h6>
												<p>View 4,00,000+ Vacancies</p>
										</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-6">
										<div class="search-content-card-item">
												<img src="{{ asset('public/assets-new/images/home-con/12th-pass.png')}}" alt="" class="img-fluid">
												<h6><a href="#">Skill</a></h6>
												<p>View 9,00,000+ Vacancies</p>
										</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-6">
										<div class="search-content-card-item">
												<img src="{{ asset('public/assets-new/images/home-con/diploma.png')}}" alt="" class="img-fluid">
												<h6><a href="#">Skill</a></h6>
												<p>View 50,000+ Vacancies</p>
										</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-6">
										<div class="search-content-card-item">
												<img src="{{ asset('public/assets-new/images/home-con/graduate.png')}}" alt="" class="img-fluid">
												<h6><a href="#">Skill</a></h6>
												<p>View 7,30,000+ Vacancies</p>
										</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-6">
										<div class="search-content-card-item">
												<img src="{{ asset('public/assets-new/images/home-con/post-graduate.png')}}" alt="" class="img-fluid">
												<h6><a href="#">Skill</a></h6>
												<p>View 25,000+ Vacancies</p>
										</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ----------- Search job based on your Qualification End Here------------ -->
<!-- ----------- What type of job do you want Start Here------------ -->
<section class="what-type-job-you-want-sec">
	<div class="container-fluid">
		<div class="what-type-job-heading">
			<h3>What <span>Type Of Job</span> Do You Want?</h3>
		</div>
		<div class="what-type-job-cards-parent">
			@foreach ($job_type as $key => $value)
			<a href="{{ url(Str::slug($value->name) . '-jobs') }}" style="text-decoration: none;">
				<div class="what-type-job-cards">
					<div class="cards-img">
						<img src="{{ asset('public/assets-new/images/home-con/work-from-home.png')}}" alt=""
						class="img-fluid">
					</div>
					<div class="cards-content">
						<h5>{{$value->name}}</h5>
						<p>View 9,30,000+ Vacancies</p>
					</div>
				</div>
			</a>
			@endforeach
			<!-- <div class="what-type-job-cards">
					<div class="cards-img">
							<img src="{{ asset('public/assets-new/images/home-con/work-from-home.png')}}" alt="" class="img-fluid">
					</div>
					<div class="cards-content">
							<h5>Part Time</h5>
							<p>View 9,30,000+ Vacancies</p>
					</div>
			</div>
			<div class="what-type-job-cards">
					<div class="cards-img">
							<img src="{{ asset('public/assets-new/images/home-con/work-from-home.png')}}" alt="" class="img-fluid">
					</div>
					<div class="cards-content">
							<h5>Full Time</h5>
							<p>View 9,30,000+ Vacancies</p>
					</div>
			</div>
			<div class="what-type-job-cards">
					<div class="cards-img">
							<img src="{{ asset('public/assets-new/images/home-con/work-from-home.png')}}" alt="" class="img-fluid">
					</div>
					<div class="cards-content">
							<h5>Fresher Jobs</h5>
							<p>View 9,30,000+ Vacancies</p>
					</div>
			</div>
			<div class="what-type-job-cards">
					<div class="cards-img">
							<img src="{{ asset('public/assets-new/images/home-con/work-from-home.png')}}" alt="" class="img-fluid">
					</div>
					<div class="cards-content">
							<h5>Jobs For Women</h5>
							<p>View 9,30,000+ Vacancies</p>
					</div>
			</div> -->
		</div>
		<div class="type-of-job-banner">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-6 col-md-6 col-12 ">
						<div class="left-side-dv">
							<div class="left-dv-img">
								<img src="{{ asset('public/assets-new/images/home-con/com-profile.png')}}" alt=""
								class="img-fluid">
							</div>
							<div class="left-company-name">
								<p>Company Name <img src="{{ asset('public/assets-new/images/home-con/star.png')}}"
								alt=""> 4.2</p>
								<h4>Our Diversity And Inclusion At <br> Workplace</h4>
							</div>
							<a href="#" class="learn-more">Learn More</a>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-12 d-flex justify-content-end pe-5">
						<div class="right-dv-vdo">
							<div class="right-vdo">
								<a href="#" data-bs-toggle="modal" data-bs-target="#video-play"><img
									src="{{ asset('public/assets-new/images/home-con/play-button.png')}}" alt=""
								class="img-fluid"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ---------------popup start--------------------- -->
	<!-- Modal -->
	<div class="modal fade" id="video-play" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header" style="border-bottom: none;">
					<!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/D0UnqGm_miA"
					title="Dummy Video For Website" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
					allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- ---------------popup end--------------------- -->
</section>
<!-- ----------- What type of job do you want End Here------------ -->
<!-- ----------- Get a job faster on app Start Here------------  -->
<section class="get-a-job-faster-app-start-sec">
	<div class="container-fluid">
		<div class="get-a-job-you-card">
			<h3>Get a job faster on app</h3>
			<p class="rated-para">Rated 4.6
				<span class="fisrt-span"><img src="{{ asset('public/assets-new/images/home-con/star-purple.png')}}"
				alt=""></span>
				<span><img src="{{ asset('public/assets-new/images/home-con/star-purple.png')}}" alt=""></span>
				<span><img src="{{ asset('public/assets-new/images/home-con/star-purple.png')}}" alt=""></span>
				<span><img src="{{ asset('public/assets-new/images/home-con/star-purple.png')}}" alt=""></span>
				<span class="last-span"><img src="{{ asset('public/assets-new/images/home-con/star-purple.png')}}"
				alt=""></span>
				on PlayStore
			</p>
		</div>
	</div>
</section>
<!-- ----------- Get a job faster on app end Here------------  -->
<!-- ----------- Learn With kaam milega Start Here------------  -->
<section class="learn-with-kaam-milega-sec">
	<div class="container">
		<div class="learn-with-kaam-dv">
			<h3>Learn With <span> Kaam Milega</span></h3>
		</div>
		<div class="row">
			@if($learning_video)
			<div class="col-xl-7 col-lg-7 col-md-6 col-12">
				<div class="right-vdo-dv">
					<iframe width="100%" height="100%" src="{{$learning_video[0]->video_link}}"
					title="{{$learning_video[0]->title}}" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
					allowfullscreen></iframe>
				</div>
			</div>
			@endif
			<div class="col-xl-5 col-lg-5 col-md-6 col-12">
				<div class="left-vdo-dv-scroll">
					@foreach ($learning_video as $key => $value)
					<div class="vdo-card-list active">
						<div class="iframe-dv">
							<iframe width="100%" height="100%" src="{{$value->video_link}}" title="{{$value->title}}"
							frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
							allowfullscreen></iframe>
						</div>
						<div class="heading-para">
							<h5>{{$value->title}}</h5>
							<p>{{secondsToHumanReadable($value->durations)}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ----------- Learn With kaam milega End Here------------  -->
<!-- ----------- Connect with our experts Start Here----------  -->
<section class="connect-with-expert-sec">
	<div class="container-fluid">
		<div class="connect-with-expert-heading">
			<h3> Connect With Our <span> Experts </span></h3>
		</div>
		<div class="connect-just-like-you-slider">
			<div class="connect-just-slider-item">
				<div class="connect-card">
					<div class="connect-card-img">
						<img src="{{ asset('public/assets-new/images/home-con/connect-just.png')}}" alt=""
						class="img-fluid">
						<div class="green-dot"></div>
					</div>
					<h4>Expert Name</h4>
					<p class="person-desi">Expert Designation</p>
					<div class="location-para-icon">
						<img src="{{ asset('public/assets-new/images/home-con/mappin.png')}}" alt="">
						<p>Location</p>
					</div>
					<p class="person-desi1">10 mutual connects</p>
					<a href="#" class="chat-btn"> <img
						src="{{ asset('public/assets-new/images/home-con/chat-btn.png')}}" alt="" class="img-fluid">
					Chat</a>
					<a href="#" class="follow-btn">Follow</a>
				</div>
			</div>
			<div class="connect-just-slider-item">
				<div class="connect-card">
					<div class="connect-card-img">
						<img src="{{ asset('public/assets-new/images/home-con/connect-just.png')}}" alt=""
						class="img-fluid">
						<div class="green-dot"></div>
					</div>
					<h4>Expert Name</h4>
					<p class="person-desi">Expert Designation</p>
					<div class="location-para-icon">
						<img src="{{ asset('public/assets-new/images/home-con/mappin.png')}}" alt="">
						<p>Location</p>
					</div>
					<p class="person-desi1">10 mutual connects</p>
					<a href="#" class="chat-btn"> <img
						src="{{ asset('public/assets-new/images/home-con/chat-btn.png')}}" alt="" class="img-fluid">
					Chat</a>
					<a href="#" class="follow-btn">Follow</a>
				</div>
			</div>
			<div class="connect-just-slider-item">
				<div class="connect-card">
					<div class="connect-card-img">
						<img src="{{ asset('public/assets-new/images/home-con/connect-just.png')}}" alt=""
						class="img-fluid">
						<div class="green-dot"></div>
					</div>
					<h4>Expert Name</h4>
					<p class="person-desi">Expert Designation</p>
					<div class="location-para-icon">
						<img src="{{ asset('public/assets-new/images/home-con/mappin.png')}}" alt="">
						<p>Location</p>
					</div>
					<p class="person-desi1">10 mutual connects</p>
					<a href="#" class="chat-btn"> <img
						src="{{ asset('public/assets-new/images/home-con/chat-btn.png')}}" alt="" class="img-fluid">
					Chat</a>
					<a href="#" class="follow-btn">Follow</a>
				</div>
			</div>
			<div class="connect-just-slider-item">
				<div class="connect-card">
					<div class="connect-card-img">
						<img src="{{ asset('public/assets-new/images/home-con/connect-just.png')}}" alt=""
						class="img-fluid">
						<div class="green-dot"></div>
					</div>
					<h4>Expert Name</h4>
					<p class="person-desi">Expert Designation</p>
					<div class="location-para-icon">
						<img src="{{ asset('public/assets-new/images/home-con/mappin.png')}}" alt="">
						<p>Location</p>
					</div>
					<p class="person-desi1">10 mutual connects</p>
					<a href="#" class="chat-btn"> <img
						src="{{ asset('public/assets-new/images/home-con/chat-btn.png')}}" alt="" class="img-fluid">
					Chat</a>
					<a href="#" class="follow-btn">Follow</a>
				</div>
			</div>
			<div class="connect-just-slider-item">
				<div class="connect-card">
					<div class="connect-card-img">
						<img src="{{ asset('public/assets-new/images/home-con/connect-just.png')}}" alt=""
						class="img-fluid">
						<div class="green-dot"></div>
					</div>
					<h4>Expert Name</h4>
					<p class="person-desi">Expert Designation</p>
					<div class="location-para-icon">
						<img src="{{ asset('public/assets-new/images/home-con/mappin.png')}}" alt="">
						<p>Location</p>
					</div>
					<p class="person-desi1">10 mutual connects</p>
					<a href="#" class="chat-btn"> <img
						src="{{ asset('public/assets-new/images/home-con/chat-btn.png')}}" alt="" class="img-fluid">
					Chat</a>
					<a href="#" class="follow-btn">Follow</a>
				</div>
			</div>
			<div class="connect-just-slider-item">
				<div class="connect-card">
					<div class="connect-card-img">
						<img src="{{ asset('public/assets-new/images/home-con/connect-just.png')}}" alt=""
						class="img-fluid">
						<div class="green-dot"></div>
					</div>
					<h4>Expert Name</h4>
					<p class="person-desi">Expert Designation</p>
					<div class="location-para-icon">
						<img src="{{ asset('public/assets-new/images/home-con/mappin.png')}}" alt="">
						<p>Location</p>
					</div>
					<p class="person-desi1">10 mutual connects</p>
					<a href="#" class="chat-btn"> <img
						src="{{ asset('public/assets-new/images/home-con/chat-btn.png')}}" alt="" class="img-fluid">
					Chat</a>
					<a href="#" class="follow-btn">Follow</a>
				</div>
			</div>
			<div class="connect-just-slider-item">
				<div class="connect-card">
					<div class="connect-card-img">
						<img src="{{ asset('public/assets-new/images/home-con/connect-just.png')}}" alt=""
						class="img-fluid">
						<div class="green-dot"></div>
					</div>
					<h4>Expert Name</h4>
					<p class="person-desi">Expert Designation</p>
					<div class="location-para-icon">
						<img src="{{ asset('public/assets-new/images/home-con/mappin.png')}}" alt="">
						<p>Location</p>
					</div>
					<p class="person-desi1">10 mutual connects</p>
					<a href="#" class="chat-btn"> <img
						src="{{ asset('public/assets-new/images/home-con/chat-btn.png')}}" alt="" class="img-fluid">
					Chat</a>
					<a href="#" class="follow-btn">Follow</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ----------- Connect with our experts End Here------------  -->
<!-- ----------- Upcoming events and challenges Start Here------------  -->
<section class="upcoming-events-and-challenges-sec">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-4 col-12">
				<div class="upcoming-events-heading">
					<h3><span> Upcoming Events </span> And Challenges</h3>
				</div>
				<div class="upcoming-event-para">
					<p>Lorem ipsum dolor sit amet consectetur. Viverra scelerisque leo cursus facilisis dui. A bibendum
						commodo
					id at id integer. Nunc pellentesque turpis tempus cras velit interdum nunc. </p>
				</div>
				<div class="upcoming-event-atag">
					<a href="#">View All Events <img
					src="{{ asset('public/assets-new/images/home-con/view-all-icon.png')}}" /></a>
				</div>
			</div>
			<div class="col-xl-8 col-lg-8 col-md-8 col-12">
				<div class="upcoming-left-slider">
					@foreach ($events as $key => $value)
					<div class="upcoming-left-items">
						<div class="items-images">
							<img src="{{ asset('public/uploads/'.$value->banner) }}" alt=""
							class="img-fluid">
							<div class="every-class">
								<p>Every Classes In 2d</p>
							</div>
							<div class="coding-contest">
								<a href="#">Coding Contest</a>
							</div>
							<div class="items-content-card">
								<div class="img-heading">
									<img src="{{ asset('public/uploads/'.$value->logo) }}" alt=""
									class="img-fluid">
									<div class="content-heading">
										<h5>{{$value->contest_name}}</h5>
										<p>{{$value->title}}</p>
									</div>
								</div>
								<div class="course-topic">
									<a href="#">{{$value->topics}}</a>
								</div>
								<div class="date-number">
									<p><img src="{{ asset('public/assets-new/images/home-con/user-icon.png')}}" alt=""
									class="img-fluid"> {{date($value->date,strtotime('d-m-Y H:i:s'))}}</p>
									<p><img src="{{ asset('public/assets-new/images/home-con/calender.png')}}" alt=""
									class="img-fluid"> 1.7K Enrolled</p>
								</div>
								<div class="bottom-card-dashed"></div>
								<div class="bottom-view-all-btn">
									<p class="trophy-icn"><img
										src="{{ asset('public/assets-new/images/home-con/trophy.png')}}" alt=""
										class="img-fluid"> <a href="#">Exciting Rewards</a></p>
										<p><a href="#">View Details</a></p>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<div class="upcoming-left-items">
							<div class="items-images">
								<img src="{{ asset('public/assets-new/images/home-con/upcoming.png')}}" alt=""
								class="img-fluid">
								<div class="every-class">
									<p>Every Classes In 2d</p>
								</div>
								<div class="coding-contest">
									<a href="#">Coding Contest</a>
								</div>
								<div class="items-content-card">
									<div class="img-heading">
										<img src="{{ asset('public/assets-new/images/home-con/event-com.png')}}" alt=""
										class="img-fluid">
										<div class="content-heading">
											<h5>Monthly Contest 17</h5>
											<p>Coding Ninjas</p>
										</div>
									</div>
									<div class="course-topic">
										<a href="#">data structure & algorithms</a>
									</div>
									<div class="date-number">
										<p><img src="{{ asset('public/assets-new/images/home-con/user-icon.png')}}" alt=""
										class="img-fluid"> 23 Aug, 3:30 PM</p>
										<p><img src="{{ asset('public/assets-new/images/home-con/calender.png')}}" alt=""
										class="img-fluid"> 1.7K Enrolled</p>
									</div>
									<div class="bottom-card-dashed"></div>
									<div class="bottom-view-all-btn">
										<p class="trophy-icn"><img
											src="{{ asset('public/assets-new/images/home-con/trophy.png')}}" alt=""
											class="img-fluid"> <a href="#">Exciting Rewards</a></p>
											<p><a href="#">View Details</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="upcoming-left-items">
								<div class="items-images">
									<img src="{{ asset('public/assets-new/images/home-con/upcoming.png')}}" alt=""
									class="img-fluid">
									<div class="every-class">
										<p>Every Classes In 2d</p>
									</div>
									<div class="coding-contest">
										<a href="#">Coding Contest</a>
									</div>
									<div class="items-content-card">
										<div class="img-heading">
											<img src="{{ asset('public/assets-new/images/home-con/event-com.png')}}" alt=""
											class="img-fluid">
											<div class="content-heading">
												<h5>Monthly Contest 17</h5>
												<p>Coding Ninjas</p>
											</div>
										</div>
										<div class="course-topic">
											<a href="#">data structure & algorithms</a>
										</div>
										<div class="date-number">
											<p><img src="{{ asset('public/assets-new/images/home-con/user-icon.png')}}" alt=""
											class="img-fluid"> 23 Aug, 3:30 PM</p>
											<p><img src="{{ asset('public/assets-new/images/home-con/calender.png')}}" alt=""
											class="img-fluid"> 1.7K Enrolled</p>
										</div>
										<div class="bottom-card-dashed"></div>
										<div class="bottom-view-all-btn">
											<p class="trophy-icn"><img
												src="{{ asset('public/assets-new/images/home-con/trophy.png')}}" alt=""
												class="img-fluid"> <a href="#">Exciting Rewards</a></p>
												<p><a href="#">View Details</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="recharge-your-wallet-dv">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6 col-12 text-center">
								<div class="recharge-your-wallet-left">
									<h3>Graphic</h3>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="recharge-your-wallet-right">
									<h3>recharge your <span>wallet</span> and get faster Job</h3>
									<p>Nothing casual about this job app</p>
									<div class="recharge-now-btn">
										<a href="#"><img src="{{ asset('public/assets-new/images/home-con/wallet.png')}}" alt="">
										Recharge now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ----------- Upcoming events and challenges End Here------------  -->
			<!-- ----------- What people are Saying about kaam milega Start Here------------  -->
			<section class="what-people-are-saying-about-sec">
				<div class="what-people-saying-heading">
					<h3>What People Are Saying About <span> Kaam Milega</span></h3>
				</div>
				<div class="what-people-say-slider">
					@foreach ($reviews as $key => $value)
					<div class="what-people-say-card">
						<div class="card-image-content-flx">
							<div class="card-img">
								<img src="{{ asset('public/assets-new/images/home-con/connect-just.png')}}" alt=""
								class="img-fluid">
							</div>
							<div class="card-content">
								<h4>{{$value->name}}</h4>
								<div class="rating-star">
									<span>{{$value->ratings}}</span>
									<img src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt="" class="img-fluid">
									<img src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt="" class="img-fluid">
									<img src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt="" class="img-fluid">
									<img src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt="" class="img-fluid">
									<img src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt="" class="img-fluid">
									<div class="card-content-para">
										{!!$value->comment!!}
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</section>
			<!-- ----------- What people are Saying about kaam milega End Here------------  -->
			<!-- ----------- accelerate your job search with premium services Start Here------------  -->
			<section class="accelerate-your-job-search-with-premium-services-sec">
				<div class="container-fluid">
					<div class="inner-prent-dv">
						<div class="row align-items-top">
							<div class="col-lg-3 col-md-3 col-12">
								<div class="left-side-con">
									<h3>Graphic</h3>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="center-side-con">
									<h5>accelerate your job search with premium services</h5>
									<p>Service to help you get hired, faster: from preparing your CV, getting recruiter attention,
										finding the
									right jobs, and more!</p>
									<div class="resume-priority-flx">
										<a href="#">resume writing</a>
										<a href="#">priority applicant</a>
										<a href="#">Resume display</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-12 text-center">
								<div class="right-side-con">
									<a href="#">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ----------- accelerate your job search with premium services End Here------------  -->
			<!-- ----------- Popular Questions Start Here------------  -->
			<section class="popular-questions-sec">
				<div class="container-fluid">
					<div class="popular-question-sec-parent">
						<div class="popular-questions-heading">
							<h3>Popular <span> Questions</span></h3>
						</div>
						<div class="faq-section-start">
							<div class="accordion" id="accordionExample">
								@foreach ($faqs->where('faq_for', 1) as $key => $value)
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne{{$key}}">
									<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapseOne{{$key}}" aria-expanded="true"
									aria-controls="collapseOne{{$key}}">
									{{$value->title}}
									</button>
									</h2>
									<div id="collapseOne{{$key}}" class="accordion-collapse collapse {{$loop->first ? 'show' : ''}}"
										aria-labelledby="headingOne{{$key}}" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											{!! $value->descriptions !!}
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ----------- Popular Questions End Here------------  -->
			<!-- ----------- footer-find-jobs-section Start Here------------  -->
			<section class="footer-find-jobs-section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12 offset-md-3 offset-lg-3">
							<div class="footer-heading-dv">
								<h6><b>Find Jobs</b></h6>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12"></div>
						<div class="col-lg-2 col-md-2 col-12">
							<div class="footer-find-dv">
								<ul>
									<li><a href="#">Agra</a></li>
									<li><a href="#">Ajmer</a></li>
									<li><a href="#">Asansol</a></li>
									<li><a href="#">Belagavi</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-12">
							<div class="footer-find-dv">
								<ul>
									<li><a href="#">Ahmedabad</a></li>
									<li><a href="#">Aligarh</a></li>
									<li><a href="#">Aurangabad</a></li>
									<li><a href="#">Bengaluru</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-12">
							<div class="footer-find-dv">
								<ul>
									<li><a href="#">Ahmednagar</a></li>
									<li><a href="#">Amritsar</a></li>
									<li><a href="#">Bareilly</a></li>
									<li><a href="#">Bhavnagar</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-12"></div>
					</div>
					<div class="row collapse" id="view-more-find-job">
						<div class="col-lg-3 col-md-3 col-12"></div>
						<div class="col-lg-2 col-md-2 col-12">
							<div class="footer-find-dv">
								<ul>
									<li><a href="#">Agra</a></li>
									<li><a href="#">Ajmer</a></li>
									<li><a href="#">Asansol</a></li>
									<li><a href="#">Belagavi</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-12">
							<div class="footer-find-dv">
								<ul>
									<li><a href="#">Ahmedabad</a></li>
									<li><a href="#">Aligarh</a></li>
									<li><a href="#">Aurangabad</a></li>
									<li><a href="#">Bengaluru</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-12">
							<div class="footer-find-dv">
								<ul>
									<li><a href="#">Ahmednagar</a></li>
									<li><a href="#">Amritsar</a></li>
									<li><a href="#">Bareilly</a></li>
									<li><a href="#">Bhavnagar</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-12"></div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="view-more-btn">
								<a class="" data-bs-toggle="collapse" href="#view-more-find-job" role="button" aria-expanded="false"
									aria-controls="collapseExample">
									View more
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="container-fluid">
				<hr>
			</div>
			<!-- ----------- footer-find-jobs-section End Here------------  -->
			@endsection