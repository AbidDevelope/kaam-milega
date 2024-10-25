<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kaam Milega</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('public/assets-new/css/style.css?111') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets-new/css/user-profile.css?222') }}" />
  </head>
  <body>
    <!-- -----------Navbar Start Here------------ -->
    <section class="home-page-five-after-login-navbar">
      <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="{{ asset('public/assets-new/images/logo.png') }}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ms-auto align-items-center">
              <li class="nav-item">
                <a class="nav-link" href="home-page-after-login.html"><img src="{{ asset('public/assets-new/images/navbar/home.png') }}" alt=""></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="connect-page.html"><img src="{{ asset('public/assets-new/images/navbar/user.png') }}" alt=""></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><img src="{{ asset('public/assets-new/images/navbar/suitcase.png') }}" alt=""></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="chat-page.html"><img src="{{ asset('public/assets-new/images/navbar/chat.png') }}" alt=""></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="connect-page-single-events.html"><img src="{{ asset('public/assets-new/images/navbar/bookmark.png') }}" alt=""></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notification.html"><img src="{{ asset('public/assets-new/images/navbar/bell.png') }}" alt=""></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle ps-0 " href="#" role="button" data-bs-toggle="dropdown">
                  @if($users !== null)
                  <img src="{{ asset('public/assets-new/images/user-profile/' . $users->user_profile) }}" style="height:30px" class="img-fluid rounded-circle" alt="" />
                  @else
                  <img src="{{ asset('public/assets-new/images/navbar/Profile.png') }}" class="border rounded-circle" alt=""> {{ auth()->user()->name }}
                  @endif
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link " href="{{ url('logout') }}" >Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- -----------Navbar End Here------------ -->
    <!-- ------------Profile Banner Start Here------------ -->
    <section class="user-profile mt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-9">
            <div class="col-lg-12">
              <div class="profile-banner-area text-center">
                @if($users !== null )
                <img src="{{ asset('public/assets-new/images/user-profile/' . $users->user_background_profile) }}" style="height:200px" class="img-fluid w-100" alt="" />
                @else
                <img src="{{ asset('public/assets-new/images/user-profile/Rectangle.png') }}" style="height:250px" class="img-fluid w-100" alt="" />
                @endif
                <div class="camera">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo"><img
                  src="{{ asset('public/assets-new/images/user-profile/cam.png') }}" class="img-fluid" alt="" /></a>
                </div>
                <div class="profile-icon">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo">
                    @if($users !== null )
                    <img src="{{ asset('public/assets-new/images/user-profile/' . $users->user_profile) }}" style="height:100px" class="img-fluid rounded-circle" alt="" />
                    @else
                    <img src="{{ asset('public/assets-new/images/user-profile/profile.png') }}" style="height:100px" class="img-fluid" alt="" />
                    @endif
                  </a>
                </div>
              </div>
              <div class="prof-info-area mt-5">
                <div class="user-info">
                  <h4>{{ auth()->user()->name }}</h4>
                  <h5>{{ $users->designation }}</h5>
                  <img src="{{ asset('public/assets-new/images/user-profile/location.png') }}" class="img-fluid me-2" alt="" /><span>Delhi,
                  India</span>
                  <p class="mt-3">194 Connections</p>
                </div>
                <div class="prof-status">
                  <div class="edit-btn">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="@mdo"><img
                    src="{{ asset('public/assets-new/images/user-profile/edit.png') }}" class="img-fluid" alt="" /></a>
                  </div>
                  <p>Profile Last Updated - <span>Today</span></p>
                </div>
              </div>
              <div class="add-profile-sec">
                <input type="radio" id="open-to-btn" name="open" value="Male" />
                <label for="open-to-btn">Open To</label>
                <input type="radio" id="add-prof-btn" name="open" value="Female" />
                <label for="add-prof-btn">Add Profile Section</label>
                <div class="add-more-btn">
                  <a href="#">Add More</a>
                </div>
              </div>
              <div class="open-work-parent">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="open-to-work">
                      <div class="open-work-edit-btn">
                        <h5>Open to Work</h5>
                        <a href="#"><img src="{{ asset('public/assets-new/images/user-profile/edit.png') }}" class="img-fluid" alt="" /></a>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="open-to-work">
                      <div class="open-work-edit-btn">
                        <h5>Providing Services</h5>
                        <a href="#"><img src="{{ asset('public/assets-new/images/user-profile/edit.png') }}" class="img-fluid" alt="" /></a>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                      <a href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- -----------------Analytics----------------- -->
              <div class="analytics-parent">
                <div class="analytics-heading">
                  <h4>Analytis</h4>
                </div>
                <div class="private-icon">
                  <a href="#"><i class="fa fa-eye"></i></a><span>Private to you</span>
                </div>
                <div class="analytics-info-parent">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="custm-analytics-crd">
                        <div class="profile-img">
                          <img src="{{ asset('public/assets-new/images/user-profile/analytic-profile.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="custm-textarea">
                          <h5>45 Profile Views</h5>
                          <p>Discover Who's Viewed Your Profile.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="custm-analytics-crd">
                        <div class="profile-img">
                          <img src="{{ asset('public/assets-new/images/user-profile/post.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="custm-textarea">
                          <h5>45 Profile Views</h5>
                          <p>Discover Who's Viewed Your Profile.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="custm-analytics-crd">
                        <div class="profile-img">
                          <img src="{{ asset('public/assets-new/images/user-profile/search.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="custm-textarea">
                          <h5>45 Profile Views</h5>
                          <p>Discover Who's Viewed Your Profile.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- -----------------Early Access----------------- -->
              <div class="early-access-role-parent">
                <div class="access-role-heading">
                  <h4>Early Access Roles <a href="#"><img src="{{ asset('public/assets-new/images/user-profile/ques.png') }}" alt=""></a></h4><!-- <span><img src="assets/images/user-profile/ques.png" alt=""></span> -->
                </div>
              </div>
              <!-- -----------------Resources----------------- -->
              <div class="resources-parent">
                <div class="resources-heading">
                  <h4>Resources</h4>
                </div>
              </div>
              <!-- -----------------About----------------- -->
              <div class="about-parent">
                <div class="about-heading">
                  <h4>About</h4>
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal4" data-bs-whatever="@mdo"><img
                  src="{{ asset('public/assets-new/images/user-profile/edit.png') }}" class="img-fluid" alt=""></a>
                </div>
                <div class="about-para">
                  <p>{{ $users ? $users->about :"" }}
                  </p>
                </div>
                <div class="top-skill-dv">
                  <div class="heading">
                    <a href="#"><i class="fa fa-diamond"></i> <span>Top Skills</span></a>
                  </div>
                  <div class="skill-area">
        
                    <ul>
                      @foreach($skills as $data)
                      <li>{{ $data->skill_name }}</li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
              <!-- -----------------Jobs based on your profile----------------- -->
              <div class="jobs-based-on-profile">
                <div class="heading-dv">
                  <h4>Jobs Based On Your Profile</h4>
                </div>
                <div class="job-profile-dv">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="profile-card">
                        <h5><a href="#">Fintech</a></h5>
                        <p>1.4K+ Are Actively Hiring</p>
                        <div class="com-pro-img">
                          <img src="public/assets-new/images/home-con/com-profile.png" alt="" class="img-fluid">
                          <img src="public/assets-new/images/home-con/com-profile.png" alt="" class="img-fluid">
                          <img src="public/assets-new/images/home-con/com-profile.png" alt="" class="img-fluid">
                          <img src="public/assets-new/images/home-con/com-profile.png" alt="" class="img-fluid">
                        </div>
                        <div class="green-dot"></div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="profile-card">
                        <h5><a href="#">Internet</a></h5>
                        <p>1.4K+ Are Actively Hiring</p>
                        <div class="com-pro-img">
                          <img src="public/assets-new/images/home-con/com-profile.png" alt="" class="img-fluid">
                          <img src="public/assets-new/images/home-con/com-profile.png" alt="" class="img-fluid">
                          <img src="public/assets-new/images/home-con/com-profile.png" alt="" class="img-fluid">
                          <img src="public/assets-new/images/home-con/com-profile.png" alt="" class="img-fluid">
                        </div>
                        <div class="green-dot"></div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="profile-card">
                        <h5><a href="#">Fortune 500</a></h5>
                        <p>1.4K+ Are Actively Hiring</p>
                        <div class="com-pro-img">
                          <img src="public/assets-new/images/home-con/com-profile.png" alt="" class="img-fluid">
                          <img src="public/assets-new/images/home-con/com-profile.png" alt="" class="img-fluid">
                          <img src="public/assets-new/images/home-con/com-profile.png" alt="" class="img-fluid">
                          <img src="public/assets-new/images/home-con/com-profile.png" alt="" class="img-fluid">
                        </div>
                        <div class="green-dot"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="see-all-btn text-center">
                  <a href="#">See All Jobs</a>
                </div>
              </div>
              <!-- -----------------Jobs based on your applies----------------- -->
              <div class="jobs-based-on-applies">
                <div class="heading-dv">
                  <h4>Jobs Based On Your Applies</h4>
                </div>
                <div class="job-applies-card">
                  <div class="applies-dv">
                    <div class="heading-area">
                      <h4>Accountant Cum Office Assistant</h4>
                      <p>Shreenathji Auto Industries</p>
                    </div>
                    <div class="applied-btn">
                      <a href="#">Applied</a>
                    </div>
                  </div>
                  <div class="custm-package-dv">
                    <div class="salary">
                      <img src="{{ asset('public/assets-new/images/user-profile/ruppee.png') }}" alt="">
                      <h5>₹20,000 ₹35,000 <span>/Month</span></h5>
                    </div>
                    <div class="address">
                      <img src="{{ asset('public/assets-new/images/user-profile/location.png') }}" alt="">
                      <h5>Rajarajeshwari Nagar, Bangalore</h5>
                    </div>
                  </div>
                </div>
                <div class="job-applies-card">
                  <div class="applies-dv">
                    <div class="heading-area">
                      <h4>Accountant Cum Office Assistant</h4>
                      <p>Shreenathji Auto Industries</p>
                    </div>
                    <div class="applied-btn">
                      <a href="#">Applied</a>
                    </div>
                  </div>
                  <div class="custm-package-dv">
                    <div class="salary">
                      <img src="{{ asset('public/assets-new/images/user-profile/ruppee.png') }}" alt="">
                      <h5>₹20,000 ₹35,000 <span>/Month</span></h5>
                    </div>
                    <div class="address">
                      <img src="public/assets-new/images/user-profile/location.png" alt="">
                      <h5>Rajarajeshwari Nagar, Bangalore</h5>
                    </div>
                  </div>
                </div>
                <div class="see-all-btn text-center">
                  <a href="#">See All Applied Jobs</a>
                </div>
              </div>
              <!-- -----------------Activity----------------- -->
              <div class="activity-parent">
                <div class="heading-dv">
                  <h4>Activity</h4>
                  <div class="create-post-dv">
                    <a href="#" class="post-btn">Create Post</a>
                    <a href="#"><img src="public/assets-new/images/user-profile/edit.png" class="img-fluid" alt=""></a>
                  </div>
                </div>
                <div class="title">
                  <h5>You haven't posted yet</h5>
                  <p>Posts you share will be displayed here.</p>
                </div>
                <div class="see-all-btn text-center">
                  <a href="#">See All Activities &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
              <!-- -----------------Experience----------------- -->
              <div class="experience-parent">
                <div class="heading-dv">
                  <h4>Experience</h4>
                  <div class="edit-add-dv">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#addExperience" data-bs-whatever="@mdo" class="add-btn"><i class="fa-solid fa-plus"></i></a>
                  </div>
                </div>
                <div class="exp-info-parent">
                 
                @foreach($experienceItem as $item)
                <div class="exp-card">
                    <div class="desig-img">
                        <img src="{{ asset('public/assets-new/images/user-profile/frame.png') }}" alt="">
                    </div>
                    <div class="desig-detail">
                        <h5>{{ $item->title }} &nbsp;&nbsp;<a data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}" data-bs-whatever="@mdo"><img
                        src="{{ asset('public/assets-new/images/user-profile/edit.png') }}" class="img-fluid" alt=""></a></h5>
                        <p>Company Name: {{ $item->company_name }}</p>
                        <p>Job Type: {{ $item->employment_type }}</p>
                         <p>{{ date('d M Y', strtotime($item->start_date)) }} - {{ date('d M Y', strtotime($item->end_date)) }} &nbsp;</p>
                        <p>{{ $item->company_location }}</p>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade exp-edit-modal" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $item->id }}"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel{{ $item->id }}">Edit Experience</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h6>*Indicates required</h6>
                                <form action="{{ route('experience/update', $item->id) }}" method="POST">
                                  @csrf
                                    <div class="mb-3">
                                        <label for="recipient-name{{ $item->id }}" class="col-form-label">Title*</label>
                                        <input type="text" class="form-control" name="title" id="recipient-name{{ $item->id }}" value="{{ $item->title }}" >
                                    </div>
                                    <div class="mb-3 enrol-dv">
                                    <label for="message-text" class="col-form-label">Employment Type</label>
                                    <select name="employment_type" class="form-control form-select" id="">
                                      <option value="" selected>Please Select</option>
                                      <option value="Full-time" {{ $item->employment_type == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                                      <option value="Part-time" {{ $item->employment_type == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                                      <option value="Traineeship" {{ $item->employment_type == 'Traineeship' ? 'selected' : '' }}>Traineeship</option>
                                    </select>
                                    <p>Learn More About <a href="">Employment Types.</a></p>
                                  </div>
                                  <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Company Name*</label>
                                    <input type="text" class="form-control" name="company_name" id="recipient-name" value="{{ $item->company_name }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Location</label>
                                    <input type="text" class="form-control" name="company_location" id="recipient-name" value="{{ $item->company_location }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Location Type</label>
                                    <select name="location_type" id="" class="form-control">
                                      <option value="" selected>Select Type</option>
                                      <option value="On-site" {{ $item->location_type == 'On-site' ? 'selected' : '' }}>On-site</option>
                                      <option value="Hybrid" {{ $item->location_type == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                                      <option value="Remote" {{ $item->location_type == 'Remote' ? 'selected' : '' }}>Remote</option>
                                    </select>
                                  </div>
                                  <div class="row">
                                  <div class="col-md-6 mb-3">
                                    <label for="recipient-name" class="col-form-label">Start Date</label>
                                    <input type="date" class="form-control startdate" name="start_date" value="{{ $item->start_date }}" placeholder="DD/MM/YYYY">
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <label for="recipient-name" class="col-form-label">End Date</label>
                                    <input type="date" class="form-control" name="end_date" value="{{ $item->end_date }}" placeholder="DD/MM/YYYY">
                                  </div>
                                  </div>
                                  <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Industry</label>
                                  <input type="text" class="form-control" name="industry" value="{{ $item->industry }}">
                                </div>
                                <div class="mb-3">
                                        <label for="description{{ $item->id }}" class="col-form-label">Description</label>
                                        <textarea type="text" name="description" class="form-control" id="description{{ $item->id }}" rows="5">{{ $item->description }}</textarea>
                                  </div>
                                  <div class="modal-footer">
                                  <a href="{{ route('experience/delete', $item->id) }}">Delete Experience</a>
                                  <button type="submit" class="btn btn-primary save-btn">Save</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


                </div>
              </div>
              <!-- -----------------Education----------------- -->
              <div class="education-parent">
                <div class="heading-dv">
                  <h4>Education</h4>
                  <div class="edit-add-dv">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#addEducation" data-bs-whatever="@mdo" class="add-btn"><i class="fa-solid fa-plus"></i></a>
                  </div>
                </div>
                @foreach($education as $index=>$data)
                <div class="edu-card">
                  <div class="edu-img">
                    <img src="public/assets-new/images/user-profile/frame.png" alt="">
                  </div>
                  <div class="edu-detail">
                    <h5>{{ $data->school }} &nbsp;&nbsp;<a href="#" data-bs-toggle="modal" data-bs-target="#educationModal{{ $data->id }}" data-bs-whatever="@mdo"><img
                    src="public/assets-new/images/user-profile/edit.png" class="img-fluid" alt=""></a></h5>
                    <p>{{ $data->degree }}</p>
                    <p>{{ date('d M Y', strtotime($data->start_date)) }} - {{ date('d M Y', strtotime($data->end_date)) }} &nbsp;</p>
                    <!-- <p>Location</p> -->
                  </div>
                </div>

                <!---------------------Edit Education Modal Area Start ------------------>
                      <div class="modal fade exp-edit-modal" id="educationModal{{ $data->id }}" tabindex="-1" aria-labelledby="educationModalLabel{{ $data->id }}"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="educationModalLabel{{ $data->id }}">Edit Education</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <h6>*Indicates required</h6>
                              <form action="{{ route('education/update', $data->id) }}" method="POST">
                                @csrf 
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">School*</label>
                                  <input type="text" class="form-control" id="recipient-name" name="school" value="{{ $data->school }}">
                                </div>
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Degree</label>
                                  <input type="text" class="form-control" id="recipient-name" name="degree" value="{{ $data->degree }}">
                                </div>
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Field Of Study</label>
                                  <input type="text" class="form-control" id="recipient-name" name="field_of_study" value="{{ $data->field_of_study }}">
                                </div>
                                <div class="row">
                                <div class="col-md-6 mb-3">
                                  <label for="recipient-name" class="col-form-label">Start Date*</label>
                                  <input type="date" class="form-control" name="start_date" value="{{ $data->start_date }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="recipient-name" class="col-form-label">End Date*</label>
                                  <input type="date" class="form-control" name="end_date" value="{{ $data->end_date }}">
                                </div>
                                </div>
                                <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Location</label>
                                  <input type="text" class="form-control" id="recipient-name" name="location" value="{{ $data->location }}">
                                </div>
                                <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Description</label>
                                <textarea name="description" class="form-control" type="text" rows="5">{{ $data->description }}</textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                                <a href="{{ route('education/delete', $data->id) }}">Delete Education</a>
                                <button type="submit" class="btn btn-primary save-btn">Save</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!---------------------Edit Education Modal Area Ends ------------------>
                @endforeach
              </div>
              <!-- -----------------Skills----------------- -->
              <div class="skills-parent">
                <div class="heading-dv">
                  <h4>Skills</h4>
                  <div class="test-skill-dv">
                    <a href="#" class="test-btn">Test Skill</a>
                    <a href="#" class="add-btn"><i class="fa-solid fa-plus"></i></a>
                    <a href="#"><img src="public/assets-new/images/user-profile/edit.png" class="img-fluid" alt=""></a>
                  </div>
                </div>
                <div class="skill-tabs">
                  <ul>
                    <li><i class="fa-solid fa-circle-check"></i> Skill 1</li>
                    <li><i class="fa-solid fa-circle-check"></i> Skill 2</li>
                    <li><i class="fa-solid fa-circle-check"></i> Skill 3</li>
                    <li><i class="fa-solid fa-circle-check"></i> Skill 4</li>
                    <li><i class="fa-solid fa-circle-check"></i> Skill 5</li>
                    <li><i class="fa-solid fa-circle-check"></i> Skill 6</li>
                  </ul>
                </div>
              </div>
              <!-- -----------------Interest----------------- -->
              <div class="interest-parent">
                <div class="heading-dv">
                  <h4>Interest</h4>
                </div>
                <div class="interest-tabs">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-experts-tab" data-bs-toggle="tab"
                      data-bs-target="#nav-experts" type="button" role="tab" aria-controls="nav-experts"
                      aria-selected="true">Top Experts</button>
                      <button class="nav-link" id="nav-companies-tab" data-bs-toggle="tab" data-bs-target="#nav-companies"
                      type="button" role="tab" aria-controls="nav-companies" aria-selected="false">Companies</button>
                      <button class="nav-link" id="nav-groups-tab" data-bs-toggle="tab" data-bs-target="#nav-groups"
                      type="button" role="tab" aria-controls="nav-groups" aria-selected="false">Groups</button>
                      <button class="nav-link" id="nav-school-tab" data-bs-toggle="tab" data-bs-target="#nav-school"
                      type="button" role="tab" aria-controls="nav-school" aria-selected="false">Groups</button>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-experts" role="tabpanel"
                      aria-labelledby="nav-experts-tab">
                      <div class="tab-interest-card">
                        <div class="img-name-digination-location-dv">
                          <div class="name-img-left">
                            <img src="public/assets-new/images/home-con/cir-img.png" alt="" />
                          </div>
                          <div class="name-dig-location-right">
                            <div class="green-dot"></div>
                            <h6>Expert Name</h6>
                            <p>Expert Designation</p>
                            <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                          </div>
                        </div>
                        <div class="chat-follow-btn">
                          <div class="chat-btn">
                            <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt="" />
                            Chat</a>
                          </div>
                        </div>
                      </div>
                      <div class="tab-interest-card">
                        <div class="img-name-digination-location-dv">
                          <div class="name-img-left">
                            <img src="public/assets-new/images/home-con/cir-img.png" alt="" />
                          </div>
                          <div class="name-dig-location-right">
                            <h6>Expert Name</h6>
                            <p>Expert Designation</p>
                            <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                          </div>
                        </div>
                        <div class="chat-follow-btn">
                          <div class="chat-btn">
                            <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt="" />
                            Chat</a>
                          </div>
                        </div>
                      </div>
                      <div class="tab-interest-card">
                        <div class="img-name-digination-location-dv">
                          <div class="name-img-left">
                            <img src="public/assets-new/images/home-con/cir-img.png" alt="" />
                          </div>
                          <div class="name-dig-location-right">
                            <h6>Expert Name</h6>
                            <p>Expert Designation</p>
                            <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                          </div>
                        </div>
                        <div class="chat-follow-btn">
                          <div class="chat-btn">
                            <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt="" />
                            Chat</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-companies" role="tabpanel" aria-labelledby="nav-companies-tab">
                    Lorem ipsum dolor sit amet.</div>
                    <div class="tab-pane fade" id="nav-groups" role="tabpanel" aria-labelledby="nav-groups-tab">Lorem
                    ipsum dolor sit amet.</div>
                    <div class="tab-pane fade" id="nav-school" role="tabpanel" aria-labelledby="nav-school-tab">Lorem
                    ipsum dolor sit amet.</div>
                  </div>
                </div>
                <div class="see-all-btn text-center">
                  <a href="#">Show All Top Experts</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="profile-sec-rit">
              <div class="prof-lang">
                <h5>Profile Language</h5>
                <a href="#"><img src="public/assets-new/images/user-profile/edit.png" class="img-fluid" alt="" /></a>
              </div>
              <p class="mb-4">English</p>
              <div class="sec-divider"></div>
              <div class="prof-url">
                <h5>Public Profile & URL</h5>
                <a href="#" data-bs-toggle="modal" data-bs-target="#profileUrl" data-bs-whatever="@mdo"><img
                src="public/assets-new/images/user-profile/edit.png" class="img-fluid" alt="" /></a>
              </div>
              <a href="www.linkedin/in/naman-sharma-023867180">www.linkedin/in/naman-sharma-023867180</a>
            </div>
            <!-- ----------------Add Banner---------------- -->
            <div class="add-banner-dv">
              <div class="heading-dv">
                <h4>Add Banner</h4>
              </div>
            </div>
            <!-- ------------------People Who View---------------- -->
            <div class="people-who-view-parent">
              <div class="right-dv-heading">
                <h4>People Who <span>View</span></h4>
              </div>
              <div class="right-dv-second-inner">
                <div class="img-name-digination-location-dv">
                  <div class="name-img-left">
                    <img src="public/assets-new/images/home-con/cir-img.png" alt="" />
                  </div>
                  <div class="green-dot"></div>
                  <div class="name-dig-location-right">
                    <h6>Person Name</h6>
                    <p>person Designation</p>
                    <div class="location-pin">
                      <a href="#"><img src="public/assets-new/images/home-con/mappin.png" alt="" />Location</a>
                    </div>
                    <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                  </div>
                </div>
                <div class="chat-follow-btn">
                  <div class="chat-btn">
                    <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt="" />
                    Chat</a>
                  </div>
                  <div class="follow-btn">
                    <a href="#">Follow</a>
                  </div>
                </div>
              </div>
              <div class="right-dv-second-inner">
                <div class="img-name-digination-location-dv">
                  <div class="name-img-left">
                    <img src="public/assets-new/images/home-con/cir-img.png" alt="" />
                  </div>
                  <div class="green-dot"></div>
                  <div class="name-dig-location-right">
                    <h6>Person Name</h6>
                    <p>person Designation</p>
                    <div class="location-pin">
                      <a href="#"><img src="public/assets-new/images/home-con/mappin.png" alt="" />Location</a>
                    </div>
                    <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                  </div>
                </div>
                <div class="chat-follow-btn">
                  <div class="chat-btn">
                    <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt="" />
                    Chat</a>
                  </div>
                </div>
              </div>
              <div class="right-dv-second-inner">
                <div class="img-name-digination-location-dv">
                  <div class="name-img-left">
                    <img src="public/assets-new/images/home-con/cir-img.png" alt="" />
                  </div>
                  <div class="green-dot"></div>
                  <div class="name-dig-location-right">
                    <h6>Person Name</h6>
                    <p>person Designation</p>
                    <div class="location-pin">
                      <a href="#"><img src="public/assets-new/images/home-con/mappin.png" alt="" />Location</a>
                    </div>
                    <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                  </div>
                </div>
                <div class="chat-follow-btn">
                  <div class="chat-btn">
                    <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt="" />
                    Chat</a>
                  </div>
                  <div class="follow-btn">
                    <a href="#">Follow</a>
                  </div>
                </div>
              </div>
              <div class="right-dv-bottom-view-all-btn">
                <a href="#">Show All</a>
              </div>
              <!-- <div class="radius-border-divider"></div> -->
            </div>
            <!-- ------------------Just Like You---------------- -->
            <div class="just-like-you-parent">
              <div class="right-dv-heading">
                <h4>Just <span>Like You</span></h4>
              </div>
              <div class="right-dv-second-inner">
                <div class="img-name-digination-location-dv">
                  <div class="name-img-left">
                    <img src="public/assets-new/images/home-con/cir-img.png" alt="" />
                  </div>
                  <div class="green-dot"></div>
                  <div class="name-dig-location-right">
                    <h6>Person Name</h6>
                    <p>person Designation</p>
                    <div class="location-pin">
                      <a href="#"><img src="public/assets-new/images/home-con/mappin.png" alt="" />Location</a>
                    </div>
                    <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                  </div>
                </div>
                <div class="chat-follow-btn">
                  <div class="chat-btn">
                    <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt="" />
                    Chat</a>
                  </div>
                  <div class="follow-btn">
                    <a href="#">Follow</a>
                  </div>
                </div>
              </div>
              <div class="right-dv-second-inner">
                <div class="img-name-digination-location-dv">
                  <div class="name-img-left">
                    <img src="public/assets-new/images/home-con/cir-img.png" alt="" />
                  </div>
                  <div class="green-dot"></div>
                  <div class="name-dig-location-right">
                    <h6>Person Name</h6>
                    <p>person Designation</p>
                    <div class="location-pin">
                      <a href="#"><img src="public/assets-new/images/home-con/mappin.png" alt="" />Location</a>
                    </div>
                    <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                  </div>
                </div>
                <div class="chat-follow-btn">
                  <div class="chat-btn">
                    <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt="" />
                    Chat</a>
                  </div>
                  <div class="follow-btn">
                    <a href="#">Follow</a>
                  </div>
                </div>
              </div>
              <div class="right-dv-second-inner">
                <div class="img-name-digination-location-dv">
                  <div class="name-img-left">
                    <img src="public/assets-new/images/home-con/cir-img.png" alt="" />
                  </div>
                  <div class="green-dot"></div>
                  <div class="name-dig-location-right">
                    <h6>Person Name</h6>
                    <p>person Designation</p>
                    <div class="location-pin">
                      <a href="#"><img src="public/assets-new/images/home-con/mappin.png" alt="" />Location</a>
                    </div>
                    <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                  </div>
                </div>
                <div class="chat-follow-btn">
                  <div class="chat-btn">
                    <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt="" />
                    Chat</a>
                  </div>
                  <div class="follow-btn">
                    <a href="#">Follow</a>
                  </div>
                </div>
              </div>
              <div class="right-dv-bottom-view-all-btn">
                <a href="#">View All</a>
              </div>
              <!-- <div class="radius-border-divider"></div> -->
            </div>
            <!-- ------------------Our Experts---------------- -->
            <div class="our-experts-parent">
              <div class="right-dv-heading">
                <h4>Our <span>Experts</span></h4>
              </div>
              <div class="right-dv-second-inner">
                <div class="img-name-digination-location-dv">
                  <div class="name-img-left">
                    <img src="public/assets-new/images/home-con/cir-img.png" alt="" />
                  </div>
                  <div class="green-dot"></div>
                  <div class="name-dig-location-right">
                    <h6>Expert Name</h6>
                    <p>person Designation</p>
                    <div class="location-pin">
                      <a href="#"><img src="public/assets-new/images/home-con/mappin.png" alt="" />Location</a>
                    </div>
                    <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                  </div>
                </div>
                <div class="chat-follow-btn">
                  <div class="chat-btn">
                    <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt="" />
                    Chat</a>
                  </div>
                </div>
              </div>
              <div class="right-dv-second-inner">
                <div class="img-name-digination-location-dv">
                  <div class="name-img-left">
                    <img src="public/assets-new/images/home-con/cir-img.png" alt="" />
                  </div>
                  <div class="green-dot"></div>
                  <div class="name-dig-location-right">
                    <h6>Expert Name</h6>
                    <p>person Designation</p>
                    <div class="location-pin">
                      <a href="#"><img src="public/assets-new/images/home-con/mappin.png" alt="" />Location</a>
                    </div>
                    <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                  </div>
                </div>
                <div class="chat-follow-btn">
                  <div class="chat-btn">
                    <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt="" />
                    Chat</a>
                  </div>
                  <div class="follow-btn">
                    <a href="#">Follow</a>
                  </div>
                </div>
              </div>
              <div class="right-dv-second-inner">
                <div class="img-name-digination-location-dv">
                  <div class="name-img-left">
                    <img src="public/assets-new/images/home-con/cir-img.png" alt="" />
                  </div>
                  <div class="green-dot"></div>
                  <div class="name-dig-location-right">
                    <h6>Expert Name</h6>
                    <p>person Designation</p>
                    <div class="location-pin">
                      <a href="#"><img src="public/assets-new/images/home-con/mappin.png" alt="" />Location</a>
                    </div>
                    <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                  </div>
                </div>
                <div class="chat-follow-btn">
                  <div class="chat-btn">
                    <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt="" />
                    Chat</a>
                  </div>
                </div>
              </div>
              <div class="right-dv-bottom-view-all-btn">
                <a href="#">View All</a>
              </div>
              <!-- <div class="radius-border-divider"></div> -->
            </div>
            <!-- ------------------Companies---------------- -->
            <div class="companies-parent">
              <div class="right-dv-heading">
                <h4>Companies</h4>
              </div>
              <div class="right-dv-second-inner">
                <div class="img-name-digination-location-dv">
                  <div class="name-img-left">
                    <img src="public/assets-new/images/user-profile/frame_sq.png" alt="" />
                  </div>
                  <div class="name-dig-location-right">
                    <h6>Company Name</h6>
                    <p>Serve in Sector</p>
                    <div class="location-pin">
                      <a href="#">308,8000 Followers</a>
                    </div>
                    <div class="mutual-connect-a">
                      <div class="img-group">
                        <img src="public/assets-new/images/user-profile/ellipse1.png" alt="">
                        <img src="public/assets-new/images/user-profile/ellipse2.png" alt="">
                        <img src="public/assets-new/images/user-profile/ellipse1.png" alt="">
                      </div>
                      <span>44 connections <br>follow this page</span>
                    </div>
                  </div>
                </div>
                <div class="chat-follow-btn">
                  <div class="follow-btn">
                    <a href="#">Follow</a>
                  </div>
                </div>
              </div>
              <div class="right-dv-second-inner">
                <div class="img-name-digination-location-dv">
                  <div class="name-img-left">
                    <img src="public/assets-new/images/user-profile/frame_sq.png" alt="" />
                  </div>
                  <div class="name-dig-location-right">
                    <h6>Company Name</h6>
                    <p>Serve in Sector</p>
                    <div class="location-pin">
                      <a href="#">308,8000 Followers</a>
                    </div>
                    <div class="mutual-connect-a">
                      <div class="img-group">
                        <img src="public/assets-new/images/user-profile/ellipse1.png" alt="">
                        <img src="public/assets-new/images/user-profile/ellipse2.png" alt="">
                        <img src="public/assets-new/images/user-profile/ellipse1.png" alt="">
                      </div>
                      <span>44 connections <br>follow this page</span>
                    </div>
                  </div>
                </div>
                <div class="chat-follow-btn">
                  <div class="follow-btn">
                    <a href="#">Follow</a>
                  </div>
                </div>
              </div>
              <div class="right-dv-bottom-view-all-btn">
                <a href="#">View All</a>
              </div>
            </div>
            <!-- ----------------Add Banner---------------- -->
            <div class="add-banner-dv">
              <div class="heading-dv">
                <h4>Add Banner</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ------------Profile Banner Start Here------------ -->
  <!-- ======================= Modal Area ========================= -->
  <!--------------------- Background Photo Modal Area Start ------------------>
  <div class="modal fade exp-edit-modal" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="{{ route('user-profile') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Background Photo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="profile-img text-center">
              <a id="imageLink" style="cursor:pointer">
              <!-- <img id="backgroundImage" src="public/assets-new/images/user-profile/profile.png" class="img-fluid" alt=""> -->
              @if($users !== null )
                <img id="backgroundImage" src="{{ asset('public/assets-new/images/user-profile/' . $users->user_background_profile) }}" style="height:250px" class="img-fluid w-100" alt="" />
                @else
                <img id="backgroundImage" src="{{ asset('public/assets-new/images/user-profile/Rectangle.png') }}" style="height:250px" class="img-fluid w-100" alt="" />
                @endif
            </a>
              <input type="file" id="fileInput" name="user_background_profile" style="display:none">
            </div>
            <div class="text-area text-center">
              <h4>Showcase Your Personality, Interests, Team <br>Moments Or Notable Milestones</h4>
              <p>A Good Background Photo Will Help You Stand Out <a href="#">Learn More</a></p>
            </div>
          </div>
          <div class="modal-footer background-edit-footer">
            <div class="delete-area">
              <button type="submit" class="btn btn-primary save-btn">Done</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--------------------- Background Photo Modal Area Ends ------------------>
  <!--------------------- Intro Modal Area Start ------------------>
  <div class="modal fade exp-edit-modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Profile Photo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="profile-img text-center">
            @if($users !== null )
            <img src="{{ asset('public/assets-new/images/user-profile/' . $users->user_profile) }}" style="height:300px" class="img-fluid" alt="" />
            @else
            <img id="profileImage" src="public/assets-new/images/user-profile/profile.png" class="img-fluid" alt="">
            @endif
          </div>
        </div>
        <div class="modal-footer prof-edit-footer">
          <form action="{{ url('profile-upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="edit-area">
              <a href="#"><img src="public/assets-new/images/user-profile/edit.png" class="img-fluid" alt=""></a>
              <a id="profileLink" style="cursor:pointer"><img src="public/assets-new/images/user-profile/cam.png" class="img-fluid" alt=""></a>
              <!-- Hidden file input element -->
              <input type="file" id="profileInput" name="user_profile" style="display: none;">
            </div>
            
            <div class="delete-area">
              <button type="submit" class="btn btn-primary save-btn">Done</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--------------------- Intro Modal Area Ends ------------------>
  <!--------------------- Intro Modal Area Start ------------------>
  <div class="modal fade exp-edit-modal" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Intro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h6>*Indicates required</h6>
          <form action="{{ route('intro/edit') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-lg-6 mb-3">
                <label for="recipient-name" class="col-form-label">First Name*</label>
                <input type="text" class="form-control" name="first_name" id="recipient-name" value="{{ $firstName }}">
              </div>
              <div class="col-lg-6 mb-3">
                <label for="recipient-name" class="col-form-label">Last Name*</label>
                <input type="text" class="form-control" name="last_name" id="recipient-name" value="{{ $lastName }}">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Designation</label>
                <input type="text" class="form-control" name="designation" id="recipient-name" value="{{ $users->designation }}">
              </div>
              <div class="enrol-dv mb-3">
                <label for="recipient-name" class="col-form-label">Pronouns</label>
                <select name="pronouns" class="form-control form-select" id="">
                  <option value="" selected>Please Select</option>
                  <option value="She/Her" {{ $users->pronouns == 'She/Her' ? 'selected' : '' }}>She/Her</option>
                  <option value="He/Him" {{ $users->pronouns == 'He/Him' ? 'selected' : '' }}>He/Him</option>
                  <option value="They/Them" {{ $users->pronouns == 'They/Them' ? 'selected' : '' }}>They/Them</option>
                  <option value="Custom" {{ $users->pronouns == 'Custom' ? 'selected' : '' }}>Custom</option>
                </select>
                <p class="let-othr-know">Let others know how to refer to you</p>
                <p>Learn More About <a href="">Gender Pronouns.</a></p>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Headline*</label>
                <input type="text" class="form-control" name="headline" id="recipient-name" value="{{ $users->headline }}">
              </div>
            </div>
          </div>
          <div class="modal-footer intro-modal-footer">
            <button type="submit" class="btn btn-primary save-btn">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--------------------- Intro Modal Area Ends ------------------>
  <!--------------------- Contact Info Modal Area Start ------------------>
  <div class="modal fade exp-edit-modal" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit About</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('about/edit' ) }}" method="POST">
            @csrf
            <div class="mb-3 about-text-dv">
              <h5>You Can Write About Your Years Of Experience, Industry Or Skills. People Also Talk About Their
              Achievements Or Previous Job Experiences.</h5>
              <div class="about-para">
                <p class="textarea"><textarea name="about" class="form-control" id="" cols="30" rows="10">{{$users->about }}</textarea></p>
                <p class="word-count text-end">528/2600</p>
              </div>
              <div class="current-position-dv">
                <h4>Current Position</h4>
                <p>Show you top skills - add upto 5 skills you want to know for. They'll also appear in your Skill
                section.</p>
                <div class="skill-tabs">
                  <ul>
                    <li>Skill 1 <a href="#" class="close-btn"><i class="fa fa-close"></i></a></li>
                    <li>Skill 2 <a href="#" class="close-btn"><i class="fa fa-close"></i></a></li>
                    <li>Skill 3 <a href="#" class="close-btn"><i class="fa fa-close"></i></a></li>
                    <li>Skill 4 <a href="#" class="close-btn"><i class="fa fa-close"></i></a></li>
                    <li>Skill 5 <a href="#" class="close-btn"><i class='fa fa-close'></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer contact-modal-footer">
            <button type="submit" class="btn btn-primary save-btn">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--------------------- Contact Info Modal Area Ends ------------------>
  <!--------------------- Contact Info Modal Area Start ------------------>
  <div class="modal fade exp-edit-modal" id="profileUrl" tabindex="-1" aria-labelledby="profileUrlLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="profileUrlLabel">Edit Contact Info</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('contact/edit') }}" method="POST">
            @csrf
            <div class="mb-3 prof-url">
              <p>Profile URL</p>
              <a href="#">https://www.linkenin.com/in/naman-sharma-023867180</a>
            </div>
            <div class="mb-3 prof-email">
              <p>Email</p>
              <a href="#">sampleemail@gmail.com</a>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Phone number</label>
              <input type="text" class="form-control" name="phone" id="recipient-name" value="{{$users ? $users->user->phone :''}}">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Address</label>
              <input type="text" class="form-control" name="address" id="recipient-name" value="{{$users ? $users->user->address :'' }}">
            </div>
          </div>
          <div class="modal-footer contact-modal-footer">
            <button type="submit" class="btn btn-primary save-btn">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--------------------- Contact Info Modal Area Ends ------------------>

<!---------------------Add Experience Modal Area Start ------------------>
<div class="modal fade exp-edit-modal" id="addExperience" tabindex="-1" aria-labelledby="addExperienceLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addExperienceLabel">Add Experience</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h6>*Indicates required</h6>
          <form action="{{ route('experience/add') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Title*</label>
              <input type="text" class="form-control" name="title" id="recipient-name">
            </div>
            <div class="mb-3 enrol-dv">
              <label for="message-text" class="col-form-label">Employment Type</label>
              <select name="employment_type" class="form-control form-select" id="">
                <option value="" selected>Please Select</option>
                <option value="Full-time">Full-time</option>
                <option value="Part-time">Part-time</option>
                <option value="Traineeship">Traineeship</option>
              </select>
              <p>Learn More About <a href="">Employment Types.</a></p>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Company Name*</label>
              <input type="text" class="form-control" name="company_name" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Location</label>
              <input type="text" class="form-control" name="company_location" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Location Type</label>
              <select name="location_type" id="" class="form-control">
                <option value="" selected>Select Type</option>
                <option value="On-site">On-site</option>
                <option value="Hybrid">Hybrid</option>
                <option value="Remote">Remote</option>
              </select>
            </div>
            <div class="row">
            <div class="col-md-6 mb-3">
              <label for="recipient-name" class="col-form-label">Start Date</label>
              <input type="text" class="form-control startdate" name="start_date" id="Start" placeholder="DD/MM/YYYY">
            </div>
            <div class="col-md-6 mb-3">
              <label for="recipient-name" class="col-form-label">End Date</label>
              <input type="text" class="form-control" name="end_date" id="End" placeholder="DD/MM/YYYY">
            </div>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Industry</label>
              <input type="text" class="form-control" name="industry">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Descritpion</label>
              <textarea name="description" class="form-control" rows="5"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary save-btn">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--------------------- Add Modal Area Ends ------------------>

 <!---------------------Add Education Modal Area Start ------------------>
 <div class="modal fade exp-edit-modal" id="addEducation" tabindex="-1" aria-labelledby="addEducationLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addEducationLabel">Add Education</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h6>*Indicates required</h6>
          <form action="{{ route('education/add') }}" method="POST">
            @csrf 
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">School*</label>
              <input type="text" class="form-control" id="recipient-name" name="school">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Degree</label>
              <input type="text" class="form-control" id="recipient-name" name="degree">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Field Of Study</label>
              <input type="text" class="form-control" id="recipient-name" name="field_of_study">
            </div>
            <div class="row">
            <div class="col-md-6 mb-3">
              <label for="recipient-name" class="col-form-label">Start Date*</label>
              <input type="text" class="form-control" name="start_date" id="Start" placeholder="DD/MM/YYYY">
            </div>
            <div class="col-md-6 mb-3">
              <label for="recipient-name" class="col-form-label">End Date*</label>
              <input type="text" class="form-control" name="end_date" id="End" placeholder="DD/MM/YYYY">
            </div>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Location</label>
              <input type="text" class="form-control" id="recipient-name" name="location">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Description</label>
              <textarea name="description" class="form-control" type="text" rows="5"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary save-btn">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!---------------------Add Education Modal Area Ends ------------------>


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
    <hr />
  </div>
  <!-- ----------- footer-find-jobs-section End Here------------  -->
  <!-- ----------- footer-link Start Here------------  -->
  <section class="footer-links-sec">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1 col-md-1 col-6"></div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="footer-links-parent">
            <div class="footer-heading">
              <h5>Legal</h5>
            </div>
            <div class="footer-links-tags">
              <ul>
                <li><a href="#">Jobseeker FAQs</a></li>
                <li><a href="#">Employer FAQs</a></li>
                <li><a href="#">User Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Employer Terms of Service</a></li>
                <li><a href="#">Connect Like You Guidelines</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="footer-links-parent">
            <div class="footer-heading">
              <h5>Services</h5>
            </div>
            <div class="footer-links-tags">
              <ul>
                <li><a href="#">Job Search by Category</a></li>
                <li><a href="#">Job Search by City</a></li>
                <li><a href="#">Browse Search</a></li>
                <li><a href="#">Free Job Alerts</a></li>
                <li><a href="#">Recommended Job</a></li>
                <li><a href="#">Similar Jobs</a></li>
                <li><a href="#">Resume Builder</a></li>
                <li><a href="#">Subscription (Wallets)</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="footer-links-parent">
            <div class="footer-heading">
              <h5>Solutions</h5>
            </div>
            <div class="footer-links-tags">
              <ul>
                <li><a href="#">Connect Like You</a></li>
                <li><a href="#">Premium Job Search</a></li>
                <li><a href="#">Instant Milega</a></li>
                <li><a href="#">Learn with KM</a></li>
                <li><a href="#">Promotion (Ad Network)</a></li>
                <li><a href="#">How we work</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="footer-links-parent">
            <div class="footer-heading">
              <h5>Connect</h5>
            </div>
            <div class="footer-links-tags">
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">How we work</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Career</a></li>
              </ul>
              <div class="footer-heading">
                <h5>Follow Us</h5>
              </div>
              <ul class="follow-us-ul">
                <li>
                  <a href="#"><img src="assets/images/home-con/instagram.png" alt="" /><span>Instagram</span></a>
                </li>
                <li>
                  <a href="#"><img src="assets/images/home-con/facebook.png" alt="" /><span>Facebook</span></a>
                </li>
                <li>
                  <a href="#"><img src="assets/images/home-con/linkedin.png" alt="" /><span>linkedIn</span></a>
                </li>
                <li>
                  <a href="#"><img src="assets/images/home-con/youtube.png" alt="" /><span>Youtube</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="footer-links-parent">
            <div class="footer-heading">
              <h5>Company / Employer</h5>
            </div>
            <div class="footer-links-tags">
              <ul>
                <li><a href="#">Hire Local Staff</a></li>
                <li><a href="#">Post a Job</a></li>
                <li><a href="#">Build Brand Image</a></li>
                <li><a href="#">Contact Support</a></li>
              </ul>
              <div class="footer-heading">
                <h5>apply on the go</h5>
              </div>
              <div class="get-real-p">
                <p>get real time update on our app</p>
              </div>
              <ul class="follow-us-store">
                <li>
                  <a href="#"><img src="assets/images/home-con/google-play.png" alt="" /></a>
                </li>
                <li>
                  <a href="#"><img src="assets/images/home-con/app-store.png" alt="" /></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-1 col-md-1 col-6"></div>
      </div>
    </div>
  </section>
  <!-- ----------- footer-link End Here------------  -->
  <!-- ----------- footer-copy-right Start Here------------  -->
  <footer class="copy-right-sec">
    <p>All rights reserved © 2023 kaam milega</p>
  </footer>
  <!-- ----------- footer-copy-right End Here------------  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
  <script src="{{ asset('public/assets-new/js/custom.js') }}"></script>
  <!-- background image input script -->
  <script>
  document.getElementById('imageLink').addEventListener('click', function(){
  document.getElementById('fileInput').click();
  });
  const fileInput = document.getElementById('fileInput');
  const backgroundImage = document.getElementById('backgroundImage');
  fileInput.onchange = evt => {
  const [file] = fileInput.files;
  if (file) {
  backgroundImage.src = URL.createObjectURL(file);
  }
  };
  </script>
  <!-- Profile Image -->
  <script>
  document.getElementById('profileLink').addEventListener('click', function(){
  document.getElementById('profileInput').click();
  });
  const profileInput = document.getElementById('profileInput');
  const profileImage = document.getElementById('profileImage');
  profileInput.onchange = evt => {
  const [file] = profileInput.files;
  if (file) {
  profileImage.src = URL.createObjectURL(file);
  }
  };
  </script>


<!-- Bootstrap DatePicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap DatePicker -->
    <script type="text/javascript">
        $(function () {
            $('#Start, #End').datepicker({
                format: "dd/mm/yyyy"
            });
        });
    </script>

</body>
</html>