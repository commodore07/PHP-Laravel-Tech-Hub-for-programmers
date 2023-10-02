<x-layout>
<section class="section home-banner row-middle">
<div class="container">
<div class="row align-items-center">
<div class="col-md-8 col-lg-7">
<div class="banner-content aos" data-aos="fade-up">
<div class="rating d-flex">
<i class="fas fa-star checked"></i>
<i class="fas fa-star checked"></i>
<i class="fas fa-star checked"></i>
<i class="fas fa-star checked"></i>
<i class="fas fa-star checked"></i>
<h5>Trused by over 2M+ users</h5>
</div>
<h1>Get the perfect <span class="orange-text">Developers & Projects</span></h1>
<p>With the world's #1 Developers marketplace</p>
<form class="form" name="store" id="store" method="post" action="https://kofejob.dreamguystech.com/template/project.html">
<div class="form-inner">
<div class="input-group">
<span class="drop-detail">
<select class="form-control select" name="storeID">
<option value="project.html">Projects</option>
<option value="developer.html">Freelancers</option>
</select>
</span>
<input type="email" class="form-control" placeholder="Search here">
<button class="btn btn-primary sub-btn" type="submit">Search Now</button>
</div>
</div>
</form>
</div>
</div>
<div class="col-md-4 col-lg-5">
<div class="banner-img aos" data-aos="fade-up">
<img src="assets/img/banner-img.png" class="img-fluid" alt="banner">
</div>
</div>
</div>
</div>
</section>

<section class="section feature">
<div class="container">
<div class="row">

<div class="col-md-4">
<div class="feature-item freelance-count aos" data-aos="fade-up">
<div class="feature-icon">
<img src="assets/img/icon/icon-01.png" class="img-fluid" alt="">
</div>
<div class="feature-content">
<h3>919,207</h3>
<p>freelance Developers</p>
</div>
</div>
</div>


<div class="col-md-4">
<div class="feature-item aos" data-aos="fade-up">
<div class="feature-icon">
<img src="assets/img/icon/icon-02.png" class="img-fluid" alt="">
</div>
<div class="feature-content">
<h3>25 - 100+</h3>
<p>Developers per project</p>
</div>
</div>
</div>


<div class="col-md-4">
<div class="feature-item comp-project aos" data-aos="fade-up">
<div class="feature-icon">
<img src="assets/img/icon/icon-03.png" class="img-fluid" alt="">
</div>
<div class="feature-content">
<h3>388,615</h3>
<p>completed projects</p>
</div>
</div>
</div>

</div>
</div>
</section>


<section class="section work">
<div class="container-fluid">
<div class="row">

<div class="col-md-6 work-box bg1">
<div class="work-content aos" data-aos="fade-up">
<h2>I need a Developed <span>Project</span></h2>
<p>Get the perfect Developed project for your budget from our creative community.</p>
<a href="project.html"><i class="fas fa-long-arrow-alt-right long-arrow"></i></a>
</div>
</div>

<div class="col-md-6 work-box bg2">
<div class="work-content aos" data-aos="fade-up">
<h2>I want to <span>work</span></h2>
<p>Do you want to earn money, find unlimited clients and build your freelance career?</p>
<a href="developer.html"><i class="fas fa-long-arrow-alt-right long-arrow"></i></a>
</div>
</div>
</div>
</div>
</section>


<section class="section projects">
<div class="container">
<div class="row">
<div class="col-12 col-md-12 mx-auto">
<div class="section-header text-center aos" data-aos="fade-up">
<div class="section-line"></div>
<h2 class="header-title">Get Inspired<br> By Development Projects</h2>
<p>High Performing Solutions To Your</p>
</div>
</div>
</div>
<div class="row">

    @unless(count($listings) == 0)

    @foreach($listings as $listing)
    <x-listing-card :listing="$listing" />
    @endforeach

    @else
    <p>No listings found</p>
    @endunless

</div>
<div class="row">
<div class="col-md-12 text-center">
<div class="see-all aos" data-aos="fade-up">
<a href="project.html" class="btn all-btn">SEE ALL PROJECT</a>
</div>
</div>
</div>
</div>
</section>


<section class="section subscribe">
<div class="container">
<div class="row align-items-center aos" data-aos="fade-up">
<div class="col-md-4">
<img src="assets/img/subscribe.png" class="img-fluid" alt="subscribe">
</div>
<div class="col-md-6">
<h3>Subscribe To Get Discounts, Updates & More</h3>
<p>Monthly product updates, industry news and more!</p>
<form action="#" method="POST">
<div class="form-inner">
<div class="input-group">
<input type="email" class="form-control" placeholder="Enter Email Address">
<button class="btn btn-primary sub-btn" type="submit">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</section>




