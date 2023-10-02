<x-layout2>
<div class="bread-crumb-bar">
<div class="container">
<div class="row align-items-center inner-banner">
<div class="col-md-12 col-12 text-center">
<div class="breadcrumb-list">
<nav aria-label="breadcrumb" class="page-breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><img src="assets/img/home-icon.svg" alt=""> Home</a></li>
<li class="breadcrumb-item" aria-current="page">Post a Project</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>


<div class="content">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="select-project mb-4">
<form method="POST" action="/listings" enctype="multipart/form-data">
	@csrf
<div class="title-box widget-box">

<div class="title-content">
<div class="title-detail">
<h3>Project Name</h3>
<div class="form-group mb-0">
<input type="text" class="form-control" name="company"
          value="{{old('company')}}" placeholder="Enter Project title">
           @error('company')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
</div>
</div>
</div>


<div class="title-content">
<div class="title-detail">
<h3>Category Type</h3>
<div class="form-group mb-0">
<select name="title" value="{{old('title')}}" class="form-control select">
<option value="0">Select</option>
<option value="Apps Development">Apps Development</option>
<option value="UI Development">UI Development</option>
<option value="Jaa">Jaa</option>
</select>
@error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
</div>
</div>
</div>

<div class="title-content">
<div class="title-detail">
<h3>Job Location</h3>
<div class="form-group mb-0">
<input type="text" class="form-control" name="location" value="{{old('location')}}" placeholder="Enter Project title">
@error('location')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
</div>
</div>
</div>

<div class="title-content">
<div class="title-detail">
<h3>Email</h3>
<div class="form-group mb-0">
<input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter Project title">
@error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
</div>
</div>
</div>

<div class="title-content">
<div class="title-detail">
<h3>Website</h3>
<div class="form-group mb-0">
<input type="text" class="form-control" name="website"
          value="{{old('website')}}" placeholder="Enter Project title">
          @error('website')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
</div>
</div>
</div>





<div class="title-content">
<div class="title-detail">
<h3>Desired areas of expertise </h3>
<div class="form-group mb-0">
<input type="text" data-role="tagsinput" class="input-tags form-control" name="tags" value="{{old('tags')}}" id="services" placeholder="UX, UI, App Design, Wireframing, Branding">
@error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
<p class="text-muted mb-0">Enter skills for needed for project</p>
</div>
</div>
</div>




<div class="title-content">
<div class="title-detail">
<h3>Add Documents</h3>
<div class="custom-file">
<input type="file" name="logo" class="custom-file-input">
@error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
<label class="custom-file-label"></label>
</div>
<p class="mb-0">Size of the Document should be Below 2MB</p>
</div>
</div>



<div class="title-content pb-0">
<div class="title-detail">
<h3>Write Description of Projects </h3>
<div class="form-group mb-0">
<textarea class="form-control summernote" name="description" rows="5">{{old('description')}}</textarea>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12 text-end">
<div class="btn-item">
<button class="btn next-btn">Submit</button>
</div>
</div>
</div>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
</x-layout2>