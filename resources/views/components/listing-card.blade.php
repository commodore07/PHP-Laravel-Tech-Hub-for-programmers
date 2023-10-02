@props(['listing'])


<div class="col-lg-3 col-md-6 col-sm-6 d-flex">
<div class="project-item aos" data-aos="fade-up">
<div class="project-img">
<a href="project.html"><img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png')}}" alt="" class="img-fluid"></a>
</div>
<div class="d-flex justify-content-between align-items-center">
<div class="project-content">
<h4>45</h4>
<h5><a href="/{{$listing->id}}">{{$listing->title}}</a></h5>
</div>
<div class="pro-icon">
<div class="project-icon">
</div>
</div>
<div class="project-content">
<h4>20</h4>
<h5><a href="project.html">{{$listing->company}}</a></h5>
</div>
</div>
</div>
</div>