<section class="section testimonial-section review">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-header text-center aos" data-aos="fade-up">
<div class="section-line"></div>
<h2 class="header-title">Top Reviews</h2>
<p>High Performing Developers To Your</p>
</div>
</div>
</div>
<div id="testimonial-slider" class="owl-carousel owl-theme testimonial-slider aos" data-aos="fade-up">

<div class="review-blog">
<div class="review-top d-flex align-items-center">
<div class="review-img">
<a href="review.html"><img class="img-fluid" src="assets/img/review/review-01.jpg" alt="Post Image"></a>
</div>
<div class="review-info">
<h3><a href="review.html">Deborah Angel</a></h3>
<h5>CEO</h5>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.7</span>
</div>
</div>
</div>
<div class="review-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
</div>
</div>

 
<div class="review-blog">
<div class="review-top d-flex align-items-center">
<div class="review-img">
<a href="review.html"><img class="img-fluid" src="assets/img/review/review-02.jpg" alt="Post Image"></a>
</div>
<div class="review-info">
<h3><a href="review.html">Davis Payerf</a></h3>
<h5>PROJECT LEAD</h5>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">4.8</span>
</div>
</div>
</div>
<div class="review-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
</div>
</div>


<div class="review-blog">
<div class="review-top d-flex align-items-center">
<div class="review-img">
<a href="review.html"><img class="img-fluid" src="assets/img/review/review-03.jpg" alt="Post Image"></a>
</div>
<div class="review-info">
<h3><a href="review.html">David Lee</a></h3>
<h5>TEAM LEAD</h5>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">5.0</span>
</div>
</div>
</div>
<div class="review-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
</div>
</div>


<div class="review-blog">
<div class="review-top d-flex align-items-center">
<div class="review-img">
<a href="review.html"><img class="img-fluid" src="assets/img/review/review-02.jpg" alt="Post Image"></a>
</div>
<div class="review-info">
<h3><a href="review.html">Davis Payerf</a></h3>
<h5>PROJECT LEAD</h5>
<div class="rating">
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star filled"></i>
<i class="fas fa-star"></i>
<span class="average-rating">3.2</span>
</div>
</div>
</div>
<div class="review-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
</div>
</div>

</div>
</div>
</section>


<section class="section news">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-header text-center aos" data-aos="fade-up">
<div class="section-line"></div>
<h2 class="header-title">Feature Blog</h2>
<p>High Performing Developers To Your</p>
</div>
</div>
</div>
<div>
<div class="row blog-grid-row">
<div class="col-md-4">

<div class="blog grid-blog aos" data-aos="fade-up">
<div class="blog-image">
<a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-01.jpg" alt="Post Image"></a>
</div>
<div class="blog-content">
<ul class="entry-meta meta-item">
<li>
<div class="post-author">
<a href="developer-details.html"><img src="assets/img/img-02.jpg" alt="Post Author"> <span> David Lee</span></a>
</div>
</li>
<li><i class="far fa-clock"></i> 4 Oct 2021</li>
</ul>
<h3 class="blog-title"><a href="blog-details.html">Your next job starts right here</a></h3>
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

</div>
<div class="col-md-4">

<div class="blog grid-blog aos" data-aos="fade-up">
<div class="blog-image">
<a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-02.jpg" alt="Post Image"></a>
</div>
<div class="blog-content">
<ul class="entry-meta meta-item">
<li>
<div class="post-author">
<a href="developer-details.html"><img src="assets/img/img-03.jpg" alt="Post Author"> <span> Deborah Angel</span></a>
</div>
</li>
<li><i class="far fa-clock"></i> 10 Oct 2021</li>
</ul>
<h3 class="blog-title"><a href="blog-details.html">People who completed NAND?</a></h3>
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

</div>
<div class="col-md-4">

<div class="blog grid-blog aos" data-aos="fade-up">
<div class="blog-image">
<a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-03.jpg" alt="Post Image"></a>
</div>
<div class="blog-content">
<ul class="entry-meta meta-item">
<li>
<div class="post-author">
<a href="developer-details.html"><img src="assets/img/img-04.jpg" alt="Post Author"> <span>Darren Elder</span></a>
</div>
</li>
<li><i class="far fa-clock"></i> 3 Nov 2021</li>
</ul>
<h3 class="blog-title"><a href="blog-details.html">Kofejob - How to get job through online?</a></h3>
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
</div>
</div>

</div>
</div>
</div>
</div>
</section>
</x-layout>