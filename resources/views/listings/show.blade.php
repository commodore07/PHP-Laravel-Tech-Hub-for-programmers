<x-layout>

<div class="bread-crumb-bar">
<div class="container">
<div class="row align-items-center inner-banner">
<div class="col-md-12 col-12 text-center">
<div class="breadcrumb-list">
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><img src="assets/img/home-icon.svg" alt="Post Author"> Home</a></li>
<li class="breadcrumb-item" aria-current="page">Employee</li>
<li class="breadcrumb-item" aria-current="page">Dashboard</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>

<div class="content content-page">
<div class="container-fluid">
<div class="row">
<div class="col-xl-3 col-md-4 theiaStickySidebar">
<div class="settings-widget">
<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
<a href="freelancer-profile.html"><img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
<p class="mb-2">Welcome,</p>
<h3 class="mb-0"><a href="freelancer-profile.html">John Danie S.</a></h3>
<p class="mb-0">@johndaniee</p>
</div>
</div>
<div class="settings-menu">
<ul>
<li class="nav-item">
<a href="freelancer-dashboard.html" class="nav-link">
<i class="material-icons">verified_user</i> Dashboard
</a>
</li>
<li class="nav-item">
<a href="freelancer-project-proposals.html" class="nav-link active">
<i class="material-icons">business_center</i> Projects
</a>
</li>
<li class="nav-item">
<a href="freelancer-favourites.html" class="nav-link">
<i class="material-icons">local_play</i> Favourites
</a>
</li>
<li class="nav-item">
<a href="freelancer-review.html" class="nav-link">
<i class="material-icons">record_voice_over</i> Reviews
</a>
</li>
<li class="nav-item">
<a href="freelancer-portfolio.html" class="nav-link">
<i class="material-icons">pie_chart</i> Portfolio
</a>
</li>
<li class="nav-item">
<a href="freelancer-chats.html" class="nav-link">
<i class="material-icons">chat</i> Messages
</a>
</li>
<li class="nav-item">
<a href="freelancer-membership.html" class="nav-link">
<i class="material-icons">person_add</i> Membership
</a>
</li>
<li class="nav-item">
<a href="freelancer-verify-identity.html" class="nav-link">
<i class="material-icons">person_pin</i> Verify Identity
</a>
</li>
<li class="nav-item">
<a href="freelancer-withdraw-money.html" class="nav-link">
<i class="material-icons">wifi_tethering</i> Payments
</a>
</li>
<li class="nav-item">
<a href="freelancer-profile-settings.html" class="nav-link">
<i class="material-icons">settings</i> Settings
</a>
</li>
<li class="nav-item">
<a href="index.html" class="nav-link">
<i class="material-icons">power_settings_new</i> Logout
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-xl-9 col-md-8">
<div class="page-title">
<h3>Manage Projects</h3>
</div>
<nav class="user-tabs mb-4">
<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
<li class="nav-item">
<a class="nav-link active" href="freelancer-view-project-detail.html">Overview & Discussions</a>
</li>
<li class="nav-item">
<a class="nav-link" href="freelancer-milestones.html">Milestones</a>
</li>
<li class="nav-item">
<a class="nav-link" href="freelancer-task.html">Tasks</a>
</li>
<li class="nav-item">
<a class="nav-link" href="freelancer-files.html">Files</a>
</li>
<li class="nav-item">
<a class="nav-link" href="freelancer-payment.html">Payments</a>
</li>
</ul>
</nav>

<div class="my-projects">
<div class="row">
<div class="col-lg-9 d-flex">
<div class="pro-post w-100">
<div class="card-body">
<div class="projects-list">
<h2>{{$listing->title}}</h2>
<ul class="prolist-details">
<li>
<div class="list-slot">
<h5>Client Final Price</h5>
<p class="price">$19.00</p>
<p class="mb-0">( FIXED )</p>
</div>
</li>
<li>
<div class="list-slot">
<h5>Job Type</h5>
<p class="red-text">Hourly</p>
</div>
</li>
<li>
<div class="list-slot">
<h5>Location</h5>
 <p><img src="assets/img/en.png" height="13" alt="Lang"> Germany</p>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-3 mb-3 d-flex flex-wrap">
<div class="pro-post mb-3 w-100">
<div class="card-body">
<div class="hire-box text-center">
<h6>Hired</h6>
<img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle">
<p>Hannah Finn - Client</p>
<a href="freelancer-chats.html" class="btn btn-chat">Chat Now</a>
</div>
</div>
</div>
<div class="hire-select w-100">
<select class="form-control select">
<option> Is job completed? </option>
<option>Ongoing</option>
<option>Completed</option>
</select>
</div>
</div>
</div>
</div>


<div class="pro-post widget-box">
<h3 class="pro-title">Overview</h3>
<div class="pro-overview">
<h4>Senior Animator</h4>

<img class="w-100"
          src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. </p>
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus.</p>
</div>
</div>


<div class="pro-post widget-box">
<h3 class="pro-title">Skills Required</h3>
<div class="pro-content">
<div class="tags">
<span class="badge badge-pill badge-design">After Effects</span>
<span class="badge badge-pill badge-design">Illustrator</span>
<span class="badge badge-pill badge-design">HTML</span>
<span class="badge badge-pill badge-design">Whiteboard</span>
<span class="badge badge-pill badge-design">HTML</span>
<span class="badge badge-pill badge-design">Whiteboard</span>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</x-layout>